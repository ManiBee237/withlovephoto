<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CLICK CLICK photography · Premium Wedding Photography Chennai</title>
  <meta name="description" content="CLICK CLICK photography — Premium wedding and event photography in Chennai. Capturing timeless Tamil Nadu wedding stories with artistry and heart." />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <style>
    /* ── HERO ─────────────────────────────────────────────────── */
    .hero {
      position: relative;
      height: 100vh; min-height: 620px;
      display: flex; align-items: center; justify-content: center;
      overflow: hidden;
    }
    .hero-bg {
      position: absolute; inset: 0;
      background: url('assets/pre-wedding/2.jpg') center center / cover no-repeat;
      animation: hero-zoom 16s ease-in-out forwards;
    }
    @keyframes hero-zoom {
      from { transform: scale(1.08); }
      to   { transform: scale(1.0); }
    }
    .hero-overlay {
      position: absolute; inset: 0;
      background: linear-gradient(
        160deg,
        rgba(80,14,14,.72) 0%,
        rgba(20,6,6,.84) 50%,
        rgba(20,6,6,.65) 100%
      );
    }
    .hero-content {
      position: relative; z-index: 2;
      text-align: center; padding: 0 2rem;
      max-width: 900px; width: 100%;
    }
    .hero-eyebrow {
      display: inline-flex; align-items: center; gap: .85rem;
      font-family: var(--font-body); font-size: .72rem; font-weight: 700;
      letter-spacing: .28em; text-transform: uppercase; color: var(--gold);
      margin-bottom: 1.6rem;
      opacity: 0; animation: fade-in-up .8s ease .3s forwards;
    }
    .hero-eyebrow::before, .hero-eyebrow::after {
      content: ''; display: block; width: 32px; height: 1px; background: var(--gold);
    }
    .hero-sub {
      font-family: var(--font-body); font-size: clamp(.82rem,1.4vw,.96rem);
      font-weight: 300; letter-spacing: .18em; text-transform: uppercase;
      color: rgba(255,245,230,.65); margin-bottom: 2.8rem;
      opacity: 0; animation: fade-in-up .8s ease 1.15s forwards;
    }
    .hero-ctas {
      display: flex; gap: 1.2rem; justify-content: center; flex-wrap: wrap;
      opacity: 0; animation: fade-in-up .8s ease 1.38s forwards;
    }
    .hero-scroll {
      position: absolute; bottom: 2.5rem; left: 50%;
      transform: translateX(-50%); z-index: 2;
      display: flex; flex-direction: column; align-items: center; gap: .45rem; cursor: pointer;
    }
    .hero-scroll span {
      font-family: var(--font-body); font-size: .65rem;
      letter-spacing: .24em; text-transform: uppercase;
      color: rgba(255,245,230,.42);
    }
    .hero-scroll-line {
      width: 1px; height: 44px;
      background: linear-gradient(to bottom, rgba(201,148,26,.75), transparent);
      animation: scroll-bounce 2.2s ease-in-out infinite;
    }
    @keyframes scroll-bounce {
      0%,100% { transform: scaleY(1); opacity: .75; }
      50%      { transform: scaleY(.65); opacity: .3; }
    }
    @keyframes fade-in-up {
      from { opacity: 0; transform: translateY(26px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    /* ── FEATURED WORK ──────────────────────────────────────────── */
    .featured-work { background: var(--bg); }

    .portfolio-item {
      position: relative; overflow: hidden;
      border-radius: var(--radius-sm); cursor: pointer;
    }
    .portfolio-item img {
      width: 100%; height: 100%; object-fit: cover;
      transition: transform .8s cubic-bezier(.25,.46,.45,.94);
      display: block;
    }
    .portfolio-item:hover img { transform: scale(1.07); }
    .portfolio-overlay {
      position: absolute; inset: 0;
      background: linear-gradient(to top, rgba(80,14,14,.9) 0%, transparent 55%);
      opacity: 0; transition: opacity .4s ease;
      display: flex; align-items: flex-end; padding: 1.8rem;
    }
    .portfolio-item:hover .portfolio-overlay { opacity: 1; }
    .portfolio-overlay h4 {
      font-family: var(--font-heading); font-style: italic;
      font-size: 1.25rem; color: var(--gold-light); margin-bottom: .2rem;
    }
    .portfolio-overlay p {
      font-size: .72rem; letter-spacing: .14em;
      text-transform: uppercase; color: rgba(255,245,230,.65);
    }
    .portfolio-cta-wrap { text-align: center; margin-top: 3rem; }

    /* ── STATS BAND ─────────────────────────────────────────────── */
    /* (shared CSS handles this) */

    /* ── CTA STRIP ──────────────────────────────────────────────── */
    .cta-strip {
      background: linear-gradient(135deg, var(--maroon) 0%, var(--maroon-dark) 100%);
      padding: 6rem 0; text-align: center;
      position: relative; overflow: hidden;
    }
    .cta-strip::before {
      content: ''; position: absolute; inset: 0;
      background: radial-gradient(ellipse at center, rgba(201,148,26,.07) 0%, transparent 65%);
    }
    .cta-strip h2 {
      font-family: var(--font-heading); font-style: italic;
      color: var(--white); font-size: clamp(2rem,4vw,3.2rem);
      margin-bottom: .8rem; position: relative;
    }
    .cta-strip p {
      color: rgba(255,245,230,.68); font-size: 1rem;
      margin-bottom: 2.8rem; position: relative;
    }
    .cta-strip-btns {
      display: flex; gap: 1.2rem; justify-content: center;
      flex-wrap: wrap; position: relative;
    }
    .btn-whatsapp {
      display: inline-flex; align-items: center; gap: .65rem;
      background: #25D366; color: var(--white);
      font-family: var(--font-body); font-size: .88rem; font-weight: 700;
      letter-spacing: .1em; text-transform: uppercase;
      padding: .85rem 2rem; border-radius: 4px;
      box-shadow: 0 4px 18px rgba(37,211,102,.38);
      transition: var(--transition);
    }
    .btn-whatsapp:hover {
      background: #1fad57; transform: translateY(-2px);
      box-shadow: 0 7px 26px rgba(37,211,102,.45);
    }

    /* ── ABOUT TEASER ────────────────────────────────────────────── */
    .about-teaser { background: var(--ivory); }
    .about-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 5rem;
      align-items: center;
    }
    .about-image-wrap { position: relative; }
    .about-img-main {
      width: 100%; aspect-ratio: 3/4; object-fit: cover;
      border-radius: var(--radius-md);
      box-shadow: var(--shadow-lg);
      position: relative; z-index: 2;
    }
    .about-img-frame {
      position: absolute; top: -16px; right: -16px;
      width: calc(100% - 24px); height: calc(100% - 24px);
      border: 2px solid var(--gold);
      border-radius: var(--radius-md); z-index: 1;
    }
    .traits-list {
      display: flex; flex-direction: column;
      gap: 0.8rem; margin: 1.8rem 0 2rem;
    }
    .trait-item { display: flex; align-items: center; gap: 0.9rem; }
    .trait-dot {
      width: 8px; height: 8px;
      background: var(--gold); border-radius: 50%; flex-shrink: 0;
    }
    .trait-item span {
      font-family: var(--font-body); font-size: 0.9rem;
      font-weight: 700; letter-spacing: 0.06em; color: var(--text-dark);
    }
    @media (max-width: 1024px) {
      .about-grid { grid-template-columns: 1fr; gap: 3rem; }
      .about-image-wrap { max-width: 480px; margin: 0 auto; }
    }

    /* ── RESPONSIVE ─────────────────────────────────────────────── */
    @media (max-width: 768px) {
      .about-text { padding: 0; }
    }

    @media (max-width: 600px) {
      .hero-content { padding: 0 1.2rem; }
      .hero-sub { letter-spacing: .1em; font-size: .8rem; margin-bottom: 2rem; }
      .hero-ctas { flex-direction: column; align-items: center; gap: .8rem; }
      .hero-ctas .btn-maroon,
      .hero-ctas .btn-gold-outline { width: 100%; max-width: 320px; justify-content: center; }
      .hero-scroll { display: none; }
    }

    @media (max-width: 480px) {
      .about-grid { gap: 2rem; }
      .cta-strip-btns { flex-direction: column; align-items: stretch; }
      .cta-strip-btns a { text-align: center; justify-content: center; }
      .grev-summary { flex-direction: column; align-items: center; gap: 1rem; padding: 1.2rem; }
      .grev-divider { display: none; }
    }

    /* ── FLORAL PARALLAX DECORATIONS ─────────────────────────────── */
    .floral-deco {
      position: absolute;
      pointer-events: none;
      display: block;
      animation: floral-sway 10s ease-in-out infinite;
    }
    @keyframes floral-sway {
      0%,100% { translate: 0px 0px; rotate: 0deg; }
      25%      { translate: 5px -11px; rotate: 1.8deg; }
      50%      { translate: 2px -17px; rotate: 0deg; }
      75%      { translate: -4px -9px; rotate: -1.8deg; }
    }
    /* Hero corner florals */
    .floral-hero-tl {
      top: 5vh; left: 2vw;
      width: clamp(100px, 13vw, 190px);
      color: var(--gold); opacity: 0.13;
      animation-duration: 13s;
    }
    .floral-hero-tr {
      top: 8vh; right: 2vw;
      width: clamp(70px, 9vw, 130px);
      color: rgba(255,245,230,0.9); opacity: 0.10;
      animation-duration: 9s; animation-delay: -4s;
    }
    .floral-hero-br {
      bottom: 13vh; right: 3vw;
      width: clamp(80px, 11vw, 160px);
      color: var(--saffron); opacity: 0.11;
      animation-duration: 15s; animation-delay: -8s;
    }
    .floral-hero-bl {
      bottom: 20vh; left: 3vw;
      width: clamp(60px, 7vw, 110px);
      color: var(--gold-light); opacity: 0.09;
      animation-duration: 11s; animation-delay: -3s;
    }
    /* Hero side gem */
    .hero-side-gem {
      width: 5px; height: 5px;
      background: var(--gold); rotate: 45deg;
      flex-shrink: 0; display: block; opacity: 0.7;
    }
    /* Section florals — fixed small sizes */
    .floral-section {
      position: absolute;
      pointer-events: none;
      animation: floral-sway 12s ease-in-out infinite;
    }
    .floral-testi-mid {
      top: 50%; left: 50%;
      translate: -50% -50%;
      width: clamp(120px, 16vw, 200px);
      color: var(--maroon); opacity: 0.04;
      animation-duration: 20s; z-index: 0;
    }
    .floral-cta-l {
      left: 3vw; top: 50%; translate: 0 -50%;
      width: clamp(90px, 10vw, 150px);
      color: var(--gold); opacity: 0.14;
      animation-delay: -5s;
    }
    .floral-cta-r {
      right: 3vw; top: 50%; translate: 0 -50%;
      width: clamp(90px, 10vw, 150px);
      color: var(--gold); opacity: 0.14;
      animation-delay: -1.5s; scale: -1 1;
    }
    /* Make SVGs inside floral elements fill container */
    .floral-deco svg,
    .floral-section svg {
      width: 100%; height: auto; display: block;
    }

    /* ── GOOGLE REVIEWS SECTION ──────────────────────── */
    .grev-section {
      background: #fff;
      padding: 5rem 0;
      position: relative;
      overflow: hidden;
    }
    .grev-heading { margin-bottom: 2.5rem; }
    .grev-heading h2 { margin-bottom: 0; }
    .grev-heading-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 1rem;
      margin-top: .5rem;
    }
    .grev-powered-by {
      display: flex;
      align-items: center;
      gap: .4rem;
      font-size: .82rem;
      font-family: var(--font-body);
      color: #5f6368;
      letter-spacing: .04em;
    }
    .grev-g-icon { width: 22px; height: 22px; flex-shrink: 0; }

    /* Summary bar */
    .grev-summary {
      display: flex;
      align-items: center;
      gap: 3rem;
      background: #f8f9fa;
      border: 1px solid #e8eaed;
      border-radius: 16px;
      padding: 2rem 2.5rem;
      margin-bottom: 3rem;
      flex-wrap: wrap;
    }
    .grev-score-block {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: .25rem;
      min-width: 90px;
    }
    .grev-score-num {
      font-size: 3.8rem;
      font-weight: 700;
      color: #202124;
      line-height: 1;
      font-family: var(--font-body);
    }
    .grev-score-stars { color: #FBBC04; font-size: 1.1rem; letter-spacing: 2px; }
    .grev-score-label { font-size: .78rem; color: #5f6368; font-family: var(--font-body); }
    .grev-divider { width: 1px; height: 72px; background: #e8eaed; flex-shrink: 0; }
    .grev-bars { flex: 1; min-width: 200px; display: flex; flex-direction: column; gap: .45rem; }
    .grev-bar-row {
      display: flex;
      align-items: center;
      gap: .55rem;
    }
    .grev-bar-row > span:first-child {
      font-size: .78rem;
      color: #5f6368;
      width: 9px;
      text-align: right;
      font-family: var(--font-body);
    }
    .grev-bar {
      flex: 1;
      height: 7px;
      background: #e8eaed;
      border-radius: 4px;
      overflow: hidden;
    }
    .grev-bar div { height: 100%; background: #FBBC04; border-radius: 4px; }
    .grev-bar-pct { font-size: .72rem; color: #9aa0a6; font-family: var(--font-body); min-width: 26px; }

    /* Cards grid */
    .grev-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1.1rem;
      margin-bottom: 3rem;
    }
    .grev-card {
      background: #fff;
      border: 1px solid #e8eaed;
      border-radius: 12px;
      padding: 1.35rem;
      box-shadow: 0 1px 4px rgba(0,0,0,.07), 0 4px 14px rgba(0,0,0,.04);
      transition: box-shadow .2s ease, transform .2s ease;
    }
    .grev-card:hover {
      box-shadow: 0 4px 20px rgba(0,0,0,.12);
      transform: translateY(-2px);
    }
    .grev-card-top {
      display: flex;
      align-items: center;
      gap: .7rem;
      margin-bottom: .9rem;
    }
    .grev-avatar {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      font-size: .95rem;
      color: #fff;
      flex-shrink: 0;
      font-family: var(--font-body);
    }
    .grev-card-name {
      font-weight: 600;
      font-size: .88rem;
      color: #202124;
      font-family: var(--font-body);
    }
    .grev-card-info {
      font-size: .72rem;
      color: #5f6368;
      font-family: var(--font-body);
      margin-top: 2px;
    }
    .grev-card-glogo { width: 18px; height: 18px; flex-shrink: 0; margin-left: auto; }
    .grev-card-stars {
      display: flex;
      align-items: center;
      gap: .55rem;
      margin-bottom: .65rem;
    }
    .grev-stars-row { color: #FBBC04; font-size: .88rem; letter-spacing: 1px; }
    .grev-card-date { font-size: .72rem; color: #5f6368; font-family: var(--font-body); }
    .grev-card-text {
      font-size: .845rem;
      color: #3c4043;
      line-height: 1.65;
      margin: 0;
      font-family: var(--font-body);
    }

    /* CTA button */
    .grev-cta-wrap { text-align: center; }
    .grev-cta-btn {
      display: inline-flex;
      align-items: center;
      gap: .55rem;
      padding: .75rem 1.8rem;
      border: 1px solid #dadce0;
      border-radius: 24px;
      font-size: .88rem;
      font-weight: 500;
      color: #1a73e8;
      text-decoration: none;
      font-family: var(--font-body);
      background: #fff;
      transition: background .18s, box-shadow .18s;
    }
    .grev-cta-btn:hover { background: #f8f9fa; box-shadow: 0 1px 6px rgba(0,0,0,.12); }
    .grev-cta-btn svg { width: 18px; height: 18px; }

    /* Responsive */
    @media (max-width: 900px) {
      .grev-grid { grid-template-columns: repeat(2, 1fr); }
      .grev-divider { display: none; }
    }
    @media (max-width: 600px) {
      .grev-grid { grid-template-columns: 1fr; }
      .grev-summary { gap: 1.5rem; padding: 1.5rem; }
    }
  </style>
</head>
<body>

  <!-- CUSTOM CURSOR -->
  <div class="cursor-dot" id="cursorDot"></div>
  <div class="cursor-ring" id="cursorRing"></div>

  <!-- PAGE TRANSITION OVERLAY -->
  <div class="page-transition-overlay" id="pageOverlay"></div>

  <!-- SPLIT-SCREEN LOADER -->
  <div id="loader" class="sp-loader">
    <div class="sp-loader-half sp-loader-l"></div>
    <div class="sp-loader-half sp-loader-r"></div>
    <div class="sp-loader-content">
      <div class="sp-loader-brand">CLICK CLICK photography</div>
      <div class="sp-loader-sub">Premium Wedding Photography · Chennai</div>
      <div class="sp-loader-progress"><div class="sp-loader-bar"></div></div>
    </div>
  </div>

  <!-- NAVBAR -->
  <nav class="navbar transparent" id="navbar">
    <div class="nav-inner">
      <a href="index.php" class="nav-logo">
        <span class="logo-main">CLICK CLICK photography</span>
        <span class="logo-sub">Chennai</span>
      </a>
      <div class="nav-links">
        <a href="work.php">Work</a>
        <a href="about.php">About</a>
        <a href="services.php">Services</a>
        <a href="stories.php">Stories</a>
        <a href="experience.php">Experience</a>
        <a href="contact.php" class="nav-cta">Book Now</a>
      </div>
      <button class="hamburger" id="hamburger" aria-label="Menu">
        <span></span><span></span><span></span>
      </button>
    </div>
  </nav>

  <!-- MOBILE MENU -->
  <div class="mobile-menu" id="mobileMenu">
    <a href="work.php">Work</a>
    <a href="about.php">About</a>
    <a href="services.php">Services</a>
    <a href="stories.php">Stories</a>
    <a href="experience.php">Experience</a>
    <a href="contact.php" class="mob-cta">Book Now</a>
  </div>

  <!-- HERO -->
  <section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-overlay"></div>

    <!-- Floral parallax decorations -->
    <div class="floral-deco floral-hero-tl" data-parallax="0.14">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" fill="currentColor">
        <g transform="translate(100,100)">
          <ellipse rx="13" ry="46" transform="rotate(0) translate(0,-10)"/><ellipse rx="13" ry="46" transform="rotate(45) translate(0,-10)"/>
          <ellipse rx="13" ry="46" transform="rotate(90) translate(0,-10)"/><ellipse rx="13" ry="46" transform="rotate(135) translate(0,-10)"/>
          <ellipse rx="13" ry="46" transform="rotate(180) translate(0,-10)"/><ellipse rx="13" ry="46" transform="rotate(225) translate(0,-10)"/>
          <ellipse rx="13" ry="46" transform="rotate(270) translate(0,-10)"/><ellipse rx="13" ry="46" transform="rotate(315) translate(0,-10)"/>
          <ellipse rx="9" ry="30" transform="rotate(22.5) translate(0,-6)" opacity="0.6"/><ellipse rx="9" ry="30" transform="rotate(67.5) translate(0,-6)" opacity="0.6"/>
          <ellipse rx="9" ry="30" transform="rotate(112.5) translate(0,-6)" opacity="0.6"/><ellipse rx="9" ry="30" transform="rotate(157.5) translate(0,-6)" opacity="0.6"/>
          <ellipse rx="9" ry="30" transform="rotate(202.5) translate(0,-6)" opacity="0.6"/><ellipse rx="9" ry="30" transform="rotate(247.5) translate(0,-6)" opacity="0.6"/>
          <ellipse rx="9" ry="30" transform="rotate(292.5) translate(0,-6)" opacity="0.6"/><ellipse rx="9" ry="30" transform="rotate(337.5) translate(0,-6)" opacity="0.6"/>
          <circle r="17"/><circle r="8" fill="rgba(255,255,255,0.3)"/>
        </g>
      </svg>
    </div>
    <div class="floral-deco floral-hero-tr" data-parallax="0.22">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" fill="currentColor">
        <g transform="translate(50,50)">
          <ellipse rx="9" ry="24" transform="rotate(0) translate(0,-8)"/><ellipse rx="9" ry="24" transform="rotate(72) translate(0,-8)"/>
          <ellipse rx="9" ry="24" transform="rotate(144) translate(0,-8)"/><ellipse rx="9" ry="24" transform="rotate(216) translate(0,-8)"/>
          <ellipse rx="9" ry="24" transform="rotate(288) translate(0,-8)"/>
          <circle r="12"/><circle r="6" fill="rgba(255,255,255,0.35)"/>
        </g>
      </svg>
    </div>
    <div class="floral-deco floral-hero-br" data-parallax="0.08">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 140 140" fill="currentColor">
        <g transform="translate(70,70)">
          <ellipse rx="8" ry="28" transform="rotate(0) translate(0,-8)"/><ellipse rx="8" ry="28" transform="rotate(30) translate(0,-8)"/>
          <ellipse rx="8" ry="28" transform="rotate(60) translate(0,-8)"/><ellipse rx="8" ry="28" transform="rotate(90) translate(0,-8)"/>
          <ellipse rx="8" ry="28" transform="rotate(120) translate(0,-8)"/><ellipse rx="8" ry="28" transform="rotate(150) translate(0,-8)"/>
          <ellipse rx="8" ry="28" transform="rotate(180) translate(0,-8)"/><ellipse rx="8" ry="28" transform="rotate(210) translate(0,-8)"/>
          <ellipse rx="8" ry="28" transform="rotate(240) translate(0,-8)"/><ellipse rx="8" ry="28" transform="rotate(270) translate(0,-8)"/>
          <ellipse rx="8" ry="28" transform="rotate(300) translate(0,-8)"/><ellipse rx="8" ry="28" transform="rotate(330) translate(0,-8)"/>
          <circle r="15"/><circle r="7" fill="rgba(255,255,255,0.25)"/>
        </g>
      </svg>
    </div>
    <div class="floral-deco floral-hero-bl" data-parallax="0.18">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" fill="currentColor">
        <g transform="translate(40,40)">
          <ellipse rx="7" ry="18" transform="rotate(0) translate(0,-6)"/><ellipse rx="7" ry="18" transform="rotate(60) translate(0,-6)"/>
          <ellipse rx="7" ry="18" transform="rotate(120) translate(0,-6)"/><ellipse rx="7" ry="18" transform="rotate(180) translate(0,-6)"/>
          <ellipse rx="7" ry="18" transform="rotate(240) translate(0,-6)"/><ellipse rx="7" ry="18" transform="rotate(300) translate(0,-6)"/>
          <circle r="10"/>
        </g>
      </svg>
    </div>

    <!-- Vertical side texts -->
    <div class="hero-side-l">
      <span>Chennai</span>
      <div class="hero-side-gem"></div>
      <span>Tamil Nadu</span>
    </div>
    <div class="hero-side-r">
      <span>Est.</span>
      <div class="hero-side-gem"></div>
      <span>2016</span>
    </div>

    <div class="hero-content">
      <div class="hero-eyebrow">Every Love Story Deserves Its Own Chapter</div>
      <h1>
        <span class="h1-l1">Before the Vows,</span>
        <span class="h1-l2">Tell Your</span>
        <span class="h1-l3">Love Story</span>
      </h1>
      <p class="hero-sub">Pre-Wedding &amp; Wedding Photography · Chennai, Tamil Nadu</p>
      <div class="hero-ctas">
        <a href="contact.php" class="btn-maroon"><span>Plan Your Shoot</span></a>
        <a href="work.php" class="btn-ghost">See Our Stories</a>
      </div>
    </div>
    <div class="hero-scroll" onclick="document.querySelector('.marquee-band').scrollIntoView({behavior:'smooth'})">
      <span>Scroll</span>
      <div class="hero-scroll-line"></div>
    </div>
  </section>

  <!-- MARQUEE -->
  <div class="marquee-band">
    <div class="marquee-track">
      <div class="marquee-item"><span>Pre-Wedding Shoots</span><span class="marquee-dot">◆</span></div>
      <div class="marquee-item"><span>Stolen Glances</span><span class="marquee-dot">◆</span></div>
      <div class="marquee-item"><span>Candid Love Stories</span><span class="marquee-dot">◆</span></div>
      <div class="marquee-item"><span>Golden Hour Sessions</span><span class="marquee-dot">◆</span></div>
      <div class="marquee-item"><span>Engagement Shoots</span><span class="marquee-dot">◆</span></div>
      <div class="marquee-item"><span>Cinematic Videography</span><span class="marquee-dot">◆</span></div>
      <div class="marquee-item"><span>Wedding Day Coverage</span><span class="marquee-dot">◆</span></div>
      <div class="marquee-item"><span>Destination Shoots</span><span class="marquee-dot">◆</span></div>
      <div class="marquee-item"><span>Couple Portraits</span><span class="marquee-dot">◆</span></div>
      <div class="marquee-item"><span>Tamil Weddings</span><span class="marquee-dot">◆</span></div>
      <div class="marquee-item"><span>Pre-Wedding Shoots</span><span class="marquee-dot">◆</span></div>
      <div class="marquee-item"><span>Stolen Glances</span><span class="marquee-dot">◆</span></div>
      <div class="marquee-item"><span>Candid Love Stories</span><span class="marquee-dot">◆</span></div>
      <div class="marquee-item"><span>Golden Hour Sessions</span><span class="marquee-dot">◆</span></div>
      <div class="marquee-item"><span>Engagement Shoots</span><span class="marquee-dot">◆</span></div>
      <div class="marquee-item"><span>Cinematic Videography</span><span class="marquee-dot">◆</span></div>
      <div class="marquee-item"><span>Wedding Day Coverage</span><span class="marquee-dot">◆</span></div>
      <div class="marquee-item"><span>Destination Shoots</span><span class="marquee-dot">◆</span></div>
      <div class="marquee-item"><span>Couple Portraits</span><span class="marquee-dot">◆</span></div>
      <div class="marquee-item"><span>Tamil Weddings</span><span class="marquee-dot">◆</span></div>
    </div>
  </div>

  <!-- FEATURED WORK — BENTO GRID -->
  <section class="featured-work">
    <div class="container">
      <div class="section-header" data-reveal="up">
        <span class="section-tag">Love Stories</span>
        <h2>Chapters Before Forever</h2>
        <div class="divider">
          <div class="divider-line"></div>
          <div class="divider-gem-sm"></div>
          <div class="divider-gem"></div>
          <div class="divider-gem-sm"></div>
          <div class="divider-line"></div>
        </div>
        <p>The butterflies. The stolen glances. The giggles that only you two share. We live for these moments — and we make sure you never forget them.</p>
      </div>

      <div class="portfolio-bento">
        <!-- Large feature item -->
        <div class="portfolio-item bento-large" data-reveal="left">
          <img src="assets/pre-wedding/1.jpg" alt="Couple in golden hour pre-wedding shoot" loading="lazy" />
          <div class="portfolio-overlay">
            <div>
              <h4>The Chapter Before Forever</h4>
              <p>Pre-Wedding · Golden Hour</p>
            </div>
          </div>
        </div>
        <!-- Right column top row -->
        <div class="portfolio-item" data-reveal="up" data-delay="100">
          <img src="assets/pre-wedding/2.jpg" alt="Couple sharing a quiet moment" loading="lazy" />
          <div class="portfolio-overlay">
            <div><h4>Stolen Glances</h4><p>Pre-Wedding · Natural Light</p></div>
          </div>
        </div>
        <div class="portfolio-item" data-reveal="up" data-delay="200">
          <img src="assets/pre-wedding/3.jpg" alt="Couple laughing together pre-wedding" loading="lazy" />
          <div class="portfolio-overlay">
            <div><h4>Just the Two of Us</h4><p>Pre-Wedding · 2024</p></div>
          </div>
        </div>
        <!-- Right column bottom row -->
        <div class="portfolio-item" data-reveal="up" data-delay="150">
          <img src="assets/pre-wedding/4.jpg" alt="Couple at sunset pre-wedding" loading="lazy" />
          <div class="portfolio-overlay">
            <div><h4>Golden Hour Magic</h4><p>Pre-Wedding · Sunset</p></div>
          </div>
        </div>
        <div class="portfolio-item" data-reveal="up" data-delay="250">
          <img src="assets/pre-wedding/5.jpg" alt="Romantic pre-wedding portrait" loading="lazy" />
          <div class="portfolio-overlay">
            <div><h4>Written in the Stars</h4><p>Pre-Wedding · 2024</p></div>
          </div>
        </div>
      </div>

      <div class="portfolio-cta-wrap" data-reveal="up" data-delay="100">
        <a href="work.php" class="btn-maroon"><span>View Full Portfolio →</span></a>
      </div>
    </div>
  </section>

  <!-- STATS BAND -->
  <div class="stats-band">
    <div class="container">
      <div class="stats-grid">
        <div class="stat-item" data-reveal="up">
          <span class="stat-num" data-count="350" data-suffix="+">350+</span>
          <span class="stat-label">Weddings Captured</span>
        </div>
        <div class="stat-item" data-reveal="up" data-delay="100">
          <span class="stat-num" data-count="8">8</span>
          <span class="stat-label">Years of Excellence</span>
        </div>
        <div class="stat-item" data-reveal="up" data-delay="200">
          <span class="stat-num" data-count="500" data-suffix="+">500+</span>
          <span class="stat-label">Happy Couples</span>
        </div>
        <div class="stat-item" data-reveal="up" data-delay="300">
          <span class="stat-num" data-count="12">12</span>
          <span class="stat-label">Industry Awards</span>
        </div>
      </div>
    </div>
  </div>

  <!-- ABOUT TEASER -->
  <section class="about-teaser">
    <div class="container">
      <div class="about-grid">
        <div class="about-image-wrap" data-reveal="left">
          <div class="about-img-frame"></div>
          <img src="assets/pre-wedding/6.jpg" alt="Couple in a romantic pre-wedding shoot" class="about-img-main" loading="lazy" data-parallax="0.15" />
        </div>
        <div class="about-text" data-reveal="right">
          <span class="section-tag">Why Pre-Wedding?</span>
          <h2>Because Your Love Deserves Its Own Chapter</h2>
          <div class="divider" style="justify-content:flex-start; margin:0.8rem 0 1.4rem;">
            <div class="divider-line" style="width:40px;"></div>
            <div class="divider-gem"></div>
          </div>
          <p>A pre-wedding shoot isn't just photos — it's the prologue to your forever. It's you, together, before the world watches. It's nervous laughter, stolen glances, and the quiet magic of two people deeply in love.</p>
          <p style="margin-top:1rem;">We are CLICK CLICK photography — Chennai's storytellers for young couples who believe their love is cinematic, their moments are worth preserving, and their journey together is the greatest story ever told.</p>
          <div class="traits-list">
            <div class="trait-item">
              <div class="trait-dot"></div>
              <span>Comfort-First — We make you forget there's a camera</span>
            </div>
            <div class="trait-item">
              <div class="trait-dot"></div>
              <span>Location Scouting — We find spots as unique as your story</span>
            </div>
            <div class="trait-item">
              <div class="trait-dot"></div>
              <span>Emotion-Led — Real moments, not rehearsed poses</span>
            </div>
          </div>
          <a href="about.php" class="btn-maroon"><span>Meet Us →</span></a>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES — EDITORIAL PACKAGES -->
  <section class="services-teaser" style="background:var(--bg);">
    <div class="container">
      <div class="section-header" data-reveal="up">
        <span class="section-tag">Packages</span>
        <h2>Find Your Perfect Package</h2>
        <div class="divider">
          <div class="divider-line"></div>
          <div class="divider-gem-sm"></div>
          <div class="divider-gem"></div>
          <div class="divider-gem-sm"></div>
          <div class="divider-line"></div>
        </div>
        <p>From intimate pre-wedding adventures to grand wedding celebrations — every package is crafted to honour the unique love story you share.</p>
      </div>

      <div class="pkg-editorial" data-stagger="100">
        <div class="pkg-ed-card">
          <div class="pkg-ed-num">01</div>
          <h3>Classic</h3>
          <div class="pkg-ed-price">₹45,000 <small>+ GST</small></div>
          <p>Perfect for intimate ceremonies. One-day full coverage, two photographers, 300+ edited photos delivered in 3 weeks.</p>
          <a href="services.php" class="pkg-ed-link">Explore Package →</a>
        </div>
        <div class="pkg-ed-card pkg-ed-featured">
          <div class="pkg-ed-badge">Most Popular</div>
          <div class="pkg-ed-num">02</div>
          <h3>Signature</h3>
          <div class="pkg-ed-price">₹85,000 <small>+ GST</small></div>
          <p>Two-day coverage, cinematic highlight reel, 600+ edited photos, pre-wedding shoot, and premium photobook.</p>
          <a href="services.php" class="pkg-ed-link">Explore Package →</a>
        </div>
        <div class="pkg-ed-card">
          <div class="pkg-ed-num">03</div>
          <h3>Legacy</h3>
          <div class="pkg-ed-price">₹1,50,000 <small>+ GST</small></div>
          <p>Full multi-day coverage, drone, 1000+ photos, luxury heirloom album, same-day highlight edit, dedicated team.</p>
          <a href="services.php" class="pkg-ed-link">Explore Package →</a>
        </div>
      </div>
    </div>
  </section>

  <!-- GOOGLE REVIEWS -->
  <section class="grev-section">
    <div class="floral-section floral-testi-mid">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" fill="currentColor">
        <g transform="translate(100,100)">
          <ellipse rx="13" ry="46" transform="rotate(0) translate(0,-10)"/><ellipse rx="13" ry="46" transform="rotate(45) translate(0,-10)"/>
          <ellipse rx="13" ry="46" transform="rotate(90) translate(0,-10)"/><ellipse rx="13" ry="46" transform="rotate(135) translate(0,-10)"/>
          <ellipse rx="13" ry="46" transform="rotate(180) translate(0,-10)"/><ellipse rx="13" ry="46" transform="rotate(225) translate(0,-10)"/>
          <ellipse rx="13" ry="46" transform="rotate(270) translate(0,-10)"/><ellipse rx="13" ry="46" transform="rotate(315) translate(0,-10)"/>
          <ellipse rx="9" ry="30" transform="rotate(22.5) translate(0,-6)" opacity="0.5"/><ellipse rx="9" ry="30" transform="rotate(67.5) translate(0,-6)" opacity="0.5"/>
          <ellipse rx="9" ry="30" transform="rotate(112.5) translate(0,-6)" opacity="0.5"/><ellipse rx="9" ry="30" transform="rotate(157.5) translate(0,-6)" opacity="0.5"/>
          <ellipse rx="9" ry="30" transform="rotate(202.5) translate(0,-6)" opacity="0.5"/><ellipse rx="9" ry="30" transform="rotate(247.5) translate(0,-6)" opacity="0.5"/>
          <ellipse rx="9" ry="30" transform="rotate(292.5) translate(0,-6)" opacity="0.5"/><ellipse rx="9" ry="30" transform="rotate(337.5) translate(0,-6)" opacity="0.5"/>
          <circle r="17"/>
        </g>
      </svg>
    </div>
    <div class="container">

      <!-- Section heading -->
      <div class="grev-heading" data-reveal="up">
        <span class="section-tag">Client Voices</span>
        <div class="grev-heading-row">
          <h2>What Our Clients Say</h2>
          <div class="grev-powered-by">
            <svg class="grev-g-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
              <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
              <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
              <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
            </svg>
            <span>Google Reviews</span>
          </div>
        </div>
      </div>

      <!-- Rating summary -->
      <div class="grev-summary" data-reveal="up">
        <div class="grev-score-block">
          <span class="grev-score-num">4.9</span>
          <div class="grev-score-stars">★★★★★</div>
          <span class="grev-score-label">92 reviews</span>
        </div>
        <div class="grev-divider"></div>
        <div class="grev-bars">
          <div class="grev-bar-row"><span>5</span><div class="grev-bar"><div style="width:96%"></div></div><span class="grev-bar-pct">96%</span></div>
          <div class="grev-bar-row"><span>4</span><div class="grev-bar"><div style="width:3%"></div></div><span class="grev-bar-pct">3%</span></div>
          <div class="grev-bar-row"><span>3</span><div class="grev-bar"><div style="width:1%"></div></div><span class="grev-bar-pct">1%</span></div>
          <div class="grev-bar-row"><span>2</span><div class="grev-bar"><div style="width:0%"></div></div><span class="grev-bar-pct">0%</span></div>
          <div class="grev-bar-row"><span>1</span><div class="grev-bar"><div style="width:0%"></div></div><span class="grev-bar-pct">0%</span></div>
        </div>
      </div>

      <!-- Review cards -->
      <div class="grev-grid" data-reveal="up">

        <!-- Card 1 -->
        <div class="grev-card">
          <div class="grev-card-top">
            <div class="grev-avatar" style="background:#4285F4">D</div>
            <div class="grev-card-meta">
              <div class="grev-card-name">Dhivagar</div>
              <div class="grev-card-info">5 reviews · 1 photo</div>
            </div>
            <svg class="grev-card-glogo" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
              <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
              <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
              <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
            </svg>
          </div>
          <div class="grev-card-stars">
            <span class="grev-stars-row">★★★★★</span>
            <span class="grev-card-date">5 months ago</span>
          </div>
          <p class="grev-card-text">We visited the studio for a 1-year-old baby boy's birthday photoshoot. The experience was wonderful — the photographer was patient, creative, and very friendly with the child. We got some amazing shots, and one of them turned out to be so perfect that we've decided to frame it and hang it on our wall.</p>
        </div>

        <!-- Card 2 -->
        <div class="grev-card">
          <div class="grev-card-top">
            <div class="grev-avatar" style="background:#EA4335">J</div>
            <div class="grev-card-meta">
              <div class="grev-card-name">Jashwanth Kumar</div>
              <div class="grev-card-info">3 reviews</div>
            </div>
            <svg class="grev-card-glogo" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
              <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
              <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
              <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
            </svg>
          </div>
          <div class="grev-card-stars">
            <span class="grev-stars-row">★★★★★</span>
            <span class="grev-card-date">7 months ago</span>
          </div>
          <p class="grev-card-text">Amazing experience at CLICK CLICK photography, Chennai! The team is so humble, creative, and made our kid's birthday shoot truly special. Beautiful photos and great vibes!</p>
        </div>

        <!-- Card 3 -->
        <div class="grev-card">
          <div class="grev-card-top">
            <div class="grev-avatar" style="background:#34A853">A</div>
            <div class="grev-card-meta">
              <div class="grev-card-name">Aswini A</div>
              <div class="grev-card-info">2 reviews</div>
            </div>
            <svg class="grev-card-glogo" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
              <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
              <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
              <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
            </svg>
          </div>
          <div class="grev-card-stars">
            <span class="grev-stars-row">★★★★★</span>
            <span class="grev-card-date">a year ago</span>
          </div>
          <p class="grev-card-text">Mr. Kumar is very professional. The studio has lots of theme setups ideal for kids photoshoots. CLICK CLICK photography is definitely budget friendly. My son had a great time during the shoot — he felt comfortable and relaxed.</p>
        </div>

        <!-- Card 4 -->
        <div class="grev-card">
          <div class="grev-card-top">
            <div class="grev-avatar" style="background:#FF6D00">B</div>
            <div class="grev-card-meta">
              <div class="grev-card-name">Bhuvanesh Kumar</div>
              <div class="grev-card-info">4 reviews</div>
            </div>
            <svg class="grev-card-glogo" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
              <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
              <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
              <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
            </svg>
          </div>
          <div class="grev-card-stars">
            <span class="grev-stars-row">★★★★★</span>
            <span class="grev-card-date">2 years ago</span>
          </div>
          <p class="grev-card-text">I recently had my passport photo taken at CLICK CLICK photography, and it was a fantastic experience! The photographer was highly professional, and the service was excellent. Great value for money. I'm completely satisfied and would definitely recommend CLICK CLICK photography to anyone looking for photography services.</p>
        </div>

        <!-- Card 5 -->
        <div class="grev-card">
          <div class="grev-card-top">
            <div class="grev-avatar" style="background:#8430CE">S</div>
            <div class="grev-card-meta">
              <div class="grev-card-name">Santhosh Nagalingam</div>
              <div class="grev-card-info">1 review</div>
            </div>
            <svg class="grev-card-glogo" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
              <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
              <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
              <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
            </svg>
          </div>
          <div class="grev-card-stars">
            <span class="grev-stars-row">★★★★★</span>
            <span class="grev-card-date">8 months ago</span>
          </div>
          <p class="grev-card-text">Visited CLICK CLICK photography for my baby's 1st birthday shoot. Very satisfied with the work — the photographer was very professional and friendly. Price is very affordable. Overall service is very nice and I am satisfied.</p>
        </div>

        <!-- Card 6 -->
        <div class="grev-card">
          <div class="grev-card-top">
            <div class="grev-avatar" style="background:#00897B">T</div>
            <div class="grev-card-meta">
              <div class="grev-card-name">The Real Soul Sai</div>
              <div class="grev-card-info">8 reviews</div>
            </div>
            <svg class="grev-card-glogo" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
              <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
              <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
              <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
            </svg>
          </div>
          <div class="grev-card-stars">
            <span class="grev-stars-row">★★★★★</span>
            <span class="grev-card-date">3 months ago</span>
          </div>
          <p class="grev-card-text">Such a humble person, very passionate towards his work. Wonderful experience. Valid price for all the photo shoots.</p>
        </div>

      </div><!-- /grev-grid -->

      <!-- CTA -->
      <div class="grev-cta-wrap" data-reveal="up">
        <a href="https://www.google.com/maps/place/smile+please+photography/@13.1134793,80.2129395,17z/" target="_blank" rel="noopener" class="grev-cta-btn">
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
          </svg>
          See all 92 reviews on Google
        </a>
      </div>

    </div>
  </section>

  <!-- CTA STRIP -->
  <div class="cta-strip">
    <div class="floral-section floral-cta-l">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 180 180" fill="currentColor">
        <g transform="translate(90,90)">
          <ellipse rx="8" ry="36" transform="rotate(0) translate(0,-22)"/><ellipse rx="8" ry="36" transform="rotate(30) translate(0,-22)"/>
          <ellipse rx="8" ry="36" transform="rotate(60) translate(0,-22)"/><ellipse rx="8" ry="36" transform="rotate(90) translate(0,-22)"/>
          <ellipse rx="8" ry="36" transform="rotate(120) translate(0,-22)"/><ellipse rx="8" ry="36" transform="rotate(150) translate(0,-22)"/>
          <ellipse rx="8" ry="36" transform="rotate(180) translate(0,-22)"/><ellipse rx="8" ry="36" transform="rotate(210) translate(0,-22)"/>
          <ellipse rx="8" ry="36" transform="rotate(240) translate(0,-22)"/><ellipse rx="8" ry="36" transform="rotate(270) translate(0,-22)"/>
          <ellipse rx="8" ry="36" transform="rotate(300) translate(0,-22)"/><ellipse rx="8" ry="36" transform="rotate(330) translate(0,-22)"/>
          <ellipse rx="5" ry="22" transform="rotate(15) translate(0,-12)" opacity="0.6"/><ellipse rx="5" ry="22" transform="rotate(75) translate(0,-12)" opacity="0.6"/>
          <ellipse rx="5" ry="22" transform="rotate(135) translate(0,-12)" opacity="0.6"/><ellipse rx="5" ry="22" transform="rotate(195) translate(0,-12)" opacity="0.6"/>
          <ellipse rx="5" ry="22" transform="rotate(255) translate(0,-12)" opacity="0.6"/><ellipse rx="5" ry="22" transform="rotate(315) translate(0,-12)" opacity="0.6"/>
          <circle cx="0" cy="-60" r="3.5"/><circle cx="42.4" cy="-42.4" r="3.5"/>
          <circle cx="60" cy="0" r="3.5"/><circle cx="42.4" cy="42.4" r="3.5"/>
          <circle cx="0" cy="60" r="3.5"/><circle cx="-42.4" cy="42.4" r="3.5"/>
          <circle cx="-60" cy="0" r="3.5"/><circle cx="-42.4" cy="-42.4" r="3.5"/>
          <circle r="14"/><circle r="7" fill="rgba(255,255,255,0.3)"/>
        </g>
      </svg>
    </div>
    <div class="floral-section floral-cta-r">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 180 180" fill="currentColor">
        <g transform="translate(90,90)">
          <ellipse rx="8" ry="36" transform="rotate(0) translate(0,-22)"/><ellipse rx="8" ry="36" transform="rotate(30) translate(0,-22)"/>
          <ellipse rx="8" ry="36" transform="rotate(60) translate(0,-22)"/><ellipse rx="8" ry="36" transform="rotate(90) translate(0,-22)"/>
          <ellipse rx="8" ry="36" transform="rotate(120) translate(0,-22)"/><ellipse rx="8" ry="36" transform="rotate(150) translate(0,-22)"/>
          <ellipse rx="8" ry="36" transform="rotate(180) translate(0,-22)"/><ellipse rx="8" ry="36" transform="rotate(210) translate(0,-22)"/>
          <ellipse rx="8" ry="36" transform="rotate(240) translate(0,-22)"/><ellipse rx="8" ry="36" transform="rotate(270) translate(0,-22)"/>
          <ellipse rx="8" ry="36" transform="rotate(300) translate(0,-22)"/><ellipse rx="8" ry="36" transform="rotate(330) translate(0,-22)"/>
          <ellipse rx="5" ry="22" transform="rotate(15) translate(0,-12)" opacity="0.6"/><ellipse rx="5" ry="22" transform="rotate(75) translate(0,-12)" opacity="0.6"/>
          <ellipse rx="5" ry="22" transform="rotate(135) translate(0,-12)" opacity="0.6"/><ellipse rx="5" ry="22" transform="rotate(195) translate(0,-12)" opacity="0.6"/>
          <ellipse rx="5" ry="22" transform="rotate(255) translate(0,-12)" opacity="0.6"/><ellipse rx="5" ry="22" transform="rotate(315) translate(0,-12)" opacity="0.6"/>
          <circle cx="0" cy="-60" r="3.5"/><circle cx="42.4" cy="-42.4" r="3.5"/>
          <circle cx="60" cy="0" r="3.5"/><circle cx="42.4" cy="42.4" r="3.5"/>
          <circle cx="0" cy="60" r="3.5"/><circle cx="-42.4" cy="42.4" r="3.5"/>
          <circle cx="-60" cy="0" r="3.5"/><circle cx="-42.4" cy="-42.4" r="3.5"/>
          <circle r="14"/><circle r="7" fill="rgba(255,255,255,0.3)"/>
        </g>
      </svg>
    </div>
    <div class="container">
      <h2 data-reveal="up">Your Pre-Wedding Story Awaits</h2>
      <p data-reveal="up" data-delay="100">Dates fill up fast — don't let your love story wait. Let's create something beautiful together, just for the two of you.</p>
      <div class="cta-strip-btns" data-reveal="up" data-delay="200">
        <a href="https://wa.me/917010309601" class="btn-whatsapp">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.554 4.118 1.524 5.847L0 24l6.335-1.524A11.938 11.938 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.79 9.79 0 01-4.988-1.362l-.358-.213-3.724.895.924-3.617-.234-.371A9.79 9.79 0 012.182 12C2.182 6.58 6.58 2.182 12 2.182S21.818 6.58 21.818 12 17.42 21.818 12 21.818z"/></svg>
          WhatsApp Us
        </a>
        <a href="contact.php" class="btn-ghost">Book a Consultation →</a>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <span class="logo-main" style="font-family:'Cormorant Garamond',serif;font-style:italic;color:var(--gold-light);font-size:1.7rem;display:block;margin-bottom:.3rem;">CLICK CLICK photography</span>
          <span style="font-family:'Lato',sans-serif;font-size:.65rem;letter-spacing:.22em;text-transform:uppercase;color:rgba(255,245,230,.45);display:block;margin-bottom:1.2rem;">Chennai</span>
          <p>Capturing the timeless beauty of Tamil Nadu weddings with artistry, warmth, and an unwavering eye for moments that matter most.</p>
        </div>
        <div class="footer-col">
          <h4>Navigate</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="work.php">Our Work</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="stories.php">Stories</a></li>
            <li><a href="experience.php">Experience</a></li>
            <li><a href="contact.php">Book Now</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Services</h4>
          <ul>
            <li><a href="services.php">Wedding Photography</a></li>
            <li><a href="services.php">Pre-Wedding Shoots</a></li>
            <li><a href="services.php">Engagement Shoots</a></li>
            <li><a href="services.php">Cinematic Videography</a></li>
            <li><a href="services.php">Drone Coverage</a></li>
            <li><a href="services.php">Luxury Photo Albums</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Contact Us</h4>
          <div class="footer-contact-item">
            <span class="icon">📞</span><span>+91 70103 09601</span>
          </div>
          <div class="footer-contact-item">
            <span class="icon">✉️</span><span>withlovephotography@gmail.com</span>
          </div>
          <div class="footer-contact-item">
            <span class="icon">📍</span><span>Anna Nagar, Chennai — 600 040, Tamil Nadu</span>
          </div>
          <div class="footer-contact-item">
            <span class="icon">🕐</span><span>Mon–Sat: 10AM – 7PM</span>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <p>© 2025 <span>CLICK CLICK photography</span>. All rights reserved. Crafted with <span>♥</span> in Chennai.</p>
      </div>
    </div>
  </footer>

  <script>
    /* ─── LOADER ──────────────────────────────────────────────────── */
    function dismissLoader() {
      const l = document.getElementById('loader');
      if (!l || l.classList.contains('hidden')) return;
      l.classList.add('hidden');
      document.body.style.overflow = '';
      setTimeout(() => l.classList.add('gone'), 1400);
    }
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', () => setTimeout(dismissLoader, 1000));
    } else { setTimeout(dismissLoader, 1000); }
    setTimeout(dismissLoader, 2800);
    document.body.style.overflow = 'hidden';

    /* ─── CUSTOM CURSOR ───────────────────────────────────────────── */
    const dot  = document.getElementById('cursorDot');
    const ring = document.getElementById('cursorRing');
    let rX = 0, rY = 0, dX = 0, dY = 0;
    document.addEventListener('mousemove', e => {
      dX = e.clientX; dY = e.clientY;
      dot.style.left = dX + 'px'; dot.style.top = dY + 'px';
    });
    (function animRing() {
      rX += (dX - rX) * 0.13; rY += (dY - rY) * 0.13;
      ring.style.left = rX + 'px'; ring.style.top = rY + 'px';
      requestAnimationFrame(animRing);
    })();
    document.querySelectorAll('a, button, .portfolio-item, .pkg-ed-card').forEach(el => {
      el.addEventListener('mouseenter', () => { dot.classList.add('hovering'); ring.classList.add('hovering'); });
      el.addEventListener('mouseleave', () => { dot.classList.remove('hovering'); ring.classList.remove('hovering'); });
    });

    /* ─── MAGNETIC BUTTONS ────────────────────────────────────────── */
    document.querySelectorAll('.btn-maroon, .btn-ghost, .btn-whatsapp').forEach(btn => {
      btn.addEventListener('mousemove', e => {
        const r = btn.getBoundingClientRect();
        const x = (e.clientX - r.left - r.width  / 2) * 0.22;
        const y = (e.clientY - r.top  - r.height / 2) * 0.22;
        btn.style.transform = `translate(${x}px, ${y}px)`;
      });
      btn.addEventListener('mouseleave', () => { btn.style.transform = ''; });
    });

    /* ─── PAGE TRANSITIONS ────────────────────────────────────────── */
    const overlay = document.getElementById('pageOverlay');
    document.querySelectorAll('a[href]').forEach(a => {
      const href = a.getAttribute('href');
      if (!href || href.startsWith('#') || href.startsWith('http') || href.startsWith('mailto') || href.startsWith('tel')) return;
      a.addEventListener('click', e => {
        e.preventDefault();
        overlay.classList.add('active');
        setTimeout(() => { window.location.href = href; }, 360);
      });
    });
    window.addEventListener('pageshow', () => { overlay.classList.remove('active'); });

    /* ─── NAVBAR SCROLL ───────────────────────────────────────────── */
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
      if (window.scrollY > 60) {
        navbar.classList.remove('transparent'); navbar.classList.add('scrolled');
      } else {
        navbar.classList.add('transparent'); navbar.classList.remove('scrolled');
      }
    });

    /* ─── HAMBURGER ───────────────────────────────────────────────── */
    const hamburger   = document.getElementById('hamburger');
    const mobileMenu  = document.getElementById('mobileMenu');
    hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('open');
      mobileMenu.classList.toggle('open');
      document.body.style.overflow = mobileMenu.classList.contains('open') ? 'hidden' : '';
    });
    mobileMenu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        hamburger.classList.remove('open');
        mobileMenu.classList.remove('open');
        document.body.style.overflow = '';
      });
    });

    /* ─── SCROLL ANIMATIONS (legacy observer for .stagger etc.) ────── */
    const obs = new IntersectionObserver(entries => {
      entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('vis'); obs.unobserve(e.target); } });
    }, { threshold: 0.12 });
    document.querySelectorAll('.fade-up,.fade-left,.fade-right,.stagger').forEach(el => obs.observe(el));
  </script>
  <script src="js/scroll.js"></script>
</body>
</html>
