<?php get_header(); ?>

<section class="error-404">
  <div class="container error-404__inner">
    <h1 class="error-404__code">404</h1>
    <p class="error-404__text">Diese Seite existiert leider nicht oder wurde verschoben.</p>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hero__btn hero__btn--primary error-404__btn">
      Zurück zur Startseite
      <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path d="M7.5 4.375L10.625 7.49999L7.5 10.6249" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M0.625 0.625V4.99999C0.625 5.66303 0.888388 6.29891 1.35723 6.76774C1.82607 7.23658 2.46194 7.49997 3.12498 7.49997H10.6249" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </a>
  </div>
</section>

<?php get_footer(); ?>
