  <footer class="footer">
    <div class="footer__content">

      <nav class="footer__nav">
        <div class="footer__nav-col">
          <div class="footer__nav-group">
            <span class="footer__nav-title">Leistungen</span>
            <div class="footer__nav-links">
              <?php
              wp_nav_menu( array(
              	'theme_location' => 'footer_services',
              	'container'      => false,
              	'items_wrap'     => '%3$s',
              	'depth'          => 1,
              	'link_class'     => 'footer__nav-link',
              	'walker'         => new Pneumafit_Link_Walker( 'footer__nav-link' ),
              	'fallback_cb'    => 'pneumafit_menu_fallback',
              ) );
              ?>
            </div>
          </div>
          <div class="footer__nav-group">
            <span class="footer__nav-title"><span class="mobile-hidden">Nutzungsbedingungen</span><span class="mobile-only">Datenschutz</span> <br>der Website</span>
            <div class="footer__nav-links">
              <?php
              wp_nav_menu( array(
              	'theme_location' => 'footer_legal',
              	'container'      => false,
              	'items_wrap'     => '%3$s',
              	'depth'          => 1,
              	'link_class'     => 'footer__nav-link',
              	'walker'         => new Pneumafit_Link_Walker( 'footer__nav-link' ),
              	'fallback_cb'    => 'pneumafit_menu_fallback',
              ) );
              ?>
            </div>
          </div>
        </div>
        <div class="footer__nav-col">
          <div class="footer__nav-group">
            <span class="footer__nav-title">Über uns</span>
            <div class="footer__nav-links">
              <?php
              wp_nav_menu( array(
              	'theme_location' => 'footer_about',
              	'container'      => false,
              	'items_wrap'     => '%3$s',
              	'depth'          => 1,
              	'link_class'     => 'footer__nav-link',
              	'walker'         => new Pneumafit_Link_Walker( 'footer__nav-link' ),
              	'fallback_cb'    => 'pneumafit_menu_fallback',
              ) );
              ?>
            </div>
          </div>
          <div class="footer__nav-group footer__nav-group--right">
            <span class="footer__nav-title">Social networks</span>
            <div class="footer__nav-links">
              <?php
              wp_nav_menu( array(
              	'theme_location' => 'footer_social',
              	'container'      => false,
              	'items_wrap'     => '%3$s',
              	'depth'          => 1,
              	'link_class'     => 'footer__nav-link',
              	'walker'         => new Pneumafit_Link_Walker( 'footer__nav-link' ),
              	'fallback_cb'    => 'pneumafit_menu_fallback',
              ) );
              ?>
            </div>
          </div>
        </div>
      </nav>

      <div class="footer__divider"></div>

      <div class="footer__bottom">
        <button class="footer__scroll-top" id="scrollTop" aria-label="Nach oben">
          <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5.95948 14.4189V0.918946M0.459473 6.41895L5.95948 0.918946L11.4595 6.41895" stroke="white" stroke-width="1.3"/>
          </svg>
        </button>
        <div class="footer__wrapper">
          <?php if ( function_exists( 'have_rows' ) && have_rows( 'footer_contacts', 'option' ) ) : ?>
            <?php
            while ( have_rows( 'footer_contacts', 'option' ) ) :
                the_row();
                $fc_label = get_sub_field( 'label' );
                ?>
              <div class="footer__email-info">
                <?php if ( $fc_label ) : ?>
                  <span class="footer__email-label"><?php echo esc_html( $fc_label ); ?></span>
                <?php endif; ?>
                <?php
                if ( have_rows( 'items' ) ) :
                    while ( have_rows( 'items' ) ) :
                        the_row();
                        $fc_text = get_sub_field( 'text' );
                        $fc_url  = get_sub_field( 'url' );
                        if ( '' === trim( (string) $fc_text ) ) {
                            continue;
                        }
                        if ( $fc_url ) :
                            ?>
                  <a href="<?php echo esc_url( $fc_url ); ?>" class="footer__email"><?php echo esc_html( $fc_text ); ?></a>
                        <?php else : ?>
                  <span class="footer__email"><?php echo esc_html( $fc_text ); ?></span>
                            <?php
                        endif;
                    endwhile;
                endif;
                ?>
              </div>
            <?php endwhile; ?>
          <?php else : ?>
            <div class="footer__email-info">
              <span class="footer__email-label">e-mail</span>
              <a href="mailto:info@pneumafit.de" class="footer__email">info@PneumaFit.de</a>
            </div>
            <div class="footer__email-info">
              <span class="footer__email-label">adresse</span>
              <span class="footer__email">Max-Lang-Straße 5 70771 Leinfelden-Echterdingen</span>
            </div>
            <div class="footer__email-info">
              <span class="footer__email-label">telefon</span>
              <a href="tel:+4971150434348" class="footer__email">0711 - 5043 4348</a>
              <a href="tel:+49017610716925" class="footer__email">0176 - 10716925</a>
            </div>
            <div class="footer__email-info">
              <span class="footer__email-label">Behandlungszeiten</span>
              <span class="footer__email">Mo: 8 - 18 Uhr</span>
              <span class="footer__email">Di-Mi-Do: 8 - 20 Uhr</span>
              <span class="footer__email">Fr: 8 - 15 Uhr</span>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <div class="footer__legal">
        <span>PneumaFit. All rights reserved</span>
        <span>© 2026</span>
      </div>

    </div>
  </footer>
  <?php
  $pneumafit_widget_phone = function_exists( 'get_field' ) ? get_field( 'widget_phone', 'option' ) : '';
  if ( '' === trim( (string) $pneumafit_widget_phone ) ) {
  	$pneumafit_widget_phone = '+4971150434348';
  }
  $pneumafit_widget_tel = preg_replace( '/[^0-9+]/', '', $pneumafit_widget_phone );
  ?>
  <a href="<?php echo esc_url( 'tel:' . $pneumafit_widget_tel ); ?>" class="phone-widget" aria-label="Anrufen"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24c1.12.37 2.33.57 3.57.57a1 1 0 011 1V20a1 1 0 01-1 1C10.61 21 3 13.39 3 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.2 2.45.57 3.57a1 1 0 01-.25 1.02l-2.2 2.2z" fill="white"/></svg></a>

  <!-- Popup: Konsultationsanfrage -->
  <div class="popup-overlay" id="popupOverlay">
    <div class="popup" role="dialog" aria-modal="true" aria-labelledby="popupTitle">
      <button class="popup__close" type="button" aria-label="Schließen">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path d="M1.30213 15.5C0.968571 15.5 0.635009 15.3734 0.381578 15.1181C-0.127193 14.6094 -0.127193 13.7845 0.381578 13.2758L13.2757 0.38157C13.7848 -0.12719 14.6097 -0.12719 15.1184 0.38157C15.6272 0.890329 15.6272 1.71516 15.1184 2.22423L2.22396 15.1181C1.96703 15.3734 1.63379 15.5 1.30213 15.5Z" fill="#7B7B7B"/>
          <path d="M14.1961 15.5C13.8628 15.5 13.5293 15.3734 13.2758 15.1181L0.381812 2.22439C-0.127271 1.71558 -0.127271 0.890664 0.381812 0.381849C0.890577 -0.127283 1.71541 -0.127283 2.22418 0.381849L15.1182 13.2771C15.6273 13.7859 15.6273 14.6108 15.1182 15.1197C14.8632 15.3734 14.5296 15.5 14.1961 15.5Z" fill="#7B7B7B"/>
        </svg>
      </button>

      <div class="popup__content">
        <h2 class="popup__title" id="popupTitle">Lassen Sie eine Konsultationsanfrage ab</h2>
        <?php
        $pneumafit_popup_form_id = (int) get_option( 'pneumafit_popup_form_id' );
        if ( $pneumafit_popup_form_id && function_exists( 'gravity_form' ) ) :
            gravity_form( $pneumafit_popup_form_id, false, false, false, null, true );
        else :
            ?>
        <form class="popup__form">
          <div class="popup__inputs-row">
            <input type="text" class="popup__input" placeholder="Name">
            <input type="tel" class="popup__input" placeholder="+1 (000)-000-00-00">
          </div>
          <input type="email" class="popup__input" placeholder="example@mail.com">
          <button type="submit" class="popup__btn hero__btn hero__btn--primary">
            Termin vereinbaren
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path d="M7.5 4.375L10.625 7.49999L7.5 10.6249" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M0.625 0.625V4.99999C0.625 5.66303 0.888388 6.29891 1.35723 6.76774C1.82607 7.23658 2.46194 7.49997 3.12498 7.49997H10.6249" stroke="currentColor" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
        </form>
        <?php endif; ?>
      </div>

      <div class="popup__decor" aria-hidden="true"></div>
    </div>
  </div>
  <?php wp_footer(); ?>
</body>
</html>
