<?php
/**
 * Template for the Über uns / About page (slug: ueber-uns).
 * Contact cards pull values from the shared footer_contacts ACF option.
 */
get_header();
?>
  <section class="relounge-hero">
    <div class="relounge-hero__overlay"></div>

    <div class="container relounge-hero__container">


      <div class="relounge-hero__content">
        <div class="relounge-hero__bottom">
          <h1 class="relounge-hero__title">Ihr Praxisteam der Physiopraxis PneumaFit</h1>
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
          Über uns
        </span>
        <span class="philosophy-descr">PneumaFit – Ihre Adresse für ganzheitliches Wohlbefinden. Unter der Leitung von Dimitri Foos, einem erfahrenen Physiotherapeuten und Gründer der Praxis in Leinfelden-Echterdingen, bieten wir ein umfassendes Angebot an Therapien für Körper und Geist. Unser Fokus liegt auf Physio-, Atem- und Sporttherapie, ergänzt durch exklusive Beauty- und Wellnessbehandlungen.</span>
      </div>
      <div class="philosophy-main">
        <h2 class="philosophy-title">Wir verstehen die Bedeutung von Achtsamkeit und begleiten Sie mit Engagement auf Ihrem Weg zu verbesserter Lebensqualität und Wohlbefinden.</h2>
        <p class="philosophy-text">Unsere Philosophie basiert auf Fachwissen, Professionalität und einer ganzheitlichen Betrachtungsweise.</p>
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
            Ihre Vorteile bei PneumaFit
          </h2>
          <p class="section-intro__text">
            Die Kinderwunschzeit ist für viele Menschen emotional herausfordernd. Osteopathie und Naturheilkunde bieten hier einen ganzheitlichen Ansatz und beziehen hormonelle, strukturelle und nervale Aspekte ein.
          </p>
        </div>

      </div>

      <div class="section-intro__grid">

        <div class="intro-card--first intro-card ostheopathie-intro-card">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/benefits-card-1.png" class="ostheopathie-card-image">
          <p class="intro-card__text">Umfangreiches <br> Therapieangebot</p>
        </div>

        <div class="intro-card--second intro-card ostheopathie-intro-card">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/benefits-card-2.png" class="ostheopathie-card-image">
          <p class="intro-card__text">Fachkundige therapeutische <br> Betreuung</p>
        </div>

        <div class="intro-card--third intro-card ostheopathie-intro-card">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/benefits-card-3.png" class="ostheopathie-card-image">
          <p class="intro-card__text">Zügige und anpassungsfähige <br> Terminplanung</p>
        </div>
        <div class="intro-card--fourth intro-card ostheopathie-intro-card">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/benefits-card-4.png" class="ostheopathie-card-image">
          <p class="intro-card__text">Ausgeprägte Expertise und <br> jahrelange Erfahrung</p>
        </div>

      </div>
    </div>
  </section>
    <section class="section-for-back" data-aos="fade-up" data-aos-duration="900">
    <div class="for-back__inner">
      <div class="for-back__top">
        <div class="for-back__top-left">
          <h2 class="for-back__title">Bei PneumaFit entfalten Sie Ihr volles Potenzial in einer Atmosphäre, die Ruhe und Erholung ausstrahlt.</h2>
          <p class="for-back__desc">Dimitri Foos‘ Erfahrung als Physiotherapeut im Robert-Bosch-Krankenhaus und seine Spezialisierung auf die Behandlung von Lungenpatienten führten zur Gründung von PneumaFit. Er erkannte den Bedarf an qualitativ hochwertiger ambulanter Betreuung im Bereich der Atemtherapie, besonders im Großraum Stuttgart.</p>
        </div>
      </div>

      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/for-back.jpg" class="for-back__mobile-img" alt="" aria-hidden="true">

      <div class="for-back__cards">
        <div class="for-back__card for-back__card--1">
          <p class="for-back__card-title">PneumaFit</p>
          <p class="for-back__card-text">Entdecken Sie bei PneumaFit die perfekte Kombination aus professioneller Therapie und persönlichem Wohlbefinden. Wir freuen uns darauf, Sie auf Ihrem Weg zu mehr Gesundheit und Lebensfreude zu begleiten.</p>
        </div>
        <div class="for-back__card for-back__card--2">
          <p class="for-back__card-text">Unsere Praxis ist mit modernsten Geräten ausgestattet, darunter die TANITA Körperanalysewaage, der T-Shape 2 und die entspannende reLounge Liege. Für alle, die unabhängig und ohne Rezept trainieren möchten, bieten wir zudem ein Abo für die freie Nutzung unseres Fitnessraums an.</p>
        </div>
      </div>
      <div class="for-back__wrapper">
        <p class="for-back__note">Unsere Physiopraxis in Leinfelden-Echterdingen ist immer für Sie da und freut sich auf Ihren Besuch.</p>
        <button data-popup class="hero__btn hero__btn--primary for-back__btn">
          Jetzt Termin sichern
          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M7.5 4.37512L10.625 7.50011L7.5 10.6251" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M0.625 0.625V4.99999C0.625 5.66303 0.888388 6.29891 1.35723 6.76774C1.82607 7.23658 2.46194 7.49997 3.12498 7.49997H10.6249" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
      </div>
    </div>
  </section>

  <section class="section-mission" data-aos="fade-up" data-aos-duration="900">
    <div class="mission__inner">

      <div class="mission__left">
        <h2 class="mission__left-title">Unser Leitbild</h2>
        <p class="mission__left-text">In den pulsierenden Rhythmen des Alltags vergessen wir oft, wie essentiell es ist, unserem Körper und Geist die notwendige Pflege und Aufmerksamkeit zu schenken. Bei PneumaFit in Leinfelden-Echterdingen haben wir es uns zur Aufgabe gemacht, Ihre körperliche und geistige Gesundheit in den Mittelpunkt zu stellen. Unsere engagierten und erfahrenen Therapeuten bieten Ihnen eine breite Palette von Dienstleistungen – von Physiotherapie über Atemtherapie bis hin zu spezialisierten Sporttherapie-Angeboten.</p>
      </div>

      <div class="mission__right">

        <div class="mission__right-top">
          <p class="mission__right-text">Mit modernsten Techniken und einem individuell auf Sie abgestimmten Ansatz helfen wir Ihnen dabei, Verspannungen zu lösen, Atembeschwerden zu lindern und Ihr körperliches Wohlbefinden zu steigern. Egal ob Sie sich von einer Verletzung erholen, chronische Schmerzen lindern möchten oder einfach nur Ihren Körper in Topform bringen wollen, das Pneumafit Team steht Ihnen mit Fachwissen und Empathie zur Seite.</p>
          <button data-popup class="mission__btn hero__btn">
            Schreiben Sie uns
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7.50024 4.37512L10.6253 7.50011L7.50024 10.6251" stroke="#657B8D" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M0.625 0.625V4.99999C0.625 5.66303 0.888388 6.29891 1.35723 6.76774C1.82607 7.23658 2.46194 7.49997 3.12498 7.49997H10.6249" stroke="#657B8D" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
        </div>

        <div class="mission__cards">
          <div class="mission__card mission__card--1">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/mission-card-1.jpg" alt="">
          </div>
          <div class="mission__card mission__card--2">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/mission-card-2.jpg" alt="">
          </div>
        </div>

        <div class="mission__right-bottom">
          <h2 class="mission__bottom-title">Besuchen Sie uns und entdecken Sie, wie wir Ihnen helfen können, ein gesünderes, aktiveres und erfüllteres Leben zu führen.</h2>
          <span class="mission__bottom-sub">Ihr Wohlbefinden ist unsere Passion.</span>
        </div>

      </div>
    </div>

    <!-- Mobile-only layout -->
    <div class="section-mission__mobile">

      <h2 class="mission-mob__title">Unser Leitbild</h2>

      <div class="mission-mob__texts">
        <p class="mission-mob__text">In den pulsierenden Rhythmen des Alltags vergessen wir oft, wie essentiell es ist, unserem Körper und Geist die notwendige Pflege und Aufmerksamkeit zu schenken.</p>
        <p class="mission-mob__text">Bei PneumaFit in Leinfelden-Echterdingen haben wir es uns zur Aufgabe gemacht, Ihre körperliche und geistige Gesundheit in den Mittelpunkt zu stellen.</p>
        <p class="mission-mob__text">Unsere engagierten und erfahrenen Therapeuten bieten Ihnen eine breite Palette von Dienstleistungen – von Physiotherapie über Atemtherapie bis hin zu spezialisierten Sporttherapie-Angeboten.</p>
      </div>

      <img class="mission-mob__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/mission.jpg" alt="" aria-hidden="true">

      <h2 class="mission-mob__bottom-title">Besuchen Sie uns und entdecken Sie, wie wir Ihnen helfen können, ein gesünderes, aktiveres und erfüllteres Leben zu führen.</h2>
      <span class="mission-mob__sub">Ihr Wohlbefinden ist unsere Passion.</span>

      <button data-popup class="mission-mob__btn hero__btn">
        Schreiben Sie uns
        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M7.50024 4.37512L10.6253 7.50011L7.50024 10.6251" stroke="#657B8D" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M0.625 0.625V4.99999C0.625 5.66303 0.888388 6.29891 1.35723 6.76774C1.82607 7.23658 2.46194 7.49997 3.12498 7.49997H10.6249" stroke="#657B8D" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>

      <div class="mission-mob__bottom">
        <div class="mission-mob__photos">
          <img class="mission-mob__photo--1" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/mission-card-1.jpg" alt="">
          <img class="mission-mob__photo--2" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/mission-card-2.jpg" alt="">
        </div>
        <div class="mission-mob__body">
          <p class="mission-mob__body-text">Mit modernsten Techniken und einem individuell auf Sie abgestimmten Ansatz helfen wir Ihnen dabei, Verspannungen zu lösen, Atembeschwerden zu lindern und Ihr körperliches Wohlbefinden zu steigern.</p>
          <p class="mission-mob__body-text">Egal ob Sie sich von einer Verletzung erholen, chronische Schmerzen lindern möchten oder einfach nur Ihren Körper in Topform bringen wollen, das Pneumafit Team steht Ihnen mit Fachwissen und Empathie zur Seite.</p>
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
