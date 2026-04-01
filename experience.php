<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>The Experience · With Love Photography Chennai</title>
  <meta name="description" content="What it's like to work with With Love Photography — from discovery to delivery, a seamless and joyful experience for every couple." />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <style>
    /* ── PAGE-SPECIFIC: EXPERIENCE ── */

    /* TIMELINE */
    .timeline-section {
      background: var(--bg);
    }

    .timeline {
      position: relative;
      max-width: 1100px;
      margin: 0 auto;
    }

    /* Central line */
    .timeline::before {
      content: '';
      position: absolute;
      left: 50%;
      top: 0;
      bottom: 0;
      width: 2px;
      background: linear-gradient(to bottom, transparent, var(--gold) 10%, var(--gold) 90%, transparent);
      transform: translateX(-50%);
    }

    .timeline-step {
      display: grid;
      grid-template-columns: 1fr auto 1fr;
      gap: 0 2.5rem;
      align-items: center;
      margin-bottom: 5rem;
      position: relative;
    }

    .timeline-step:last-child { margin-bottom: 0; }

    /* Even steps: image on right, text on left */
    .timeline-step.even .ts-image { order: 3; }
    .timeline-step.even .ts-node  { order: 2; }
    .timeline-step.even .ts-text  { order: 1; text-align: right; }

    /* Odd steps: image on left, text on right */
    .timeline-step.odd .ts-image { order: 1; }
    .timeline-step.odd .ts-node  { order: 2; }
    .timeline-step.odd .ts-text  { order: 3; text-align: left; }

    .ts-image {
      position: relative;
      overflow: hidden;
      border-radius: var(--radius-md);
      box-shadow: var(--shadow-md);
    }

    .ts-image img {
      width: 100%;
      aspect-ratio: 4/3;
      object-fit: cover;
      display: block;
      transition: transform 0.7s ease;
    }

    .ts-image:hover img { transform: scale(1.05); }

    .ts-image-label {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background: linear-gradient(to top, rgba(94,18,18,0.85), transparent);
      padding: 1.2rem 1rem 0.8rem;
      font-family: var(--font-body);
      font-size: 0.75rem;
      font-weight: 700;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--gold-light);
    }

    /* Central node */
    .ts-node {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 0.5rem;
      flex-shrink: 0;
      position: relative;
      z-index: 2;
    }

    .ts-circle {
      width: 56px;
      height: 56px;
      background: linear-gradient(135deg, var(--maroon), var(--maroon-dark));
      border-radius: 50%;
      border: 3px solid var(--gold);
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 0 0 6px rgba(201,148,26,0.12);
    }

    .ts-step-num {
      font-family: var(--font-heading);
      font-size: 1.3rem;
      font-weight: 700;
      color: var(--gold-light);
      line-height: 1;
    }

    /* Text block */
    .ts-text {
      padding: 1rem 0;
    }

    .ts-step-tag {
      font-family: var(--font-body);
      font-size: 0.72rem;
      font-weight: 700;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: var(--saffron);
      display: block;
      margin-bottom: 0.4rem;
    }

    .ts-text h3 {
      font-family: var(--font-heading);
      font-style: italic;
      font-size: 1.8rem;
      color: var(--maroon);
      margin-bottom: 0.8rem;
      line-height: 1.2;
    }

    .ts-text p {
      font-size: 0.92rem;
      line-height: 1.8;
      color: var(--text-mid);
      max-width: 360px;
    }

    .timeline-step.odd .ts-text p { margin-left: 0; }
    .timeline-step.even .ts-text p { margin-left: auto; }

    .ts-detail {
      display: flex;
      align-items: center;
      gap: 0.6rem;
      margin-top: 1rem;
      font-family: var(--font-body);
      font-size: 0.82rem;
      font-weight: 700;
      color: var(--gold);
      letter-spacing: 0.06em;
    }

    .timeline-step.even .ts-detail { justify-content: flex-end; }

    .ts-detail::before {
      content: '◆';
      font-size: 0.5rem;
      color: var(--gold);
    }

    /* Mobile timeline */
    @media (max-width: 768px) {
      .timeline::before { left: 24px; }

      .timeline-step {
        grid-template-columns: auto 1fr;
        grid-template-rows: auto auto;
        gap: 1rem;
        margin-bottom: 3.5rem;
      }

      .timeline-step.even .ts-image,
      .timeline-step.odd .ts-image { order: unset; grid-column: 2; grid-row: 2; }

      .timeline-step.even .ts-node,
      .timeline-step.odd .ts-node  { order: unset; grid-column: 1; grid-row: 1 / 3; align-self: start; padding-top: 0.3rem; }

      .timeline-step.even .ts-text,
      .timeline-step.odd .ts-text  { order: unset; grid-column: 2; grid-row: 1; text-align: left !important; }

      .timeline-step.even .ts-text p,
      .timeline-step.odd .ts-text p { margin-left: 0; max-width: 100%; }

      .timeline-step.even .ts-detail { justify-content: flex-start; }
    }

    /* WHAT TO EXPECT */
    .expect-section {
      background: var(--ivory);
    }

    .expect-cards {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 2rem;
    }

    .expect-card {
      background: var(--white);
      border-radius: var(--radius-lg);
      padding: 2.8rem 2rem;
      text-align: center;
      border: 1px solid rgba(201,148,26,0.12);
      box-shadow: var(--shadow-sm);
      transition: var(--transition);
      position: relative;
      overflow: hidden;
    }

    .expect-card::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 3px;
      background: linear-gradient(90deg, var(--gold), var(--gold-light));
      transform: scaleX(0);
      transition: transform 0.4s ease;
    }

    .expect-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-md); }
    .expect-card:hover::after { transform: scaleX(1); }

    .expect-icon {
      width: 72px;
      height: 72px;
      background: linear-gradient(135deg, rgba(139,28,28,0.07), rgba(201,148,26,0.1));
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1.5rem;
      font-size: 1.9rem;
      border: 1px solid rgba(201,148,26,0.18);
    }

    .expect-card h3 {
      font-size: 1.3rem;
      font-style: italic;
      color: var(--maroon);
      margin-bottom: 0.8rem;
    }

    .expect-card p {
      font-size: 0.9rem;
      line-height: 1.78;
    }

    @media (max-width: 768px) {
      .expect-cards { grid-template-columns: 1fr; max-width: 420px; margin: 0 auto; }
    }

    /* CANDID STRIP */
    .candid-strip {
      position: relative;
      min-height: 480px;
      display: flex;
      align-items: center;
      overflow: hidden;
    }

    .candid-bg {
      position: absolute;
      inset: 0;
      background: url('assets/6.jpg') center center / cover no-repeat;
    }

    .candid-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(
        to left,
        rgba(28,8,8,0.9) 0%,
        rgba(94,18,18,0.75) 45%,
        rgba(28,8,8,0.4) 100%
      );
    }

    .candid-content {
      position: relative;
      z-index: 2;
      max-width: 580px;
      margin-left: auto;
      padding: 5rem 0;
      text-align: right;
    }

    .candid-content .section-tag {
      color: var(--gold);
      display: block;
      margin-bottom: 1rem;
    }

    .candid-content h2 {
      font-family: var(--font-heading);
      font-style: italic;
      font-size: clamp(2rem, 4vw, 3rem);
      color: var(--white);
      line-height: 1.25;
      margin-bottom: 1.2rem;
    }

    .candid-content h2 em { color: var(--gold-light); }

    .candid-content p {
      color: rgba(255,245,230,0.78);
      font-size: 0.96rem;
      line-height: 1.8;
      margin-bottom: 0.8rem;
    }

    .candid-divider {
      display: flex;
      justify-content: flex-end;
      margin: 1.2rem 0;
    }

    @media (max-width: 768px) {
      .candid-content { text-align: left; margin-left: 0; padding: 3.5rem 1.5rem; max-width: 100%; }
      .candid-divider { justify-content: flex-start; }
      .candid-overlay {
        background: linear-gradient(to bottom, rgba(28,8,8,0.6) 0%, rgba(28,8,8,0.88) 100%);
      }
    }

    @media (max-width: 480px) {
      .candid-content { padding: 2.5rem 1.2rem; }
      .candid-content h2 { font-size: clamp(1.5rem, 5vw, 2rem); }
      .experience-cta-btns { flex-direction: column; align-items: stretch; max-width: 320px; margin: 0 auto; }
      .experience-cta-btns a { text-align: center; justify-content: center; }
      .ts-detail { flex-wrap: wrap; gap: .4rem; }
      .expect-card { padding: 1.6rem 1.2rem; }
    }

    /* EXPERIENCE CTA */
    .experience-cta {
      background: linear-gradient(135deg, var(--maroon) 0%, var(--maroon-dark) 100%);
      padding: 5rem 0;
      text-align: center;
    }

    .experience-cta h2 {
      font-family: var(--font-heading);
      font-style: italic;
      color: var(--white);
      font-size: clamp(1.8rem, 3.5vw, 2.8rem);
      margin-bottom: 0.8rem;
    }

    .experience-cta p {
      color: rgba(255,245,230,0.72);
      max-width: 500px;
      margin: 0 auto 2.5rem;
    }

    .experience-cta-btns {
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
        <a href="services.php">Services</a>
        <a href="stories.php">Stories</a>
        <a href="experience.php" class="active">Experience</a>
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
    <a href="experience.php" class="active">Experience</a>
    <a href="contact.php" class="mob-cta">Book Now</a>
  </div>

  <!-- PAGE HERO -->
  <div class="page-hero">
    <div class="page-hero-bg" style="background-image: url('assets/1.jpg');"></div>
    <div class="page-hero-overlay"></div>
    <div class="page-hero-content">
      <h1>The Experience</h1>
      <p>From First Call to Final Album — Your Journey With Us</p>
    </div>
    <div class="page-hero-breadcrumb">
      <a href="index.php">Home</a>
      <span>›</span>
      <span>Experience</span>
    </div>
  </div>

  <!-- TIMELINE -->
  <section class="timeline-section">
    <div class="container">
      <div class="section-header" data-reveal="up">
        <span class="section-tag">How It Works</span>
        <h2>Your Journey in Four Steps</h2>
        <div class="divider">
          <div class="divider-line"></div>
          <div class="divider-gem-sm"></div>
          <div class="divider-gem"></div>
          <div class="divider-gem-sm"></div>
          <div class="divider-line"></div>
        </div>
        <p>We've crafted a seamless experience from the moment you reach out to the day you hold your wedding album.</p>
      </div>

      <div class="timeline">

        <!-- STEP 1: ODD (image left, text right) -->
        <div class="timeline-step odd data-reveal="up" revealed">
          <div class="ts-image">
            <img src="assets/9.jpg" alt="Temple mandap entrance — discovery and planning" loading="lazy" />
            <div class="ts-image-label">Step 1 · Discovery</div>
          </div>
          <div class="ts-node">
            <div class="ts-circle">
              <span class="ts-step-num">1</span>
            </div>
          </div>
          <div class="ts-text">
            <span class="ts-step-tag">Step One</span>
            <h3>Discovery &amp; Connection</h3>
            <p>Every love story begins with a conversation. Reach out via our contact form, phone, or WhatsApp. We schedule a free 20-minute call to understand your wedding vision, dates, and expectations. No pressure, no jargon — just two storytellers listening to yours.</p>
            <div class="ts-detail">Free consultation · No obligation</div>
          </div>
        </div>

        <!-- STEP 2: EVEN (text left, image right) -->
        <div class="timeline-step even data-reveal="up" revealed">
          <div class="ts-image">
            <img src="assets/11.jpg" alt="Couple at temple with oil lamp — planning rituals" loading="lazy" />
            <div class="ts-image-label">Step 2 · Planning</div>
          </div>
          <div class="ts-node">
            <div class="ts-circle">
              <span class="ts-step-num">2</span>
            </div>
          </div>
          <div class="ts-text">
            <span class="ts-step-tag">Step Two</span>
            <h3>Planning &amp; Preparation</h3>
            <p>Once you confirm your booking, we dive deep. A detailed pre-wedding questionnaire covers your rituals, family traditions, key people, and must-have moments. We do a venue walkthrough when possible, study the lighting conditions, and brief our full team. You'll always know exactly what to expect — and when.</p>
            <div class="ts-detail">Venue scout · Ritual briefing · Shot list</div>
          </div>
        </div>

        <!-- STEP 3: ODD (image left, text right) -->
        <div class="timeline-step odd data-reveal="up" revealed">
          <div class="ts-image">
            <img src="assets/10.jpg" alt="Pre-wedding shoot at ancient stone temple" loading="lazy" />
            <div class="ts-image-label">Step 3 · The Big Day</div>
          </div>
          <div class="ts-node">
            <div class="ts-circle">
              <span class="ts-step-num">3</span>
            </div>
          </div>
          <div class="ts-text">
            <span class="ts-step-tag">Step Three</span>
            <h3>The Big Day</h3>
            <p>We arrive before anyone else and leave after everyone else. Our team works silently and seamlessly — you will barely notice us, but we notice everything. The morning light on your thali. Your father's proud smile. The chaos and the calm. We document it all, candidly and completely.</p>
            <div class="ts-detail">Arrive early · Candid + posed · Zero disruption</div>
          </div>
        </div>

        <!-- STEP 4: EVEN (text left, image right) -->
        <div class="timeline-step even data-reveal="up" revealed">
          <div class="ts-image">
            <img src="assets/8.jpg" alt="Jasmine garlands — detail photography and delivery" loading="lazy" />
            <div class="ts-image-label">Step 4 · Delivery</div>
          </div>
          <div class="ts-node">
            <div class="ts-circle">
              <span class="ts-step-num">4</span>
            </div>
          </div>
          <div class="ts-text">
            <span class="ts-step-tag">Step Four</span>
            <h3>Editing &amp; Delivery</h3>
            <p>After the wedding, our editing team begins the careful, artful process of selecting and enhancing your photographs. We colour-grade with warmth, preserve natural light, and ensure every image meets our exacting standard. A sneak peek arrives within 7 days. Your full gallery within the agreed timeline. Your album, designed to last a lifetime.</p>
            <div class="ts-detail">Sneak peek in 7 days · Gallery + album delivery</div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- WHAT TO EXPECT -->
  <section class="expect-section">
    <div class="container">
      <div class="section-header" data-reveal="up">
        <span class="section-tag">Our Promise</span>
        <h2>What You Can Always Expect</h2>
        <div class="divider">
          <div class="divider-line"></div>
          <div class="divider-gem-sm"></div>
          <div class="divider-gem"></div>
          <div class="divider-gem-sm"></div>
          <div class="divider-line"></div>
        </div>
        <p>These are not just our standards — they are our guarantees to every couple we work with.</p>
      </div>
      <div class="expect-cards">
        <div class="expect-card stagger">
          <div class="expect-icon">😌</div>
          <h3>Comfortable &amp; Relaxed</h3>
          <p>We will never make you feel posed, stiff, or self-conscious. Our job is to make your day feel natural — and let the camera do the rest. Most couples forget we're there within the first hour.</p>
        </div>
        <div class="expect-card stagger">
          <div class="expect-icon">🎯</div>
          <h3>Professional &amp; Prepared</h3>
          <p>We arrive with redundant equipment, fully charged, fully briefed. Every photographer on our team is experienced in Tamil wedding ceremonies. No surprises, no excuses — only excellence.</p>
        </div>
        <div class="expect-card stagger">
          <div class="expect-icon">📅</div>
          <h3>Timely &amp; Transparent</h3>
          <p>We deliver on time, communicate proactively, and never leave you wondering. You'll have a dedicated point of contact from booking to delivery. No ghosting, no delays beyond what is clearly agreed upon.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CANDID STRIP -->
  <div class="candid-strip">
    <div class="candid-bg"></div>
    <div class="candid-overlay"></div>
    <div class="container">
      <div class="candid-content fade-right">
        <span class="section-tag">Our Candid Philosophy</span>
        <h2>"The best moments<br>are the ones<br><em>nobody planned."</em></h2>
        <div class="candid-divider">
          <div class="divider">
            <div class="divider-line"></div>
            <div class="divider-gem"></div>
          </div>
        </div>
        <p>Candid photography is not just a style — it is a commitment to truth. We believe that the unscripted glance, the spontaneous laugh, the quiet hand-hold are the real story of your wedding day. Posed photos have their place, but the images couples treasure most are always the ones they never knew were being taken.</p>
        <p>That is why we train every photographer in the art of being invisible — present, observant, and always ready — without ever intruding on your most sacred moments.</p>
      </div>
    </div>
  </div>

  <!-- EXPERIENCE CTA -->
  <div class="experience-cta">
    <div class="container data-reveal="up" revealed">
      <h2>Ready to Experience the Difference?</h2>
      <p>Let's start with a conversation. Tell us about your wedding and we'll show you how we can make it unforgettable.</p>
      <div class="experience-cta-btns">
        <a href="contact.php" class="btn-maroon"><span>Book Your Consultation</span></a>
        <a href="work.php" class="btn-gold-outline">See Our Portfolio</a>
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
