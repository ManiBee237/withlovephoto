<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Book Your Date · CLICK CLICK photography Chennai</title>
  <meta name="description" content="Book CLICK CLICK photography for your pre-wedding shoot or Tamil Nadu wedding. Reach out today — dates fill fast." />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <style>
    /* ── CONTACT PAGE ─────────────────────────────────────────────── */

    /* HERO */
    .contact-hero {
      position: relative;
      height: 55vh;
      min-height: 400px;
      display: flex;
      align-items: flex-end;
      overflow: hidden;
    }
    .contact-hero-bg {
      position: absolute;
      inset: 0;
      background: url('assets/pre-wedding/2.jpg') center 40% / cover no-repeat;
      transform: scale(1.04);
      animation: hero-zoom 14s ease-in-out forwards;
    }
    @keyframes hero-zoom {
      from { transform: scale(1.08); }
      to   { transform: scale(1.00); }
    }
    .contact-hero-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(
        to bottom,
        rgba(20,4,4,.15) 0%,
        rgba(20,4,4,.30) 40%,
        rgba(94,18,18,.82) 85%,
        rgba(20,4,4,.95) 100%
      );
    }
    .contact-hero::after {
      content: '';
      position: absolute;
      bottom: 0; left: 0; right: 0;
      height: 2px;
      background: linear-gradient(to right, transparent, #C9941A 30%, #E8B430 50%, #C9941A 70%, transparent);
      z-index: 3;
    }
    .contact-hero-content {
      position: relative;
      z-index: 2;
      padding: 0 2rem 3.5rem;
      max-width: 1280px;
      margin: 0 auto;
      width: 100%;
    }
    .contact-hero-content .breadcrumb {
      font-size: .6rem;
      letter-spacing: .24em;
      text-transform: uppercase;
      color: rgba(255,245,210,.5);
      margin-bottom: .9rem;
    }
    .contact-hero-content .breadcrumb a { color: inherit; text-decoration: none; }
    .contact-hero-content .breadcrumb a:hover { color: var(--gold-light); }
    .contact-hero-content h1 {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(2.5rem, 6vw, 4.5rem);
      color: #fff;
      font-style: italic;
      line-height: 1.1;
      margin-bottom: .5rem;
    }
    .contact-hero-content h1 em { color: #E8B430; }
    .contact-hero-content p {
      font-size: .85rem;
      color: rgba(255,245,210,.65);
      letter-spacing: .12em;
    }

    /* CONTACT SECTION */
    .contact-section { background: var(--bg); }

    .contact-grid {
      display: grid;
      grid-template-columns: 1fr 1.45fr;
      gap: 4rem;
      align-items: start;
    }

    /* ── LEFT COLUMN ─────────────────────────────────────────────── */
    .contact-left {
      position: sticky;
      top: 100px;
    }

    /* Photo frame with quote overlay */
    .contact-photo-frame {
      position: relative;
      border-radius: var(--radius-md);
      overflow: hidden;
      margin-bottom: 2.2rem;
      box-shadow: 0 20px 60px rgba(94,18,18,.22);
    }
    .contact-photo-frame::before {
      content: '';
      position: absolute;
      inset: 0;
      border: 2px solid rgba(201,148,26,.35);
      border-radius: var(--radius-md);
      z-index: 2;
      pointer-events: none;
    }
    .contact-photo-frame img {
      width: 100%;
      height: 260px;
      object-fit: cover;
      display: block;
      transition: transform 8s ease;
    }
    .contact-photo-frame:hover img { transform: scale(1.04); }
    .contact-photo-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(20,4,4,.82) 0%, rgba(20,4,4,.1) 55%);
      display: flex;
      align-items: flex-end;
      padding: 1.4rem 1.6rem;
      z-index: 1;
    }
    .contact-photo-quote {
      font-family: 'Cormorant Garamond', serif;
      font-style: italic;
      font-size: 1.1rem;
      color: #fff;
      line-height: 1.5;
    }
    .contact-photo-quote em { color: #E8B430; }

    /* Section label & heading */
    .contact-left .section-tag { display: block; margin-bottom: .5rem; }
    .contact-left h2 {
      font-size: clamp(1.6rem, 2.8vw, 2.1rem);
      margin-bottom: .8rem;
      line-height: 1.25;
    }
    .contact-left > p {
      margin-bottom: 2rem;
      font-size: .92rem;
      line-height: 1.75;
    }

    /* Info cards */
    .info-items { display: flex; flex-direction: column; gap: 1rem; margin-bottom: 2rem; }

    .info-item {
      display: flex;
      align-items: center;
      gap: 1.2rem;
      padding: 1.1rem 1.4rem;
      background: var(--white);
      border-radius: var(--radius-sm);
      border: 1px solid rgba(201,148,26,.14);
      box-shadow: 0 2px 14px rgba(94,18,18,.06);
      transition: all .35s ease;
      position: relative;
      overflow: hidden;
    }
    .info-item::before {
      content: '';
      position: absolute;
      left: 0; top: 0; bottom: 0;
      width: 3px;
      background: linear-gradient(to bottom, var(--gold), var(--maroon));
      opacity: 0;
      transition: opacity .35s ease;
      border-radius: 0 2px 2px 0;
    }
    .info-item:hover {
      border-color: rgba(201,148,26,.42);
      transform: translateX(6px);
      box-shadow: 0 8px 32px rgba(139,28,28,.13);
      background: linear-gradient(to right, rgba(255,248,240,1), var(--white));
    }
    .info-item:hover::before { opacity: 1; }

    .info-icon {
      width: 44px; height: 44px;
      background: none;
      border-radius: 0;
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0;
      box-shadow: none;
      border: none;
      transition: all .35s ease;
    }
    .info-icon svg {
      width: 26px; height: 26px;
      stroke: #C9941A;
      transition: all .35s cubic-bezier(.34,1.56,.64,1);
    }
    .info-item:hover .info-icon svg {
      stroke: #8B1C1C;
      transform: scale(1.25) rotate(-8deg);
      filter: drop-shadow(0 3px 8px rgba(139,28,28,.3));
    }

    .info-text strong {
      display: block;
      font-size: .68rem; font-weight: 700;
      letter-spacing: .14em; text-transform: uppercase;
      color: var(--saffron); margin-bottom: .2rem;
    }
    .info-text span, .info-text a {
      font-size: .9rem; color: var(--text-dark); font-weight: 600;
    }
    .info-text a { transition: color .3s; }
    .info-text a:hover { color: var(--maroon); }

    /* WhatsApp button */
    .whatsapp-btn {
      display: flex; align-items: center; gap: .8rem;
      background: #25D366; color: #fff;
      font-family: var(--font-body); font-size: .88rem; font-weight: 700;
      letter-spacing: .08em;
      padding: 1rem 1.6rem; border-radius: var(--radius-sm);
      box-shadow: 0 4px 18px rgba(37,211,102,.32);
      transition: var(--transition); width: 100%; justify-content: center;
      margin-bottom: .9rem;
    }
    .whatsapp-btn:hover {
      background: #1fad57;
      transform: translateY(-2px);
      box-shadow: 0 8px 28px rgba(37,211,102,.42);
    }
    .whatsapp-icon { width: 20px; height: 20px; flex-shrink: 0; }

    /* Availability note */
    .availability-note {
      background: rgba(201,148,26,.07);
      border: 1px solid rgba(201,148,26,.22);
      border-radius: var(--radius-sm);
      padding: .9rem 1.1rem;
      display: flex; align-items: flex-start; gap: .75rem;
    }
    .availability-note p {
      font-size: .8rem; color: var(--text-mid);
      line-height: 1.6; margin: 0;
    }
    .availability-note strong { color: var(--maroon); }

    /* ── RIGHT COLUMN — FORM ─────────────────────────────────────── */
    .booking-form-wrap {
      background: var(--white);
      border-radius: var(--radius-lg);
      overflow: hidden;
      border: 1px solid rgba(201,148,26,.18);
      box-shadow: 0 20px 60px rgba(94,18,18,.12);
    }

    /* Gold gradient bar at top of form card */
    .form-card-bar {
      height: 4px;
      background: linear-gradient(to right, var(--maroon) 0%, var(--gold) 50%, var(--maroon) 100%);
    }

    /* Form header with background image strip */
    .form-header {
      padding: 2rem 2.8rem 1.6rem;
      background: linear-gradient(135deg, rgba(94,18,18,.04) 0%, rgba(201,148,26,.05) 100%);
      border-bottom: 1px solid rgba(201,148,26,.1);
    }
    .form-header h3 {
      font-family: var(--font-heading);
      font-style: italic;
      font-size: 1.75rem;
      color: var(--maroon);
      margin-bottom: .3rem;
    }
    .form-header p { font-size: .84rem; color: var(--text-mid); }

    /* Form body */
    .booking-form {
      padding: 2.2rem 2.8rem 2.8rem;
      display: flex;
      flex-direction: column;
      gap: 1.3rem;
    }

    /* Section labels within form */
    .form-section-label {
      font-family: var(--font-body);
      font-size: .65rem; font-weight: 700;
      letter-spacing: .24em; text-transform: uppercase;
      color: var(--maroon);
      display: flex; align-items: center; gap: .75rem;
      margin-bottom: -.2rem;
    }
    .form-section-label::after {
      content: ''; flex: 1;
      height: 1px;
      background: linear-gradient(to right, rgba(201,148,26,.3), transparent);
    }

    .form-row {
      display: grid; grid-template-columns: 1fr 1fr; gap: 1.1rem;
    }
    .form-group {
      display: flex; flex-direction: column; gap: .4rem;
    }
    .form-group label {
      font-size: .72rem; font-weight: 700;
      letter-spacing: .1em; text-transform: uppercase;
      color: var(--text-mid);
    }
    .form-group .required { color: var(--maroon); }

    .form-group input,
    .form-group select,
    .form-group textarea {
      width: 100%;
      padding: .82rem 1rem;
      background: var(--bg);
      border: 1.5px solid rgba(201,148,26,.18);
      border-radius: var(--radius-sm);
      font-family: var(--font-body);
      font-size: .92rem;
      color: var(--text-dark);
      transition: border-color .3s, box-shadow .3s, background .3s;
      outline: none;
      appearance: none; -webkit-appearance: none;
    }
    .form-group input::placeholder,
    .form-group textarea::placeholder { color: rgba(92,48,48,.35); }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
      border-color: var(--gold);
      box-shadow: 0 0 0 3px rgba(201,148,26,.12);
      background: var(--white);
    }
    .form-group select {
      cursor: pointer;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%235C3030' d='M6 8L1 3h10z'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 1rem center;
      padding-right: 2.5rem;
    }
    .form-group textarea {
      resize: vertical; min-height: 110px; line-height: 1.65;
    }

    /* Submit area */
    .form-submit { display: flex; flex-direction: column; gap: .75rem; }

    .form-submit-btn {
      width: 100%; padding: 1.1rem;
      background: linear-gradient(135deg, var(--maroon), var(--maroon-dark));
      color: var(--white);
      font-family: var(--font-body);
      font-size: .88rem; font-weight: 700;
      letter-spacing: .14em; text-transform: uppercase;
      border: none; border-radius: var(--radius-sm);
      cursor: pointer; transition: var(--transition);
      box-shadow: 0 4px 20px rgba(139,28,28,.35);
      position: relative; overflow: hidden;
      display: flex; align-items: center; justify-content: center; gap: .6rem;
    }
    .form-submit-btn:hover:not(:disabled) {
      transform: translateY(-2px);
      box-shadow: 0 8px 30px rgba(139,28,28,.45);
    }
    .form-submit-btn:disabled { opacity: .75; cursor: not-allowed; transform: none; }

    /* Spinner */
    .btn-spinner {
      width: 16px; height: 16px;
      border: 2px solid rgba(255,255,255,.4);
      border-top-color: #fff;
      border-radius: 50%;
      animation: spin .7s linear infinite;
      display: none;
    }
    @keyframes spin { to { transform: rotate(360deg); } }
    .form-submit-btn.loading .btn-spinner { display: block; }
    .form-submit-btn.loading .btn-text::after { content: '…'; }

    .form-note {
      font-size: .73rem; color: var(--text-mid);
      text-align: center; line-height: 1.55;
    }

    /* Error message */
    .form-error-msg {
      display: none;
      background: rgba(139,28,28,.06);
      border: 1px solid rgba(139,28,28,.2);
      border-radius: var(--radius-sm);
      padding: .85rem 1.1rem;
      font-size: .84rem;
      color: var(--maroon);
      line-height: 1.5;
    }
    .form-error-msg.show { display: block; }

    /* ── SUCCESS PANEL ───────────────────────────────────────────── */
    .form-success {
      display: none;
      padding: 3rem 2.8rem;
      text-align: center;
    }
    .form-success.show { display: block; }

    .success-ring {
      width: 80px; height: 80px;
      border-radius: 50%;
      background: linear-gradient(135deg, rgba(139,28,28,.08), rgba(201,148,26,.12));
      border: 2px solid rgba(201,148,26,.3);
      display: flex; align-items: center; justify-content: center;
      margin: 0 auto 1.5rem;
      font-size: 2rem;
      animation: pop-in .5s cubic-bezier(.34,1.56,.64,1) forwards;
    }
    @keyframes pop-in {
      from { transform: scale(.5); opacity: 0; }
      to   { transform: scale(1);  opacity: 1; }
    }
    .form-success h3 {
      font-family: var(--font-heading);
      font-style: italic;
      color: var(--maroon);
      font-size: 2rem;
      margin-bottom: .5rem;
    }
    .form-success .success-sub {
      font-size: .92rem; color: var(--text-mid);
      line-height: 1.7; max-width: 340px; margin: 0 auto 1.8rem;
    }
    .form-success .success-links {
      display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;
    }
    .form-success .success-links a {
      font-size: .82rem; font-weight: 700;
      letter-spacing: .08em; text-transform: uppercase;
      color: var(--maroon); text-decoration: none;
      padding: .55rem 1.2rem;
      border: 1px solid rgba(139,28,28,.25);
      border-radius: 3px;
      transition: var(--transition);
    }
    .form-success .success-links a:hover {
      background: var(--maroon); color: #fff;
    }

    /* ── PARALLAX QUOTE STRIP ───────────────────────────────────── */
    .memory-strip {
      position: relative; min-height: 300px;
      display: flex; align-items: center; overflow: hidden;
    }
    .memory-bg {
      position: absolute; inset: 0;
      background: url('assets/pre-wedding/4.jpg') center 35% / cover no-repeat;
    }
    .memory-overlay {
      position: absolute; inset: 0;
      background: linear-gradient(
        135deg,
        rgba(28,8,8,.88) 0%,
        rgba(94,18,18,.72) 50%,
        rgba(28,8,8,.88) 100%
      );
    }
    .memory-content {
      position: relative; z-index: 2;
      text-align: center; width: 100%; padding: 4rem 2rem;
    }
    .memory-content h2 {
      font-family: var(--font-heading);
      font-style: italic;
      font-size: clamp(1.6rem, 4vw, 2.8rem);
      color: #fff; line-height: 1.35; margin-bottom: .8rem;
      text-shadow: 0 2px 20px rgba(0,0,0,.35);
    }
    .memory-content h2 em { color: var(--gold-light); }
    .memory-content p {
      font-size: .8rem; letter-spacing: .18em;
      text-transform: uppercase; color: rgba(255,245,230,.55);
    }

    /* ── RESPONSIVE ─────────────────────────────────────────────── */
    @media (max-width: 960px) {
      .contact-grid { grid-template-columns: 1fr; }
      .contact-left { position: static; }
      .contact-photo-frame { max-width: 520px; }
      .form-row { grid-template-columns: 1fr; }
      .booking-form-wrap { margin-top: 0; }
    }

    @media (max-width: 768px) {
      .contact-grid { gap: 2.5rem; }
      .form-success { padding: 2.5rem 1.8rem; }
    }
    @media (max-width: 540px) {
      .booking-form { padding: 1.8rem 1.4rem 2rem; }
      .form-header  { padding: 1.6rem 1.4rem 1.3rem; }
      .contact-hero { height: 44vh; min-height: 300px; }
      .contact-hero-content { padding: 0 1.2rem 2.5rem; }
      .contact-hero-content h1 { font-size: clamp(1.8rem, 6vw, 2.8rem); }
      .whatsapp-btn { font-size: .82rem; padding: .9rem 1.2rem; }
      .info-item { padding: .9rem 1rem; gap: .9rem; }
      .info-icon { width: 38px; height: 38px; }
      .info-icon svg { width: 20px; height: 20px; }
      .memory-content { padding: 3rem 1.2rem; }
    }

    @media (max-width: 400px) {
      .booking-form { padding: 1.4rem 1rem 1.8rem; }
      .form-header { padding: 1.3rem 1rem 1rem; }
      .form-submit-btn { padding: .95rem; font-size: .82rem; }
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
  <nav class="navbar scrolled" id="navbar">
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
        <a href="contact.php" class="nav-cta active">Book Now</a>
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
    <a href="contact.php" class="mob-cta active">Book Now</a>
  </div>

  <!-- PAGE HERO -->
  <div class="contact-hero">
    <div class="contact-hero-bg"></div>
    <div class="contact-hero-overlay"></div>
    <div class="contact-hero-content">
      <p class="breadcrumb"><a href="index.php">Home</a> &nbsp;›&nbsp; Book Now</p>
      <h1>Let's Write Your<br><em>Love Story</em> Together</h1>
      <p>Pre-Wedding Shoots &amp; Wedding Photography · Chennai, Tamil Nadu</p>
    </div>
  </div>

  <!-- CONTACT SECTION -->
  <section class="contact-section">
    <div class="container">
      <div class="contact-grid">

        <!-- ── LEFT ─────────────────────────────────────────────── -->
        <div class="contact-left fade-left">

          <!-- Photo with quote -->
          <div class="contact-photo-frame">
            <img src="assets/pre-wedding/6.jpg" alt="Couple in romantic pre-wedding shoot" loading="lazy" />
            <div class="contact-photo-overlay">
              <p class="contact-photo-quote">
                "The best love stories<br>aren't just told — <em>they're captured.</em>"
              </p>
            </div>
          </div>

          <span class="section-tag">Get in Touch</span>
          <h2>Your Chapter Before Forever Starts Here</h2>
          <div class="divider" style="justify-content:flex-start;margin:.8rem 0 1.2rem;">
            <div class="divider-line" style="width:40px;"></div>
            <div class="divider-gem"></div>
          </div>
          <p>We'd love to hear your story. Fill in the form or reach out directly — we reply to every enquiry within 24 hours and always with a smile.</p>

          <div class="info-items">
            <div class="info-item">
              <div class="info-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.81 19.79 19.79 0 01.1 1.18 2 2 0 012.11 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.06 7.9a16 16 0 006.06 6.06l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
                </svg>
              </div>
              <div class="info-text">
                <strong>Call Us</strong>
                <span><a href="tel:+917010309601">+91 70103 09601</a></span>
              </div>
            </div>
            <div class="info-item">
              <div class="info-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                  <polyline points="22,6 12,13 2,6"/>
                </svg>
              </div>
              <div class="info-text">
                <strong>Email Us</strong>
                <span><a href="mailto:withlovephotography@gmail.com">withlovephotography@gmail.com</a></span>
              </div>
            </div>
            <div class="info-item">
              <div class="info-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0118 0z"/>
                  <circle cx="12" cy="10" r="3"/>
                </svg>
              </div>
              <div class="info-text">
                <strong>Our Studio</strong>
                <span>Anna Nagar, Chennai — 600 040</span>
              </div>
            </div>
            <div class="info-item">
              <div class="info-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10"/>
                  <polyline points="12 6 12 12 16 14"/>
                </svg>
              </div>
              <div class="info-text">
                <strong>Studio Hours</strong>
                <span>Monday – Saturday · 10AM to 7PM</span>
              </div>
            </div>
          </div>

          <a href="https://wa.me/917010309601?text=Hi%20With%20Love%20Photography!%20I'd%20like%20to%20enquire%20about%20a%20pre-wedding%20shoot." class="whatsapp-btn" target="_blank" rel="noopener">
            <svg class="whatsapp-icon" viewBox="0 0 24 24" fill="currentColor">
              <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
              <path d="M12 0C5.373 0 0 5.373 0 12c0 2.123.554 4.118 1.524 5.847L0 24l6.335-1.524A11.938 11.938 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.79 9.79 0 01-4.988-1.362l-.358-.213-3.724.895.924-3.617-.234-.371A9.79 9.79 0 012.182 12C2.182 6.58 6.58 2.182 12 2.182S21.818 6.58 21.818 12 17.42 21.818 12 21.818z"/>
            </svg>
            Chat on WhatsApp
          </a>

          <div class="availability-note" style="margin-top:.9rem;">
            <span style="font-size:1.1rem;flex-shrink:0;">📅</span>
            <p><strong>Limited dates for 2025–26.</strong> We shoot a maximum of 4 weddings per month so every couple gets our full heart. Secure your date early.</p>
          </div>
        </div>

        <!-- ── RIGHT — FORM ──────────────────────────────────────── -->
        <div class="booking-form-wrap fade-right">

          <div class="form-card-bar"></div>

          <div class="form-header">
            <h3>Begin Your Story</h3>
            <p>Tell us about your love story and we'll get back within 24 hours.</p>
          </div>

          <form class="booking-form" id="bookingForm" novalidate>

            <div class="form-section-label">About You Two</div>

            <div class="form-row">
              <div class="form-group">
                <label for="bride-name">Bride's Name <span class="required">*</span></label>
                <input type="text" id="bride-name" name="bride_name" placeholder="e.g. Priya" required />
              </div>
              <div class="form-group">
                <label for="groom-name">Groom's Name <span class="required">*</span></label>
                <input type="text" id="groom-name" name="groom_name" placeholder="e.g. Karthik" required />
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="phone">Phone Number <span class="required">*</span></label>
                <input type="tel" id="phone" name="phone" placeholder="+91 70103 09601" required />
              </div>
              <div class="form-group">
                <label for="email">Email Address <span class="required">*</span></label>
                <input type="email" id="email" name="email" placeholder="you@example.com" required />
              </div>
            </div>

            <div class="form-section-label">Your Big Day</div>

            <div class="form-row">
              <div class="form-group">
                <label for="wedding-date">Wedding / Shoot Date <span class="required">*</span></label>
                <input type="date" id="wedding-date" name="wedding_date" required />
              </div>
              <div class="form-group">
                <label for="package">Package Interested In</label>
                <select id="package" name="package">
                  <option value="" disabled selected>Select a package…</option>
                  <option value="prewedding">Pre-Wedding Shoot</option>
                  <option value="classic">Classic — ₹45,000</option>
                  <option value="signature">Signature — ₹85,000</option>
                  <option value="legacy">Legacy — ₹1,50,000</option>
                  <option value="custom">Not Sure — Help Me Choose</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="venue">Venue / Location</label>
              <input type="text" id="venue" name="venue" placeholder="e.g. ECR Beach, Chennai · or Temple name" />
            </div>

            <div class="form-section-label">Tell Us More</div>

            <div class="form-group">
              <label for="message">Your Love Story (optional)</label>
              <textarea id="message" name="message" placeholder="How did you meet? Any special locations in mind? Outfits, moods, ideas — share anything that inspires you…"></textarea>
            </div>

            <div class="form-error-msg" id="formError"></div>

            <div class="form-submit">
              <button type="submit" class="form-submit-btn" id="submitBtn">
                <div class="btn-spinner"></div>
                <span class="btn-text">Send Enquiry →</span>
              </button>
              <p class="form-note">By submitting, you agree to be contacted by CLICK CLICK photography. We never share your details with third parties.</p>
            </div>
          </form>

          <!-- SUCCESS STATE -->
          <div class="form-success" id="formSuccess">
            <div class="success-ring">💌</div>
            <h3>We Got Your Story!</h3>
            <p class="success-sub">Thank you for reaching out. We'll be in touch within 24 hours. Can't wait to capture your beautiful moments together.</p>
            <div class="success-links">
              <a href="work.php">See Our Work</a>
              <a href="stories.php">Read Client Stories</a>
            </div>
          </div>

        </div><!-- /booking-form-wrap -->

      </div>
    </div>
  </section>

  <!-- PARALLAX QUOTE STRIP -->
  <div class="memory-strip">
    <div class="memory-bg"></div>
    <div class="memory-overlay"></div>
    <div class="memory-content">
      <h2>"Every Love Story is<br><em>Worth Remembering"</em></h2>
      <p>Pre-Wedding &amp; Wedding Photography · Chennai, Tamil Nadu</p>
    </div>
  </div>

  <!-- FOOTER -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <span class="logo-main" style="font-family:'Cormorant Garamond',serif;font-style:italic;color:var(--gold-light);font-size:1.6rem;display:block;margin-bottom:.3rem;">CLICK CLICK photography</span>
          <span style="font-size:.68rem;letter-spacing:.2em;text-transform:uppercase;color:rgba(255,245,230,.5);display:block;margin-bottom:1rem;">Chennai</span>
          <p>Telling the love stories of young couples across Chennai and Tamil Nadu — one beautiful frame at a time.</p>
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
            <li><a href="services.php">Pre-Wedding Shoots</a></li>
            <li><a href="services.php">Wedding Photography</a></li>
            <li><a href="services.php">Engagement Shoots</a></li>
            <li><a href="services.php">Cinematic Videography</a></li>
            <li><a href="services.php">Drone Coverage</a></li>
            <li><a href="services.php">Luxury Photo Albums</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Contact Us</h4>
          <div class="footer-contact-item"><span class="icon">📞</span><span>+91 70103 09601</span></div>
          <div class="footer-contact-item"><span class="icon">✉️</span><span>withlovephotography@gmail.com</span></div>
          <div class="footer-contact-item"><span class="icon">📍</span><span>Anna Nagar, Chennai — 600 040</span></div>
          <div class="footer-contact-item"><span class="icon">🕐</span><span>Mon–Sat: 10AM – 7PM</span></div>
        </div>
      </div>
      <div class="footer-bottom">
        <p>© 2025 <span>CLICK CLICK photography</span>. All rights reserved. Crafted with <span>♥</span> in Chennai.</p>
      </div>
    </div>
  </footer>

  <script>
    /* ── LOADER ───────────────────────────────────────────────────── */
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

    /* ── CUSTOM CURSOR ────────────────────────────────────────────── */
    const dot = document.getElementById('cursorDot');
    const ring = document.getElementById('cursorRing');
    let rX = 0, rY = 0, dX = 0, dY = 0;
    if (dot && ring) {
      document.addEventListener('mousemove', e => {
        dX = e.clientX; dY = e.clientY;
        dot.style.left = dX + 'px'; dot.style.top = dY + 'px';
      });
      (function animRing() {
        rX += (dX - rX) * 0.13; rY += (dY - rY) * 0.13;
        ring.style.left = rX + 'px'; ring.style.top = rY + 'px';
        requestAnimationFrame(animRing);
      })();
      document.querySelectorAll('a, button, input, select, textarea').forEach(el => {
        el.addEventListener('mouseenter', () => { dot.classList.add('hovering'); ring.classList.add('hovering'); });
        el.addEventListener('mouseleave', () => { dot.classList.remove('hovering'); ring.classList.remove('hovering'); });
      });
    }

    /* ── PAGE TRANSITIONS ─────────────────────────────────────────── */
    const overlay = document.getElementById('pageOverlay');
    if (overlay) {
      document.querySelectorAll('a[href]').forEach(a => {
        const href = a.getAttribute('href');
        if (!href || href.startsWith('#') || href.startsWith('http') || href.startsWith('mailto') || href.startsWith('tel')) return;
        a.addEventListener('click', e => {
          e.preventDefault();
          overlay.classList.add('active');
          setTimeout(() => { window.location.href = href; }, 360);
        });
      });
      window.addEventListener('pageshow', () => overlay.classList.remove('active'));
    }

    /* ── NAVBAR ───────────────────────────────────────────────────── */
    const navbar = document.getElementById('navbar');
    if (navbar) {
      window.addEventListener('scroll', () => {
        navbar.classList.toggle('scrolled', window.scrollY > 60);
        navbar.classList.toggle('transparent', window.scrollY <= 60);
      });
    }

    /* ── HAMBURGER ────────────────────────────────────────────────── */
    const hamburger  = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');
    if (hamburger && mobileMenu) {
      hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('open');
        mobileMenu.classList.toggle('open');
        document.body.style.overflow = mobileMenu.classList.contains('open') ? 'hidden' : '';
      });
      mobileMenu.querySelectorAll('a').forEach(link => link.addEventListener('click', () => {
        hamburger.classList.remove('open'); mobileMenu.classList.remove('open');
        document.body.style.overflow = '';
      }));
    }

    /* ── SCROLL REVEAL ────────────────────────────────────────────── */
    const obs = new IntersectionObserver(entries => {
      entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('vis'); obs.unobserve(e.target); } });
    }, { threshold: 0.1 });
    document.querySelectorAll('.fade-up,.fade-left,.fade-right').forEach(el => obs.observe(el));

    /* ── AJAX FORM SUBMISSION ─────────────────────────────────────── */
    const form       = document.getElementById('bookingForm');
    const successDiv = document.getElementById('formSuccess');
    const errorDiv   = document.getElementById('formError');
    const submitBtn  = document.getElementById('submitBtn');

    if (form) {
      form.addEventListener('submit', async e => {
        e.preventDefault();

        // Hide previous error
        errorDiv.classList.remove('show');
        errorDiv.textContent = '';

        // Loading state
        submitBtn.disabled = true;
        submitBtn.classList.add('loading');

        try {
          const res  = await fetch('send_mail.php', {
            method: 'POST',
            body: new FormData(form),
          });
          const data = await res.json();

          if (data.success) {
            // Show success, hide form
            form.style.display = 'none';
            form.previousElementSibling.style.display = 'none'; // form-card-bar
            successDiv.classList.add('show');
            // Scroll into view
            successDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
          } else {
            errorDiv.textContent = data.message || 'Something went wrong. Please try again or WhatsApp us.';
            errorDiv.classList.add('show');
            errorDiv.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
          }
        } catch {
          errorDiv.textContent = 'Network error. Please check your connection or WhatsApp us directly.';
          errorDiv.classList.add('show');
        } finally {
          submitBtn.disabled = false;
          submitBtn.classList.remove('loading');
        }
      });
    }
  </script>
  <script src="js/scroll.js"></script>
</body>
</html>
