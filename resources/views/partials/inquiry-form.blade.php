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
                Next
              </button>
              <button class="button submit-step" type="submit" hidden>
                Submit Property Inquiry
              </button>
            </div>
            <p class="form-note">
              GREAT LAND PH will review your inquiry and contact you using the details
              provided.
            </p>
            <p id="inquiry-status" class="form-note" role="alert" aria-live="assertive" hidden></p>
          </form>