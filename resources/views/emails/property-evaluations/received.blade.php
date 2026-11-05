<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New property evaluation</title>
  </head>
  <body style="margin:0;background:#f4f4f7;color:#12112f;font-family:Arial,sans-serif;line-height:1.5;padding:24px;">
    <main style="background:#ffffff;border:1px solid #e4e3e9;border-radius:8px;margin:0 auto;max-width:760px;padding:28px;">
      <p style="color:#817025;font-size:12px;font-weight:bold;letter-spacing:2px;text-transform:uppercase;">GREAT LAND PH</p>
      <h1 style="font-size:24px;margin:0 0 8px;">Property evaluation submission</h1>
      <p style="color:#55546a;margin:0 0 24px;">Submitted {{ $propertyEvaluation->created_at->format('M j, Y g:i A') }}</p>

      <h2 style="border-bottom:1px solid #e4e3e9;font-size:16px;padding-bottom:8px;">Seller and ownership information</h2>
      <table cellpadding="6" cellspacing="0" style="border-collapse:collapse;width:100%;">
        <tr><th align="left">Registered owner</th><td>{{ $propertyEvaluation->owner_name }}</td></tr>
        <tr><th align="left">Form completed by</th><td>{{ $propertyEvaluation->completing_person }}</td></tr>
        <tr><th align="left">Relationship to owner</th><td>{{ $propertyEvaluation->relationship_to_owner ?: 'Not provided' }}</td></tr>
        <tr><th align="left">Contact number</th><td>{{ $propertyEvaluation->phone }}</td></tr>
        <tr><th align="left">Email address</th><td>{{ $propertyEvaluation->email }}</td></tr>
        <tr><th align="left">Registered owners</th><td>{{ $propertyEvaluation->registered_owners }}</td></tr>
        <tr><th align="left">All required parties willing</th><td>{{ $propertyEvaluation->parties_willing }}</td></tr>
        <tr><th align="left">Inheritance settled</th><td>{{ $propertyEvaluation->inheritance_settled }}</td></tr>
      </table>

      <h2 style="border-bottom:1px solid #e4e3e9;font-size:16px;margin-top:24px;padding-bottom:8px;">Detailed property information</h2>
      <table cellpadding="6" cellspacing="0" style="border-collapse:collapse;width:100%;">
        <tr><th align="left">Address / location</th><td>{{ $propertyEvaluation->location }}, {{ $propertyEvaluation->barangay }}, {{ $propertyEvaluation->city }}, {{ $propertyEvaluation->province }}</td></tr>
        <tr><th align="left">Lot / survey reference</th><td>{{ $propertyEvaluation->property_reference ?: 'Not provided' }}</td></tr>
        <tr><th align="left">Title number</th><td>{{ $propertyEvaluation->title_number ?: 'Not provided' }}</td></tr>
        <tr><th align="left">Land area</th><td>{{ number_format((float) $propertyEvaluation->land_area, 2) }} square meters</td></tr>
        <tr><th align="left">Road frontage / dimensions</th><td>{{ $propertyEvaluation->dimensions ?: 'Not provided' }}</td></tr>
        <tr><th align="left">Current use</th><td>{{ $propertyEvaluation->current_use }}</td></tr>
        <tr><th align="left">Condition</th><td>{{ $propertyEvaluation->condition }}</td></tr>
        <tr><th align="left">Road access</th><td>{{ $propertyEvaluation->road_access }}</td></tr>
        <tr><th align="left">Electricity and water</th><td>{{ $propertyEvaluation->utilities }}</td></tr>
        <tr><th align="left">Physical concerns</th><td>{{ $propertyEvaluation->physical_concerns }} {{ $propertyEvaluation->physical_concerns_details }}</td></tr>
        <tr><th align="left">Google Maps link</th><td>{{ $propertyEvaluation->maps_link ?: 'Not provided' }}</td></tr>
      </table>

      <h2 style="border-bottom:1px solid #e4e3e9;font-size:16px;margin-top:24px;padding-bottom:8px;">Ownership and legal status</h2>
      <table cellpadding="6" cellspacing="0" style="border-collapse:collapse;width:100%;">
        <tr><th align="left">Documents available</th><td>{{ implode(', ', $propertyEvaluation->documents_available ?? []) ?: 'None selected' }}</td></tr>
        <tr><th align="left">Mortgage, liens, claims, disputes</th><td>{{ $propertyEvaluation->encumbrance }} {{ $propertyEvaluation->encumbrance_details }}</td></tr>
        <tr><th align="left">Real property taxes up to date</th><td>{{ $propertyEvaluation->taxes_up_to_date }}</td></tr>
        <tr><th align="left">Lease / occupancy agreement</th><td>{{ $propertyEvaluation->occupancy_agreement }} {{ $propertyEvaluation->occupancy_details }}</td></tr>
        <tr><th align="left">Transfer restrictions</th><td>{{ $propertyEvaluation->transfer_restrictions }} {{ $propertyEvaluation->restrictions_details }}</td></tr>
      </table>

      <h2 style="border-bottom:1px solid #e4e3e9;font-size:16px;margin-top:24px;padding-bottom:8px;">Selling price and terms</h2>
      <table cellpadding="6" cellspacing="0" style="border-collapse:collapse;width:100%;">
        <tr><th align="left">Expected selling price</th><td>₱{{ number_format((float) $propertyEvaluation->expected_price, 2) }}</td></tr>
        <tr><th align="left">Negotiable</th><td>{{ $propertyEvaluation->price_negotiable }}</td></tr>
        <tr><th align="left">Preferred timeline</th><td>{{ $propertyEvaluation->sale_timeline }}</td></tr>
        <tr><th align="left">Reason for selling</th><td>{{ $propertyEvaluation->reason_for_selling ?: 'Not provided' }}</td></tr>
        <tr><th align="left">Other terms</th><td>{{ $propertyEvaluation->other_terms ?: 'Not provided' }}</td></tr>
      </table>

      <h2 style="border-bottom:1px solid #e4e3e9;font-size:16px;margin-top:24px;padding-bottom:8px;">Final confirmations</h2>
      <ul>
        <li>Information accurate: {{ $propertyEvaluation->confirm_accuracy ? 'Yes' : 'No' }}</li>
        <li>Authority to provide information: {{ $propertyEvaluation->confirm_authority ? 'Yes' : 'No' }}</li>
        <li>Understands verification and due diligence: {{ $propertyEvaluation->confirm_due_diligence ? 'Yes' : 'No' }}</li>
        <li>Understands no purchase commitment: {{ $propertyEvaluation->confirm_no_commitment ? 'Yes' : 'No' }}</li>
        <li>Privacy consent: {{ $propertyEvaluation->confirm_privacy_consent ? 'Yes' : 'No' }}</li>
      </ul>
      <p style="color:#55546a;font-size:13px;margin-top:24px;">{{ count($propertyEvaluation->documents ?? []) }} uploaded file(s) are attached.</p>
    </main>
  </body>
</html>
