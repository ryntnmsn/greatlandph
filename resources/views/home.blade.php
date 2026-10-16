<!doctype html>
<html lang="{{ app()->getLocale() === 'bisaya' ? 'ceb' : 'en' }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#12112f" />
    <meta name="description" content="{{ __('home.meta_description') }}" />
    <title>{{ __('home.title') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body style="--hero-image: url('{{ asset('images/bg-hero.jpg') }}')">

    <header>
      <div class="wrap nav">
        <a class="brand" href="#home" aria-label="Home">
          <img class="brand-logo" src="{{ asset('images/Great-Logo.png') }}" alt="GREAT Land PH" />
        </a>
        <nav class="nav-links" aria-label="Main navigation">
          <a href="#about">{{ __('home.nav_about') }}</a>
          <a href="#properties">{{ __('home.nav_properties') }}</a>
          <a href="#process">{{ __('home.nav_process') }}</a>
          <label class="language-picker">
            <select aria-label="{{ __('home.language_label') }}" name="language" id="language-select">
              <option style="color:#000" value="bisaya" @selected(app()->getLocale() === 'bisaya')>Bisaya</option>
              <option style="color:#000" value="en" @selected(app()->getLocale() === 'en')>English</option>
            </select>
          </label>
          <a class="nav-cta" href="#contact">{{ __('home.nav_contact') }} <span class="arrow">↗</span></a>
          
        </nav>
      </div>
    </header>
    <main>
      <section class="hero" id="home">
        <div class="wrap">
          <div class="hero-content">
            <div class="eyebrow">{{ __('home.hero_eyebrow') }}</div>
            <h1>{{ __('home.hero_title') }}</h1>
            <p class="hero-copy">
              {{ __('home.hero_copy') }}
            </p>
            <div class="hero-actions">
              <a class="button button-dark" href="#contact"
                >{{ __('home.sell_fast') }} <span class="arrow">↗</span></a
              ><a class="button button-outline" href="#contact"
                >{{ __('home.hero_contact') }} <span class="arrow">→</span></a
              >
            </div>
            <div class="hero-note">
              {{ __('home.hero_note') }}
            </div>
          </div>
          <div class="hero-stamp">South Cotabato · Philippines</div>
        </div>
      </section>
      <section class="section" id="about">
        <div class="wrap intro-grid">
          <div class="intro-image">
            <img
              src="https://images.openai.com/static-rsc-4/RqQ0RlImTYTHiEQUcSFlUl9sph6ybzc1Pbko8xC9b0QFFQ0HBwi1-rBLIdTcsuIV-Xu8v-gl3u1-sSwbEBUApqaoS_5Bc6vzEwEDGNmLp8S-BY44KcQzb7GiEaeGtLYhHIdO-GoWNMxXqP9HpThM8VizKHZgY957JLWyTCWHudo?purpose=inline"
              alt="Property and land in General Santos City"
              loading="lazy"
            /><span class="image-caption">{{ __('home.about_caption') }}</span>
          </div>
          <div class="intro-copy">
            <h2>{{ __('home.about_title') }}</h2>
            <p class="lead">
              {{ __('home.about_lead') }}
            </p>
            <p>
              {{ __('home.about_copy_1') }}
            </p>
            <p>
              {{ __('home.about_copy_2') }}
            </p>
            <p>
              {{ __('home.about_copy_3') }}
            </p>
            <div class="intro-signoff">
              {{ __('home.about_signoff') }}
            </div>
          </div>
        </div>
      </section>
      <section class="section looking" id="properties">
        <div class="wrap">
          <div class="section-head">
            <div class="eyebrow">{{ __('home.properties_eyebrow') }}</div>
            <h2>{{ __('home.properties_title') }}</h2>
            <p>
              {{ __('home.properties_copy') }}
            </p>
          </div>
          <div class="cards">
            <article class="card">
              <div class="card-image">
                <img
                  src="https://images.openai.com/static-rsc-4/yRZXemptdxkgBT_h-piEZOE-WmRzpDrGTRIJmFSwIXfFcW4QVYGHLjlwvOLYPiEKtGJjcJ-lpvO5_zW9zmwDZ_VxegAXykHXiDXSURQlZ4ZgrYVOCx6ilzLrThTMLByxbfebthL0EpsdW-mw4FNyR73b8tIOMIiPMJoGjKd3GbE?purpose=inline"
                  alt="Residential lot"
                  loading="lazy"
                />
              </div>
              <div class="card-body">
                <span class="count">{{ __('home.count_residential') }}</span>
                <h3>{{ __('home.residential_title') }}</h3>
                <p>
                  {{ __('home.residential_copy') }}
                </p>
              </div>
            </article>
            <article class="card">
              <div class="card-image">
                <img
                  src="https://images.openai.com/static-rsc-4/NtiMET2wpw4n_jS_p5CgPD0yZB4zOgVhuN2s17BR2CgXaE23QsqKeANqTZCKty26hLiJuBLA03hmYalFKCNSZzJs1F85JJJBoANZRv8UPKnUWbqBIkZQthpbjPhQFlGkgmdD6WsyemXbX2TOMJGy-ex4d5FQAUw-DRSdOEXk48BBrUhBqcm6RJAD1crdEXpw?purpose=inline"
                  alt="Agricultural landscape near General Santos"
                  loading="lazy"
                />
              </div>
              <div class="card-body">
                <span class="count">{{ __('home.count_agricultural') }}</span>
                <h3>{{ __('home.agricultural_title') }}</h3>
                <p>
                  {{ __('home.agricultural_copy') }}
                </p>
              </div>
            </article>
            <article class="card">
              <div class="card-image">
                <img
                  src="https://images.openai.com/static-rsc-4/eeqWypNnAd8750Z90dvRZ2NGAirNdtH-j8L2ptvRi1RYt9GQWqT_nfz7trhm5Pvz7JQkH5LN2qs_xSPQvh-0Kom0Q6xEW0r9K6O8XNYOgVtXONpGmKUethIdXoGsTjjJsdZ7n3NYokUr-OOAD-I6-ZxhCMsJ9RUJhmi9uPfJj9M?purpose=inline"
                  alt="Land for commercial development"
                  loading="lazy"
                />
              </div>
              <div class="card-body">
                <span class="count">{{ __('home.count_commercial') }}</span>
                <h3>{{ __('home.commercial_title') }}</h3>
                <p>
                  {{ __('home.commercial_copy') }}
                </p>
              </div>
            </article>
            <article class="card">
              <div class="card-image">
                <img
                  src="https://images.openai.com/static-rsc-4/KC324HGgs7NKkT0s0tq878RxV2vuyKJLvDZHzs91gY--tZVAPwW6TyA8OE98hh1i2cKxyDvry_mHMcYDLsaCpgLV4o1591QoQrY3qzC9Yv9HR-Yn4Lb7uPGrDlJLsezcIBioB2MvMoa_xF6-rUkHNVw96Bos04k_c7mFUOmA3lY?purpose=inline"
                  alt="House and property opportunity"
                  loading="lazy"
                />
              </div>
              <div class="card-body">
                <span class="count">{{ __('home.count_other') }}</span>
                <h3>{{ __('home.other_title') }}</h3>
                <p>
                  {{ __('home.other_copy') }}
                </p>
              </div>
            </article>
          </div>
        </div>
      </section>
      <section class="section why">
        <div class="wrap">
          <div class="section-head">
            <div class="eyebrow">{{ __('home.why_eyebrow') }}</div>
            <h2>{{ __('home.why_title') }}</h2>
            <p>
              {{ __('home.why_copy') }}
            </p>
          </div>
          <div class="benefits">
            <article class="benefit">
              <span class="benefit-number">01</span>
              <h3>{{ __('home.benefit_1_title') }}</h3>
              <p>
                {{ __('home.benefit_1_copy') }}
              </p>
            </article>
            <article class="benefit">
              <span class="benefit-number">02</span>
              <h3>{{ __('home.benefit_2_title') }}</h3>
              <p>
                {{ __('home.benefit_2_copy') }}
              </p>
            </article>
            <article class="benefit">
              <span class="benefit-number">03</span>
              <h3>{{ __('home.benefit_3_title') }}</h3>
              <p>
                {{ __('home.benefit_3_copy') }}
              </p>
            </article>
            <article class="benefit">
              <span class="benefit-number">04</span>
              <h3>{{ __('home.benefit_4_title') }}</h3>
              <p>
                {{ __('home.benefit_4_copy') }}
              </p>
            </article>
          </div>
        </div>
      </section>
      <section class="section" id="process">
        <div class="wrap process-grid">
          <div class="process-intro">
            <div class="eyebrow">{{ __('home.process_eyebrow') }}</div>
            <h2>{{ __('home.process_title') }}</h2>
            <p>
              {{ __('home.process_copy') }}
            </p>
            <a
              class="button process-button"
              href="#contact"
              >{{ __('home.process_cta') }}
              <span class="arrow">↗</span></a
            >
          </div>
          <div class="steps">
            <article class="step">
              <div class="step-no">01</div>
              <div>
                <h3>{{ __('home.step_1_title') }}</h3>
                <p>
                  {{ __('home.step_1_copy') }}
                </p>
              </div>
            </article>
            <article class="step">
              <div class="step-no">02</div>
              <div>
                <h3>{{ __('home.step_2_title') }}</h3>
                <p>
                  {{ __('home.step_2_copy') }}
                </p>
              </div>
            </article>
            <article class="step">
              <div class="step-no">03</div>
              <div>
                <h3>{{ __('home.step_3_title') }}</h3>
                <p>
                  {{ __('home.step_3_copy') }}
                </p>
              </div>
            </article>
            <article class="step">
              <div class="step-no">04</div>
              <div>
                <h3>{{ __('home.step_4_title') }}</h3>
                <p>
                  {{ __('home.step_4_copy') }}
                </p>
              </div>
            </article>
          </div>
        </div>
      </section>
      <section class="local">
        <div class="local-grid">
          <div class="local-photo">
            <img
              src="https://images.openai.com/static-rsc-4/tHhI2-o8oX6i7GPjRj9edMdht90L-VgnKhbAGR_bj9-PG-7bFQil7vjL2rnbqPhKcZ-hb1UeN0MQOKEIOlSTtO0A4gtGD0TTBK2d60f_TBsm2ozHPIxYXi2ewEBqXw4N2PMsboQWnrlFcghkeAdLUUJpIMZGFChn63JorsnO1C4R1CAdlc808G24pAnw7R74?purpose=inline"
              alt="Mindanao, Philippines"
              loading="lazy"
            />
          </div>
          <div class="local-copy">
            <div class="eyebrow">{{ __('home.local_eyebrow') }}</div>
            <h2>{{ __('home.local_title') }}</h2>
            <p>
              {{ __('home.local_copy') }}
            </p>
            <span class="local-tag">General Santos City · South Cotabato</span>
          </div>
        </div>
      </section>
      <section class="cta">
        <div class="wrap cta-row">
          <div>
            <h2>{{ __('home.cta_title') }}</h2>
            <p>
              {{ __('home.cta_copy') }}
            </p>
          </div>
          <a style="background:#b89e31" class="button cta-button" href="#contact"
            >{{ __('home.cta_button') }}

            <span class="arrow">↗</span></a
          >
        </div>
      </section>
      <section class="section contact" id="contact">
        <div class="wrap contact-grid">
          <div class="contact-copy">
            <div class="eyebrow">{{ __('home.contact_eyebrow') }}</div>
            <h2>{{ __('home.contact_title') }}</h2>
            <p>
              {{ __('home.contact_copy') }}
            </p>
            <div class="contact-detail">
              <div class="detail">
                <span class="detail-label">Email</span
                ><span class="detail-value"><a href="mailto:info@greatlandph.com">info@greatlandph.com</a></span>
              </div>
              <div class="detail">
                <span class="detail-label">Phone</span
                ><span class="detail-value">+63952 651 1976</span>
              </div>
              <div class="detail">
                <span class="detail-label">Location</span
                ><span class="detail-value"
                  >General Santos City, Philippines</span
                >
              </div>
            </div>
          </div>
          <form
            class="form-card"
            id="inquiry-form"
            action="{{ route('inquiries.store') }}"
            method="post"
            enctype="multipart/form-data"
          >
            @csrf
            <div class="form-title">{{ __('home.form_title') }}</div>
            <p class="step-count" id="step-count" aria-live="polite">
              Step 1 of 5 · Seller Information
            </p>
            <div class="field website-field" aria-hidden="true">
              <label for="website">Leave this field empty</label
              ><input
                id="website"
                name="website"
                tabindex="-1"
                autocomplete="off"
              />
            </div>
            <div class="form-grid">
              <fieldset
                class="form-section form-step active"
                data-step-title="Seller Information"
              >
                <legend>Seller Information</legend>
                <div class="form-grid">
                  <div class="field">
                    <label for="name"
                      >Full Name <span aria-hidden="true">*</span></label
                    ><input
                      id="name"
                      name="name"
                      autocomplete="name"
                      required
                    />
                  </div>
                  <div class="field">
                    <label for="phone"
                      >Contact number <span aria-hidden="true">*</span></label
                    ><input
                      id="phone"
                      name="phone"
                      type="tel"
                      autocomplete="tel"
                      required
                    />
                  </div>
                  <div class="field">
                    <label for="email">Email (optional)</label
                    ><input
                      id="email"
                      name="email"
                      type="email"
                      autocomplete="email"
                    />
                  </div>
                  <div class="field full">
                    <label for="relationship"
                      >What is your relationship to the property?
                      <span aria-hidden="true">*</span></label
                    ><select id="relationship" name="relationship" required>
                      <option value="" disabled selected>
                        Select your relationship
                      </option>
                      <option>I am the registered owner.</option>
                      <option>
                        I am an authorized representative of the owner.
                      </option>
                      <option>
                        I am an heir or family member of the owner.
                      </option>
                      <option>I am a real estate broker or agent.</option>
                      <option>Other.</option>
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset
                class="form-section form-step"
                data-step-title="Basic Property Information"
              >
                <legend>Basic Property Information</legend>
                <div class="form-grid">
                  <div class="field full">
                    <label for="location"
                      >Property Location
                      <span aria-hidden="true">*</span></label
                    ><input id="location" name="location" required />
                  </div>
                  <div class="field">
                    <label for="barangay"
                      >Barangay <span aria-hidden="true">*</span></label
                    ><input id="barangay" name="barangay" required />
                  </div>
                  <div class="field">
                    <label for="city"
                      >City or Municipality
                      <span aria-hidden="true">*</span></label
                    ><input id="city" name="city" required />
                  </div>
                  <div class="field">
                    <label for="province"
                      >Province <span aria-hidden="true">*</span></label
                    ><input id="province" name="province" required />
                  </div>
                  <div class="field full">
                    <label for="property-type"
                      >What type of property are you selling?
                      <span aria-hidden="true">*</span></label
                    ><select id="property-type" name="property_type" required>
                      <option value="" disabled selected>
                        Select property type
                      </option>
                      <option>Residential land</option>
                      <option>Agricultural land</option>
                      <option>Commercial land</option>
                      <option>Industrial land</option>
                      <option>Land with an existing house or building</option>
                      <option>Other</option>
                    </select>
                  </div>
                  <div class="field">
                    <label for="area"
                      >What is the total land area?
                      <span aria-hidden="true">*</span></label
                    ><input
                      id="area"
                      name="area"
                      placeholder="e.g. 500 sqm or 2 hectares"
                      required
                    />
                  </div>
                  <div class="field full">
                    <label for="title-type"
                      >What type of title or ownership document do you
                      have?</label
                    >
                    <select id="title-type" name="title_type">
                      <option value="" selected>Select a document type</option>
                      <option>Transfer Certificate of Title (TCT)</option>
                      <option>Original Certificate of Title (OCT)</option>
                      <option>Condominium Certificate of Title (CCT)</option>
                      <option>
                        Certificate of Land Ownership Award (CLOA)
                      </option>
                      <option>Emancipation Patent (EP)</option>
                      <option>Tax Declaration only</option>
                      <option>Deed of Sale or other transfer document</option>
                      <option>
                        Inherited property with the title not yet transferred
                      </option>
                      <option>
                        Ancestral land or ancestral domain document
                      </option>
                      <option>Other documents</option>
                      <option>No documents available</option>
                      <option>Not sure</option>
                    </select>
                  </div>
                  <div class="field full">
                    <label for="occupancy"
                      >Is the property currently occupied?</label
                    ><select id="occupancy" name="occupancy">
                      <option value="" disabled selected>
                        Select an option
                      </option>
                      <option>No, it is vacant.</option>
                      <option>Yes, by the owner or family.</option>
                      <option>Yes, by tenants.</option>
                      <option>Yes, by other occupants.</option>
                      <option>Other.</option>
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset
                class="form-section form-step"
                data-step-title="Selling Price and Timeline"
              >
                <legend>Selling Price and Timeline</legend>
                <div class="form-grid">
                  <div class="field">
                    <label for="price"
                      >What is your asking price?
                      <span aria-hidden="true">*</span></label
                    ><input id="price" name="price" placeholder="₱" required />
                  </div>
                  <div class="field full">
                    <label for="negotiable"
                      >Is your asking price negotiable?</label
                    ><select id="negotiable" name="negotiable">
                      <option value="" disabled selected>
                        Select an option
                      </option>
                      <option>Yes</option>
                      <option>No</option>
                      <option>Open to discussion</option>
                    </select>
                  </div>
                  <div class="field full">
                    <label for="timeline"
                      >When are you planning to sell the property?</label
                    ><select id="timeline" name="timeline">
                      <option value="" disabled selected>
                        Select a timeline
                      </option>
                      <option>As soon as possible</option>
                      <option>Within 1 to 3 months</option>
                      <option>Within 3 to 6 months</option>
                      <option>More than 6 months from now</option>
                      <option>No specific timeline</option>
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset
                class="form-section form-step"
                data-step-title="Additional Information"
              >
                <legend>Additional Information</legend>
                <div class="form-grid">
                  <div class="field full">
                    <label for="photos"
                      >Please upload photos of the property. (Optional)</label
                    ><span class="field-hint"
                      >You may upload available photos showing the land, access
                      road, or existing structures.</span
                    ><input
                      id="photos"
                      name="photos[]"
                      type="file"
                      accept="image/*"
                      multiple
                      aria-describedby="photos-note"
                    /><small id="photos-note" class="form-note"
                      >Upload up to 10 image files, 5 MB each.</small
                    >
                  </div>
                  <div class="field full">
                    <label for="details"
                      >Additional Information (Is there anything else GREAT
                      should know about the property?)</label
                    ><textarea id="details" name="details"></textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset
                class="form-section form-step"
                data-step-title="Confirmation"
              >
                <legend>Confirmation</legend>
                <div class="confirmation-list">
                  <label class="option"
                    ><input
                      type="checkbox"
                      name="accurate"
                      value="1"
                      required
                    />I confirm that the information I provided is accurate to
                    the best of my knowledge.</label
                  >
                  <label class="option"
                    ><input
                      type="checkbox"
                      name="authorized"
                      value="1"
                      required
                    />I am authorized to submit this inquiry and have a
                    legitimate basis to provide the information.</label
                  >
                  <label class="option"
                    ><input
                      type="checkbox"
                      name="consent"
                      value="1"
                      required
                    />I consent to GREAT contacting me regarding this property
                    inquiry.</label
                  >
                </div>
              </fieldset>
            </div>
            <div class="step-controls">
              <button class="button previous-step" type="button" hidden>
                Previous
              </button>
              <button class="button next-step" type="button">
                Next <span class="arrow">→</span>
              </button>
              <button class="button submit-step" type="submit" hidden>
                Submit Property Inquiry <span class="arrow">↗</span>
              </button>
            </div>
            <p class="form-note">
              GREAT LAND PH will review your inquiry and contact you using the details
              provided.
            </p>
            <p id="inquiry-status" class="form-note" role="alert" aria-live="assertive" hidden></p>
          </form>
        </div>
      </section>
    </main>
    <dialog class="submission-dialog" id="submission-dialog" aria-labelledby="submission-title" aria-describedby="submission-message">
      <p class="eyebrow">GREAT Land PH</p>
      <h2 id="submission-title">Thank you!</h2>
      <p id="submission-message">Your inquiry has been received.</p>
      <button class="button" type="button" id="close-submission-dialog">Close</button>
    </dialog>
    <footer>
      <div class="wrap">
        <div class="footer-row">
          <img class="footer-brand" src="{{ asset('images/Great-Logo.png') }}" alt="GREAT Land PH" />
          <nav class="footer-links" aria-label="Footer navigation">
            <a href="#home">{{ __('home.nav_home') }}</a><a href="#about">{{ __('home.nav_footer_about') }}</a
            ><a href="#properties">{{ __('home.nav_footer_properties') }}</a
            ><a href="#contact">{{ __('home.nav_footer_contact') }}</a>
          </nav>
        </div>
        <div class="copyright">
          <span>{{ __('home.footer_copyright') }}</span>
          <p>
            {{ __('home.footer_disclaimer') }}
          </p>
        </div>
      </div>
    </footer>
    <script>
      document.getElementById("language-select").addEventListener("change", (event) => {
        const url = new URL(window.location.href);
        url.searchParams.set("lang", event.target.value);
        window.location.assign(url);
      });

      const inquiryForm = document.getElementById("inquiry-form");
      const formSteps = Array.from(inquiryForm.querySelectorAll(".form-step"));
      const stepCount = document.getElementById("step-count");
      const previousButton = inquiryForm.querySelector(".previous-step");
      const nextButton = inquiryForm.querySelector(".next-step");
      const submitButton = inquiryForm.querySelector(".submit-step");
      let currentStep = 0;

      function showStep(index) {
        currentStep = index;
        formSteps.forEach((step, stepIndex) => {
          step.classList.toggle("active", stepIndex === currentStep);
        });
        stepCount.textContent = `Step ${currentStep + 1} of ${formSteps.length} · ${formSteps[currentStep].dataset.stepTitle}`;
        previousButton.hidden = currentStep === 0;
        nextButton.hidden = currentStep === formSteps.length - 1;
        submitButton.hidden = currentStep !== formSteps.length - 1;
      }

      nextButton.addEventListener("click", () => {
        const currentFields = Array.from(
          formSteps[currentStep].querySelectorAll("input, select, textarea"),
        );
        const firstInvalid = currentFields.find(
          (field) => !field.checkValidity(),
        );
        if (firstInvalid) {
          firstInvalid.reportValidity();
          return;
        }
        showStep(currentStep + 1);
        inquiryForm.scrollIntoView({ behavior: "smooth", block: "start" });
      });

      previousButton.addEventListener("click", () => {
        showStep(currentStep - 1);
        inquiryForm.scrollIntoView({ behavior: "smooth", block: "start" });
      });

      const inquiryStatus = document.getElementById("inquiry-status");
      const submissionDialog = document.getElementById("submission-dialog");
      const submissionMessage = document.getElementById("submission-message");

      document
        .getElementById("close-submission-dialog")
        .addEventListener("click", () => submissionDialog.close());

      inquiryForm.addEventListener("submit", async (event) => {
        event.preventDefault();
        submitButton.disabled = true;
        submitButton.textContent = "Sending…";
        inquiryStatus.hidden = true;

        try {
          const response = await fetch(inquiryForm.action, {
            method: "POST",
            body: new FormData(inquiryForm),
            headers: { Accept: "application/json" },
            credentials: "same-origin",
          });
          const result = await response.json().catch(() => ({}));

          if (!response.ok || !result.success) {
            const validationMessage = Object.values(result.errors || {}).flat().join(" ");
            throw new Error(validationMessage || result.message || "We could not save your inquiry. Please try again.");
          }

          inquiryStatus.hidden = true;
          submissionMessage.textContent = result.message;
          inquiryForm.reset();
          showStep(0);
          submissionDialog.showModal();
        } catch (error) {
          inquiryStatus.textContent = error.message || "We could not save your inquiry. Please try again.";
          inquiryStatus.hidden = false;
        } finally {
          submitButton.disabled = false;
          submitButton.innerHTML = 'Submit Property Inquiry <span class="arrow">↗</span>';
        }
      });
    </script>
  
  </body>
</html>
