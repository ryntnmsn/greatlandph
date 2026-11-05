<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#12112f" />
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" />
    <meta name="description" content="Private follow-up form for GREAT property evaluation and due diligence." />
    <title>GREAT Property Evaluation and Due Diligence Information Form</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body class="additional-details-page">
    <header>
      <div class="wrap nav">
        <a class="brand" href="{{ route('home') }}" aria-label="GREAT Land PH home">
          <img class="brand-logo" src="{{ asset('images/Great-Logo.png') }}" alt="GREAT Land PH" />
        </a>
        <span class="detail-label">Private follow-up form</span>
      </div>
    </header>
    <main>
      <section class="section contact">
        <div class="wrap">
          <div class="section-head" style="max-width: 850px; margin-inline: auto; text-align: center;">
            <div class="eyebrow" style="justify-content: center;">Gensan Real Estate Acquisition and Transformation (GREAT)</div>
            <h1>GREAT Property Evaluation and Due Diligence Information Form</h1>
            <p class="text-slate-600" style="text-align: center;">Thank you for submitting your property inquiry to GREAT. Your property has passed our initial screening and has been selected for further evaluation.</p>
          </div>

          <form class="form-card" id="evaluation-form" action="{{ route('additional-details-form.store') }}" method="post" enctype="multipart/form-data" style="max-width: 900px; margin: 0 auto;">
            @csrf
            <div class="form-title">Property evaluation information</div>
            <p class="step-count" id="step-count" aria-live="polite">Step 1 of 6 · Seller and Ownership Information</p>
            <div class="field website-field" aria-hidden="true">
              <label for="website">Leave this field empty</label><input id="website" name="website" tabindex="-1" autocomplete="off" />
            </div>
            <div class="form-grid">
              <fieldset class="form-section form-step active" data-step-title="Seller and Ownership Information">
                <legend>Section 1: Seller and Ownership Information</legend>
                <div class="form-grid">
                  <div class="field"><label for="owner-name">Full Name of the Registered Property Owner <span aria-hidden="true">*</span></label><input id="owner-name" name="answers[owner_name]" autocomplete="name" required /></div>
                  <div class="field"><label for="completing-person">Name of the Person Completing This Form <span aria-hidden="true">*</span></label><input id="completing-person" name="answers[completing_person]" required /></div>
                  <div class="field full"><label for="relationship-to-owner">If different from the registered owner, indicate your relationship to the owner.</label><input id="relationship-to-owner" name="answers[relationship_to_owner]" /></div>
                  <div class="field"><label for="phone">Contact Number <span aria-hidden="true">*</span></label><input id="phone" name="answers[phone]" type="tel" autocomplete="tel" required /></div>
                  <div class="field"><label for="email">Email Address <span aria-hidden="true">*</span></label><input id="email" name="answers[email]" type="email" autocomplete="email" required /></div>
                  <div class="field"><label for="registered-owners">How many registered owners are listed on the title? <span aria-hidden="true">*</span></label><select id="registered-owners" name="answers[registered_owners]" required><option value="">Select one</option><option>One</option><option>Two</option><option>Three or more</option><option>No registered title available</option><option>Not sure</option></select></div>
                  <div class="field"><label for="parties-willing">Are all registered owners or other legally required parties willing to participate in the sale? <span aria-hidden="true">*</span></label><select id="parties-willing" name="answers[parties_willing]" required><option value="">Select one</option><option>Yes</option><option>No</option><option>Still to be confirmed</option><option>Not applicable or not sure</option></select></div>
                  <div class="field full"><label for="inheritance-settled">If inherited, has the estate or inheritance process been settled? <span aria-hidden="true">*</span></label><select id="inheritance-settled" name="answers[inheritance_settled]" required><option value="">Select one</option><option>Yes</option><option>No</option><option>Still in progress</option><option>Not applicable</option><option>Not sure</option></select></div>
                </div>
              </fieldset>

              <fieldset class="form-section form-step" data-step-title="Detailed Property Information">
                <legend>Section 2: Detailed Property Information</legend>
                <div class="form-grid">
                  <div class="field full"><label for="location">Complete Property Address or Location <span aria-hidden="true">*</span></label><input id="location" name="answers[location]" required /></div>
                  <div class="field"><label for="barangay">Barangay <span aria-hidden="true">*</span></label><input id="barangay" name="answers[barangay]" required /></div>
                  <div class="field"><label for="city">City or Municipality <span aria-hidden="true">*</span></label><input id="city" name="answers[city]" required /></div>
                  <div class="field"><label for="province">Province <span aria-hidden="true">*</span></label><input id="province" name="answers[province]" required /></div>
                  <div class="field"><label for="property-reference">Lot Number, Survey Plan Number, or Other Property Reference (if available)</label><input id="property-reference" name="answers[property_reference]" /></div>
                  <div class="field"><label for="title-number">Title Number (if applicable and available)</label><input id="title-number" name="answers[title_number]" /></div>
                  <div class="field"><label for="land-area">Total Land Area in Square Meters <span aria-hidden="true">*</span></label><input id="land-area" name="answers[land_area]" type="number" min="0" step="0.01" required /></div>
                  <div class="field"><label for="dimensions">Approximate Road Frontage and Lot Dimensions (if known)</label><input id="dimensions" name="answers[dimensions]" /></div>
                  <div class="field"><label for="current-use">Current use of the property <span aria-hidden="true">*</span></label><select id="current-use" name="answers[current_use]" required><option value="">Select one</option><option>Vacant land</option><option>Residential</option><option>Agricultural</option><option>Commercial</option><option>Industrial</option><option>Mixed-use</option><option>Other</option></select></div>
                  <div class="field"><label for="condition">Current condition of the property <span aria-hidden="true">*</span></label><select id="condition" name="answers[condition]" required><option value="">Select one</option><option>Flat land</option><option>Sloping land</option><option>Partially developed</option><option>Fully developed</option><option>Other or unsure</option></select></div>
                  <div class="field"><label for="road-access">Does the property have direct road access? <span aria-hidden="true">*</span></label><select id="road-access" name="answers[road_access]" required><option value="">Select one</option><option>Yes, access from a public road</option><option>Yes, through a private or interior road</option><option>Access is shared or subject to an arrangement</option><option>No direct road access</option><option>Not sure</option></select></div>
                  <div class="field"><label for="utilities">Are electricity and water services available? <span aria-hidden="true">*</span></label><select id="utilities" name="answers[utilities]" required><option value="">Select one</option><option>Both are available.</option><option>Electricity only.</option><option>Water only.</option><option>Neither is currently available.</option><option>Not sure.</option></select></div>
                  <div class="field full"><label for="physical-concerns">Known flooding, boundary disputes, access issues, or other physical concerns? <span aria-hidden="true">*</span></label><select id="physical-concerns" name="answers[physical_concerns]" required><option value="">Select one</option><option>No known issues</option><option>Yes, please explain below.</option><option>Not sure.</option></select></div>
                  <div class="field full"><label for="physical-concerns-details">If yes, please explain.</label><textarea id="physical-concerns-details" name="answers[physical_concerns_details]" rows="3"></textarea></div>
                  <div class="field full"><label for="maps-link">Google Maps Location Pin or Link</label><input id="maps-link" name="answers[maps_link]" type="url" placeholder="https://maps.google.com/..." /></div>
                </div>
              </fieldset>

              <fieldset class="form-section form-step" data-step-title="Ownership and Legal Status">
                <legend>Section 3: Ownership and Legal Status</legend>
                <div class="form-grid">
                  <div class="field full"><label>What ownership or property documents are available? Select all that apply.</label><div class="confirmation-list">
                    @foreach (['Transfer Certificate of Title (TCT)', 'Original Certificate of Title (OCT)', 'Tax Declaration', 'Deed of Sale', 'Certificate of Land Ownership Award (CLOA)', 'Emancipation Patent (EP)', 'Inheritance or estate settlement documents', 'Survey plan or lot plan', 'Real property tax receipts', 'Other documents'] as $document)
                      <label class="option"><input type="checkbox" name="answers[documents_available][]" value="{{ $document }}" />{{ $document }}</label>
                    @endforeach
                  </div></div>
                  <div class="field"><label for="encumbrance">Is the property mortgaged or subject to any lien, encumbrance, legal claim, or ownership dispute? <span aria-hidden="true">*</span></label><select id="encumbrance" name="answers[encumbrance]" required><option value="">Select one</option><option>No known issues</option><option>Yes</option><option>Not sure</option></select></div>
                  <div class="field"><label for="taxes-up-to-date">Are real property taxes up to date? <span aria-hidden="true">*</span></label><select id="taxes-up-to-date" name="answers[taxes_up_to_date]" required><option value="">Select one</option><option>Yes</option><option>No</option><option>Not sure</option></select></div>
                  <div class="field full"><label for="encumbrance-details">If yes, explain any lien, claim, or dispute.</label><textarea id="encumbrance-details" name="answers[encumbrance_details]" rows="3"></textarea></div>
                  <div class="field"><label for="occupancy-agreement">Is the property covered by a lease, tenancy, informal occupancy, or other agreement? <span aria-hidden="true">*</span></label><select id="occupancy-agreement" name="answers[occupancy_agreement]" required><option value="">Select one</option><option>No</option><option>Yes</option><option>Not sure</option></select></div>
                  <div class="field full"><label for="occupancy-details">If yes, provide details, including any known contract period or occupancy arrangement.</label><textarea id="occupancy-details" name="answers[occupancy_details]" rows="3"></textarea></div>
                  <div class="field full"><label for="transfer-restrictions">Are there known restrictions on selling or transferring the property? <span aria-hidden="true">*</span></label><select id="transfer-restrictions" name="answers[transfer_restrictions]" required><option value="">Select one</option><option>No known restrictions</option><option>Yes</option><option>Not sure</option></select></div>
                  <div class="field full"><label for="restrictions-details">If yes, explain applicable agrarian reform, inheritance, co-ownership, or other restrictions.</label><textarea id="restrictions-details" name="answers[restrictions_details]" rows="3"></textarea></div>
                </div>
              </fieldset>

              <fieldset class="form-section form-step" data-step-title="Selling Price and Terms">
                <legend>Section 4: Selling Price and Terms</legend>
                <div class="form-grid">
                  <div class="field"><label for="expected-price">Current expected selling price (PHP) <span aria-hidden="true">*</span></label><input id="expected-price" name="answers[expected_price]" type="number" min="0" step="0.01" placeholder="₱" required /></div>
                  <div class="field"><label for="price-negotiable">Is the asking price negotiable? <span aria-hidden="true">*</span></label><select id="price-negotiable" name="answers[price_negotiable]" required><option value="">Select one</option><option>Yes</option><option>No</option><option>Open to a reasonable offer</option></select></div>
                  <div class="field full"><label for="sale-timeline">Preferred timeline for completing the sale <span aria-hidden="true">*</span></label><select id="sale-timeline" name="answers[sale_timeline]" required><option value="">Select one</option><option>As soon as possible</option><option>Within 1 to 3 months</option><option>Within 3 to 6 months</option><option>More than 6 months</option><option>Flexible</option></select></div>
                  <div class="field full"><label for="reason-for-selling">Main reason for selling (optional)</label><textarea id="reason-for-selling" name="answers[reason_for_selling]" rows="3"></textarea></div>
                  <div class="field full"><label for="other-terms">Other terms or conditions for GREAT to consider (e.g. payment arrangements)</label><textarea id="other-terms" name="answers[other_terms]" rows="3"></textarea></div>
                </div>
              </fieldset>

              <fieldset class="form-section form-step" data-step-title="Property Documents and Photos">
                <legend>Section 5: Property Documents and Photos</legend>
                <p class="field-hint">Upload clear copies where available: land title or ownership document; latest tax declaration; latest real property tax receipt or tax clearance; survey plan or lot plan; recent property and access road photos; deed of sale; inheritance or estate settlement documents; written authorization; lease or occupancy agreements; or other supporting documents.</p>
                <p class="form-note">Please do not upload original documents. GREAT may request certified copies or other verification through the appropriate authorities at a later stage.</p>
                <div class="field full"><label for="documents">Supporting documents and property photos</label><input id="documents" name="documents[]" type="file" multiple accept=".pdf,.jpg,.jpeg,.png,.webp,.doc,.docx" /><small class="form-note">Upload up to 15 files, 10 MB each. Accepted: PDF, JPG, PNG, WEBP, DOC, DOCX.</small></div>
              </fieldset>

              <fieldset class="form-section form-step" data-step-title="Final Confirmation">
                <legend>Section 6: Final Confirmation</legend>
                <div class="confirmation-list">
                  <label class="option"><input type="checkbox" name="answers[confirm_accuracy]" value="1" required />I confirm that the information provided is accurate to the best of my knowledge.</label>
                  <label class="option"><input type="checkbox" name="answers[confirm_authority]" value="1" required />I have the authority or legitimate basis to provide the information and documents submitted.</label>
                  <label class="option"><input type="checkbox" name="answers[confirm_due_diligence]" value="1" required />I understand that GREAT may conduct further verification, property inspections, and legal due diligence.</label>
                  <label class="option"><input type="checkbox" name="answers[confirm_no_commitment]" value="1" required />I understand that submitting this form does not guarantee a purchase offer or commit either party to a sale.</label>
                  <label class="option"><input type="checkbox" name="answers[confirm_privacy_consent]" value="1" required />I consent to GREAT processing my information for property evaluation and acquisition-related communication in accordance with its privacy notice.</label>
                </div>
              </fieldset>
            </div>
            <div class="step-controls">
              <button class="button previous-step" type="button" hidden>Previous</button>
              <button class="button next-step" type="button">Next</button>
              <button class="button submit-step" type="submit" hidden>Submit Property for Further Evaluation</button>
            </div>
            <p id="evaluation-status" class="form-note" role="alert" aria-live="assertive" hidden></p>
          </form>
        </div>
      </section>
    </main>
    <dialog class="submission-dialog" id="submission-dialog" aria-labelledby="submission-title" aria-describedby="submission-message">
      <p class="eyebrow">GREAT LAND PH</p><h2 id="submission-title">Thank you!</h2><p id="submission-message">Your information has been received.</p>
      <button class="button" type="button" id="close-submission-dialog">Close</button>
    </dialog>
    <footer>
      <div class="wrap">
        <div class="footer-row">
          <img class="footer-brand" src="{{ asset('images/Great-Logo.png') }}" alt="GREAT Land PH" />
          <nav class="footer-links" aria-label="Footer navigation">
            <a href="{{ route('home') }}#home">{{ __('home.nav_home') }}</a>
            <a href="{{ route('home') }}#about">{{ __('home.nav_footer_about') }}</a>
            <a href="{{ route('home') }}#properties">{{ __('home.nav_footer_properties') }}</a>
            <a href="{{ route('home') }}#contact">{{ __('home.nav_footer_contact') }}</a>
          </nav>
        </div>
        <div class="copyright">
          <span>{{ __('home.footer_copyright') }}</span>
          <p>{{ __('home.footer_disclaimer') }}</p>
        </div>
      </div>
    </footer>
    <script>
      const evaluationForm = document.getElementById("evaluation-form");
      const evaluationSteps = Array.from(evaluationForm.querySelectorAll(".form-step"));
      const stepCount = document.getElementById("step-count");
      const previousButton = evaluationForm.querySelector(".previous-step");
      const nextButton = evaluationForm.querySelector(".next-step");
      const submitButton = evaluationForm.querySelector(".submit-step");
      const evaluationStatus = document.getElementById("evaluation-status");
      const submissionDialog = document.getElementById("submission-dialog");
      const submissionMessage = document.getElementById("submission-message");
      let currentStep = 0;

      function showStep(index) {
        currentStep = index;
        evaluationSteps.forEach((step, stepIndex) => step.classList.toggle("active", stepIndex === currentStep));
        stepCount.textContent = `Step ${currentStep + 1} of ${evaluationSteps.length} · ${evaluationSteps[currentStep].dataset.stepTitle}`;
        previousButton.hidden = currentStep === 0;
        nextButton.hidden = currentStep === evaluationSteps.length - 1;
        submitButton.hidden = currentStep !== evaluationSteps.length - 1;
      }

      function validateCurrentStep() {
        const fields = Array.from(evaluationSteps[currentStep].querySelectorAll("input, select, textarea"));
        const invalidField = fields.find((field) => !field.checkValidity());
        if (invalidField) {
          invalidField.reportValidity();
          return false;
        }
        return true;
      }

      nextButton.addEventListener("click", () => {
        if (!validateCurrentStep()) return;
        showStep(currentStep + 1);
        evaluationForm.scrollIntoView({ behavior: "smooth", block: "start" });
      });
      previousButton.addEventListener("click", () => {
        showStep(currentStep - 1);
        evaluationForm.scrollIntoView({ behavior: "smooth", block: "start" });
      });
      document.getElementById("close-submission-dialog").addEventListener("click", () => submissionDialog.close());

      evaluationForm.addEventListener("submit", async (event) => {
        event.preventDefault();
        if (!validateCurrentStep()) return;
        submitButton.disabled = true;
        submitButton.textContent = "Submitting…";
        evaluationStatus.hidden = true;
        try {
          const response = await fetch(evaluationForm.action, {
            method: "POST",
            body: new FormData(evaluationForm),
            headers: { Accept: "application/json" },
            credentials: "same-origin",
          });
          const result = await response.json().catch(() => ({}));
          if (!response.ok || !result.success) {
            const validationMessage = Object.values(result.errors || {}).flat().join(" ");
            throw new Error(validationMessage || result.message || "We could not save your information. Please try again.");
          }
          submissionMessage.textContent = result.message;
          evaluationForm.reset();
          showStep(0);
          submissionDialog.showModal();
        } catch (error) {
          evaluationStatus.textContent = error.message || "We could not save your information. Please try again.";
          evaluationStatus.hidden = false;
        } finally {
          submitButton.disabled = false;
          submitButton.textContent = "Submit Property for Further Evaluation";
        }
      });
    </script>
  </body>
</html>
