<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use App\Mail\InquiryReceived;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Throwable;

class InquiryController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        if ($request->filled('website')) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you. Your inquiry has been received.',
            ], 201);
        }

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:150'],
            'phone' => ['required', 'string', 'max:40'],
            'email' => ['nullable', 'email', 'max:255'],
            'relationship' => ['required', 'string', 'max:150'],
            'location' => ['required', 'string', 'max:255'],
            'barangay' => ['required', 'string', 'max:120'],
            'city' => ['required', 'string', 'max:120'],
            'province' => ['required', 'string', 'max:120'],
            'property_type' => ['required', 'string', 'max:120'],
            'area' => ['required', 'string', 'max:100'],
            'title_type' => ['nullable', 'string', 'max:180'],
            'occupancy' => ['nullable', 'string', 'max:150'],
            'price' => ['required', 'string', 'max:80'],
            'negotiable' => ['nullable', 'string', 'max:80'],
            'timeline' => ['nullable', 'string', 'max:120'],
            'photos' => ['nullable', 'array', 'max:10'],
            'photos.*' => ['image', 'max:5120'],
            'details' => ['nullable', 'string', 'max:10000'],
            'accurate' => ['accepted'],
            'authorized' => ['accepted'],
            'consent' => ['accepted'],
        ]);

        $photoPaths = collect($request->file('photos', []))
            ->map(fn (UploadedFile $photo): string => $photo->store('inquiries/photos', 'local'))
            ->all();

        try {
            $inquiry = Inquiry::create([
                ...$validated,
                'photos' => $photoPaths,
                'accurate' => true,
                'authorized' => true,
                'consent' => true,
            ]);
        } catch (Throwable $exception) {
            Storage::disk('local')->delete($photoPaths);

            throw $exception;
        }

        try {
            Mail::to(config('mail.inquiry_to'))
                ->send(new InquiryReceived($inquiry));
        } catch (Throwable $exception) {
            Log::error('Inquiry saved, but its email notification could not be sent.', [
                'inquiry_id' => $inquiry->id,
                'exception' => $exception->getMessage(),
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Your inquiry was saved, but we could not send the email notification. Please contact us directly.',
            ], 201);
        }

        return response()->json([
            'success' => true,
            'message' => 'Thank you. Your inquiry has been received.',
        ], 201);
    }
}
