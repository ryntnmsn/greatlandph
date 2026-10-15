<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#12112f" />
    <meta name="description" content="We buy land in General Santos City and move quickly. Tell us about your property." />
    <title>We Buy Land Quickly | General Santos City</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body style="--hero-image: url('{{ asset('images/bg-hero.jpg') }}')">

    <header>
      <div class="wrap nav">
        <a class="brand" href="#home" aria-label="Home">
          <img class="brand-logo" src="{{ asset('images/Great-Logo.png') }}" alt="GREAT Land PH" />
        </a>
        <nav class="nav-links" aria-label="Main navigation">
          <a href="#about">About</a><a href="#properties">What We Buy</a
          ><a href="#process">Our Process</a
          ><a class="nav-cta" href="#contact"
            >Contact Us <span class="arrow">↗</span></a
          >
        </nav>
      </div>
    </header>
    <main>
      <section class="hero" id="home">
        <div class="wrap">
          <div class="hero-content">
            <div class="eyebrow">Pagpalit og Yuta · General Santos City</div>
            <h1>Yuta Nimo, Atong Hisgotan! Presyo Nimo, Atong Sabutan!</h1>
            <p class="hero-copy">
              Kinahanglan ba nimo ibaligya dayon ang imong yuta? Mopalit mi og
              yuta sa General Santos City ug paningkamotan namo nga mahimong
              paspas, sayon, ug hapsay ang proseso sa pagbaligya. Ipaambit lang
              kanamo ang pipila ka detalye bahin sa imong yuta ug sultihi kami
              kung kanus-a nimo gusto nga mabaligya kini.
            </p>
            <div class="hero-actions">
              <a class="button button-dark" href="#contact"
                >Sell Your Land Fast <span class="arrow">↗</span></a
              ><a class="button button-outline" href="#contact"
                >Contact Us <span class="arrow">→</span></a
              >
            </div>
            <div class="hero-note">
              Kinahanglan ba nimo mabaligya dayon ang imong yuta? Sugdan na
              nato!
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
            /><span class="image-caption">Rooted in General Santos City</span>
          </div>
          <div class="intro-copy">
            <h2>Kinahanglan ba nimo ibaligya dayon ang imong yuta?</h2>
            <p class="lead">
              Direkta kaming mopalit og yuta gikan sa mga tag-iya nga gustong
              makabaligya dayon sa paspas ug sayon nga paagi.
            </p>
            <p>
              Mopalit mi og yuta sa General Santos City. Kung gusto nimo nga
              mabaligya dayon ang imong yuta, kontaka kami ug ihatag ang
              lokasyon, gidak-on sa lote, ug imong gipangayong presyo. Atong
              susihon ang mga detalye ug motubag kami kanimo sa labing dali nga
              panahon.
            </p>
            <p>
              Bakante nga lote man, yutang pang-agrikultura, yutang residensyal,
              o yuta nga nahimutang sa nag-uswag nga lugar, andam kaming
              makig-istorya sa mga tag-iya sa yuta ug mangita og kasabutan nga
              mapuslan sa duha ka partido.
            </p>
            <p>
              Gihatagan namo og dakong bili ang pagkamatinud-anon, klaro ug
              diretsong komunikasyon, ug propesyonal nga pagdumala sa tibuok
              proseso sa pagpalit sa yuta.
            </p>
            <div class="intro-signoff">
              Yano ra ang among tumong: himoon nga sayon sabton, kombinyente, ug
              mapuslanon ang pagbaligya sa imong yuta.
            </div>
          </div>
        </div>
      </section>
      <section class="section looking" id="properties">
        <div class="wrap">
          <div class="section-head">
            <div class="eyebrow">Mopalit Mi og Yuta</div>
            <h2>
              Mopalit Mi og Yuta. Kinahanglan Nimo ang Paspas nga Pagbaligya?
            </h2>
            <p>
              Mopalit mi og bakanteng lote, yutang pang-agrikultura, yutang
              residensyal, ug yuta nga angay alang sa kalamboan sa General
              Santos City ug sa mga kasikbit nga lugar. Kinahanglan nimo
              mabaligya dayon ang imong yuta? Kontaka kami karon!
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
                <span class="count">01 / RESIDENSYAL</span>
                <h3>Mga Lote nga Residensyal</h3>
                <p>
                  Mga bakanteng lote ug yutang residensyal nga angay alang sa
                  umaabot nga pagpabalay ug pagpalambo sa mga propiedad.
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
                <span class="count">02 / AGRICULTURAL</span>
                <h3>YUTANG PANG-AGRIKULTURA</h3>
                <p>
                  Mga yutang pang-agrikultura ug dagkong luna sa yuta sulod ug
                  palibot sa General Santos City.
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
                <span class="count">03 / YUTANG KOMERSYAL</span>
                <h3>Yuta nga Angay Alang sa Pagpalambo</h3>
                <p>
                  Mga yuta nga adunay potensyal alang sa komersyal nga paggamit,
                  umaabot nga pagpalambo, o dugayng pagpamuhunan.
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
                <span class="count">04 / OTHER</span>
                <h3>Mga Lote nga Angay Alang sa Pagpalambo</h3>
                <p>
                  Aduna kay yuta nga wala naapil niini nga mga kategorya?
                  Ipaambit kanamo ang mga detalye bahin sa imong propiedad.
                </p>
              </div>
            </article>
          </div>
        </div>
      </section>
      <section class="section why">
        <div class="wrap">
          <div class="section-head">
            <div class="eyebrow">Ngano nga Makigtransaksyon Kanamo?</div>
            <h2>Sayon ug klaro nga paagi sa pagbaligya sa imong yuta.</h2>
            <p>
              Among tumong nga himoon nga klaro, propesyonal, ug hapsay ang
              proseso, samtang gikonsiderar ang imong mga tumong ug
              panginahanglan sa matag lakang.
            </p>
          </div>
          <div class="benefits">
            <article class="benefit">
              <span class="benefit-number">01</span>
              <h3>Direkta Mi nga Mopalit</h3>
              <p>
                Direkta kang makig-istorya sa mga mopalit sa imong yuta. Walay
                proseso sa paglista sa propiedad o tigpataliwala.
              </p>
            </article>
            <article class="benefit">
              <span class="benefit-number">02</span>
              <h3>Paspas nga Pagsusi</h3>
              <p>
                Ihatag lang ang lokasyon sa yuta, gidak-on sa lote, ug imong
                gitinguhang panahon sa pagbaligya. Among susihon dayon ang mga
                detalye.
              </p>
            </article>
            <article class="benefit">
              <span class="benefit-number">03</span>
              <h3>Paspas nga Aksyon</h3>
              <p>
                Siguruhon namo nga klaro ang komunikasyon ug paningkamotan namo
                nga mapadali ang proseso sa pagbaligya kutob sa mahimo.
              </p>
            </article>
            <article class="benefit">
              <span class="benefit-number">04</span>
              <h3>Yano ug Klaro nga Pagbaligya</h3>
              <p>
                Atong hisgotan ang direktang tanyag sa pagpalit ug mga kondisyon
                nga angay sa imong yuta ug sa imong mga panginahanglan.
              </p>
            </article>
          </div>
        </div>
      </section>
      <section class="section" id="process">
        <div class="wrap process-grid">
          <div class="process-intro">
            <div class="eyebrow">Giunsa Paglihok ang Proseso</div>
            <h2>
              Kinahanglan Nimo Mabaligya Dayon ang Imong Yuta? Sugdi Dinhi.
            </h2>
            <p>
              Sugdi pinaagi sa paghatag og pipila ka detalye bahin sa imong
              yuta. Kung angay kini sa among gipangita, atong hisgotan ang sunod
              nga mga lakang aron hapsay ug sayon nga mapadayon ang proseso sa
              pagbaligya.
            </p>
            <a
              class="button process-button"
              href="#contact"
              >Ipaambit Kanamo ang mga Detalye sa Imong Yuta
              <span class="arrow">↗</span></a
            >
          </div>
          <div class="steps">
            <article class="step">
              <div class="step-no">01</div>
              <div>
                <h3>Ipadala ang mga Detalye sa Imong Yuta</h3>
                <p>
                  Ipaambit kanamo ang lokasyon sa imong yuta, gibana-banang
                  gidak-on niini, ug ang imong gipangayong presyo, kon aduna na.
                </p>
              </div>
            </article>
            <article class="step">
              <div class="step-no">02</div>
              <div>
                <h3>Paspas nga Pagsusi</h3>
                <p>
                  Among susihon ang mga impormasyon nga imong gihatag ug
                  tan-awon kung ang imong yuta angay sa among gipangita nga mga
                  propiedad nga paliton.
                </p>
              </div>
            </article>
            <article class="step">
              <div class="step-no">03</div>
              <div>
                <h3>Hisgutan ang Tanyag sa Pagpalit</h3>
                <p>
                  Kung ang imong yuta angay sa among panginahanglan, atong
                  hisgotan ang tanyag nga presyo, mga kondisyon, pag-verify sa
                  mga detalye, ug ang sunod nga mga lakang.
                </p>
              </div>
            </article>
            <article class="step">
              <div class="step-no">04</div>
              <div>
                <h3>Tapuson ang Transaksyon</h3>
                <p>
                  Kung magkauyon ang duha ka partido ug makapasar sa legal nga
                  pagsusi ug beripikasyon sa titulo sa yuta, ipadayon nato ang
                  gikinahanglang dokumentasyon ug mga pamaagi aron makompleto
                  ang pagbaligya.
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
            <div class="eyebrow">Among Lugar nga Ginatutokan</div>
            <h2>Mopalit Mi og Yuta sa General Santos City</h2>
            <p>
              Ang among pangunang tumong mao ang pagpalit og yuta ug propiedad
              sa General Santos City, South Cotabato. Interesado kami sa mga
              oportunidad sa nagkalainlaing barangay ug kasikbit nga mga lugar,
              depende sa lokasyon ug sa pagkaangay niini alang sa pagpamuhunan.
            </p>
            <span class="local-tag">General Santos City · South Cotabato</span>
          </div>
        </div>
      </section>
      <section class="cta">
        <div class="wrap cta-row">
          <div>
            <h2>Kinahanglan Nimo Mabaligya Dayon ang Imong Yuta?</h2>
            <p>
              Atong hisgotan ang imong propiedad. Ipaambit kanamo ang pipila ka
              detalye bahin sa imong yuta, ug kontakon ka namo aron hisgotan ang
              posibilidad sa pagpalit niini. Wala kay obligasyon nga ipadayon
              ang pagbaligya human sa unang pagsusi.
            </p>
          </div>
          <a class="button cta-button" href="#contact"
            >Pagkuha og Paspas nga Tanyag sa Pagpalit sa Yuta

            <span class="arrow">↗</span></a
          >
        </div>
      </section>
      <section class="section contact" id="contact">
        <div class="wrap contact-grid">
          <div class="contact-copy">
            <div class="eyebrow">Kontaka Kami</div>
            <h2>Mopalit Mi og Yuta sa Paspas nga Paagi.</h2>
            <p>
              Kinahanglan nimo mabaligya dayon ang imong yuta sa General Santos
              City? Ipadala kanamo ang mga detalye sa imong yuta ug ang imong
              gitinguhang panahon sa pagbaligya. Direkta kaming mopalit og yuta
              ug motubag kanimo sa labing dali nga panahon.
            </p>
            <div class="contact-detail">
              <div class="detail">
                <span class="detail-label">Email</span
                ><span class="detail-value"><a href="mailto:"></a></span>
              </div>
              <div class="detail">
                <span class="detail-label">Phone</span
                ><span class="detail-value"></span>
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
            <div class="form-title">Seller Property Inquiry</div>
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
            <a href="#home">Home</a><a href="#about">About Us</a
            ><a href="#properties">Properties We Buy</a
            ><a href="#contact">Contact</a>
          </nav>
        </div>
        <div class="copyright">
          <span>© 2026 . All rights reserved.</span>
          <p>
            Ang tanang pagpalit sa propiedad ipailalom sa pagsusi, pag-verify sa
            mga dokumento ug titulo sa yuta, ug mga kondisyon nga gikasabutan sa
            duha ka partido.
          </p>
        </div>
      </div>
    </footer>
    <script>
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
