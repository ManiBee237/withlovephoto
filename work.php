<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Our Work · With Love Photography Chennai</title>
  <meta name="description" content="Explore our full wedding photography portfolio — Tamil Nadu weddings captured with artistry and heart." />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400;1,600&family=Lato:wght@300;400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <style>
    /* ─── PAGE HERO ─────────────────────────────────────────── */
    .work-hero {
      position: relative;
      height: 70vh;
      min-height: 480px;
      display: flex;
      align-items: flex-end;
      overflow: hidden;
    }
    .work-hero-img {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 115%;
      object-fit: cover;
      object-position: center 30%;
      will-change: transform;
    }
    .work-hero-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(
        to bottom,
        rgba(20,4,4,.15) 0%,
        rgba(20,4,4,.25) 40%,
        rgba(94,18,18,.75) 80%,
        rgba(20,4,4,.92) 100%
      );
    }
    .work-hero-content {
      position: relative;
      z-index: 2;
      padding: 0 2rem 4rem;
      max-width: 1280px;
      margin: 0 auto;
      width: 100%;
    }
    .work-hero-content .breadcrumb {
      font-size: .62rem;
      letter-spacing: .22em;
      text-transform: uppercase;
      color: rgba(255,245,210,.5);
      margin-bottom: 1rem;
    }
    .work-hero-content .breadcrumb a { color: inherit; text-decoration: none; }
    .work-hero-content .breadcrumb a:hover { color: var(--gold-light, #E8B430); }
    .work-hero-content h1 {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(3rem,7vw,5.5rem);
      color: #fff;
      font-style: italic;
      line-height: 1.05;
      margin-bottom: .6rem;
    }
    .work-hero-content h1 em { color: #E8B430; }
    .work-hero-content p {
      font-size: .9rem;
      color: rgba(255,245,210,.7);
      letter-spacing: .1em;
    }
    /* Decorative gold line */
    .work-hero::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 2px;
      background: linear-gradient(to right, transparent, #C9941A 30%, #E8B430 50%, #C9941A 70%, transparent);
      z-index: 3;
    }

    /* ─── FILTER TABS ────────────────────────────────────────── */
    .filter-bar {
      background: #fff;
      position: sticky;
      top: 72px;
      z-index: 100;
      border-bottom: 1px solid rgba(139,28,28,.1);
      box-shadow: 0 4px 24px rgba(139,28,28,.06);
    }
    .filter-inner {
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 2rem;
      display: flex;
      gap: 0;
      overflow-x: auto;
      scrollbar-width: none;
    }
    .filter-inner::-webkit-scrollbar { display: none; }
    .filter-btn {
      flex-shrink: 0;
      padding: 1.1rem 1.6rem;
      background: none;
      border: none;
      border-bottom: 2.5px solid transparent;
      font-family: 'Lato', sans-serif;
      font-size: .68rem;
      font-weight: 700;
      letter-spacing: .18em;
      text-transform: uppercase;
      color: #8A6464;
      cursor: pointer;
      transition: color .3s, border-color .3s;
    }
    .filter-btn:hover { color: #8B1C1C; }
    .filter-btn.active { color: #8B1C1C; border-bottom-color: #C9941A; }

    /* ─── GALLERY GRID ───────────────────────────────────────── */
    .gallery-wrap {
      background: #FFFAF3;
      padding: 3rem 2rem 5rem;
    }
    .gallery-grid {
      max-width: 1280px;
      margin: 0 auto;
      columns: 3;
      column-gap: 1rem;
    }
    .gallery-item {
      break-inside: avoid;
      position: relative;
      margin-bottom: 1rem;
      overflow: hidden;
      cursor: pointer;
      display: block;
    }
    .gallery-item img {
      width: 100%;
      display: block;
      transition: transform .8s cubic-bezier(.25,.46,.45,.94);
      filter: brightness(.97) saturate(1.05);
    }
    .gallery-item:hover img { transform: scale(1.05); }

    /* Overlay */
    .gallery-item .g-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(94,18,18,.88) 0%, rgba(94,18,18,.2) 50%, transparent 100%);
      opacity: 0;
      transition: opacity .45s ease;
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      padding: 1.5rem;
    }
    .gallery-item:hover .g-overlay { opacity: 1; }
    .g-overlay h4 {
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.3rem;
      color: #fff;
      font-style: italic;
      line-height: 1.2;
      margin-bottom: .3rem;
      transform: translateY(8px);
      transition: transform .4s ease;
    }
    .gallery-item:hover .g-overlay h4 { transform: translateY(0); }
    .g-overlay span {
      font-size: .58rem;
      letter-spacing: .22em;
      text-transform: uppercase;
      color: #E8B430;
      transform: translateY(8px);
      transition: transform .4s ease .05s;
      display: block;
    }
    .gallery-item:hover .g-overlay span { transform: translateY(0); }

    /* Category badge */
    .g-badge {
      position: absolute;
      top: .9rem;
      left: .9rem;
      background: rgba(94,18,18,.85);
      backdrop-filter: blur(6px);
      color: #E8B430;
      font-size: .52rem;
      font-weight: 700;
      letter-spacing: .18em;
      text-transform: uppercase;
      padding: .3rem .75rem;
      opacity: 0;
      transition: opacity .3s;
    }
    .gallery-item:hover .g-badge { opacity: 1; }

    /* Expand icon */
    .g-expand {
      position: absolute;
      top: .9rem;
      right: .9rem;
      width: 34px;
      height: 34px;
      background: rgba(255,255,255,.15);
      backdrop-filter: blur(6px);
      border: 1px solid rgba(255,255,255,.3);
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: .85rem;
      opacity: 0;
      transition: opacity .3s, background .3s;
    }
    .gallery-item:hover .g-expand { opacity: 1; }
    .g-expand:hover { background: rgba(201,148,26,.5); }

    /* Hidden class for filter */
    .gallery-item.hidden-item {
      display: none;
    }

    /* ─── LIGHTBOX ───────────────────────────────────────────── */
    .lightbox {
      position: fixed;
      inset: 0;
      background: rgba(10,4,4,.96);
      z-index: 9000;
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      visibility: hidden;
      transition: opacity .4s ease, visibility .4s ease;
    }
    .lightbox.open { opacity: 1; visibility: visible; }
    .lb-inner {
      position: relative;
      max-width: 90vw;
      max-height: 90vh;
      display: flex;
      align-items: center;
      gap: 1rem;
    }
    .lb-img-wrap {
      position: relative;
      max-width: 80vw;
      max-height: 88vh;
    }
    .lb-img-wrap img {
      max-width: 80vw;
      max-height: 88vh;
      object-fit: contain;
      display: block;
      box-shadow: 0 30px 80px rgba(0,0,0,.7);
    }
    .lb-caption {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      padding: 1.2rem 1.5rem;
      background: linear-gradient(to top, rgba(10,4,4,.9), transparent);
    }
    .lb-caption h4 {
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.3rem;
      color: #fff;
      font-style: italic;
    }
    .lb-caption span {
      font-size: .6rem;
      letter-spacing: .2em;
      text-transform: uppercase;
      color: #E8B430;
    }
    .lb-close {
      position: fixed;
      top: 1.5rem;
      right: 1.5rem;
      width: 44px;
      height: 44px;
      border: 1px solid rgba(255,255,255,.2);
      background: rgba(255,255,255,.08);
      color: #fff;
      font-size: 1.2rem;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: background .3s;
      z-index: 9001;
    }
    .lb-close:hover { background: rgba(139,28,28,.7); }
    .lb-nav {
      width: 44px;
      height: 44px;
      border: 1px solid rgba(255,255,255,.15);
      background: rgba(255,255,255,.06);
      color: #fff;
      font-size: 1.2rem;
      cursor: pointer;
      flex-shrink: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: background .3s;
    }
    .lb-nav:hover { background: rgba(201,148,26,.3); border-color: #C9941A; }
    .lb-counter {
      position: fixed;
      bottom: 1.5rem;
      left: 50%;
      transform: translateX(-50%);
      font-size: .65rem;
      letter-spacing: .22em;
      text-transform: uppercase;
      color: rgba(255,255,255,.4);
    }

    /* ─── STATS STRIP ────────────────────────────────────────── */
    .work-stats {
      background: linear-gradient(135deg, #5E1212, #8B1C1C);
      padding: 3rem 2rem;
      text-align: center;
    }
    .work-stats-inner {
      max-width: 900px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 1rem;
    }
    .ws { border-right: 1px solid rgba(255,245,210,.1); padding: 1rem; }
    .ws:last-child { border-right: none; }
    .ws-num { font-family: 'Cormorant Garamond', serif; font-size: 3rem; color: #E8B430; line-height: 1; }
    .ws-label { font-size: .58rem; letter-spacing: .25em; text-transform: uppercase; color: rgba(255,245,210,.5); margin-top: .4rem; }

    /* ─── CTA ────────────────────────────────────────────────── */
    .work-cta {
      background: #FFFAF3;
      padding: 6rem 2rem;
      text-align: center;
    }
    .work-cta h2 {
      font-family: 'Cormorant Garamond', serif;
      font-size: clamp(2rem,4vw,3.2rem);
      color: #5E1212;
      margin-bottom: .8rem;
    }
    .work-cta p { max-width: 480px; margin: 0 auto 2.5rem; }
    .work-cta-btns { display: flex; gap: 1.2rem; justify-content: center; flex-wrap: wrap; }

    /* ─── RESPONSIVE ─────────────────────────────────────────── */
    @media (max-width: 900px) {
      .gallery-grid { columns: 2; }
      .work-stats-inner { grid-template-columns: repeat(2, 1fr); }
    }
    @media (max-width: 560px) {
      .gallery-grid { columns: 1; }
      .work-hero-content h1 { font-size: 2.5rem; }
      .lb-nav { display: none; }
    }

    @media (max-width: 768px) {
      .work-hero-content { padding: 0 1.2rem 3rem; }
      .filter-bar { top: 64px; }
      .filter-inner { padding: 0 1rem; gap: 0; }
      .filter-btn { padding: .55rem .9rem; font-size: .72rem; }
      .work-stats-inner { gap: .5rem; }
      .work-stat { padding: 1.2rem .5rem; }
      .work-cta-btns { flex-direction: column; align-items: center; gap: .8rem; }
      .work-cta-btns a { width: 100%; max-width: 320px; text-align: center; justify-content: center; }
    }

    @media (max-width: 480px) {
      .lb-img-wrap { max-width: 98vw; max-height: 80vh; }
      .lb-close { top: .6rem; right: .6rem; width: 36px; height: 36px; font-size: 1.2rem; }
      .gallery-grid { column-gap: .6rem; }
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
        <a href="work.php" class="active">Work</a>
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
    <a href="work.php" class="active">Work</a>
    <a href="about.php">About</a>
    <a href="services.php">Services</a>
    <a href="stories.php">Stories</a>
    <a href="experience.php">Experience</a>
    <a href="contact.php" class="mob-cta">Book Now</a>
  </div>

  <!-- PAGE HERO -->
  <div class="work-hero">
    <img class="work-hero-img" src="assets/pre-wedding/2.jpg" alt="Couple in romantic pre-wedding shoot" />
    <div class="work-hero-overlay"></div>
    <div class="work-hero-content">
      <p class="breadcrumb"><a href="index.php">Home</a> &nbsp;›&nbsp; Our Work</p>
      <h1>Every Frame,<br><em>A Chapter of Love</em></h1>
      <p>Real couples. Real emotions. Stories that last a lifetime.</p>
    </div>
  </div>

  <!-- FILTER BAR -->
  <div class="filter-bar">
    <div class="filter-inner">
      <button class="filter-btn active" data-filter="all">All Stories</button>
      <button class="filter-btn" data-filter="pre-wedding">Pre-Wedding</button>
      <button class="filter-btn" data-filter="couple">Couple &amp; Portrait</button>
      <button class="filter-btn" data-filter="candid">Candid Moments</button>
      <button class="filter-btn" data-filter="ceremony">Ceremony</button>
      <button class="filter-btn" data-filter="detail">Details &amp; Rituals</button>
    </div>
  </div>

  <!-- GALLERY -->
  <div class="gallery-wrap">
    <div class="gallery-grid" id="galleryGrid">

      <div class="gallery-item" data-cat="pre-wedding" data-title="The Chapter Before Forever" data-sub="Pre-Wedding · Golden Hour" data-src="assets/pre-wedding/1.jpg">
        <img src="assets/pre-wedding/1.jpg" alt="Couple in golden hour pre-wedding shoot" loading="lazy" />
        <div class="g-badge">Pre-Wedding</div>
        <div class="g-expand">⤢</div>
        <div class="g-overlay">
          <h4>The Chapter Before Forever</h4>
          <span>Pre-Wedding · Golden Hour</span>
        </div>
      </div>

      <div class="gallery-item" data-cat="pre-wedding" data-title="Stolen Glances" data-sub="Pre-Wedding · Natural Light" data-src="assets/pre-wedding/2.jpg">
        <img src="assets/pre-wedding/2.jpg" alt="Couple sharing a quiet moment" loading="lazy" />
        <div class="g-badge">Pre-Wedding</div>
        <div class="g-expand">⤢</div>
        <div class="g-overlay">
          <h4>Stolen Glances</h4>
          <span>Pre-Wedding · Natural Light</span>
        </div>
      </div>

      <div class="gallery-item" data-cat="pre-wedding" data-title="Just the Two of Us" data-sub="Pre-Wedding · 2024" data-src="assets/pre-wedding/3.jpg">
        <img src="assets/pre-wedding/3.jpg" alt="Couple laughing together pre-wedding" loading="lazy" />
        <div class="g-badge">Pre-Wedding</div>
        <div class="g-expand">⤢</div>
        <div class="g-overlay">
          <h4>Just the Two of Us</h4>
          <span>Pre-Wedding · 2024</span>
        </div>
      </div>

      <div class="gallery-item" data-cat="pre-wedding" data-title="Golden Hour Magic" data-sub="Pre-Wedding · Sunset" data-src="assets/pre-wedding/4.jpg">
        <img src="assets/pre-wedding/4.jpg" alt="Couple at sunset pre-wedding" loading="lazy" />
        <div class="g-badge">Pre-Wedding</div>
        <div class="g-expand">⤢</div>
        <div class="g-overlay">
          <h4>Golden Hour Magic</h4>
          <span>Pre-Wedding · Sunset</span>
        </div>
      </div>

      <div class="gallery-item" data-cat="pre-wedding" data-title="Written in the Stars" data-sub="Pre-Wedding · Portrait" data-src="assets/pre-wedding/5.jpg">
        <img src="assets/pre-wedding/5.jpg" alt="Romantic pre-wedding portrait" loading="lazy" />
        <div class="g-badge">Pre-Wedding</div>
        <div class="g-expand">⤢</div>
        <div class="g-overlay">
          <h4>Written in the Stars</h4>
          <span>Pre-Wedding · Portrait</span>
        </div>
      </div>

      <div class="gallery-item" data-cat="pre-wedding" data-title="Our Story Begins" data-sub="Pre-Wedding · Candid" data-src="assets/pre-wedding/6.jpg">
        <img src="assets/pre-wedding/6.jpg" alt="Candid pre-wedding couple moment" loading="lazy" />
        <div class="g-badge">Pre-Wedding</div>
        <div class="g-expand">⤢</div>
        <div class="g-overlay">
          <h4>Our Story Begins</h4>
          <span>Pre-Wedding · Candid</span>
        </div>
      </div>

      <div class="gallery-item" data-cat="ceremony" data-title="Sacred Rituals" data-sub="Muhurtham · Fire Ceremony" data-src="assets/1.jpg">
        <img src="assets/1.jpg" alt="Sacred Tamil wedding ritual" loading="lazy" />
        <div class="g-badge">Ceremony</div>
        <div class="g-expand">⤢</div>
        <div class="g-overlay">
          <h4>Sacred Rituals</h4>
          <span>Muhurtham · Fire Ceremony</span>
        </div>
      </div>

      <div class="gallery-item" data-cat="ceremony" data-title="Grand Celebration" data-sub="Wedding 2024 · Grand Mandap" data-src="assets/2.jpg">
        <img src="assets/2.jpg" alt="Grand wedding ceremony at decorated mandap" loading="lazy" />
        <div class="g-badge">Grand Wedding</div>
        <div class="g-expand">⤢</div>
        <div class="g-overlay">
          <h4>Grand Celebration</h4>
          <span>Wedding 2024 · Grand Mandap</span>
        </div>
      </div>

      <div class="gallery-item" data-cat="couple" data-title="Joy &amp; Laughter" data-sub="Couple Portrait · Gold Silk" data-src="assets/3.jpg">
        <img src="assets/3.jpg" alt="Couple laughing together in gold outfits" loading="lazy" />
        <div class="g-badge">Couple Portrait</div>
        <div class="g-expand">⤢</div>
        <div class="g-overlay">
          <h4>Joy &amp; Laughter</h4>
          <span>Couple Portrait · Gold Silk</span>
        </div>
      </div>

      <div class="gallery-item" data-cat="couple" data-title="Outdoor Romance" data-sub="Kanjivaram · Red Silk" data-src="assets/4.jpg">
        <img src="assets/4.jpg" alt="Couple outdoors, bride in red Kanjivaram saree" loading="lazy" />
        <div class="g-badge">Outdoor</div>
        <div class="g-expand">⤢</div>
        <div class="g-overlay">
          <h4>Outdoor Romance</h4>
          <span>Kanjivaram · Red Silk</span>
        </div>
      </div>

      <div class="gallery-item" data-cat="ceremony" data-title="The Mandap" data-sub="Ceremony · Saffron Silk" data-src="assets/5.jpg">
        <img src="assets/5.jpg" alt="Bride in orange saree at mandap" loading="lazy" />
        <div class="g-badge">Mandap</div>
        <div class="g-expand">⤢</div>
        <div class="g-overlay">
          <h4>The Mandap</h4>
          <span>Ceremony · Saffron Silk</span>
        </div>
      </div>

      <div class="gallery-item" data-cat="candid" data-title="The Exchange" data-sub="Garland Ceremony · Candid" data-src="assets/6.jpg">
        <img src="assets/6.jpg" alt="Garland exchange ceremony" loading="lazy" />
        <div class="g-badge">Candid</div>
        <div class="g-expand">⤢</div>
        <div class="g-overlay">
          <h4>The Exchange</h4>
          <span>Garland Ceremony · Candid</span>
        </div>
      </div>

      <div class="gallery-item" data-cat="candid" data-title="Her Smile" data-sub="Candid Moment · Bride" data-src="assets/7.jpg">
        <img src="assets/7.jpg" alt="Bride looking at groom lovingly" loading="lazy" />
        <div class="g-badge">Candid</div>
        <div class="g-expand">⤢</div>
        <div class="g-overlay">
          <h4>Her Smile</h4>
          <span>Candid Moment · Bride</span>
        </div>
      </div>

      <div class="gallery-item" data-cat="detail" data-title="Jasmine &amp; Roses" data-sub="Detail Shot · Garlands" data-src="assets/8.jpg">
        <img src="assets/8.jpg" alt="Jasmine and flower garlands" loading="lazy" />
        <div class="g-badge">Detail</div>
        <div class="g-expand">⤢</div>
        <div class="g-overlay">
          <h4>Jasmine &amp; Roses</h4>
          <span>Detail Shot · Garlands</span>
        </div>
      </div>

      <div class="gallery-item" data-cat="ceremony" data-title="Temple Wedding" data-sub="Sacred Entrance · Banana Trees" data-src="assets/9.jpg">
        <img src="assets/9.jpg" alt="Temple mandap entrance with banana trees" loading="lazy" />
        <div class="g-badge">Temple</div>
        <div class="g-expand">⤢</div>
        <div class="g-overlay">
          <h4>Temple Wedding</h4>
          <span>Sacred Entrance · Banana Trees</span>
        </div>
      </div>

      <div class="gallery-item" data-cat="pre-wedding" data-title="Ancient Temple" data-sub="Pre-Wedding · Stone Pillars" data-src="assets/10.jpg">
        <img src="assets/10.jpg" alt="Pre-wedding shoot at ancient temple" loading="lazy" />
        <div class="g-badge">Pre-Wedding</div>
        <div class="g-expand">⤢</div>
        <div class="g-overlay">
          <h4>Ancient Temple</h4>
          <span>Pre-Wedding · Stone Pillars</span>
        </div>
      </div>

      <div class="gallery-item" data-cat="detail" data-title="Vilakku" data-sub="Prayer Ritual · Oil Lamp" data-src="assets/11.jpg">
        <img src="assets/11.jpg" alt="Couple at temple with oil lamp" loading="lazy" />
        <div class="g-badge">Ritual</div>
        <div class="g-expand">⤢</div>
        <div class="g-overlay">
          <h4>Vilakku</h4>
          <span>Prayer Ritual · Oil Lamp</span>
        </div>
      </div>

      <div class="gallery-item" data-cat="candid" data-title="Blessings" data-sub="Touching Feet · Emotional Moment" data-src="assets/12.jpg">
        <img src="assets/12.jpg" alt="Bride receiving elders blessings" loading="lazy" />
        <div class="g-badge">Emotional</div>
        <div class="g-expand">⤢</div>
        <div class="g-overlay">
          <h4>Blessings</h4>
          <span>Touching Feet · Emotional Moment</span>
        </div>
      </div>

    </div>
    <!-- No results message -->
    <p id="noResults" style="display:none;text-align:center;padding:4rem;color:#8A6464;font-style:italic;font-family:'Cormorant Garamond',serif;font-size:1.4rem;">No photos in this category yet.</p>
  </div>

  <!-- LIGHTBOX -->
  <div class="lightbox" id="lightbox" role="dialog" aria-modal="true">
    <button class="lb-close" id="lbClose" aria-label="Close">✕</button>
    <div class="lb-inner">
      <button class="lb-nav" id="lbPrev" aria-label="Previous">‹</button>
      <div class="lb-img-wrap">
        <img src="" alt="" id="lbImg" />
        <div class="lb-caption">
          <h4 id="lbTitle"></h4>
          <span id="lbSub"></span>
        </div>
      </div>
      <button class="lb-nav" id="lbNext" aria-label="Next">›</button>
    </div>
    <div class="lb-counter" id="lbCounter"></div>
  </div>

  <!-- STATS STRIP -->
  <div class="work-stats">
    <div class="work-stats-inner">
      <div class="ws"><div class="ws-num" data-count="500" data-suffix="+">0</div><div class="ws-label">Love Stories Told</div></div>
      <div class="ws"><div class="ws-num" data-count="12000" data-suffix="+">0</div><div class="ws-label">Moments Captured</div></div>
      <div class="ws"><div class="ws-num" data-count="8">0</div><div class="ws-label">Years of Magic</div></div>
      <div class="ws"><div class="ws-num" data-count="350" data-suffix="+">0</div><div class="ws-label">Pre-Wedding Shoots</div></div>
    </div>
  </div>

  <!-- CTA -->
  <div class="work-cta">
    <div data-reveal="up">
      <p style="font-size:.62rem;font-weight:700;letter-spacing:.35em;text-transform:uppercase;color:#D97620;margin-bottom:.8rem;">Your Story Next</p>
      <h2>Imagine This,<br><em style="font-style:italic">But With You Two.</em></h2>
      <p>Every love story here started with a single conversation. Reach out today — let's write your chapter before forever begins.</p>
      <div class="work-cta-btns">
        <a href="contact.php" class="btn-maroon"><span>Book a Consultation</span></a>
        <a href="services.php" class="btn-gold-outline">View Packages</a>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <span class="logo-main" style="font-family:'Cormorant Garamond',serif;font-style:italic;color:var(--gold-light,#E8B430);font-size:1.6rem;display:block;margin-bottom:.3rem;">With Love Photography</span>
          <span style="font-size:.62rem;letter-spacing:.25em;text-transform:uppercase;color:rgba(255,245,230,.4);display:block;margin-bottom:1rem;">Chennai</span>
          <p>Capturing the timeless beauty of Tamil Nadu weddings with artistry, warmth, and an unwavering eye for the moments that matter most.</p>
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
          </ul>
        </div>
        <div class="footer-col">
          <h4>Contact</h4>
          <ul>
            <li><a href="tel:+916380008516">+91 63800 08516</a></li>
            <li><a href="mailto:withlovephotography@gmail.com">withlovephotography@gmail.com</a></li>
            <li><a href="contact.php">Chennai · Pan India</a></li>
            <li><a href="contact.php" style="color:var(--gold-light,#E8B430);">Book Your Date →</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>© 2025 <span>With Love Photography</span>. All rights reserved. Crafted with <span>♥</span> in Chennai.</p>
      </div>
    </div>
  </footer>

  <script>
    /* ── LOADER ───────────────────────────────────────────────── */
    document.body.style.overflow = 'hidden';
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

    /* ── CUSTOM CURSOR ────────────────────────────────────────── */
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
      document.querySelectorAll('a, button, .gallery-item').forEach(el => {
        el.addEventListener('mouseenter', () => { dot.classList.add('hovering'); ring.classList.add('hovering'); });
        el.addEventListener('mouseleave', () => { dot.classList.remove('hovering'); ring.classList.remove('hovering'); });
      });
    }

    /* ── MAGNETIC BUTTONS ─────────────────────────────────────── */
    document.querySelectorAll('.btn-maroon, .btn-gold-outline').forEach(btn => {
      btn.addEventListener('mousemove', e => {
        const r = btn.getBoundingClientRect();
        const x = (e.clientX - r.left - r.width  / 2) * 0.22;
        const y = (e.clientY - r.top  - r.height / 2) * 0.22;
        btn.style.transform = 'translate(' + x + 'px, ' + y + 'px)';
      });
      btn.addEventListener('mouseleave', () => { btn.style.transform = ''; });
    });

    /* ── PAGE TRANSITIONS ─────────────────────────────────────── */
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

    /* ── NAVBAR ───────────────────────────────────────────────── */
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
      navbar.classList.toggle('scrolled', window.scrollY > 60);
    }, { passive: true });

    /* ── MOBILE MENU ─────────────────────────────────────────── */
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');
    hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('open');
      mobileMenu.classList.toggle('open');
      document.body.style.overflow = mobileMenu.classList.contains('open') ? 'hidden' : '';
    });
    mobileMenu.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
      hamburger.classList.remove('open');
      mobileMenu.classList.remove('open');
      document.body.style.overflow = '';
    }));

    /* ── FILTER ──────────────────────────────────────────────── */
    const filterBtns = document.querySelectorAll('.filter-btn');
    const galleryItems = Array.from(document.querySelectorAll('.gallery-item'));
    const noResults = document.getElementById('noResults');

    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        const cat = btn.dataset.filter;
        let visible = 0;
        galleryItems.forEach(item => {
          const match = cat === 'all' || item.dataset.cat === cat;
          item.classList.toggle('hidden-item', !match);
          if (match) visible++;
        });
        noResults.style.display = visible === 0 ? 'block' : 'none';
      });
    });

    /* ── LIGHTBOX ─────────────────────────────────────────────── */
    const lightbox = document.getElementById('lightbox');
    const lbImg    = document.getElementById('lbImg');
    const lbTitle  = document.getElementById('lbTitle');
    const lbSub    = document.getElementById('lbSub');
    const lbCounter = document.getElementById('lbCounter');
    let currentIdx = 0;
    let visibleItems = [];

    function openLightbox(idx) {
      visibleItems = galleryItems.filter(i => !i.classList.contains('hidden-item'));
      currentIdx = idx;
      updateLightbox();
      lightbox.classList.add('open');
      document.body.style.overflow = 'hidden';
    }
    function closeLightbox() {
      lightbox.classList.remove('open');
      document.body.style.overflow = '';
    }
    function updateLightbox() {
      const item = visibleItems[currentIdx];
      if (!item) return;
      lbImg.src = item.dataset.src;
      lbImg.alt = item.querySelector('img').alt;
      lbTitle.textContent = item.dataset.title;
      lbSub.textContent   = item.dataset.sub;
      lbCounter.textContent = (currentIdx + 1) + ' / ' + visibleItems.length;
    }
    function lbNav(dir) {
      currentIdx = (currentIdx + dir + visibleItems.length) % visibleItems.length;
      updateLightbox();
    }

    galleryItems.forEach((item, i) => {
      item.addEventListener('click', () => {
        visibleItems = galleryItems.filter(x => !x.classList.contains('hidden-item'));
        const visIdx = visibleItems.indexOf(item);
        openLightbox(visIdx >= 0 ? visIdx : 0);
      });
    });

    document.getElementById('lbClose').addEventListener('click', closeLightbox);
    document.getElementById('lbPrev').addEventListener('click', () => lbNav(-1));
    document.getElementById('lbNext').addEventListener('click', () => lbNav(1));
    lightbox.addEventListener('click', e => { if (e.target === lightbox) closeLightbox(); });
    document.addEventListener('keydown', e => {
      if (!lightbox.classList.contains('open')) return;
      if (e.key === 'Escape') closeLightbox();
      if (e.key === 'ArrowRight') lbNav(1);
      if (e.key === 'ArrowLeft')  lbNav(-1);
    });

    /* ── HERO PARALLAX ───────────────────────────────────────── */
    const heroImg = document.querySelector('.work-hero-img');
    window.addEventListener('scroll', () => {
      if (heroImg && window.scrollY < window.innerHeight) {
        heroImg.style.transform = `translateY(${window.scrollY * 0.35}px)`;
      }
    }, { passive: true });
  </script>
  <script src="js/scroll.js"></script>
</body>
</html>
