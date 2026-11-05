<?php

namespace App\Http\Controllers;

use App\Models\PropertyEvaluation;
use App\Mail\PropertyEvaluationReceived;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Throwable;

class PropertyEvaluationController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        if ($request->filled('website')) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you. Your property evaluation information has been received.',
            ], 201);
        }

        $validated = $request->validate([
            'answers' => ['required', 'array'],
            'answers.owner_name' => ['required', 'string', 'max:150'],
            'answers.completing_person' => ['required', 'string', 'max:150'],
            'answers.relationship_to_owner' => ['nullable', 'string', 'max:150'],
            'answers.phone' => ['required', 'string', 'max:40'],
            'answers.email' => ['required', 'email', 'max:255'],
            'answers.registered_owners' => ['required', 'string', 'max:80'],
            'answers.parties_willing' => ['required', 'string', 'max:80'],
            'answers.inheritance_settled' => ['required', 'string', 'max:80'],
            'answers.location' => ['required', 'string', 'max:500'],
            'answers.barangay' => ['required', 'string', 'max:120'],
            'answers.city' => ['required', 'string', 'max:120'],
            'answers.province' => ['required', 'string', 'max:120'],
            'answers.property_reference' => ['nullable', 'string', 'max:255'],
            'answers.title_number' => ['nullable', 'string', 'max:120'],
            'answers.land_area' => ['required', 'numeric', 'min:0'],
            'answers.dimensions' => ['nullable', 'string', 'max:255'],
            'answers.current_use' => ['required', 'string', 'max:100'],
            'answers.condition' => ['required', 'string', 'max:100'],
            'answers.road_access' => ['required', 'string', 'max:150'],
            'answers.utilities' => ['required', 'string', 'max:150'],
            'answers.physical_concerns' => ['required', 'string', 'max:100'],
            'answers.physical_concerns_details' => ['nullable', 'string', 'max:5000'],
            'answers.maps_link' => ['nullable', 'url', 'max:2000'],
            'answers.documents_available' => ['nullable', 'array'],
            'answers.documents_available.*' => ['string', 'max:120'],
            'answers.encumbrance' => ['required', 'string', 'max:80'],
            'answers.encumbrance_details' => ['nullable', 'string', 'max:5000'],
            'answers.taxes_up_to_date' => ['required', 'string', 'max:80'],
            'answers.occupancy_agreement' => ['required', 'string', 'max:80'],
            'answers.occupancy_details' => ['nullable', 'string', 'max:5000'],
            'answers.transfer_restrictions' => ['required', 'string', 'max:80'],
            'answers.restrictions_details' => ['nullable', 'string', 'max:5000'],
            'answers.expected_price' => ['required', 'numeric', 'min:0'],
            'answers.price_negotiable' => ['required', 'string', 'max:100'],
            'answers.sale_timeline' => ['required', 'string', 'max:100'],
            'answers.reason_for_selling' => ['nullable', 'string', 'max:3000'],
            'answers.other_terms' => ['nullable', 'string', 'max:5000'],
            'answers.confirm_accuracy' => ['accepted'],
            'answers.confirm_authority' => ['accepted'],
            'answers.confirm_due_diligence' => ['accepted'],
            'answers.confirm_no_commitment' => ['accepted'],
            'answers.confirm_privacy_consent' => ['accepted'],
            'documents' => ['nullable', 'array', 'max:15'],
            'documents.*' => ['file', 'mimes:pdf,jpg,jpeg,png,webp,doc,docx', 'max:10240'],
            'website' => ['nullable', 'max:0'],
        ]);

        $documentPaths = collect($request->file('documents', []))
            ->map(fn (UploadedFile $document): string => $document->store('property-evaluations/documents', 'local'))
            ->all();

        try {
            $propertyEvaluation = PropertyEvaluation::create([
                ...$validated['answers'],
                'documents' => $documentPaths,
            ]);
        } catch (Throwable $exception) {
            Storage::disk('local')->delete($documentPaths);

            throw $exception;
        }

        try {
            Mail::to(config('mail.inquiry_to'))
                ->send(new PropertyEvaluationReceived($propertyEvaluation));
        } catch (Throwable $exception) {
            Log::error('Property evaluation saved, but its email notification could not be sent.', [
                'property_evaluation_id' => $propertyEvaluation->id,
                'exception' => $exception->getMessage(),
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Thank you for providing the additional information. GREAT LAND PH will review the details and determine whether the property can proceed to the next stage of evaluation.',
        ], 201);
    }
}
