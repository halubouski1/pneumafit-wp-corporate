if (document.querySelector('.reviews-swiper')) {
  new Swiper('.reviews-swiper', {
    slidesPerView: 'auto',
    spaceBetween: 10,
    grabCursor: true,
    breakpointsBase: 'window',
    navigation: {
      prevEl: '#reviewsPrev',
      nextEl: '#reviewsNext',
    },
    breakpoints: {
      571: {
        spaceBetween: 15,
      },
      1919: {
        spaceBetween: 33,
      },
    },
  });
}

const videoWrap = document.getElementById('videoWrap');
const video = document.getElementById('sectionVideo');
const playBtn = document.getElementById('videoPlayBtn');

if (videoWrap && video && playBtn) {
  videoWrap.addEventListener('click', () => {
    if (video.paused) {
      video.play();
      playBtn.classList.add('hidden');
    } else {
      video.pause();
      playBtn.classList.remove('hidden');
    }
  });
}

const videoWrap2 = document.getElementById('videoWrap2');
const video2 = document.getElementById('sectionVideo2');
const playBtn2 = document.getElementById('videoPlayBtn2');

if (videoWrap2 && video2 && playBtn2) {
  videoWrap2.addEventListener('click', () => {
    if (video2.paused) {
      video2.play();
      playBtn2.classList.add('hidden');
    } else {
      video2.pause();
      playBtn2.classList.remove('hidden');
    }
  });
}

const scrollTopBtn = document.getElementById('scrollTop');
if (scrollTopBtn) {
  scrollTopBtn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
}

if (document.querySelector('.therapies-swiper')) {
  const therapiesSwiper = new Swiper('.therapies-swiper', {
    slidesPerView: 1,
    grabCursor: true,
    effect: 'fade',
    fadeEffect: { crossFade: true },
    navigation: {
      prevEl: '#therapiesPrev',
      nextEl: '#therapiesNext',
    },
    pagination: {
      el: '.therapies-pagination',
      clickable: true,
    },
    on: {
      slideChange() {
        const idx = this.activeIndex;
        document.querySelectorAll('.therapy-tab').forEach((tab, i) => {
          tab.classList.toggle('therapy-tab--active', i === idx);
        });
        document.querySelectorAll('.therapy-bg').forEach(bg => {
          bg.classList.toggle('therapy-bg--active', parseInt(bg.dataset.idx) === idx);
        });
        document.querySelectorAll('.therapies__card-content').forEach(panel => {
          panel.classList.toggle('therapy-content--active', parseInt(panel.dataset.idx) === idx);
        });
      },
    },
  });

  document.querySelectorAll('.therapy-tab').forEach((tab) => {
    tab.addEventListener('click', () => {
      therapiesSwiper.slideTo(parseInt(tab.dataset.index));
    });
  });
}

// ========================================
// Tablet layout (≤1370px) interactivity
// ========================================
const tlPrevBtn = document.getElementById('therapiesTLPrev');
const tlNextBtn = document.getElementById('therapiesTLNext');

if (tlPrevBtn && tlNextBtn) {
  let tlActiveIndex = 0;
  const tlTotal = document.querySelectorAll('.therapy-tl-tab').length;

  function setTLActive(idx) {
    tlActiveIndex = ((idx % tlTotal) + tlTotal) % tlTotal;

    document.querySelectorAll('.therapy-tl-tab').forEach((tab, i) => {
      tab.classList.toggle('therapy-tl-tab--active', i === tlActiveIndex);
    });
    document.querySelectorAll('.therapies__tl-panel').forEach(panel => {
      panel.classList.toggle('therapies__tl-panel--active', parseInt(panel.dataset.idx) === tlActiveIndex);
    });
    document.querySelectorAll('.tl-dot').forEach(dot => {
      dot.classList.toggle('tl-dot--active', parseInt(dot.dataset.idx) === tlActiveIndex);
    });
    document.querySelectorAll('.therapies__tl-img').forEach(img => {
      img.classList.toggle('therapies__tl-img--active', parseInt(img.dataset.idx) === tlActiveIndex);
    });
    document.querySelectorAll('.therapies__tl-chips').forEach(chips => {
      chips.classList.toggle('therapies__tl-chips--active', parseInt(chips.dataset.idx) === tlActiveIndex);
    });
  }

  document.querySelectorAll('.therapy-tl-tab').forEach(tab => {
    tab.addEventListener('click', () => setTLActive(parseInt(tab.dataset.index)));
  });

  tlPrevBtn.addEventListener('click', () => setTLActive(tlActiveIndex - 1));
  tlNextBtn.addEventListener('click', () => setTLActive(tlActiveIndex + 1));

  document.querySelectorAll('.tl-dot').forEach(dot => {
    dot.addEventListener('click', () => setTLActive(parseInt(dot.dataset.idx)));
  });
}

// ========================================
// Lenis smooth scroll
// ========================================
const lenis = new Lenis({
  duration: 1.2,
  easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
  smoothWheel: true,
});

