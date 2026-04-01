<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us · CLICK CLICK photography Chennai</title>
  <meta name="description" content="Meet the team behind CLICK CLICK photography — passionate storytellers rooted in Tamil Nadu wedding traditions for over 8 years." />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <style>
    /* ── PAGE-SPECIFIC: ABOUT ── */

    /* ABOUT MAIN SECTION */
    .about-main {
      background: var(--bg);
    }

    .about-main-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 5rem;
      align-items: start;
    }

    .about-images {
      position: relative;
    }

    .about-img-primary {
      width: 100%;
      aspect-ratio: 4/5;
      object-fit: cover;
      border-radius: var(--radius-md);
      box-shadow: var(--shadow-lg);
      position: relative;
      z-index: 2;
    }

    .about-img-secondary {
      position: absolute;
      bottom: -2rem;
      right: -2rem;
      width: 52%;
      aspect-ratio: 1;
      object-fit: cover;
      border-radius: var(--radius-sm);
      border: 5px solid var(--bg);
      box-shadow: var(--shadow-md);
      z-index: 3;
    }

    .about-gold-frame {
      position: absolute;
      top: -14px;
      left: -14px;
      right: 14px;
      bottom: 14px;
      border: 2px solid rgba(201,148,26,0.45);
      border-radius: var(--radius-md);
      z-index: 1;
    }

    .about-text-block .section-tag {
      margin-bottom: 0.5rem;
      display: block;
    }

    .about-text-block h2 {
      margin-bottom: 1.2rem;
      line-height: 1.2;
    }

    .about-text-block p {
      margin-bottom: 1.1rem;
    }

    .about-quote-block {
      border-left: 4px solid var(--gold);
      padding: 1.2rem 1.6rem;
      background: rgba(201,148,26,0.05);
      border-radius: 0 var(--radius-sm) var(--radius-sm) 0;
      margin: 2rem 0;
    }

    .about-quote-block p {
      font-family: var(--font-heading);
      font-style: italic;
      font-size: 1.25rem;
      color: var(--maroon);
      line-height: 1.6;
      margin: 0;
    }

    .traits-grid {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      margin-top: 1.8rem;
    }

    .trait-card {
      display: flex;
      align-items: flex-start;
      gap: 1rem;
      padding: 1.1rem 1.3rem;
      background: var(--ivory);
      border-radius: var(--radius-sm);
      border: 1px solid rgba(201,148,26,0.12);
    }

    .trait-icon {
      width: 38px;
      height: 38px;
      background: linear-gradient(135deg, var(--maroon), var(--maroon-dark));
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      font-size: 1rem;
    }

    .trait-card-text strong {
      display: block;
      font-family: var(--font-body);
      font-size: 0.9rem;
      font-weight: 700;
      color: var(--text-dark);
      margin-bottom: 0.2rem;
    }

    .trait-card-text span {
      font-family: var(--font-body);
      font-size: 0.83rem;
      color: var(--text-mid);
    }

    @media (max-width: 1024px) {
      .about-main-grid { grid-template-columns: 1fr; gap: 3rem; }
      .about-images { max-width: 500px; margin: 0 auto; padding-bottom: 3rem; }
    }

    /* WHY US */
    .why-us {
      background: var(--ivory);
    }

    .why-cards {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 2rem;
    }

    .why-card {
      background: var(--white);
      border-radius: var(--radius-lg);
      padding: 2.8rem 2rem;
      text-align: center;
      border: 1px solid rgba(201,148,26,0.12);
      box-shadow: var(--shadow-sm);
      transition: var(--transition);
    }

    .why-card:hover {
      transform: translateY(-6px);
      box-shadow: var(--shadow-md);
    }

    .why-icon {
      width: 70px;
      height: 70px;
      background: linear-gradient(135deg, rgba(139,28,28,0.08), rgba(201,148,26,0.1));
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 1.5rem;
      font-size: 1.8rem;
      border: 1px solid rgba(201,148,26,0.2);
    }

    .why-card h3 {
      font-size: 1.25rem;
      font-style: italic;
      color: var(--maroon);
      margin-bottom: 0.8rem;
    }

    .why-card p {
      font-size: 0.9rem;
      line-height: 1.75;
    }

    @media (max-width: 768px) {
      .why-cards { grid-template-columns: 1fr; max-width: 440px; margin: 0 auto; }
      .about-img-secondary { bottom: -1rem; right: -0.5rem; width: 44%; }
      .approach-content { padding: 3rem 1.5rem; max-width: 100%; }
      .approach-content h2 { font-size: clamp(1.6rem, 5vw, 2.2rem); }
    }

    @media (max-width: 480px) {
      .about-img-secondary { display: none; }
      .why-card { padding: 1.6rem 1.2rem; }
      .approach-content { padding: 2.5rem 1.2rem; }
      .about-main-grid { gap: 2rem; }
    }

    /* OUR APPROACH */
    .our-approach {
      position: relative;
      padding: 0;
      min-height: 500px;
      display: flex;
      align-items: center;
      overflow: hidden;
    }

    .approach-bg {
      position: absolute;
      inset: 0;
      background: url('assets/pre-wedding/1.jpg') center center / cover no-repeat;
    }

    .approach-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(
        to right,
        rgba(28,8,8,0.88) 0%,
        rgba(94,18,18,0.72) 50%,
        rgba(28,8,8,0.55) 100%
      );
    }

    .approach-content {
      position: relative;
      z-index: 2;
      max-width: 680px;
      padding: 6rem 0;
    }

    .approach-content .section-tag {
      color: var(--gold);
      margin-bottom: 1.2rem;
      display: block;
    }

    .approach-content h2 {
      font-family: var(--font-heading);
      font-style: italic;
      font-size: clamp(2rem, 4vw, 3.2rem);
      color: var(--white);
      line-height: 1.25;
      margin-bottom: 1.4rem;
    }

    .approach-content h2 em {
      color: var(--gold-light);
    }

    .approach-content p {
      color: rgba(255,245,230,0.8);
      font-size: 1rem;
      max-width: 520px;
      margin-bottom: 1rem;
    }

    .approach-steps {
      display: flex;
      flex-direction: column;
      gap: 0.8rem;
      margin-top: 2rem;
    }

    .approach-step {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .approach-step-num {
      width: 32px;
      height: 32px;
      background: var(--gold);
      color: var(--maroon-dark);
      font-family: var(--font-body);
      font-size: 0.8rem;
      font-weight: 700;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .approach-step span {
      font-family: var(--font-body);
      font-size: 0.9rem;
      color: rgba(255,245,230,0.85);
      font-weight: 600;
      letter-spacing: 0.06em;
    }

    /* ABOUT CTA */
    .about-cta {
      background: linear-gradient(135deg, var(--maroon) 0%, var(--maroon-dark) 100%);
      padding: 5rem 0;
      text-align: center;
    }

    .about-cta h2 {
      font-family: var(--font-heading);
      font-style: italic;
      color: var(--white);
      font-size: clamp(1.8rem, 3.5vw, 2.8rem);
      margin-bottom: 0.8rem;
    }

    .about-cta p {
      color: rgba(255,245,230,0.72);
      max-width: 480px;
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
        <a href="about.php" class="active">About</a>
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
    <a href="about.php" class="active">About</a>
    <a href="services.php">Services</a>
    <a href="stories.php">Stories</a>
    <a href="experience.php">Experience</a>
    <a href="contact.php" class="mob-cta">Book Now</a>
  </div>

  <!-- PAGE HERO -->
  <div class="page-hero">
    <div class="page-hero-bg" style="background-image: url('assets/pre-wedding/3.jpg');"></div>
    <div class="page-hero-overlay"></div>
    <div class="page-hero-content">
      <h1>Our Story</h1>
      <p>The People Who Fall in Love with Your Love Story</p>
    </div>
    <div class="page-hero-breadcrumb">
      <a href="index.php">Home</a>
      <span>›</span>
      <span>Our Story</span>
    </div>
  </div>

  <!-- ABOUT MAIN -->
  <section class="about-main">
    <div class="container">
      <div class="about-main-grid">
        <div class="about-images fade-left">
          <div class="about-gold-frame"></div>
          <img src="assets/pre-wedding/5.jpg" alt="Couple in romantic pre-wedding shoot" class="about-img-primary" loading="lazy" />
          <img src="assets/pre-wedding/6.jpg" alt="Candid couple moment pre-wedding" class="about-img-secondary" loading="lazy" />
        </div>
        <div class="about-text-block fade-right">
          <span class="section-tag">Our Story</span>
          <h2>We Don't Just Photograph Couples — We Fall in Love with Their Story</h2>
          <div class="divider" style="justify-content:flex-start; margin:0.8rem 0 1.5rem;">
            <div class="divider-line" style="width:40px;"></div>
            <div class="divider-gem"></div>
          </div>
          <p>CLICK CLICK photography was born from one simple truth: the moments before the wedding are just as beautiful as the wedding itself. The nervous excitement, the inside jokes only you two share, the way you look at each other when you think no one is watching — that's where the real magic lives.</p>
          <p>Founded in 2016 in Chennai, we've spent eight years crafting love stories for young couples across Tamil Nadu and beyond. Over 500 couples have trusted us with their most intimate moments — from dreamy pre-wedding shoots at golden hour to candid wedding day emotions that make you ugly-cry in the best possible way.</p>
          <p>We believe your pre-wedding shoot should feel like a date, not a photoshoot. We help you relax, be yourselves, and let the chemistry between you do the rest. The result? Frames so honest, so alive, you'll forget we were even there.</p>

          <div class="about-quote-block">
            <p>"Every couple has a universe of their own. We just bring the camera and stay out of the way while it unfolds."</p>
          </div>

          <div class="traits-grid">
            <div class="trait-card">
              <div class="trait-icon">💑</div>
              <div class="trait-card-text">
                <strong>You-First Philosophy</strong>
                <span>We spend time getting to know you before we shoot — your vibe, your story, the things that make you laugh.</span>
              </div>
            </div>
            <div class="trait-card">
              <div class="trait-icon">🌅</div>
              <div class="trait-card-text">
                <strong>Light Chasers</strong>
                <span>Golden hour, soft mornings, dreamy bokeh — we scout every location to find light that makes you glow.</span>
              </div>
            </div>
            <div class="trait-card">
              <div class="trait-icon">❤️</div>
              <div class="trait-card-text">
                <strong>Emotion Over Everything</strong>
                <span>No stiff poses. No awkward instructions. Just real moments between two real people madly in love.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- WHY US -->
  <section class="why-us">
    <div class="container">
      <div class="section-header" data-reveal="up">
        <span class="section-tag">Why Choose Us</span>
        <h2>What Makes Your Story Safe With Us</h2>
        <div class="divider">
          <div class="divider-line"></div>
          <div class="divider-gem-sm"></div>
          <div class="divider-gem"></div>
          <div class="divider-gem-sm"></div>
          <div class="divider-line"></div>
        </div>
        <p>500+ young couples chose us. Here's the secret they discovered.</p>
      </div>
      <div class="why-cards">
        <div class="why-card stagger">
          <div class="why-icon">💬</div>
          <h3>We Listen Before We Shoot</h3>
          <p>Before the camera comes out, we have a real conversation. Your comfort, your chemistry, your story — we want to understand all of it, so every frame feels effortlessly you.</p>
        </div>
        <div class="why-card stagger">
          <div class="why-icon">🎬</div>
          <h3>Cinematic Storytelling</h3>
          <p>Every shoot is edited like a film — with mood, light, emotion, and narrative working in perfect harmony to tell your unique love story.</p>
        </div>
        <div class="why-card stagger">
          <div class="why-icon">✨</div>
          <h3>Zero Awkward Moments</h3>
          <p>We guide you gently through every shot, so you never feel stiff or unnatural. By the end, most couples forget we're even there — and that's exactly the point.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- OUR APPROACH -->
  <div class="our-approach">
    <div class="approach-bg"></div>
    <div class="approach-overlay"></div>
    <div class="container">
      <div class="approach-content data-reveal="up" revealed">
        <span class="section-tag">Our Philosophy</span>
        <h2>"Your love is already<br>beautiful —<br><em>we just hit record."</em></h2>
        <p>A great pre-wedding shoot should feel like your most fun date ever. No forced smiles, no awkward "look here" moments — just you two, exactly as you are, in a setting that makes your story shine.</p>
        <div class="approach-steps">
          <div class="approach-step">
            <div class="approach-step-num">1</div>
            <span>We learn your story — your vibe, your energy, your favourite moments together</span>
          </div>
          <div class="approach-step">
            <div class="approach-step-num">2</div>
            <span>We scout dream locations and light for your unique aesthetic</span>
          </div>
          <div class="approach-step">
            <div class="approach-step-num">3</div>
            <span>We create space for real, unscripted emotion — and capture every heartbeat</span>
          </div>
          <div class="approach-step">
            <div class="approach-step-num">4</div>
            <span>We deliver cinematic edits that tell your story, frame by beautiful frame</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ABOUT CTA -->
  <div class="about-cta">
    <div class="container data-reveal="up" revealed">
      <h2>Ready to Write Your Chapter?</h2>
      <p>Your love story is too good not to be told. Let's have a laid-back chat about your pre-wedding shoot — no pressure, just possibilities.</p>
      <a href="contact.php" class="btn-gold-outline">Get in Touch →</a>
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
