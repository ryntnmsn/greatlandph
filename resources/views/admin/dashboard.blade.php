<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#12112f" />
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" />
    <title>Admin Dashboard | GREAT Land PH</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body class="min-h-screen bg-slate-50 text-slate-900">
    <header class="border-b border-slate-200 bg-white">
      <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-8">
        <a href="{{ route('admin.dashboard') }}" aria-label="Admin dashboard">
          <img src="{{ asset('images/Great-Logo.png') }}" alt="GREAT Land PH" class="h-auto w-44 object-contain" />
        </a>
        <div class="flex items-center gap-5">
          <span class="hidden text-sm text-slate-600 sm:inline">{{ auth()->user()->name }}</span>
          <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" class="rounded-lg border border-slate-300 px-4 py-2 text-sm font-semibold transition bg-red-800">Sign out</button>
          </form>
        </div>
      </div>
    </header>

    <main class="mx-auto max-w-7xl px-6 py-30 lg:px-8">
      <p class="mb-2 text-xs font-bold uppercase tracking-[.2em] text-[#817025]">GREAT Land PH</p>
      <h1 class="text-3xl font-bold tracking-tight sm:text-2xl">Admin dashboard</h1>
      <p class="mt-3 text-slate-600">Welcome, {{ auth()->user()->name }}. You are signed in as an administrator.</p>

      <section class="mt-10 rounded-xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
        <h2 class="text-lg font-bold">Website</h2>
        <p class="mt-2 max-w-2xl text-sm leading-6 text-slate-600">Your admin access is active. Use the link below to view the public website.</p>
        <a href="{{ route('home') }}" class="mt-5 inline-flex rounded-lg bg-[#12112f] px-5 py-3 text-sm font-bold text-white transition hover:bg-[#29284d]">View public website</a>
      </section>

      <section class="mt-6 rounded-xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
        <div class="mb-6 flex flex-col justify-between gap-2 sm:flex-row sm:items-end">
          <div>
            <h2 class="text-xl font-bold">Inquiries</h2>
            <p class="mt-2 text-sm leading-6 text-slate-600">Property details submitted through the website inquiry form.</p>
          </div>
          <p class="text-sm text-slate-500">{{ $inquiries->total() }} total</p>
        </div>

        @if ($inquiries->isEmpty())
          <div class="rounded-lg border border-dashed border-slate-300 px-6 py-12 text-center">
            <p class="font-semibold text-slate-800">No inquiries yet</p>
            <p class="mt-2 text-sm text-slate-500">New website submissions will appear here.</p>
          </div>
        @else
          <div class="overflow-x-auto rounded-lg border border-slate-200">
            <table class="min-w-full divide-y divide-slate-200 text-left text-sm">
              <thead class="bg-slate-50 text-xs uppercase tracking-wide text-slate-500">
                <tr>
                  <th scope="col" class="whitespace-nowrap px-4 py-3 font-semibold">Received</th>
                  <th scope="col" class="min-w-48 px-4 py-3 font-semibold">Seller</th>
                  <th scope="col" class="min-w-44 px-4 py-3 font-semibold">Property</th>
                  <th scope="col" class="min-w-48 px-4 py-3 font-semibold">Location</th>
                  <th scope="col" class="whitespace-nowrap px-4 py-3 font-semibold">Asking price</th>
                  <th scope="col" class="min-w-40 px-4 py-3 font-semibold">Details</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-slate-100">
                @foreach ($inquiries as $inquiry)
                  <tr class="align-top hover:bg-slate-50/70">
                    <td class="whitespace-nowrap px-4 py-4 text-slate-600">{{ $inquiry->created_at->format('M j, Y') }}<span class="mt-1 block text-xs text-slate-400">{{ $inquiry->created_at->format('g:i A') }}</span></td>
                    <td class="px-4 py-4">
                      <p class="font-semibold text-slate-900">{{ $inquiry->name }}</p>
                      <a href="tel:{{ $inquiry->phone }}" class="mt-1 block text-slate-600 hover:underline">{{ $inquiry->phone }}</a>
                      @if ($inquiry->email)
                        <a href="mailto:{{ $inquiry->email }}" class="mt-1 block break-all text-slate-600 hover:underline">{{ $inquiry->email }}</a>
                      @endif
                    </td>
                    <td class="px-4 py-4">
                      <p class="font-semibold text-slate-900">{{ $inquiry->property_type }}</p>
                      <p class="mt-1 text-slate-600">{{ $inquiry->area }}</p>
                    </td>
                    <td class="px-4 py-4 text-slate-600">
                      <p>{{ $inquiry->barangay }}</p>
                      <p class="mt-1">{{ $inquiry->city }}, {{ $inquiry->province }}</p>
                    </td>
                    <td class="whitespace-nowrap px-4 py-4 font-semibold text-slate-900">{{ $inquiry->price }}</td>
                    <td class="px-4 py-4">
                      <details class="group">
                        <summary class="cursor-pointer list-none font-semibold text-[#12112f] hover:underline">View full inquiry <span class="text-xs text-slate-500 group-open:hidden">＋</span><span class="hidden text-xs text-slate-500 group-open:inline">−</span></summary>
                        <dl class="mt-4 grid min-w-64 gap-3 text-xs leading-5 text-slate-600">
                          <div><dt class="font-semibold text-slate-800">Relationship</dt><dd>{{ $inquiry->relationship }}</dd></div>
                          <div><dt class="font-semibold text-slate-800">Full location</dt><dd>{{ $inquiry->location }}</dd></div>
                          <div><dt class="font-semibold text-slate-800">Title or ownership document</dt><dd>{{ $inquiry->title_type ?: 'Not provided' }}</dd></div>
                          <div><dt class="font-semibold text-slate-800">Occupancy</dt><dd>{{ $inquiry->occupancy ?: 'Not provided' }}</dd></div>
                          <div><dt class="font-semibold text-slate-800">Price negotiable</dt><dd>{{ $inquiry->negotiable ?: 'Not provided' }}</dd></div>
                          <div><dt class="font-semibold text-slate-800">Selling timeline</dt><dd>{{ $inquiry->timeline ?: 'Not provided' }}</dd></div>
                          <div><dt class="font-semibold text-slate-800">Additional information</dt><dd class="whitespace-pre-line">{{ $inquiry->details ?: 'None provided' }}</dd></div>
                          <div><dt class="font-semibold text-slate-800">Property photos</dt><dd>{{ count($inquiry->photos ?? []) }} uploaded</dd></div>
                          <div><dt class="font-semibold text-slate-800">Confirmations</dt><dd>Accurate: {{ $inquiry->accurate ? 'Yes' : 'No' }} · Authorized: {{ $inquiry->authorized ? 'Yes' : 'No' }} · Contact consent: {{ $inquiry->consent ? 'Yes' : 'No' }}</dd></div>
                        </dl>
                      </details>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>

          @if ($inquiries->hasPages())
            <div class="mt-5">{{ $inquiries->links() }}</div>
          @endif
        @endif
      </section>
    </main>
  </body>
</html>
