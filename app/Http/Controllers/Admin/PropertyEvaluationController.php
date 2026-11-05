<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PropertyEvaluation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class PropertyEvaluationController extends Controller
{
    public function index(): View
    {
        return view('admin.property-evaluations.index', [
            'propertyEvaluations' => PropertyEvaluation::query()
                ->latest()
                ->paginate(15),
        ]);
    }

    public function destroy(PropertyEvaluation $propertyEvaluation): RedirectResponse
    {
        $documentPaths = $propertyEvaluation->documents ?? [];
        $propertyEvaluation->delete();
        Storage::disk('local')->delete($documentPaths);

        return redirect()
            ->route('admin.property-evaluations.index')
            ->with('status', 'Property evaluation record deleted.');
    }
}
