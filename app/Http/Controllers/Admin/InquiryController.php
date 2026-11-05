<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class InquiryController extends Controller
{
    public function destroy(Inquiry $inquiry): RedirectResponse
    {
        $photoPaths = $inquiry->photos ?? [];
        $inquiry->delete();
        Storage::disk('local')->delete($photoPaths);

        return redirect()
            ->route('admin.dashboard')
            ->with('status', 'Inquiry record deleted.');
    }
}
