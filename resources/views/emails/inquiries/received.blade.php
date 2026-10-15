<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New property inquiry</title>
  </head>
  <body style="margin:0;background:#f4f4f7;color:#12112f;font-family:Arial,sans-serif;line-height:1.5;padding:24px;">
    <main style="background:#ffffff;border:1px solid #e4e3e9;border-radius:8px;margin:0 auto;max-width:680px;padding:28px;">
      <p style="color:#817025;font-size:12px;font-weight:bold;letter-spacing:2px;text-transform:uppercase;">GREAT Land PH</p>
      <h1 style="font-size:24px;margin:0 0 8px;">New seller inquiry</h1>
      <p style="color:#55546a;margin:0 0 24px;">Submitted {{ $inquiry->created_at->format('M j, Y g:i A') }}</p>

      <h2 style="border-bottom:1px solid #e4e3e9;font-size:16px;padding-bottom:8px;">Seller information</h2>
      <table cellpadding="6" cellspacing="0" style="border-collapse:collapse;width:100%;">
        <tr><th align="left">Name</th><td>{{ $inquiry->name }}</td></tr>
        <tr><th align="left">Phone</th><td>{{ $inquiry->phone }}</td></tr>
        <tr><th align="left">Email</th><td>{{ $inquiry->email ?: 'Not provided' }}</td></tr>
        <tr><th align="left">Relationship</th><td>{{ $inquiry->relationship }}</td></tr>
      </table>

      <h2 style="border-bottom:1px solid #e4e3e9;font-size:16px;margin-top:24px;padding-bottom:8px;">Property information</h2>
      <table cellpadding="6" cellspacing="0" style="border-collapse:collapse;width:100%;">
        <tr><th align="left">Property type</th><td>{{ $inquiry->property_type }}</td></tr>
        <tr><th align="left">Area</th><td>{{ $inquiry->area }}</td></tr>
        <tr><th align="left">Location</th><td>{{ $inquiry->location }}, {{ $inquiry->barangay }}, {{ $inquiry->city }}, {{ $inquiry->province }}</td></tr>
        <tr><th align="left">Title / ownership document</th><td>{{ $inquiry->title_type ?: 'Not provided' }}</td></tr>
        <tr><th align="left">Occupancy</th><td>{{ $inquiry->occupancy ?: 'Not provided' }}</td></tr>
        <tr><th align="left">Asking price</th><td>{{ $inquiry->price }}</td></tr>
        <tr><th align="left">Price negotiable</th><td>{{ $inquiry->negotiable ?: 'Not provided' }}</td></tr>
        <tr><th align="left">Selling timeline</th><td>{{ $inquiry->timeline ?: 'Not provided' }}</td></tr>
        <tr><th align="left">Additional information</th><td style="white-space:pre-line;">{{ $inquiry->details ?: 'None provided' }}</td></tr>
      </table>

      <p style="color:#55546a;font-size:13px;margin-top:24px;">{{ count($inquiry->photos ?? []) }} property photo(s) {{ count($inquiry->photos ?? []) === 1 ? 'is' : 'are' }} attached.</p>
    </main>
  </body>
</html>
