<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#12112f" />
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" />
    <title>Property Evaluation | GREAT Land PH Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body class="min-h-screen bg-slate-50 text-slate-900">
    <header class="border-b border-slate-200 bg-white">
      <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-8">
        <a href="{{ route('admin.dashboard') }}" aria-label="Admin dashboard">
          <img src="{{ asset('images/Great-Logo.png') }}" alt="GREAT Land PH" class="h-auto w-44 object-contain" />
        </a>
        <div class="flex items-center gap-5">
          <a href="{{ route('admin.dashboard') }}" class="text-sm font-semibold text-[#12112f] hover:underline">Inquiries</a>
          <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" class="rounded-lg border border-slate-300 bg-red-800 px-4 py-2 text-sm font-semibold text-white transition">Sign out</button>
          </form>
        </div>
      </div>
    </header>

    <main class="mx-auto max-w-7xl px-6 py-12 lg:px-8">
      <p class="mb-2 text-xs font-bold uppercase tracking-[.2em] text-[#817025]">GREAT Land PH</p>
      <h1 class="py-[50px] text-3xl font-bold tracking-tight text-[#12112f]">Property Evaluation</h1>

      @if (session('status'))
        <p class="mt-5 rounded-lg bg-emerald-50 px-4 py-3 text-sm font-semibold text-emerald-800" role="status">{{ session('status') }}</p>
      @endif

      <section class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
        <div class="mb-6 flex flex-col justify-between gap-2 sm:flex-row sm:items-end">
          <div>
            <h2 class="text-xl font-bold text-slate-900">Evaluation records</h2>
          </div>
          <p class="text-sm text-slate-500">{{ $propertyEvaluations->total() }} total</p>
        </div>

        @if ($propertyEvaluations->isEmpty())
          <div class="rounded-lg border border-dashed border-slate-300 px-6 py-12 text-center">
            <p class="font-semibold text-slate-800">No evaluation records yet</p>
            <p class="mt-2 text-sm text-slate-500">New property evaluation submissions will appear here.</p>
          </div>
        @else
          <div class="overflow-x-auto rounded-lg border border-slate-200">
            <table class="min-w-full divide-y divide-slate-200 text-left text-sm">
              <thead class="bg-slate-50 text-xs uppercase tracking-wide text-slate-500">
                <tr>
                  <th scope="col" class="whitespace-nowrap px-4 py-3 font-semibold">Received</th>
                  <th scope="col" class="min-w-48 px-4 py-3 font-semibold">Owner / Contact</th>
                  <th scope="col" class="min-w-48 px-4 py-3 font-semibold">Property</th>
                  <th scope="col" class="min-w-48 px-4 py-3 font-semibold">Location</th>
                  <th scope="col" class="whitespace-nowrap px-4 py-3 font-semibold">Expected price</th>
                  <th scope="col" class="min-w-48 px-4 py-3 font-semibold">Details / Actions</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-slate-100">
                @foreach ($propertyEvaluations as $propertyEvaluation)
                  <tr class="align-top hover:bg-slate-50/70">
                    <td class="whitespace-nowrap px-4 py-4 text-slate-600">
                      {{ $propertyEvaluation->created_at->format('M j, Y') }}
                      <span class="mt-1 block text-xs text-slate-400">{{ $propertyEvaluation->created_at->format('g:i A') }}</span>
                    </td>
                    <td class="px-4 py-4">
                      <p class="font-semibold text-slate-900">{{ $propertyEvaluation->owner_name }}</p>
                      <p class="mt-1 text-slate-600">Completed by {{ $propertyEvaluation->completing_person }}</p>
                      <a href="tel:{{ $propertyEvaluation->phone }}" class="mt-1 block text-slate-600 hover:underline">{{ $propertyEvaluation->phone }}</a>
                      <a href="mailto:{{ $propertyEvaluation->email }}" class="mt-1 block break-all text-slate-600 hover:underline">{{ $propertyEvaluation->email }}</a>
                    </td>
                    <td class="px-4 py-4">
                      <p class="font-semibold text-slate-900">{{ $propertyEvaluation->current_use }}</p>
                      <p class="mt-1 text-slate-600">{{ number_format((float) $propertyEvaluation->land_area, 2) }} sqm</p>
                    </td>
                    <td class="px-4 py-4 text-slate-600">
                      <p>{{ $propertyEvaluation->location }}</p>
                      <p class="mt-1">{{ $propertyEvaluation->barangay }}, {{ $propertyEvaluation->city }}, {{ $propertyEvaluation->province }}</p>
                    </td>
                    <td class="whitespace-nowrap px-4 py-4 font-semibold text-slate-900">₱{{ number_format((float) $propertyEvaluation->expected_price, 2) }}</td>
                    <td class="px-4 py-4">
                      <details class="group">
                        <summary class="cursor-pointer list-none font-semibold text-[#12112f] hover:underline">View full evaluation <span class="text-xs text-slate-500 group-open:hidden">＋</span><span class="hidden text-xs text-slate-500 group-open:inline">−</span></summary>
                        <dl class="mt-4 grid min-w-72 gap-3 text-xs leading-5 text-slate-600">
                          <div><dt class="font-semibold text-slate-800">Seller and ownership</dt><dd>Relationship: {{ $propertyEvaluation->relationship_to_owner ?: 'Not provided' }} · Registered owners: {{ $propertyEvaluation->registered_owners }} · All parties willing: {{ $propertyEvaluation->parties_willing }} · Inheritance settled: {{ $propertyEvaluation->inheritance_settled }}</dd></div>
                          <div><dt class="font-semibold text-slate-800">Property reference</dt><dd>Lot / survey: {{ $propertyEvaluation->property_reference ?: 'Not provided' }} · Title: {{ $propertyEvaluation->title_number ?: 'Not provided' }} · Dimensions: {{ $propertyEvaluation->dimensions ?: 'Not provided' }}</dd></div>
                          <div><dt class="font-semibold text-slate-800">Property condition and access</dt><dd>{{ $propertyEvaluation->condition }} · Road access: {{ $propertyEvaluation->road_access }} · Utilities: {{ $propertyEvaluation->utilities }} · Concerns: {{ $propertyEvaluation->physical_concerns }} {{ $propertyEvaluation->physical_concerns_details }}</dd></div>
                          <div><dt class="font-semibold text-slate-800">Maps</dt><dd>@if ($propertyEvaluation->maps_link)<a class="break-all text-blue-700 underline" href="{{ $propertyEvaluation->maps_link }}" target="_blank" rel="noopener">{{ $propertyEvaluation->maps_link }}</a>@else Not provided @endif</dd></div>
                          <div><dt class="font-semibold text-slate-800">Documents listed</dt><dd>{{ implode(', ', $propertyEvaluation->documents_available ?? []) ?: 'None selected' }}</dd></div>
                          <div><dt class="font-semibold text-slate-800">Legal status</dt><dd>Encumbrance: {{ $propertyEvaluation->encumbrance }} {{ $propertyEvaluation->encumbrance_details }} · Taxes up to date: {{ $propertyEvaluation->taxes_up_to_date }} · Lease / occupancy: {{ $propertyEvaluation->occupancy_agreement }} {{ $propertyEvaluation->occupancy_details }} · Transfer restrictions: {{ $propertyEvaluation->transfer_restrictions }} {{ $propertyEvaluation->restrictions_details }}</dd></div>
                          <div><dt class="font-semibold text-slate-800">Selling terms</dt><dd>Negotiable: {{ $propertyEvaluation->price_negotiable }} · Timeline: {{ $propertyEvaluation->sale_timeline }} · Reason: {{ $propertyEvaluation->reason_for_selling ?: 'Not provided' }} · Other terms: {{ $propertyEvaluation->other_terms ?: 'Not provided' }}</dd></div>
                          <div><dt class="font-semibold text-slate-800">Uploaded documents and photos</dt><dd>{{ count($propertyEvaluation->documents ?? []) }} file(s) uploaded</dd></div>
                          <div><dt class="font-semibold text-slate-800">Confirmations</dt><dd>Accurate: {{ $propertyEvaluation->confirm_accuracy ? 'Yes' : 'No' }} · Authority: {{ $propertyEvaluation->confirm_authority ? 'Yes' : 'No' }} · Due diligence: {{ $propertyEvaluation->confirm_due_diligence ? 'Yes' : 'No' }} · No commitment: {{ $propertyEvaluation->confirm_no_commitment ? 'Yes' : 'No' }} · Privacy consent: {{ $propertyEvaluation->confirm_privacy_consent ? 'Yes' : 'No' }}</dd></div>
                        </dl>
                      </details>
                      <form class="mt-4" method="POST" action="{{ route('admin.property-evaluations.destroy', $propertyEvaluation) }}" onsubmit="return confirm('Delete this property evaluation and its uploaded documents? This cannot be undone.');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="rounded-lg border border-red-200 px-3 py-2 text-xs font-semibold text-red-700 transition hover:bg-red-50">Delete record</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>

          @if ($propertyEvaluations->hasPages())
            <div class="mt-5">{{ $propertyEvaluations->links() }}</div>
          @endif
        @endif
      </section>
    </main>
  </body>
</html>
