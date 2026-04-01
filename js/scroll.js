/*!
 * Smile Please — Scroll FX
 * Parallax Engine + Scroll Reveals + Progress Bar + Counter + 3D Tilt
 */
(function () {
  'use strict';

  const raf = window.requestAnimationFrame;

  /* ─── SCROLL PROGRESS BAR ───────────────────────────────────────────────── */
  const bar = document.createElement('div');
  bar.id = 'sp-progress';
  bar.style.cssText =
    'position:fixed;top:0;left:0;height:3px;width:0%;' +
    'background:linear-gradient(90deg,#8B1C1C 0%,#C9941A 55%,#E8B430 100%);' +
    'z-index:99999;pointer-events:none;';
  document.body.appendChild(bar);

  /* ─── PARALLAX TARGETS ──────────────────────────────────────────────────── */
  const heroBg      = document.querySelector('.hero-bg');
  const pageHeroImg = document.querySelector('.page-hero-inner img');
  const parallaxEls = Array.from(document.querySelectorAll('[data-parallax]'));

  /* ─── SCROLL REVEAL ─────────────────────────────────────────────────────── */
  // Works with data-reveal="up|down|left|right|scale|fade" + optional data-delay="ms"
  const revealEls = document.querySelectorAll('[data-reveal]');
  const revObs = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (!e.isIntersecting) return;
      const delay = parseInt(e.target.dataset.delay || 0);
      setTimeout(() => e.target.classList.add('revealed'), delay);
      revObs.unobserve(e.target);
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -55px 0px' });
  revealEls.forEach(el => revObs.observe(el));

  /* ─── STAGGER CHILDREN ──────────────────────────────────────────────────── */
  // data-stagger="120" — delay in ms between each child reveal
  const staggerGroups = document.querySelectorAll('[data-stagger]');
  const stgObs = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (!e.isIntersecting) return;
      const gap = parseInt(e.target.dataset.stagger || 120);
      Array.from(e.target.children).forEach((child, i) => {
        setTimeout(() => child.classList.add('revealed'), i * gap);
      });
      stgObs.unobserve(e.target);
    });
  }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });
  staggerGroups.forEach(el => stgObs.observe(el));

  /* ─── COUNTER ANIMATION ─────────────────────────────────────────────────── */
  // data-count="350" data-suffix="+" on any element
  const counters = document.querySelectorAll('[data-count]');
  const cntObs = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (!e.isIntersecting) return;
      const el     = e.target;
      const end    = parseInt(el.dataset.count, 10);
      const suffix = el.dataset.suffix || '';
      const start  = performance.now();
      const dur    = 1800;
      function tick(now) {
        const p = Math.min((now - start) / dur, 1);
        const eased = 1 - Math.pow(1 - p, 3);
        el.textContent = Math.floor(eased * end) + suffix;
        if (p < 1) raf(tick); else el.textContent = end + suffix;
      }
      raf(tick);
      cntObs.unobserve(el);
    });
  }, { threshold: 0.5 });
  counters.forEach(el => cntObs.observe(el));

  /* ─── 3D TILT on Cards ──────────────────────────────────────────────────── */
  document.querySelectorAll('.portfolio-item, .pkg-card, .testi-card, .addon-card').forEach(card => {
    card.addEventListener('mousemove', e => {
      const r = card.getBoundingClientRect();
      const x = ((e.clientX - r.left) / r.width  - 0.5) *  7;
      const y = ((e.clientY - r.top)  / r.height - 0.5) * -7;
      card.style.transform = `perspective(900px) rotateX(${y}deg) rotateY(${x}deg) scale(1.02)`;
    });
    card.addEventListener('mouseleave', () => { card.style.transform = ''; });
  });

  /* ─── SECTION IMAGE REVEAL ──────────────────────────────────────────────── */
  // Images inside .reveal-img-wrap animate from a clip-path
  const imgWraps = document.querySelectorAll('.reveal-img-wrap img');
  const imgObs = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('img-revealed');
        imgObs.unobserve(e.target);
      }
    });
  }, { threshold: 0.15 });
  imgWraps.forEach(el => imgObs.observe(el));

  /* ─── MAIN RRAF SCROLL LOOP ─────────────────────────────────────────────── */
  let ticking = false;

  function onScroll() {
    if (ticking) return;
    ticking = true;
    raf(() => {
      const sy       = window.scrollY;
      const maxSc    = document.documentElement.scrollHeight - window.innerHeight;
      const progress = maxSc > 0 ? (sy / maxSc) * 100 : 0;

      /* Progress bar */
      bar.style.width = progress.toFixed(2) + '%';

      /* Hero background parallax — slides up slower than content */
      if (heroBg) {
        heroBg.style.transform = `translateY(${sy * 0.38}px)`;
      }

      /* Page hero image parallax */
      if (pageHeroImg) {
        pageHeroImg.style.transform = `translateY(${sy * 0.30}px) scale(1.1)`;
      }

      /* Generic data-parallax elements */
      parallaxEls.forEach(el => {
        const speed = parseFloat(el.dataset.parallax) || 0.25;
        const rect  = el.getBoundingClientRect();
        const off   = (rect.top + rect.height / 2 - window.innerHeight / 2) * speed;
        el.style.transform = `translateY(${off}px)`;
      });

      ticking = false;
    });
  }

  window.addEventListener('scroll', onScroll, { passive: true });

  /* ─── SMOOTH ANCHOR SCROLL (overrides default) ──────────────────────────── */
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const target = document.querySelector(a.getAttribute('href'));
      if (!target) return;
      e.preventDefault();
      const navH = document.querySelector('.navbar')?.offsetHeight || 72;
      window.scrollTo({ top: target.getBoundingClientRect().top + window.scrollY - navH, behavior: 'smooth' });
    });
  });

  /* Initial call */
  onScroll();
})();
