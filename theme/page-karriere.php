<?php
/**
 * Template for the Karriere / Jobs page (slug: karriere).
 * Contact cards pull values from the shared footer_contacts ACF option.
 */
get_header();
?>
  <section class="relounge-hero">
    <div class="relounge-hero__overlay"></div>

    <div class="container relounge-hero__container">


      <div class="relounge-hero__content">
        <div class="relounge-hero__bottom">
          <h1 class="relounge-hero__title">Deine Karriere bei Pneumafit</h1>
          <div class="relounge-hero__cta">
            <button data-popup class="hero__btn hero__btn--primary relounge-hero__btn">
              Jetzt Termin sichern
              <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M7.5 4.37512L10.625 7.50011L7.5 10.6251" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M0.625 0.625V4.99999C0.625 5.66303 0.888388 6.29891 1.35723 6.76774C1.82607 7.23658 2.46194 7.49997 3.12498 7.49997H10.6249" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
            <span class="relounge-hero__subtitle">weil Ihr Wohlbefinden nicht warten sollte</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-philosophy" data-aos="fade-up" data-aos-duration="900">

    <!-- 8 vertical lines, full height -->
    <div class="philosophy-lines" aria-hidden="true">
      <div class="philosophy-line l-1"></div>
      <div class="philosophy-line l-2"></div>
      <div class="philosophy-line l-3"></div>
      <div class="philosophy-line l-4"></div>
      <div class="philosophy-line l-5"></div>
      <div class="philosophy-line l-6"></div>
      <div class="philosophy-line l-7"></div>
      <div class="philosophy-line l-8"></div>
    </div>

    <!-- Main content: label left + content right -->
    <div class="philosophy-top">
      <div class="philosophy-wrapper">
        <span class="philosophy-label">
          Werde Teil von PneumaFit – wir freuen uns auf dich!
        </span>
        <span class="philosophy-descr">PneumaFit – Ihre Adresse für ganzheitliches Wohlbefinden. Unter der Leitung von Dimitri Foos, einem erfahrenen Physiotherapeuten und Gründer der Praxis in Leinfelden-Echterdingen, bieten wir ein umfassendes Angebot an Therapien für Körper und Geist. Unser Fokus liegt auf Physio-, Atem- und Sporttherapie, ergänzt durch exklusive Beauty- und Wellnessbehandlungen.</span>
      </div>
      <div class="philosophy-main">
        <h2 class="philosophy-title">Bei PneumaFit arbeitest du in einem herzlichen Team, das zusammenhält und Spaß an der Arbeit hat.</h2>
        <p class="philosophy-text">Wir geben dir die Möglichkeit, dich fachlich und persönlich weiterzuentwickeln – deine Ideen sind bei uns willkommen! Freu dich auf ein modernes Arbeitsumfeld, wertschätzende Chefs und Patienten, die deine Arbeit zu schätzen wissen.</p>
        <button data-popup class="philosophy-btn hero__btn">
          Schreiben Sie uns 
          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7.50024 4.37512L10.6253 7.50011L7.50024 10.6251" stroke="#657B8D" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M0.625 0.625V4.99999C0.625 5.66303 0.888388 6.29891 1.35723 6.76774C1.82607 7.23658 2.46194 7.49997 3.12498 7.49997H10.6249" stroke="#657B8D" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>
    </div>

    <!-- Bottom words positioned between the lines -->
    <div class="philosophy-words" aria-hidden="true">
      <!-- col 1: 296px — 2 words centered as group -->
      <div class="pw-group">
        <span class="p-word p-word--1">Ganzheitlichkeit</span>
        <span class="p-word p-word--2">Balance</span>
      </div>
      <div></div><!-- col 2: 178px spacer -->
      <!-- col 3: 296px — 1 word centered -->
      <span class="p-word p-word--3">Selbstregulation</span>
      <div></div><!-- col 4: 178px spacer -->
      <!-- col 5: 296px — 2 words centered as group -->
      <div class="pw-group">
        <span class="p-word p-word--4">Beweglichkeit</span>
        <span class="p-word p-word--5">Harmonie</span>
      </div>
      <div></div><!-- col 6: 178px spacer -->
      <div></div><!-- col 7: 296px empty (lines 7→8) -->
      <!-- col 8: remaining — 1 word centered -->
      <span class="p-word p-word--6">Gesundheit</span>
    </div>
  </section>
    <section class="section-intro">
    <div class="section-intro__bg">
      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/after-hero.png" alt="" aria-hidden="true" class="section-intro__bg-img">
    </div>
    <div class="container section-intro__container" data-aos="fade-up" data-aos-duration="900">

      <div class="section-intro__header">
        <div class="section-intro__title-wrapper">     
          <h2 class="section-title section-intro__title">
            Deine Vorteile bei uns!
          </h2>
          <p class="section-intro__text">
            Die Kinderwunschzeit ist für viele Menschen emotional herausfordernd. Osteopathie und Naturheilkunde bieten hier einen ganzheitlichen Ansatz und beziehen hormonelle, strukturelle und nervale Aspekte ein.
          </p>
        </div>

      </div>

      <div class="section-intro__grid">

        <div class="intro-card--first intro-card jobs-intro-card">
          <div class="intro-card__img-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/advantages-card-1.jpg" alt="">
          </div>
          <div class="intro-card__body">
            <span class="intro-card__num">/01</span>
            <p class="intro-card__text">Überdurchschnittlich<br>hoher Lohn</p>
          </div>
        </div>

        <div class="intro-card--second intro-card jobs-intro-card">
          <div class="intro-card__img-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/advantages-card-2.jpg" alt="">
          </div>
          <div class="intro-card__body">
            <span class="intro-card__num">/02</span>
            <p class="intro-card__text">Unbefristeter<br>Arbeitsvertrag</p>
          </div>
        </div>

        <div class="intro-card--third intro-card jobs-intro-card">
          <div class="intro-card__img-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/advantages-card-3.jpg" alt="">
          </div>
          <div class="intro-card__body">
            <span class="intro-card__num">/03</span>
            <p class="intro-card__text">30<br>Urlaubstage</p>
          </div>
        </div>

        <div class="intro-card--fourth intro-card jobs-intro-card">
          <div class="intro-card__img-wrap">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/advantages-card-4.jpg" alt="">
          </div>
          <div class="intro-card__body">
            <span class="intro-card__num">/04</span>
            <p class="intro-card__text">Option auf eine<br>4-Tage Woche</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="section-future" data-aos="fade-up" data-aos-duration="900">
    <div class="future__inner">

      <div class="future__left">
        <h2 class="future__title">Starte deine Zukunft bei PneumaFit!</h2>
        <span class="future__sub">Arbeiten, wo Wertschätzung und Teamgeist zählen.</span>
      </div>

      <div class="future__right">

        <div class="future__card">
          <h3 class="future__card-title">Darauf kannst du dich freuen</h3>
          <ul class="future__list">
            <li class="future__item"><span class="future__item-text">Überdurchschnittlich hoher Lohn</span><span class="future__item-num">/01</span></li>
            <li class="future__item"><span class="future__item-text">Weihnachtsgeld</span><span class="future__item-num">/02</span></li>
            <li class="future__item"><span class="future__item-text">Regelmäßige Lohnerhöhungen</span><span class="future__item-num">/03</span></li>
            <li class="future__item"><span class="future__item-text">50 € monatlich steuerfrei extra</span><span class="future__item-num">/04</span></li>
          </ul>
        </div>

        <div class="future__card">
          <h3 class="future__card-title">Sicher und fair arbeiten</h3>
          <ul class="future__list">
            <li class="future__item"><span class="future__item-text">Unbefristeter Arbeitsvertrag</span><span class="future__item-num">/01</span></li>
            <li class="future__item"><span class="future__item-text">Kurze Probezeit von 3 Monaten</span><span class="future__item-num">/02</span></li>
            <li class="future__item"><span class="future__item-text">Betriebliche Arbeits- & Rechtsschutzversicherung</span><span class="future__item-num">/03</span></li>
          </ul>
        </div>

        <div class="future__card">
          <h3 class="future__card-title">Work-Life-Balance, wie sie sein sollte</h3>
          <ul class="future__list">
            <li class="future__item"><span class="future__item-text">30 Urlaubstage</span><span class="future__item-num">/01</span></li>
            <li class="future__item"><span class="future__item-text">Option auf eine 4-Tage-Woche</span><span class="future__item-num">/02</span></li>
            <li class="future__item"><span class="future__item-text">Kurzer Freitag bis 14 Uhr (nach Absprache)</span><span class="future__item-num">/03</span></li>
            <li class="future__item"><span class="future__item-text">Flexible Arbeitszeiten</span><span class="future__item-num">/04</span></li>
            <li class="future__item"><span class="future__item-text">Pünktlicher Feierabend</span><span class="future__item-num">/05</span></li>
            <li class="future__item"><span class="future__item-text">Rücksichtnahme auf deine privaten Termine</span><span class="future__item-num">/06</span></li>
            <li class="future__item"><span class="future__item-text">Langfristige Terminplanung bis zu 4 Wochen im Voraus</span><span class="future__item-num">/07</span></li>
          </ul>
        </div>

        <div class="future__card">
          <h3 class="future__card-title">Persönliche Entwicklung & Extras</h3>
          <ul class="future__list">
            <li class="future__item"><span class="future__item-text">Möglichkeit zur Entwicklung zur Teamleitung oder stellvertretenden Praxisleitung</span><span class="future__item-num">/01</span></li>
            <li class="future__item"><span class="future__item-text">Private Nutzung der praxiseigenen Geräte</span><span class="future__item-num">/02</span></li>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <section class="section-rl-contact" data-aos="fade-up" data-aos-duration="900">
    <div class="rl-contact__inner">

      <div class="rl-contact__top">
        <span class="rl-contact__brand">PneumaFit</span>
        <div class="rl-contact__cards">
          <div class="rl-contact__card">
            <svg class="rl-contact__dot" width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><circle cx="3.5" cy="3.5" r="3.5" fill="white"/></svg>
            <span class="rl-contact__card-label">Adresse</span>
            <p class="rl-contact__card-text"><?php echo pneumafit_render_contact_items( pneumafit_footer_contact_items( 'adresse' ) ); ?></p>
          </div>
          <div class="rl-contact__card rl-contact__card--active">
            <svg class="rl-contact__dot" width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><circle cx="3.5" cy="3.5" r="3.5" fill="#363636"/></svg>
            <span class="rl-contact__card-label">Telefon</span>
            <p class="rl-contact__card-text"><?php echo pneumafit_render_contact_items( pneumafit_footer_contact_items( 'telefon' ) ); ?></p>
          </div>
          <div class="rl-contact__card">
            <svg class="rl-contact__dot" width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><circle cx="3.5" cy="3.5" r="3.5" fill="white"/></svg>
            <span class="rl-contact__card-label">E-mail</span>
            <p class="rl-contact__card-text"><?php echo pneumafit_render_contact_items( pneumafit_footer_contact_items( 'email' ) ); ?></p>
          </div>
          <div class="rl-contact__card">
            <svg class="rl-contact__dot" width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><circle cx="3.5" cy="3.5" r="3.5" fill="white"/></svg>
            <span class="rl-contact__card-label">Behandlungszeiten</span>
            <p class="rl-contact__card-text"><?php echo pneumafit_render_contact_items( pneumafit_footer_contact_items( 'behandlungszeiten' ) ); ?></p>
          </div>
        </div>
      </div>

      <div class="rl-contact__bottom">
        <h2 class="rl-contact__title">Kontakt</h2>
        <p class="rl-contact__text">Sie möchten einen Termin in unserer Praxis vereinbaren? Rufen Sie uns einfach an oder schreiben Sie uns eine E-Mail.</p>
        <button data-popup class="hero__btn hero__btn--primary rl-contact__btn">
          Termin vereinbaren
          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M7.5 4.37512L10.625 7.50011L7.5 10.6251" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M0.625 0.625V4.99999C0.625 5.66303 0.888388 6.29891 1.35723 6.76774C1.82607 7.23658 2.46194 7.49997 3.12498 7.49997H10.6249" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
      </div>

    </div>

    <div class="rl-contact__mobile">
      <h2 class="rl-contact__title">Kontakt</h2>
      <p class="rl-contact__text">Sie möchten einen Termin in unserer Praxis vereinbaren? Rufen Sie uns einfach an oder schreiben Sie uns eine E-Mail.</p>

      <?php
      $pneumafit_contact_form_id = (int) get_option( 'pneumafit_contact_form_id' );
      if ( $pneumafit_contact_form_id && function_exists( 'gravity_form' ) ) :
          gravity_form( $pneumafit_contact_form_id, false, false, false, null, true );
      else :
          ?>
      <form class="section-contact__form rl-contact__form">
        <input type="tel" class="section-contact__input" placeholder="+1 (000)-000-00-00">
        <button type="submit" class="section-contact__btn">
          Ich will diesen guten Muskeltonus
          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M7.5 4.375L10.625 7.49999L7.5 10.6249" stroke="#F1F1F1" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M0.625 0.625V4.99999C0.625 5.66303 0.888388 6.29891 1.35723 6.76774C1.82607 7.23658 2.46194 7.49997 3.12498 7.49997H10.6249" stroke="#F1F1F1" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
      </form>
      <?php endif; ?>
      <span class="section-contact__privacy">durch Klicken auf die Schaltfläche stimmen Sie der
        <?php
        $pneumafit_privacy = function_exists( 'get_field' ) ? get_field( 'privacy_link', 'option' ) : null;
        if ( is_array( $pneumafit_privacy ) && ! empty( $pneumafit_privacy['url'] ) ) :
            $pneumafit_privacy_text   = ! empty( $pneumafit_privacy['title'] ) ? $pneumafit_privacy['title'] : 'Datenschutzrichtlinie zu';
            $pneumafit_privacy_target = ! empty( $pneumafit_privacy['target'] ) ? ' target="' . esc_attr( $pneumafit_privacy['target'] ) . '" rel="noopener"' : '';
            ?>
          <a href="<?php echo esc_url( $pneumafit_privacy['url'] ); ?>"<?php echo $pneumafit_privacy_target; ?>><?php echo esc_html( $pneumafit_privacy_text ); ?></a>
        <?php else : ?>
          <a href="#">Datenschutzrichtlinie zu</a>
        <?php endif; ?>
      </span>

      <div class="rl-contact__mobile-cards">
        <div class="rl-contact__card">
          <svg class="rl-contact__dot" width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><circle cx="3.5" cy="3.5" r="3.5" fill="#363636"/></svg>
          <span class="rl-contact__card-label">Adresse</span>
          <p class="rl-contact__card-text"><?php echo pneumafit_render_contact_items( pneumafit_footer_contact_items( 'adresse' ) ); ?></p>
        </div>
        <div class="rl-contact__card rl-contact__card--active">
          <svg class="rl-contact__dot" width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><circle cx="3.5" cy="3.5" r="3.5" fill="#363636"/></svg>
          <span class="rl-contact__card-label">Telefon</span>
          <p class="rl-contact__card-text"><?php echo pneumafit_render_contact_items( pneumafit_footer_contact_items( 'telefon' ) ); ?></p>
        </div>
        <div class="rl-contact__card">
          <svg class="rl-contact__dot" width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><circle cx="3.5" cy="3.5" r="3.5" fill="#363636"/></svg>
          <span class="rl-contact__card-label">E-mail</span>
          <p class="rl-contact__card-text"><?php echo pneumafit_render_contact_items( pneumafit_footer_contact_items( 'email' ) ); ?></p>
        </div>
        <div class="rl-contact__card">
          <svg class="rl-contact__dot" width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><circle cx="3.5" cy="3.5" r="3.5" fill="#363636"/></svg>
          <span class="rl-contact__card-label">Behandlungszeiten</span>
          <p class="rl-contact__card-text"><?php echo pneumafit_render_contact_items( pneumafit_footer_contact_items( 'behandlungszeiten' ) ); ?></p>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
