<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Client Stories · CLICK CLICK photography Chennai</title>
  <meta name="description" content="Real testimonials from 500+ happy couples — CLICK CLICK photography, Chennai's trusted Tamil Nadu wedding photographers." />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <style>
    /* ── PAGE-SPECIFIC: STORIES ── */

    /* RATING BAR */
    .rating-bar {
      background: var(--ivory);
      padding: 2.8rem 0;
      border-bottom: 1px solid rgba(201,148,26,0.15);
    }

    .rating-inner {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 3rem;
      flex-wrap: wrap;
    }

    .rating-score {
      text-align: center;
    }

    .rating-num {
      font-family: var(--font-heading);
      font-size: 4.5rem;
      font-weight: 700;
      color: var(--maroon);
      line-height: 1;
      display: block;
    }

    .rating-stars {
      display: flex;
      gap: 4px;
      justify-content: center;
      margin: 0.4rem 0;
    }

    .rating-stars span { color: var(--gold); font-size: 1.3rem; }

    .rating-label {
      font-family: var(--font-body);
      font-size: 0.8rem;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      color: var(--text-mid);
    }

    .rating-divider {
      width: 1px;
      height: 70px;
      background: rgba(201,148,26,0.25);
    }

    .rating-stat {
      text-align: center;
    }

    .rating-stat strong {
      font-family: var(--font-heading);
      font-size: 2.2rem;
      font-weight: 700;
      color: var(--maroon);
      display: block;
    }

    .rating-stat span {
      font-family: var(--font-body);
      font-size: 0.82rem;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--text-mid);
    }

    @media (max-width: 600px) {
      .rating-divider { display: none; }
      .rating-inner { gap: 1.5rem; }
    }

    /* TESTIMONIALS GRID */
    .testimonials-section {
      background: var(--bg);
    }

    .t-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1.8rem;
    }

    .t-card {
      background: var(--white);
      border-radius: var(--radius-lg);
      padding: 2.4rem;
      border: 1px solid rgba(201,148,26,0.12);
      box-shadow: var(--shadow-sm);
      position: relative;
      transition: var(--transition);
      display: flex;
      flex-direction: column;
    }

    .t-card:hover {
      transform: translateY(-5px);
      box-shadow: var(--shadow-md);
      border-color: rgba(201,148,26,0.25);
    }

    .t-quote-mark {
      font-family: var(--font-heading);
      font-size: 5rem;
      line-height: 0.8;
      color: rgba(201,148,26,0.1);
      display: block;
      margin-bottom: 0.5rem;
    }

    .t-stars {
      display: flex;
      gap: 3px;
      margin-bottom: 1rem;
    }

    .t-stars span { color: var(--gold); font-size: 0.95rem; }

    .t-card p {
      font-family: var(--font-heading);
      font-style: italic;
      font-size: 1.05rem;
      color: var(--text-dark);
      line-height: 1.75;
      flex-grow: 1;
      margin-bottom: 1.8rem;
    }

    .t-author {
      display: flex;
      align-items: center;
      gap: 1rem;
      border-top: 1px solid rgba(201,148,26,0.1);
      padding-top: 1.2rem;
    }

    .t-avatar {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: var(--font-heading);
      font-size: 1.05rem;
      font-weight: 700;
      color: var(--white);
      flex-shrink: 0;
    }

    .t-avatar.av-a { background: linear-gradient(135deg, #8B1C1C, #C9941A); }
    .t-avatar.av-b { background: linear-gradient(135deg, #5E1212, #D97620); }
    .t-avatar.av-c { background: linear-gradient(135deg, #C9941A, #8B1C1C); }
    .t-avatar.av-d { background: linear-gradient(135deg, #D97620, #5E1212); }
    .t-avatar.av-e { background: linear-gradient(135deg, #8B1C1C, #D97620); }
    .t-avatar.av-f { background: linear-gradient(135deg, #C9941A, #5E1212); }

    .t-info strong {
      display: block;
      font-family: var(--font-body);
      font-size: 0.88rem;
      font-weight: 700;
      color: var(--text-dark);
    }

    .t-info span {
      font-family: var(--font-body);
      font-size: 0.76rem;
      color: var(--text-mid);
      letter-spacing: 0.06em;
    }

    .t-package {
      margin-left: auto;
      background: rgba(139,28,28,0.07);
      color: var(--maroon);
      font-family: var(--font-body);
      font-size: 0.68rem;
      font-weight: 700;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      padding: 0.25rem 0.7rem;
      border-radius: 20px;
      white-space: nowrap;
    }

    @media (max-width: 1024px) {
      .t-grid { grid-template-columns: repeat(2, 1fr); }
    }

    @media (max-width: 600px) {
      .t-grid { grid-template-columns: 1fr; }
    }

    /* FEATURED QUOTE STRIP */
    .featured-quote-strip {
      background: linear-gradient(135deg, var(--maroon) 0%, var(--maroon-dark) 100%);
      padding: 0;
      overflow: hidden;
    }

    .fqs-inner {
      display: grid;
      grid-template-columns: 1fr 1fr;
      min-height: 400px;
    }

    .fqs-image {
      position: relative;
      overflow: hidden;
    }

    .fqs-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      filter: brightness(0.85) saturate(0.9);
      transition: transform 0.8s ease;
    }

    .fqs-image:hover img { transform: scale(1.04); }

    .fqs-content {
      padding: 4rem 3.5rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .fqs-content .section-tag {
      color: var(--gold);
      margin-bottom: 1.5rem;
      display: block;
    }

    .fqs-quote {
      font-family: var(--font-heading);
      font-style: italic;
      font-size: clamp(1.3rem, 2.5vw, 1.8rem);
      color: var(--ivory);
      line-height: 1.55;
      margin-bottom: 2rem;
      position: relative;
      padding-left: 1.5rem;
    }

    .fqs-quote::before {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      bottom: 0;
      width: 3px;
      background: linear-gradient(to bottom, var(--gold), var(--gold-light));
      border-radius: 2px;
    }

    .fqs-author strong {
      display: block;
      font-family: var(--font-body);
      font-size: 0.92rem;
      font-weight: 700;
      color: var(--gold-light);
    }

    .fqs-author span {
      font-family: var(--font-body);
      font-size: 0.8rem;
      color: rgba(255,245,230,0.6);
    }

    @media (max-width: 768px) {
      .fqs-inner { grid-template-columns: 1fr; }
      .fqs-image { height: 260px; }
      .fqs-content { padding: 2.5rem 2rem; }
      .t-card { padding: 1.6rem 1.4rem; }
      .rating-inner { flex-direction: column; align-items: center; gap: 1rem; text-align: center; }
    }

    @media (max-width: 480px) {
      .fqs-content { padding: 2rem 1.4rem; }
      .fqs-image { height: 220px; }
      .t-author { flex-wrap: wrap; }
      .stories-cta { padding: 3.5rem 0; }
      .stories-cta p { max-width: 100%; }
    }

    /* STORIES CTA */
    .stories-cta {
      background: var(--ivory);
      padding: 5rem 0;
      text-align: center;
    }

    .stories-cta h2 {
      font-family: var(--font-heading);
      font-style: italic;
      color: var(--maroon);
      font-size: clamp(1.8rem, 3.5vw, 2.8rem);
      margin-bottom: 0.8rem;
    }

    .stories-cta p {
      color: var(--text-mid);
      max-width: 500px;
      margin: 0 auto 2.5rem;
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
        <a href="stories.php" class="active">Stories</a>
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
    <a href="stories.php" class="active">Stories</a>
    <a href="experience.php">Experience</a>
    <a href="contact.php" class="mob-cta">Book Now</a>
  </div>

  <!-- PAGE HERO -->
  <div class="page-hero">
    <div class="page-hero-bg" style="background-image: url('assets/7.jpg');"></div>
    <div class="page-hero-overlay"></div>
    <div class="page-hero-content">
      <h1>Client Stories</h1>
      <p>Words from the Couples We've Been Privileged to Serve</p>
    </div>
    <div class="page-hero-breadcrumb">
      <a href="index.php">Home</a>
      <span>›</span>
      <span>Stories</span>
    </div>
  </div>

  <!-- RATING BAR -->
  <div class="rating-bar">
    <div class="container">
      <div class="rating-inner">
        <div class="rating-score data-reveal="up" revealed">
          <span class="rating-num">4.9</span>
          <div class="rating-stars">
            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
          </div>
          <span class="rating-label">Overall Rating</span>
        </div>
        <div class="rating-divider"></div>
        <div class="rating-stat data-reveal="up" revealed">
          <strong>500+</strong>
          <span>Happy Couples</span>
        </div>
        <div class="rating-divider"></div>
        <div class="rating-stat data-reveal="up" revealed">
          <strong>8 Yrs</strong>
          <span>In Business</span>
        </div>
        <div class="rating-divider"></div>
        <div class="rating-stat data-reveal="up" revealed">
          <strong>98%</strong>
          <span>Would Recommend</span>
        </div>
      </div>
    </div>
  </div>

  <!-- TESTIMONIALS GRID -->
  <section class="testimonials-section">
    <div class="container">
      <div class="section-header" data-reveal="up">
        <span class="section-tag">Real Stories · Real Couples</span>
        <h2>What Our Couples Say</h2>
        <div class="divider">
          <div class="divider-line"></div>
          <div class="divider-gem-sm"></div>
          <div class="divider-gem"></div>
          <div class="divider-gem-sm"></div>
          <div class="divider-line"></div>
        </div>
      </div>
      <div class="t-grid">

        <!-- 1 -->
        <div class="t-card stagger">
          <span class="t-quote-mark">"</span>
          <div class="t-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          <p>From the muhurtham fire to the moment my husband tied the thali, every single emotion was captured so naturally. I cried seeing my photographs — it felt like I was reliving that morning all over again. CLICK CLICK photography truly understands what a Tamil wedding means.</p>
          <div class="t-author">
            <div class="t-avatar av-a">P</div>
            <div class="t-info">
              <strong>Priya &amp; Karthik Subramanian</strong>
              <span>Mylapore, Chennai · November 2024</span>
            </div>
            <span class="t-package">Signature</span>
          </div>
        </div>

        <!-- 2 -->
        <div class="t-card stagger">
          <span class="t-quote-mark">"</span>
          <div class="t-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          <p>We had a large traditional Tamil Brahmin wedding with over 600 guests. The team moved like shadows — we never felt crowded or self-conscious. But the photographs they produced were absolutely cinematic. The kanyadanam shots made my mother weep with joy.</p>
          <div class="t-author">
            <div class="t-avatar av-b">S</div>
            <div class="t-info">
              <strong>Santhiya &amp; Vignesh Iyer</strong>
              <span>Trichy · January 2025</span>
            </div>
            <span class="t-package">Legacy</span>
          </div>
        </div>

        <!-- 3 -->
        <div class="t-card stagger">
          <span class="t-quote-mark">"</span>
          <div class="t-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          <p>We booked for our temple wedding at Kapaleeshwarar. The golden light, the banana trees, my mother's saree — they captured details I had completely forgotten. The pre-wedding consultation gave me total confidence that they knew exactly what we wanted.</p>
          <div class="t-author">
            <div class="t-avatar av-c">M</div>
            <div class="t-info">
              <strong>Meenakshi &amp; Arjun Natarajan</strong>
              <span>Mylapore, Chennai · March 2025</span>
            </div>
            <span class="t-package">Classic</span>
          </div>
        </div>

        <!-- 4 -->
        <div class="t-card stagger">
          <span class="t-quote-mark">"</span>
          <div class="t-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          <p>We had a destination wedding in Madurai near the Meenakshi Amman temple. The team drove down the night before, scouted the venue at dawn, and delivered images that look like they belong in a bridal magazine. The drone footage was absolutely breathtaking.</p>
          <div class="t-author">
            <div class="t-avatar av-d">L</div>
            <div class="t-info">
              <strong>Lavanya &amp; Deepak Murugan</strong>
              <span>Madurai · October 2024</span>
            </div>
            <span class="t-package">Legacy</span>
          </div>
        </div>

        <!-- 5 -->
        <div class="t-card stagger">
          <span class="t-quote-mark">"</span>
          <div class="t-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          <p>I was nervous about looking stiff in photos — I always do. But they made us laugh, feel natural, and completely forget the camera was there. The candid shot of my husband crying when I walked in is framed in our living room. I look at it every single day.</p>
          <div class="t-author">
            <div class="t-avatar av-e">D</div>
            <div class="t-info">
              <strong>Divya &amp; Suresh Krishnamurthy</strong>
              <span>Coimbatore · August 2024</span>
            </div>
            <span class="t-package">Signature</span>
          </div>
        </div>

        <!-- 6 -->
        <div class="t-card stagger">
          <span class="t-quote-mark">"</span>
          <div class="t-stars"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
          <p>Our reception was at a 5-star hotel in Adyar and the low-light photography was incredible — sharp, warm, and absolutely stunning. Delivery was faster than promised. Every single family member has asked us for the photographer's number. Highly recommended!</p>
          <div class="t-author">
            <div class="t-avatar av-f">R</div>
            <div class="t-info">
              <strong>Revathi &amp; Anand Venkatesh</strong>
              <span>Adyar, Chennai · February 2025</span>
            </div>
            <span class="t-package">Signature</span>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- FEATURED QUOTE STRIP -->
  <div class="featured-quote-strip">
    <div class="fqs-inner">
      <div class="fqs-image fade-left">
        <img src="assets/10.jpg" alt="Pre-wedding couple at ancient stone temple" loading="lazy" />
      </div>
      <div class="fqs-content fade-right">
        <span class="section-tag">Featured Story</span>
        <p class="fqs-quote">"We almost didn't hire a professional photographer — we thought our phone videos would be enough. Then a friend showed us her CLICK CLICK photography album, and we changed our minds that same evening. I'm so grateful we did. Our photographs are the most precious thing we own."</p>
        <div class="fqs-author">
          <strong>Nithya &amp; Balaji Raghunathan</strong>
          <span>T. Nagar, Chennai · December 2024 · Legacy Package</span>
        </div>
      </div>
    </div>
  </div>

  <!-- STORIES CTA -->
  <div class="stories-cta">
    <div class="container data-reveal="up" revealed">
      <span class="section-tag">Your Turn</span>
      <h2>Ready to Add Your Story?</h2>
      <p>Join 500+ couples who trusted us with the most important day of their lives. Let's begin your chapter.</p>
      <a href="contact.php" class="btn-maroon"><span>Book Your Date →</span></a>
    </div>
  </div>

  <!-- FOOTER -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <span class="logo-main" style="font-family:'Cormorant Garamond',serif; font-style:italic; color:var(--gold-light); font-size:1.6rem; display:block; margin-bottom:0.3rem;">CLICK CLICK photography</span>
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
            <span>+91 70103 09601</span>
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
        <p>© 2025 <span>CLICK CLICK photography</span>. All rights reserved. Crafted with <span>♥</span> in Chennai.</p>
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