function lenisRaf(time) {
  lenis.raf(time);
  requestAnimationFrame(lenisRaf);
}
requestAnimationFrame(lenisRaf);

// ========================================
// AOS init
// ========================================
AOS.init({
  duration: 900,
  once: true,
  offset: 80,
  easing: 'ease-out-cubic',
});
lenis.on('scroll', AOS.refresh);

// ========================================
// FAQ scroll-fill (mobile ≤940px, non-accordion lists)
// ========================================
if (window.innerWidth <= 940 && document.querySelector('.faq__list:not([data-accordion])')) {
  const faqObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-active');
        faqObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  document.querySelectorAll('.faq__list:not([data-accordion]) .faq__row').forEach(row => {
    faqObserver.observe(row);
  });
}

// ========================================
// FAQ Accordion (mobile ≤940px)
// ========================================
if (window.innerWidth <= 940 && document.querySelector('.faq__list:not([data-static])')) {
  document.querySelectorAll('.faq__list:not([data-static]) .faq__row').forEach(row => {
    const number = row.querySelector('.faq__number');
    const question = row.querySelector('.faq__question');
    const answer = row.querySelector('.faq__answer');

    // Wrap row in .faq__item
    const item = document.createElement('div');
    item.className = 'faq__item';
    row.parentNode.insertBefore(item, row);
    item.appendChild(row);

    // Build accordion header inside row
    const header = document.createElement('div');
    header.className = 'faq__acc-header';
    const toggle = document.createElement('span');
    toggle.className = 'faq__toggle';
    toggle.textContent = '+';
    const left = document.createElement('div');
    left.className = 'faq__acc-left';
    left.append(number, question);
    row.innerHTML = '';
    header.append(left, toggle);
    row.append(header);

    // Body goes AFTER row, outside the colored area
    const body = document.createElement('div');
    body.className = 'faq__acc-body';
    body.append(answer);
    item.appendChild(body);

    header.addEventListener('click', () => {
      const isOpen = item.classList.contains('is-open');
      document.querySelectorAll('.faq__item').forEach(i => {
        i.classList.remove('is-open');
        const t = i.querySelector('.faq__toggle');
        if (t) t.textContent = '+';
      });
      if (!isOpen) {
        item.classList.add('is-open');
        toggle.textContent = '−';
      }
    });
  });
}

// ========================================
// Popup
// ========================================
(function () {
  const overlay = document.getElementById('popupOverlay');
  if (!overlay) return;

  let _scrollY = 0;

  function openPopup() {
    _scrollY = window.scrollY;
    document.body.style.position = 'fixed';
    document.body.style.top = `-${_scrollY}px`;
    document.body.style.width = '100%';
    overlay.classList.add('is-open');
  }

  function closePopup() {
    document.body.style.position = '';
    document.body.style.top = '';
    document.body.style.width = '';
    overlay.classList.remove('is-open');
    window.scrollTo(0, _scrollY);
  }

  overlay.querySelector('.popup__close').addEventListener('click', closePopup);

  overlay.addEventListener('click', (e) => {
    if (e.target === overlay) closePopup();
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && overlay.classList.contains('is-open')) closePopup();
  });

  document.querySelectorAll('[data-popup]').forEach(trigger => {
    trigger.addEventListener('click', (e) => {
      e.preventDefault();
      openPopup();
    });
  });

  window.openPopup = openPopup;
  window.closePopup = closePopup;
})();

// ========================================
// FAQ Accordion (section-faq-accordion)
// ========================================
if (window.innerWidth <= 940 && document.querySelector('.faq__list-accordion')) {
  document.querySelectorAll('.faq__list-accordion .faq__row-accordion').forEach(row => {
    const number   = row.querySelector('.faq__number-accordion');
    const question = row.querySelector('.faq__question-accordion');
    const answer   = row.querySelector('.faq__answer-accordion');

    // Wrap row in .faq__item-accordion
    const item = document.createElement('div');
    item.className = 'faq__item-accordion';
    row.parentNode.insertBefore(item, row);
    item.appendChild(row);

    // Build accordion header inside row
    const header = document.createElement('div');
    header.className = 'faq__acc-header-accordion';
    const toggle = document.createElement('span');
    toggle.className = 'faq__acc-toggle';
    toggle.textContent = '+';
    const left = document.createElement('div');
    left.className = 'faq__acc-left-accordion';
    left.append(number, question);
    row.innerHTML = '';
    header.append(left, toggle);
    row.append(header);

    // Body goes AFTER row, outside the colored area
    const body = document.createElement('div');
    body.className = 'faq__acc-body-accordion';
    body.append(answer);
    item.appendChild(body);

    header.addEventListener('click', () => {
      const isOpen = item.classList.contains('is-open');
      document.querySelectorAll('.faq__item-accordion').forEach(i => {
        i.classList.remove('is-open');
        const t = i.querySelector('.faq__acc-toggle');
        if (t) t.textContent = '+';
      });
      if (!isOpen) {
        item.classList.add('is-open');
        toggle.textContent = '−';
      }
    });
  });
}

