<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Packages &amp; Services · With Love Photography Chennai</title>
  <meta name="description" content="Wedding photography packages by With Love Photography — Classic ₹45,000, Signature ₹85,000, Legacy ₹1,50,000. Chennai Tamil Nadu." />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <style>
    /* ── PAGE-SPECIFIC: SERVICES ── */

    /* PACKAGES SECTION */
    .packages-section {
      background: var(--bg);
    }

    .packages-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 2rem;
      align-items: start;
    }

    .pkg-card {
      background: var(--white);
      border-radius: var(--radius-lg);
      overflow: hidden;
      border: 1px solid rgba(201,148,26,0.15);
      box-shadow: var(--shadow-sm);
      transition: var(--transition);
    }

    .pkg-card:hover {
      transform: translateY(-6px);
      box-shadow: var(--shadow-md);
    }

    .pkg-card.featured {
      background: linear-gradient(160deg, var(--maroon) 0%, var(--maroon-dark) 100%);
      border-color: transparent;
      box-shadow: var(--shadow-lg);
      transform: translateY(-10px);
    }

    .pkg-card.featured:hover {
      transform: translateY(-16px);
    }

    .pkg-header {
      padding: 2.2rem 2rem 1.6rem;
      border-bottom: 1px solid rgba(201,148,26,0.12);
      text-align: center;
    }

    .pkg-card.featured .pkg-header {
      border-bottom-color: rgba(255,245,230,0.12);
    }

    .pkg-badge {
      display: inline-block;
      background: var(--gold);
      color: var(--maroon-dark);
      font-family: var(--font-body);
      font-size: 0.7rem;
      font-weight: 700;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      padding: 0.3rem 1.1rem;
      border-radius: 20px;
      margin-bottom: 1rem;
    }

    .pkg-name {
      font-family: var(--font-heading);
      font-style: italic;
      font-size: 2rem;
      color: var(--text-dark);
      margin-bottom: 0.3rem;
    }

    .pkg-card.featured .pkg-name { color: var(--ivory); }

    .pkg-tagline {
      font-family: var(--font-body);
      font-size: 0.82rem;
      color: var(--text-mid);
      letter-spacing: 0.08em;
    }

    .pkg-card.featured .pkg-tagline { color: rgba(255,245,230,0.65); }

    .pkg-price {
      font-family: var(--font-heading);
      font-size: 2.8rem;
      font-weight: 700;
      color: var(--saffron);
      display: block;
      margin: 1rem 0 0.2rem;
    }

    .pkg-card.featured .pkg-price { color: var(--gold-light); }

    .pkg-price-note {
      font-family: var(--font-body);
      font-size: 0.78rem;
      color: var(--text-mid);
    }

    .pkg-card.featured .pkg-price-note { color: rgba(255,245,230,0.5); }

    .pkg-body {
      padding: 1.8rem 2rem 2.2rem;
    }

    .pkg-features {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
      margin-bottom: 2rem;
    }

    .pkg-features li {
      display: flex;
      align-items: flex-start;
      gap: 0.75rem;
      font-family: var(--font-body);
      font-size: 0.88rem;
      color: var(--text-mid);
      line-height: 1.5;
    }

    .pkg-card.featured .pkg-features li { color: rgba(255,245,230,0.8); }

    .pkg-check {
      color: var(--gold);
      font-size: 0.9rem;
      flex-shrink: 0;
      margin-top: 0.1rem;
    }

    .pkg-card.featured .pkg-check { color: var(--gold-light); }

    .pkg-cta {
      display: block;
      text-align: center;
      font-family: var(--font-body);
      font-size: 0.85rem;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      padding: 0.9rem;
      border-radius: var(--radius-sm);
      transition: var(--transition);
    }

    .pkg-cta-outline {
      border: 2px solid var(--maroon);
      color: var(--maroon);
    }

    .pkg-cta-outline:hover {
      background: var(--maroon);
      color: var(--white);
    }

    .pkg-cta-solid {
      background: linear-gradient(135deg, var(--gold), var(--gold-light));
      color: var(--maroon-dark);
      border: 2px solid transparent;
    }

    .pkg-cta-solid:hover {
      background: linear-gradient(135deg, var(--gold-light), var(--gold));
      transform: translateY(-1px);
      box-shadow: 0 4px 16px rgba(201,148,26,0.4);
    }

    @media (max-width: 900px) {
      .packages-grid { grid-template-columns: 1fr; max-width: 460px; margin: 0 auto; }
      .pkg-card.featured { transform: none; }
      .pkg-card.featured:hover { transform: translateY(-6px); }
    }

    /* ADD-ONS */
    .addons-section {
      background: var(--ivory);
    }

    .addons-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 1.5rem;
    }

    .addon-card {
      background: var(--white);
      border-radius: var(--radius-md);
      padding: 2rem 1.5rem;
      text-align: center;
      border: 1px solid rgba(201,148,26,0.12);
      box-shadow: var(--shadow-sm);
      transition: var(--transition);
    }

    .addon-card:hover {
      transform: translateY(-4px);
      box-shadow: var(--shadow-md);
      border-color: rgba(201,148,26,0.3);
    }

    .addon-icon {
      font-size: 2rem;
      margin-bottom: 1rem;
      display: block;
    }

    .addon-card h4 {
      font-size: 1.05rem;
      font-style: italic;
      color: var(--maroon);
      margin-bottom: 0.4rem;
    }

    .addon-price {
      font-family: var(--font-heading);
      font-size: 1.4rem;
      font-weight: 700;
      color: var(--saffron);
      display: block;
      margin: 0.5rem 0;
    }

    .addon-card p {
      font-size: 0.82rem;
      color: var(--text-mid);
    }

    @media (max-width: 900px) {
      .addons-grid { grid-template-columns: repeat(2, 1fr); }
    }

    @media (max-width: 480px) {
      .addons-grid { grid-template-columns: 1fr; }
      .services-cta-btns { flex-direction: column; align-items: stretch; }
      .services-cta-btns a { text-align: center; justify-content: center; }
      .faq-list { padding: 0; }
      .pkg-card { padding: 2rem 1.4rem; }
    }

    @media (max-width: 768px) {
      .services-cta-btns { justify-content: center; }
      .faq-list { max-width: 100%; }
    }

    /* FAQ */
    .faq-section {
      background: var(--bg);
    }

    .faq-list {
      max-width: 820px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    .faq-item {
      background: var(--white);
      border-radius: var(--radius-md);
      border: 1px solid rgba(201,148,26,0.12);
      overflow: hidden;
      box-shadow: var(--shadow-sm);
    }

    .faq-question {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 1.4rem 1.8rem;
      background: none;
      border: none;
      cursor: pointer;
      text-align: left;
      gap: 1rem;
      transition: background 0.3s;
    }

    .faq-question:hover {
      background: rgba(201,148,26,0.04);
    }

    .faq-question span {
      font-family: var(--font-body);
      font-size: 1rem;
      font-weight: 700;
      color: var(--text-dark);
      line-height: 1.4;
    }

    .faq-icon {
      width: 28px;
      height: 28px;
      background: linear-gradient(135deg, var(--maroon), var(--maroon-dark));
      color: var(--white);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.1rem;
      flex-shrink: 0;
      font-weight: 700;
      transition: transform 0.3s ease, background 0.3s;
      line-height: 1;
    }

    .faq-item.open .faq-icon {
      transform: rotate(45deg);
      background: linear-gradient(135deg, var(--gold), var(--gold-light));
      color: var(--maroon-dark);
    }

    .faq-answer {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.4s ease, padding 0.3s ease;
      padding: 0 1.8rem;
    }

    .faq-item.open .faq-answer {
      max-height: 300px;
      padding: 0 1.8rem 1.4rem;
    }

    .faq-answer p {
      font-size: 0.92rem;
      line-height: 1.8;
      color: var(--text-mid);
      border-top: 1px solid rgba(201,148,26,0.1);
      padding-top: 1rem;
    }

    /* SERVICES CTA */
    .services-cta {
      background: linear-gradient(135deg, var(--maroon) 0%, var(--maroon-dark) 100%);
      padding: 5rem 0;
      text-align: center;
    }

    .services-cta h2 {
      font-family: var(--font-heading);
      font-style: italic;
      color: var(--white);
      font-size: clamp(1.8rem, 3.5vw, 2.8rem);
      margin-bottom: 0.8rem;
    }

    .services-cta p {
      color: rgba(255,245,230,0.72);
      max-width: 500px;
      margin: 0 auto 2.5rem;
    }

    .services-cta-btns {
      display: flex;
      gap: 1.2rem;
      justify-content: center;
      flex-wrap: wrap;
    }
  </style>
</head>
<body>

  <!-- LOADER -->
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
      <div class="sp-loader-brand">With Love Photography</div>
      <div class="sp-loader-sub">Premium Wedding Photography · Chennai</div>
      <div class="sp-loader-progress"><div class="sp-loader-bar"></div></div>
    </div>
  </div>

  <!-- NAVBAR -->
  <nav class="navbar scrolled" id="navbar">
    <div class="nav-inner">
      <a href="index.php" class="nav-logo">
        <span class="logo-main">With Love Photography</span>
        <span class="logo-sub">Chennai</span>
      </a>
      <div class="nav-links">
        <a href="work.php">Work</a>
        <a href="about.php">About</a>
        <a href="services.php" class="active">Services</a>
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
    <a href="services.php" class="active">Services</a>
    <a href="stories.php">Stories</a>
    <a href="experience.php">Experience</a>
    <a href="contact.php" class="mob-cta">Book Now</a>
  </div>

  <!-- PAGE HERO -->
  <div class="page-hero">
    <div class="page-hero-bg" style="background-image: url('assets/pre-wedding/4.jpg');"></div>
    <div class="page-hero-overlay"></div>
    <div class="page-hero-content">
      <h1>Start Your Story</h1>
      <p>Packages Built for Couples Who Want More Than Just Photos</p>
    </div>
    <div class="page-hero-breadcrumb">
      <a href="index.php">Home</a>
      <span>›</span>
      <span>Services</span>
    </div>
  </div>

  <!-- INCLUDED IN ALL PACKAGES -->
  <section style="background:#fff8f0;padding:5rem 0;">
    <div class="container">
      <div class="section-header" data-reveal="up">
        <span class="section-tag">Every Package Includes</span>
        <h2>You Deserve the Full Experience</h2>
        <div class="divider"><div class="divider-line"></div><div class="divider-gem-sm"></div><div class="divider-gem"></div><div class="divider-gem-sm"></div><div class="divider-line"></div></div>
        <p>No matter which chapter of your love story you're capturing, every couple gets the same warmth, artistry, and personal touch — always.</p>
      </div>
      <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:1.5rem;margin-top:1rem;" data-stagger="100">
        <div style="text-align:center;padding:2rem 1.5rem;background:#fff;border:1px solid rgba(139,28,28,.1);border-radius:4px;">
          <div style="font-size:2rem;margin-bottom:.8rem;">📞</div>
          <h5 style="font-family:'Cormorant Garamond',serif;font-size:1.1rem;color:#5E1212;margin-bottom:.5rem;">Pre-Wedding Consultation</h5>
          <p style="font-size:.82rem;">A personal call to understand your wedding vision, timeline, and preferences before the big day.</p>
        </div>
        <div style="text-align:center;padding:2rem 1.5rem;background:#fff;border:1px solid rgba(139,28,28,.1);border-radius:4px;">
          <div style="font-size:2rem;margin-bottom:.8rem;">✏️</div>
          <h5 style="font-family:'Cormorant Garamond',serif;font-size:1.1rem;color:#5E1212;margin-bottom:.5rem;">Professional Editing</h5>
          <p style="font-size:.82rem;">Every photo is colour-graded, retouched, and edited to cinematic standard — no filters, just artistry.</p>
        </div>
        <div style="text-align:center;padding:2rem 1.5rem;background:#fff;border:1px solid rgba(139,28,28,.1);border-radius:4px;">
          <div style="font-size:2rem;margin-bottom:.8rem;">🔒</div>
          <h5 style="font-family:'Cormorant Garamond',serif;font-size:1.1rem;color:#5E1212;margin-bottom:.5rem;">Private Online Gallery</h5>
          <p style="font-size:.82rem;">Password-protected gallery with full-resolution downloads, shareable with family worldwide.</p>
        </div>
        <div style="text-align:center;padding:2rem 1.5rem;background:#fff;border:1px solid rgba(139,28,28,.1);border-radius:4px;">
          <div style="font-size:2rem;margin-bottom:.8rem;">💬</div>
          <h5 style="font-family:'Cormorant Garamond',serif;font-size:1.1rem;color:#5E1212;margin-bottom:.5rem;">WhatsApp Support</h5>
          <p style="font-size:.82rem;">Direct contact throughout your journey — from booking to final delivery, we're always reachable.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- PACKAGES -->
  <section class="packages-section">
    <div class="container">
      <div class="section-header" data-reveal="up">
        <span class="section-tag">Photography Packages</span>
        <h2>Write Your Chapter, Your Way</h2>
        <div class="divider">
          <div class="divider-line"></div>
          <div class="divider-gem-sm"></div>
          <div class="divider-gem"></div>
          <div class="divider-gem-sm"></div>
          <div class="divider-line"></div>
        </div>
        <p>From your first pre-wedding adventure to the grand wedding celebration — every package is designed to honour exactly where you are in your love story.</p>
      </div>

      <div class="packages-grid">

        <!-- CLASSIC -->
        <div class="pkg-card" data-reveal="up" data-delay="0">
          <div class="pkg-header">
            <div class="pkg-name">Classic</div>
            <div class="pkg-tagline">For Intimate Ceremonies</div>
            <span class="pkg-price">₹45,000</span>
            <div class="pkg-price-note">Starting price · GST extra</div>
          </div>
          <div class="pkg-body">
            <!-- Quick stats -->
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:.7rem;margin-bottom:1.4rem;padding-bottom:1.4rem;border-bottom:1px solid rgba(139,28,28,.08);">
              <div style="text-align:center;padding:.7rem;background:#fff8f0;border-radius:3px;">
                <div style="font-family:'Cormorant Garamond',serif;font-size:1.7rem;color:#8B1C1C;line-height:1;">10</div>
                <div style="font-size:.6rem;letter-spacing:.15em;text-transform:uppercase;color:#8A6464;">Hours</div>
              </div>
              <div style="text-align:center;padding:.7rem;background:#fff8f0;border-radius:3px;">
                <div style="font-family:'Cormorant Garamond',serif;font-size:1.7rem;color:#8B1C1C;line-height:1;">300+</div>
                <div style="font-size:.6rem;letter-spacing:.15em;text-transform:uppercase;color:#8A6464;">Photos</div>
              </div>
              <div style="text-align:center;padding:.7rem;background:#fff8f0;border-radius:3px;">
                <div style="font-family:'Cormorant Garamond',serif;font-size:1.7rem;color:#8B1C1C;line-height:1;">1</div>
                <div style="font-size:.6rem;letter-spacing:.15em;text-transform:uppercase;color:#8A6464;">Photographer</div>
              </div>
              <div style="text-align:center;padding:.7rem;background:#fff8f0;border-radius:3px;">
                <div style="font-family:'Cormorant Garamond',serif;font-size:1.7rem;color:#8B1C1C;line-height:1;">21</div>
                <div style="font-size:.6rem;letter-spacing:.15em;text-transform:uppercase;color:#8A6464;">Days Delivery</div>
              </div>
            </div>
            <ul class="pkg-features">
              <li><span class="pkg-check">✦</span> 1 Day coverage — up to 10 hours</li>
              <li><span class="pkg-check">✦</span> 1 Professional photographer</li>
              <li><span class="pkg-check">✦</span> 300+ professionally edited photos</li>
              <li><span class="pkg-check">✦</span> All Tamil rituals fully covered<br><small style="color:#8A6464;margin-left:1rem;">(Muhurtham, Nalangu, Saapthapadhi)</small></li>
              <li><span class="pkg-check">✦</span> Online gallery — download &amp; share</li>
              <li><span class="pkg-check">✦</span> High-resolution files, no watermark</li>
              <li><span class="pkg-check">✦</span> Delivery within 21 working days</li>
              <li><span class="pkg-check">✦</span> Travel within Chennai included</li>
              <li><span class="pkg-check">✦</span> Pre-wedding consultation call</li>
              <li style="color:#aaa;text-decoration:line-through;"><span style="color:#ddd;">✦</span> Videography / Reel</li>
              <li style="color:#aaa;text-decoration:line-through;"><span style="color:#ddd;">✦</span> Physical album</li>
              <li style="color:#aaa;text-decoration:line-through;"><span style="color:#ddd;">✦</span> Drone coverage</li>
            </ul>
            <div style="background:#fff8f0;border-left:3px solid #C9941A;padding:.9rem 1rem;margin-bottom:1.4rem;font-size:.8rem;color:#5C3030;">
              <strong>Payment:</strong> 30% advance to confirm date. Balance due 7 days before the wedding.
            </div>
            <a href="contact.php" class="pkg-cta pkg-cta-outline">Book Classic</a>
          </div>
        </div>

        <!-- SIGNATURE (FEATURED) -->
        <div class="pkg-card featured" data-reveal="up" data-delay="120">
          <div class="pkg-header">
            <div class="pkg-badge">Most Popular</div>
            <div class="pkg-name">Signature</div>
            <div class="pkg-tagline">The Complete Wedding Experience</div>
            <span class="pkg-price">₹85,000</span>
            <div class="pkg-price-note">Starting price · GST extra</div>
          </div>
          <div class="pkg-body">
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:.7rem;margin-bottom:1.4rem;padding-bottom:1.4rem;border-bottom:1px solid rgba(255,255,255,.1);">
              <div style="text-align:center;padding:.7rem;background:rgba(255,255,255,.08);border-radius:3px;">
                <div style="font-family:'Cormorant Garamond',serif;font-size:1.7rem;color:#E8B430;line-height:1;">2</div>
                <div style="font-size:.6rem;letter-spacing:.15em;text-transform:uppercase;color:rgba(255,245,230,.5);">Days</div>
              </div>
              <div style="text-align:center;padding:.7rem;background:rgba(255,255,255,.08);border-radius:3px;">
                <div style="font-family:'Cormorant Garamond',serif;font-size:1.7rem;color:#E8B430;line-height:1;">600+</div>
                <div style="font-size:.6rem;letter-spacing:.15em;text-transform:uppercase;color:rgba(255,245,230,.5);">Photos</div>
              </div>
              <div style="text-align:center;padding:.7rem;background:rgba(255,255,255,.08);border-radius:3px;">
                <div style="font-family:'Cormorant Garamond',serif;font-size:1.7rem;color:#E8B430;line-height:1;">2</div>
                <div style="font-size:.6rem;letter-spacing:.15em;text-transform:uppercase;color:rgba(255,245,230,.5);">Photographers</div>
              </div>
              <div style="text-align:center;padding:.7rem;background:rgba(255,255,255,.08);border-radius:3px;">
                <div style="font-family:'Cormorant Garamond',serif;font-size:1.7rem;color:#E8B430;line-height:1;">30</div>
                <div style="font-size:.6rem;letter-spacing:.15em;text-transform:uppercase;color:rgba(255,245,230,.5);">Days Delivery</div>
              </div>
            </div>
            <ul class="pkg-features">
              <li><span class="pkg-check">✦</span> 2 Days full coverage — up to 20 hours</li>
              <li><span class="pkg-check">✦</span> 2 Professional photographers</li>
              <li><span class="pkg-check">✦</span> 600+ professionally edited photos</li>
              <li><span class="pkg-check">✦</span> All Tamil rituals + reception covered</li>
              <li><span class="pkg-check">✦</span> 3–4 min cinematic highlight reel</li>
              <li><span class="pkg-check">✦</span> Premium lay-flat photobook — 30 pages<br><small style="color:rgba(255,245,230,.5);margin-left:1rem;">(Fine art print quality)</small></li>
              <li><span class="pkg-check">✦</span> 1 Complimentary portrait / couple session</li>
              <li><span class="pkg-check">✦</span> Online gallery with sharing tools</li>
              <li><span class="pkg-check">✦</span> Delivery within 30 working days</li>
              <li><span class="pkg-check">✦</span> Travel within Tamil Nadu included</li>
              <li><span class="pkg-check">✦</span> Dedicated WhatsApp support line</li>
              <li><span class="pkg-check">✦</span> Pre-wedding consultation + shot list</li>
              <li style="color:rgba(255,255,255,.3);text-decoration:line-through;"><span style="color:rgba(255,255,255,.2);">✦</span> Drone coverage</li>
              <li style="color:rgba(255,255,255,.3);text-decoration:line-through;"><span style="color:rgba(255,255,255,.2);">✦</span> Full wedding film (15+ min)</li>
            </ul>
            <div style="background:rgba(255,255,255,.07);border-left:3px solid #E8B430;padding:.9rem 1rem;margin-bottom:1.4rem;font-size:.8rem;color:rgba(255,245,230,.7);">
              <strong>Payment:</strong> 30% advance on booking. Balance in two parts — 50% one month before, 20% on wedding day.
            </div>
            <a href="contact.php" class="pkg-cta pkg-cta-solid">Book Signature</a>
          </div>
        </div>

        <!-- LEGACY -->
        <div class="pkg-card" data-reveal="up" data-delay="240">
          <div class="pkg-header">
            <div class="pkg-name">Legacy</div>
            <div class="pkg-tagline">For Grand Royal Weddings</div>
            <span class="pkg-price">₹1,50,000</span>
            <div class="pkg-price-note">Starting price · GST extra</div>
          </div>
          <div class="pkg-body">
            <div style="display:grid;grid-template-columns:1fr 1fr;gap:.7rem;margin-bottom:1.4rem;padding-bottom:1.4rem;border-bottom:1px solid rgba(139,28,28,.08);">
              <div style="text-align:center;padding:.7rem;background:#fff8f0;border-radius:3px;">
                <div style="font-family:'Cormorant Garamond',serif;font-size:1.7rem;color:#8B1C1C;line-height:1;">4</div>
                <div style="font-size:.6rem;letter-spacing:.15em;text-transform:uppercase;color:#8A6464;">Days</div>
              </div>
              <div style="text-align:center;padding:.7rem;background:#fff8f0;border-radius:3px;">
                <div style="font-family:'Cormorant Garamond',serif;font-size:1.7rem;color:#8B1C1C;line-height:1;">1000+</div>
                <div style="font-size:.6rem;letter-spacing:.15em;text-transform:uppercase;color:#8A6464;">Photos</div>
              </div>
              <div style="text-align:center;padding:.7rem;background:#fff8f0;border-radius:3px;">
                <div style="font-family:'Cormorant Garamond',serif;font-size:1.7rem;color:#8B1C1C;line-height:1;">3+1</div>
                <div style="font-size:.6rem;letter-spacing:.15em;text-transform:uppercase;color:#8A6464;">Photo+Video</div>
              </div>
              <div style="text-align:center;padding:.7rem;background:#fff8f0;border-radius:3px;">
                <div style="font-family:'Cormorant Garamond',serif;font-size:1.7rem;color:#8B1C1C;line-height:1;">21</div>
                <div style="font-size:.6rem;letter-spacing:.15em;text-transform:uppercase;color:#8A6464;">Days Priority</div>
              </div>
            </div>
            <ul class="pkg-features">
              <li><span class="pkg-check">✦</span> Up to 4 days of full coverage</li>
              <li><span class="pkg-check">✦</span> 3 photographers + dedicated videographer</li>
              <li><span class="pkg-check">✦</span> 1000+ professionally edited photos</li>
              <li><span class="pkg-check">✦</span> Full cinematic wedding film — 15–20 min</li>
              <li><span class="pkg-check">✦</span> Same-day edited highlight reel (3–5 min)</li>
              <li><span class="pkg-check">✦</span> Drone aerial coverage — photos &amp; video</li>
              <li><span class="pkg-check">✦</span> Luxury leather-bound album — 50 pages<br><small style="color:#8A6464;margin-left:1rem;">(Heirloom quality, gold foil cover)</small></li>
              <li><span class="pkg-check">✦</span> Framed canvas fine-art print — 20×30 inch</li>
              <li><span class="pkg-check">✦</span> 2 Complimentary portrait sessions</li>
              <li><span class="pkg-check">✦</span> Travel across India included</li>
              <li><span class="pkg-check">✦</span> Priority delivery within 21 working days</li>
              <li><span class="pkg-check">✦</span> Dedicated studio manager throughout</li>
              <li><span class="pkg-check">✦</span> Teaser reel within 72 hours of wedding</li>
              <li><span class="pkg-check">✦</span> USB drive with all files + backup storage</li>
            </ul>
            <div style="background:#fff8f0;border-left:3px solid #C9941A;padding:.9rem 1rem;margin-bottom:1.4rem;font-size:.8rem;color:#5C3030;">
              <strong>Payment:</strong> 25% advance on booking. Flexible milestone payments available. Speak to us for custom billing.
            </div>
            <a href="contact.php" class="pkg-cta pkg-cta-outline">Book Legacy</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- COMPARISON TABLE -->
  <section style="background:#fff;padding:5rem 0;">
    <div class="container">
      <div class="section-header" data-reveal="up">
        <span class="section-tag">Side by Side</span>
        <h2>Package Comparison</h2>
        <div class="divider"><div class="divider-line"></div><div class="divider-gem-sm"></div><div class="divider-gem"></div><div class="divider-gem-sm"></div><div class="divider-line"></div></div>
        <p>Not sure which package is right for you? Here's the full comparison at a glance.</p>
      </div>
      <div style="overflow-x:auto;" data-reveal="up" data-delay="100">
        <table style="width:100%;border-collapse:collapse;font-size:.85rem;min-width:620px;">
          <thead>
            <tr style="background:linear-gradient(135deg,#5E1212,#8B1C1C);color:#fff;">
              <th style="padding:1rem 1.2rem;text-align:left;font-family:'Cormorant Garamond',serif;font-size:1rem;font-weight:400;">What's Included</th>
              <th style="padding:1rem;text-align:center;">Classic<br><span style="font-family:'Cormorant Garamond',serif;font-size:1.1rem;color:#E8B430;">₹45,000</span></th>
              <th style="padding:1rem;text-align:center;background:rgba(201,148,26,.15);border-top:3px solid #C9941A;">Signature ⭐<br><span style="font-family:'Cormorant Garamond',serif;font-size:1.1rem;color:#E8B430;">₹85,000</span></th>
              <th style="padding:1rem;text-align:center;">Legacy<br><span style="font-family:'Cormorant Garamond',serif;font-size:1.1rem;color:#E8B430;">₹1,50,000</span></th>
            </tr>
          </thead>
          <tbody>
            <tr style="background:#fff8f0;">
              <td style="padding:.85rem 1.2rem;color:#5C3030;font-weight:600;">Coverage Days</td>
              <td style="padding:.85rem;text-align:center;color:#5C3030;">1 Day</td>
              <td style="padding:.85rem;text-align:center;color:#5C3030;background:rgba(201,148,26,.06);">2 Days</td>
              <td style="padding:.85rem;text-align:center;color:#5C3030;">Up to 4 Days</td>
            </tr>
            <tr>
              <td style="padding:.85rem 1.2rem;color:#5C3030;font-weight:600;">Coverage Hours</td>
              <td style="padding:.85rem;text-align:center;color:#5C3030;">Up to 10 hrs</td>
              <td style="padding:.85rem;text-align:center;color:#5C3030;background:rgba(201,148,26,.06);">Up to 20 hrs</td>
              <td style="padding:.85rem;text-align:center;color:#5C3030;">Up to 40 hrs</td>
            </tr>
            <tr style="background:#fff8f0;">
              <td style="padding:.85rem 1.2rem;color:#5C3030;font-weight:600;">Photographers</td>
              <td style="padding:.85rem;text-align:center;color:#5C3030;">1</td>
              <td style="padding:.85rem;text-align:center;color:#5C3030;background:rgba(201,148,26,.06);">2</td>
              <td style="padding:.85rem;text-align:center;color:#5C3030;">3 + Videographer</td>
            </tr>
            <tr>
              <td style="padding:.85rem 1.2rem;color:#5C3030;font-weight:600;">Edited Photos</td>
              <td style="padding:.85rem;text-align:center;color:#5C3030;">300+</td>
              <td style="padding:.85rem;text-align:center;color:#5C3030;background:rgba(201,148,26,.06);">600+</td>
              <td style="padding:.85rem;text-align:center;color:#5C3030;">1000+</td>
            </tr>
            <tr style="background:#fff8f0;">
              <td style="padding:.85rem 1.2rem;color:#5C3030;font-weight:600;">Highlight Reel / Video</td>
              <td style="padding:.85rem;text-align:center;color:#bbb;">✗</td>
              <td style="padding:.85rem;text-align:center;color:#5C3030;background:rgba(201,148,26,.06);">3–4 min Reel</td>
              <td style="padding:.85rem;text-align:center;color:#5C3030;">Full Film + Reel</td>
            </tr>
            <tr>
              <td style="padding:.85rem 1.2rem;color:#5C3030;font-weight:600;">Physical Album</td>
              <td style="padding:.85rem;text-align:center;color:#bbb;">✗</td>
              <td style="padding:.85rem;text-align:center;color:#5C3030;background:rgba(201,148,26,.06);">30-page Lay-flat</td>
              <td style="padding:.85rem;text-align:center;color:#5C3030;">50-page Leather</td>
            </tr>
            <tr style="background:#fff8f0;">
              <td style="padding:.85rem 1.2rem;color:#5C3030;font-weight:600;">Drone Coverage</td>
              <td style="padding:.85rem;text-align:center;color:#bbb;">✗</td>
              <td style="padding:.85rem;text-align:center;color:#bbb;background:rgba(201,148,26,.06);">✗</td>
              <td style="padding:.85rem;text-align:center;color:#2A6435;font-weight:700;">✔</td>
            </tr>
            <tr>
              <td style="padding:.85rem 1.2rem;color:#5C3030;font-weight:600;">Portrait Session</td>
              <td style="padding:.85rem;text-align:center;color:#bbb;">✗</td>
              <td style="padding:.85rem;text-align:center;color:#2A6435;font-weight:700;background:rgba(201,148,26,.06);">1 Session</td>
              <td style="padding:.85rem;text-align:center;color:#2A6435;font-weight:700;">2 Sessions</td>
            </tr>
            <tr style="background:#fff8f0;">
              <td style="padding:.85rem 1.2rem;color:#5C3030;font-weight:600;">Canvas Print</td>
              <td style="padding:.85rem;text-align:center;color:#bbb;">✗</td>
              <td style="padding:.85rem;text-align:center;color:#bbb;background:rgba(201,148,26,.06);">✗</td>
              <td style="padding:.85rem;text-align:center;color:#2A6435;font-weight:700;">20×30 inch</td>
            </tr>
            <tr>
              <td style="padding:.85rem 1.2rem;color:#5C3030;font-weight:600;">Travel Included</td>
              <td style="padding:.85rem;text-align:center;color:#5C3030;">Chennai</td>
              <td style="padding:.85rem;text-align:center;color:#5C3030;background:rgba(201,148,26,.06);">Tamil Nadu</td>
              <td style="padding:.85rem;text-align:center;color:#5C3030;">Pan India</td>
            </tr>
            <tr style="background:#fff8f0;">
              <td style="padding:.85rem 1.2rem;color:#5C3030;font-weight:600;">Delivery Time</td>
              <td style="padding:.85rem;text-align:center;color:#5C3030;">21 working days</td>
              <td style="padding:.85rem;text-align:center;color:#5C3030;background:rgba(201,148,26,.06);">30 working days</td>
              <td style="padding:.85rem;text-align:center;color:#5C3030;">21 days (priority)</td>
            </tr>
            <tr>
              <td style="padding:.85rem 1.2rem;color:#5C3030;font-weight:600;">Teaser (72 hrs)</td>
              <td style="padding:.85rem;text-align:center;color:#bbb;">✗</td>
              <td style="padding:.85rem;text-align:center;color:#bbb;background:rgba(201,148,26,.06);">✗</td>
              <td style="padding:.85rem;text-align:center;color:#2A6435;font-weight:700;">✔</td>
            </tr>
            <tr style="background:#fff8f0;">
              <td style="padding:.85rem 1.2rem;"></td>
              <td style="padding:.85rem;text-align:center;"><a href="contact.php" style="display:inline-block;padding:.6rem 1.4rem;border:1.5px solid #8B1C1C;color:#8B1C1C;font-size:.68rem;font-weight:700;letter-spacing:.15em;text-transform:uppercase;text-decoration:none;">Book Classic</a></td>
              <td style="padding:.85rem;text-align:center;background:rgba(201,148,26,.06);"><a href="contact.php" style="display:inline-block;padding:.6rem 1.4rem;background:linear-gradient(135deg,#8B1C1C,#B02525);color:#fff;font-size:.68rem;font-weight:700;letter-spacing:.15em;text-transform:uppercase;text-decoration:none;">Book Signature</a></td>
              <td style="padding:.85rem;text-align:center;"><a href="contact.php" style="display:inline-block;padding:.6rem 1.4rem;border:1.5px solid #8B1C1C;color:#8B1C1C;font-size:.68rem;font-weight:700;letter-spacing:.15em;text-transform:uppercase;text-decoration:none;">Book Legacy</a></td>
            </tr>
          </tbody>
        </table>
      </div>
      <p style="text-align:center;font-size:.78rem;color:#8A6464;margin-top:1.2rem;">All prices are starting prices. Final quote depends on venue, travel, and specific requirements. GST applicable.</p>
    </div>
  </section>

  <!-- ADD-ONS -->
  <section class="addons-section">
    <div class="container">
      <div class="section-header" data-reveal="up">
        <span class="section-tag">Enhancements</span>
        <h2>Add-On Services</h2>
        <div class="divider">
          <div class="divider-line"></div>
          <div class="divider-gem-sm"></div>
          <div class="divider-gem"></div>
          <div class="divider-gem-sm"></div>
          <div class="divider-line"></div>
        </div>
        <p>Customise your package with any of our popular add-ons.</p>
      </div>
      <div class="addons-grid">
        <div class="addon-card stagger">
          <span class="addon-icon">🚁</span>
          <h4>Drone Coverage</h4>
          <span class="addon-price">₹8,000</span>
          <p>Stunning aerial footage and photographs of your venue and procession.</p>
        </div>
        <div class="addon-card stagger">
          <span class="addon-icon">⏰</span>
          <h4>Extra Coverage Hours</h4>
          <span class="addon-price">₹5,000/hr</span>
          <p>Need coverage beyond your package hours? Add time as needed.</p>
        </div>
        <div class="addon-card stagger">
          <span class="addon-icon">🖼️</span>
          <h4>Extra Fine Art Prints</h4>
          <span class="addon-price">₹3,500+</span>
          <p>Gallery-quality prints in various sizes — perfect for your home or gifting.</p>
        </div>
        <div class="addon-card stagger">
          <span class="addon-icon">💑</span>
          <h4>Engagement Shoot</h4>
          <span class="addon-price">₹15,000</span>
          <p>A dedicated pre-wedding or engagement photography session at a location of your choice.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="faq-section">
    <div class="container">
      <div class="section-header" data-reveal="up">
        <span class="section-tag">Common Questions</span>
        <h2>Frequently Asked Questions</h2>
        <div class="divider">
          <div class="divider-line"></div>
          <div class="divider-gem-sm"></div>
          <div class="divider-gem"></div>
          <div class="divider-gem-sm"></div>
          <div class="divider-line"></div>
        </div>
      </div>
      <div class="faq-list fade-up">

        <div class="faq-item">
          <button class="faq-question">
            <span>How do I book and what is the advance payment?</span>
            <div class="faq-icon">+</div>
          </button>
          <div class="faq-answer">
            <p>To confirm your booking, we require a 30% advance payment at the time of signing the agreement. The remaining balance is due one week before the wedding date. We accept bank transfers, UPI, and cheque payments. Once the advance is received, your date is fully secured.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question">
            <span>How long does it take to receive the edited photographs?</span>
            <div class="faq-icon">+</div>
          </button>
          <div class="faq-answer">
            <p>Classic package deliveries take 21 business days. Signature packages take up to 30 business days. Legacy packages, which include films and same-day edits, are prioritised and typically delivered within 21 days. We never rush our editing process — quality over speed, always. You will receive a preview sneak peek within 7 days.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question">
            <span>Do you travel outside Chennai for weddings?</span>
            <div class="faq-icon">+</div>
          </button>
          <div class="faq-answer">
            <p>Absolutely. We regularly cover weddings across Tamil Nadu — Madurai, Trichy, Coimbatore, Tirunelveli, and more. Travel within Tamil Nadu is included in our Signature and Legacy packages. For pan-India destinations, we charge actuals for travel and accommodation. We have also covered destination weddings in Kerala, Karnataka, and Rajasthan.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question">
            <span>Will you be familiar with our Tamil wedding rituals and ceremonies?</span>
            <div class="faq-icon">+</div>
          </button>
          <div class="faq-answer">
            <p>Yes — this is one of our greatest strengths. Our entire team is deeply familiar with Tamil Hindu, Tamil Christian, and Tamil Muslim wedding ceremonies. We understand the sequence of rituals, their emotional weight, and the exact moments that cannot be missed. During our pre-wedding consultation, we discuss your specific traditions, customs, and family preferences in detail.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question">
            <span>Do you provide raw, unedited images?</span>
            <div class="faq-icon">+</div>
          </button>
          <div class="faq-answer">
            <p>We do not provide raw or unedited files. Our editing process is an essential part of our craft — we carefully cull, colour-grade, and retouch each image to meet our artistic standard. The edited high-resolution files are delivered without watermarks and are yours to keep, print, and share freely. The finished photographs are a reflection of our complete creative vision.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- SERVICES CTA -->
  <div class="services-cta">
    <div class="container fade-up">
      <h2>Not Sure Which Package Is Right for You?</h2>
      <p>Let's have a free 20-minute call. We'll understand your wedding and recommend the perfect fit — no pressure, no obligation.</p>
      <div class="services-cta-btns">
        <a href="contact.php" class="btn-maroon"><span>Schedule a Free Call</span></a>
        <a href="work.php" class="btn-gold-outline">View Our Work First</a>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <span class="logo-main" style="font-family:'Cormorant Garamond',serif; font-style:italic; color:var(--gold-light); font-size:1.6rem; display:block; margin-bottom:0.3rem;">With Love Photography</span>
          <span style="font-family:'Lato',sans-serif; font-size:0.68rem; letter-spacing:0.2em; text-transform:uppercase; color:rgba(255,245,230,0.5); display:block; margin-bottom:1rem;">Chennai</span>
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
            <li><a href="services.php">Photo Albums</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Contact Us</h4>
          <div class="footer-contact-item">
            <span class="icon">📞</span>
            <span>+91 63800 08516</span>
          </div>
          <div class="footer-contact-item">
            <span class="icon">✉️</span>
            <span>withlovephotography@gmail.com</span>
          </div>
          <div class="footer-contact-item">
            <span class="icon">📍</span>
            <span>Anna Nagar, Chennai — 600 040, Tamil Nadu</span>
          </div>
          <div class="footer-contact-item">
            <span class="icon">🕐</span>
            <span>Mon–Sat: 10AM – 7PM</span>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <p>© 2025 <span>With Love Photography</span>. All rights reserved. Crafted with <span>♥</span> in Chennai.</p>
      </div>
    </div>
  </footer>

  <script>
    /* LOADER */
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

    /* CUSTOM CURSOR */
    const dot  = document.getElementById('cursorDot');
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
      document.querySelectorAll('a, button, .portfolio-item, .gallery-item, .pkg-card, .testi-card').forEach(el => {
        el.addEventListener('mouseenter', () => { dot.classList.add('hovering'); ring.classList.add('hovering'); });
        el.addEventListener('mouseleave', () => { dot.classList.remove('hovering'); ring.classList.remove('hovering'); });
      });
    }

    /* MAGNETIC BUTTONS */
    document.querySelectorAll('.btn-maroon, .btn-ghost, .btn-whatsapp, .btn-gold-outline').forEach(btn => {
      btn.addEventListener('mousemove', e => {
        const r = btn.getBoundingClientRect();
        const x = (e.clientX - r.left - r.width  / 2) * 0.22;
        const y = (e.clientY - r.top  - r.height / 2) * 0.22;
        btn.style.transform = 'translate(' + x + 'px, ' + y + 'px)';
      });
      btn.addEventListener('mouseleave', () => { btn.style.transform = ''; });
    });

    /* PAGE TRANSITIONS */
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
      window.addEventListener('pageshow', () => { overlay.classList.remove('active'); });
    }

    /* NAVBAR */
    const navbar = document.getElementById('navbar');
    if (navbar) {
      window.addEventListener('scroll', () => {
        if (window.scrollY > 60) { navbar.classList.remove('transparent'); navbar.classList.add('scrolled'); }
        else { navbar.classList.add('transparent'); navbar.classList.remove('scrolled'); }
      });
    }

    /* HAMBURGER */
    const hamburger  = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');
    if (hamburger && mobileMenu) {
      hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('open');
        mobileMenu.classList.toggle('open');
        document.body.style.overflow = mobileMenu.classList.contains('open') ? 'hidden' : '';
      });
      mobileMenu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
          hamburger.classList.remove('open'); mobileMenu.classList.remove('open');
          document.body.style.overflow = '';
        });
      });
    }

    /* SCROLL ANIMATIONS */
    const obs = new IntersectionObserver(entries => {
      entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('vis'); obs.unobserve(e.target); } });
    }, { threshold: 0.1 });
    document.querySelectorAll('.fade-up,.fade-left,.fade-right,.stagger').forEach(el => obs.observe(el));
  </script>
  <script src="js/scroll.js"></script>
</body>
</html>
