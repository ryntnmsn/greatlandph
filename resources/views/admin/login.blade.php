<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#12112f" />
    <title>Admin Login | GREAT Land PH</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body class="min-h-screen bg-[#12112f] px-6 py-12 text-white">
    <main class="mx-auto flex min-h-[75vh] max-w-md flex-col justify-center">
      <a href="{{ route('home') }}" class="mb-10 inline-flex items-center self-center" aria-label="GREAT Land PH home">
        <img src="{{ asset('images/Great-Logo.png') }}" alt="GREAT Land PH" class="h-auto w-52 object-contain" />
      </a>

      <section class="rounded-xl border border-white/10 bg-white p-8 text-[#12112f] shadow-2xl sm:p-10">
        <p class="mb-2 text-xs font-bold uppercase tracking-[.2em] text-[#817025]">Admin portal</p>
        <h1 class="mb-2 text-3xl font-bold">Welcome back</h1>
        <p class="mb-8 text-sm text-slate-600">Sign in to manage the GREAT Land PH website.</p>

        @if ($errors->any())
          <div role="alert" class="mb-5 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800">
            {{ $errors->first() }}
          </div>
        @endif

        <form method="POST" action="{{ route('admin.login.store') }}" class="space-y-5">
          @csrf
          <div>
            <label for="email" class="mb-2 block text-sm font-semibold">Email address</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus autocomplete="username"
              class="w-full rounded-lg border border-slate-300 px-4 py-3 text-[#12112f] outline-none transition focus:border-[#b69c31] focus:ring-2 focus:ring-[#b69c31]/20" />
          </div>
          <div>
            <label for="password" class="mb-2 block text-sm font-semibold">Password</label>
            <input id="password" name="password" type="password" required autocomplete="current-password"
              class="w-full rounded-lg border border-slate-300 px-4 py-3 text-[#12112f] outline-none transition focus:border-[#b69c31] focus:ring-2 focus:ring-[#b69c31]/20" />
          </div>
          <button type="submit" class="w-full rounded-lg bg-[#12112f] px-5 py-3 font-bold text-white transition hover:bg-[#29284d] focus:outline-none focus:ring-2 focus:ring-[#b69c31] focus:ring-offset-2">
            Sign in
          </button>
        </form>
      </section>

      <a href="{{ route('home') }}" class="mt-6 self-center text-sm text-white/70 transition hover:text-white">← Back to website</a>
    </main>
  </body>
</html>