// ========================================
// Burger Menu
// ========================================
(function () {
  const overlay = document.querySelector('.burger-menu-overlay');
  const menu = document.getElementById('burgerMenu');
  if (!overlay || !menu) return;

  let _menuScrollY = 0;

  function openMenu() {
    _menuScrollY = window.scrollY;
    document.body.style.position = 'fixed';
    document.body.style.top = `-${_menuScrollY}px`;
    document.body.style.width = '100%';
    menu.classList.add('is-open');
    overlay.classList.add('is-open');
  }

  function closeMenu() {
    document.body.style.position = '';
    document.body.style.top = '';
    document.body.style.width = '';
    menu.classList.remove('is-open');
    overlay.classList.remove('is-open');
    window.scrollTo(0, _menuScrollY);
  }

  menu.querySelector('.burger-menu__close').addEventListener('click', closeMenu);
  overlay.addEventListener('click', closeMenu);

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && menu.classList.contains('is-open')) closeMenu();
  });

  document.querySelectorAll('.header__burger').forEach(btn => {
    btn.addEventListener('click', () => {
      menu.classList.contains('is-open') ? closeMenu() : openMenu();
    });
  });
})();

// ========================================
// Pricing "Fragen klären" — scroll to contact
// ========================================
if (document.querySelector('.pricing__learn')) {
  const contact = document.querySelector('.section-contact, .section-tcta');
  document.querySelectorAll('.pricing__learn').forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      if (!contact) return;
      if (typeof lenis !== 'undefined') {
        lenis.scrollTo(contact);
      } else {
        contact.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });
}

// ========================================
// Learn More — scroll to next section
// ========================================
document.querySelectorAll('.osteopathy-learn, .hero .hero__btn--secondary').forEach(btn => {
  btn.addEventListener('click', (e) => {
    e.preventDefault();
    const hero = btn.closest('section');
    const target = hero && hero.nextElementSibling;
    if (!target) return;
    if (typeof lenis !== 'undefined') {
      lenis.scrollTo(target, { offset: -100 });
    } else {
      const y = target.getBoundingClientRect().top + window.scrollY - 100;
      window.scrollTo({ top: y, behavior: 'smooth' });
    }
  });
});

// ========================================
// Phone widget — reveal on scroll past hero
// ========================================
(function () {
  const phoneWidget = document.querySelector('.phone-widget');
  if (!phoneWidget) return;

  let ticking = false;

  function update() {
    phoneWidget.classList.toggle('is-visible', window.scrollY > window.innerHeight * 0.6);
    ticking = false;
  }

  window.addEventListener('scroll', () => {
    if (ticking) return;
    ticking = true;
    requestAnimationFrame(update);
  }, { passive: true });

  update();
})();

// ========================================
// T-Shape tcta: keep a single Gravity Forms instance but move it between the
// desktop block (.section-tcta__center) and the mobile block
// (.section-tcta__mobile-content, outside .section-tcta__content) at ≤940px.
// ========================================
(function () {
  const holder = document.getElementById('tctaFormHolder');
  if (!holder) return;
  const desktopParent = document.querySelector('.section-tcta__center');
  const mobileParent = document.querySelector('.section-tcta__mobile-content');
  if (!desktopParent || !mobileParent) return;

  const mq = window.matchMedia('(max-width: 940px)');

  function place(e) {
    if (e.matches) {
      if (holder.parentElement !== mobileParent) {
        mobileParent.insertBefore(holder, mobileParent.firstChild);
      }
    } else if (holder.parentElement !== desktopParent) {
      desktopParent.appendChild(holder);
    }
  }

  place(mq);
  mq.addEventListener('change', place);
})();

// ========================================
// Leistungen pages (Physio/Atem/Sport/CMD) contact: single Gravity Forms
// instance moved between the desktop block (.section-contact__bottom, dark) and
// the mobile block (.rl-contact__mobile, light — outside .section-contact__inner)
// at <=940px. Holder is matched by class so every such page is covered.
// ========================================
(function () {
  const holder = document.querySelector('.section-contact__form-holder');
  if (!holder) return;
  const desktopParent = document.querySelector('.section-contact__bottom');
  const mobileParent = document.querySelector('.rl-contact__mobile');
  if (!desktopParent || !mobileParent) return;

  const brandWrapper = mobileParent.querySelector('.section-contact-brand-wrapper');
  const mq = window.matchMedia('(max-width: 940px)');

  function place(e) {
    if (e.matches) {
      if (holder.parentElement !== mobileParent) {
        mobileParent.insertBefore(holder, brandWrapper || null);
      }
    } else if (holder.parentElement !== desktopParent) {
      desktopParent.appendChild(holder);
    }
  }

  place(mq);
  mq.addEventListener('change', place);
})();