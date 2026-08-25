<?php
/**
 * Pro-Static Caravan & Leisure Services
 * -------------------------------------------------
 * Single-page marketing site. Content is held in PHP
 * arrays below so copy, services and the process list
 * can be edited in one place without touching markup.
 */

$business = [
    'name'        => 'Pro-Static',
    'name_full'   => 'Pro-Static Caravan & Leisure Services',
    'phone'       => '+44 1482 324744',
    'phone_href'  => 'tel:+441482324744',
    'email'       => 'info@prostaticservices.co.uk',
    'facebook'    => 'https://www.facebook.com/ProStaticCaravanServices',
    'instagram'   => 'https://www.instagram.com/prostaticservices',
];

$year = date('Y');

$hero_tags = ['Insurance & Warranty Approved', 'All Makes & Models', 'UK-Wide Coverage'];

$services = [
    [
        'title' => 'Roof Replacement',
        'desc'  => 'Full GRP roof replacements for static caravans and lodges — built to shed weather for years, not seasons.',
    ],
    [
        'title' => 'Roof & Panel Repairs',
        'desc'  => 'Leaks, storm damage and soft spots traced and fixed properly, not just patched over.',
    ],
    [
        'title' => 'Insurance & Warranty Work',
        'desc'  => 'Claims handled directly with insurers and manufacturers — paperwork included, not left to you.',
    ],
    [
        'title' => 'Alterations & Refits',
        'desc'  => 'Structural changes, window and door swaps, and interior alterations to all major makes.',
    ],
    [
        'title' => 'Park & Dealer Contracts',
        'desc'  => 'Ongoing maintenance programmes for parks, dealers and manufacturers across the UK.',
    ],
    [
        'title' => 'Free Site Surveys',
        'desc'  => 'A proper look before a proper quote — no guesswork, no call-out charge.',
    ],
];

$process = [
    ['title' => 'Send us the details', 'desc' => 'Tell us the make, model and issue — photos help us scope the job before we arrive.'],
    ['title' => 'Free survey & quote', 'desc' => 'We inspect the van in person and give you a clear, no-obligation price.'],
    ['title' => 'Work scheduled & carried out', 'desc' => 'Our team completes the repair or replacement to trade standard, on the date agreed.'],
    ['title' => 'Sign-off & warranty', 'desc' => 'You get a completed job, a warranty on the work, and a point of contact after we leave.'],
];

$coverage_makes = [
    'ABI', 'Willerby', 'Swift', 'Atlas', 'Victory', 'Pemberton',
    'Cosalt', 'Delta', 'BK Bluebird', 'Carnaby', 'Omar', 'Tingdene',
];
?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/jpeg" href="assets/images/logo.jpg">
<title>Pro-Static — Static Caravan Roofing, Repairs & Alterations | UK-Wide</title>
<meta name="description" content="Professional static caravan repairs, roof replacement and insurance & warranty work across the UK. Free quotes on all makes and models. Trusted by parks, dealers and manufacturers.">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;700&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/style.css">
</head>
<body>

<!-- ============================= HEADER ============================= -->
<header class="site-header" id="siteHeader">
  <div class="wrap header-inner">
    <a href="#top" class="brand">
      <img class="brand-mark" src="assets/images/logo.jpg" alt="Pro-Static Logo" width="56" height="56">
      <span class="brand-word">Pro<span>-</span>Static</span>
    </a>

    <nav class="nav-links" id="navLinks">
      <a href="#services">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
        Services
      </a>
      <a href="#process">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        How It Works
      </a>
      <a href="#coverage">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
        Coverage
      </a>
      <a href="#reviews">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
        Reviews
      </a>
      <a href="#contact">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
        Contact
      </a>
    </nav>

    <div class="header-cta">
      <a href="<?= htmlspecialchars($business['phone_href']) ?>" class="phone-pill">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        <?= htmlspecialchars($business['phone']) ?>
      </a>
      <a href="#contact" class="btn btn-amber">Get a Free Quote</a>
      <button class="menu-toggle" id="menuToggle" aria-label="Open menu">
        <span class="hamburger"><span></span><span></span><span></span></span>
        <svg class="close-icon" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
      </button>
    </div>
  </div>
</header>

<!-- ============================== HERO =============================== -->
<section class="hero" id="top">
  <div class="hero-grain"></div>
  <div class="wrap hero-inner">
    <div class="hero-roof">
      <svg class="roofline roofline-draw" viewBox="0 0 600 220" xmlns="http://www.w3.org/2000/svg">
        <path d="M20 180 L300 40 L580 180" />
        <path d="M150 180 L300 100 L450 180" />
      </svg>
    </div>

    <div class="hero-tags">
      <?php foreach ($hero_tags as $tag): ?>
        <span class="hero-tag"><?= htmlspecialchars($tag) ?></span>
      <?php endforeach; ?>
    </div>

    <h1 class="metal-text">Static caravan roofing &amp; repairs that outlast the weather they're built for.</h1>
    <p class="lede">We repair, replace and alter static caravans and lodges of every make — working directly with parks, dealers, manufacturers and insurers across the UK.</p>

    <div class="hero-actions">
      <a href="#contact" class="btn btn-amber">Get a Free Quote</a>
      <a href="<?= htmlspecialchars($business['phone_href']) ?>" class="btn btn-ghost">Call <?= htmlspecialchars($business['phone']) ?></a>
    </div>

    <div class="hero-strip">
      <div class="hero-strip-item"><div class="num">All Makes</div><div class="lbl">&amp; Models</div></div>
      <div class="hero-strip-item"><div class="num">Fully Insured</div><div class="lbl">Trade Work</div></div>
      <div class="hero-strip-item"><div class="num">Free</div><div class="lbl">Site Survey</div></div>
      <div class="hero-strip-item"><div class="num">UK-Wide</div><div class="lbl">Coverage</div></div>
    </div>
  </div>
</section>

<?php include 'partials/divider.php'; ?>

<!-- ============================= RECENT WORKS ============================= -->
<section class="portfolio" id="portfolio">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="section-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
      </div>
      <span class="eyebrow">Recent Work</span>
      <h2>Quality craftsmanship, every job.</h2>
      <p>Take a look at some of our recent projects across the UK.</p>
    </div>
  </div>

  <div class="wrap">      <div class="portfolio-grid stagger-children">        <div class="portfolio-item reveal-child">
        <img src="assets/images/portfolio/work1.jpg" alt="Completed roof replacement" loading="lazy">
        <div class="portfolio-overlay">
          <span class="portfolio-tag">Roof Replacement</span>
        </div>
      </div>        <div class="portfolio-item reveal-child">
        <img src="assets/images/portfolio/work2.jpg" alt="GRP roof installation" loading="lazy">
        <div class="portfolio-overlay">
          <span class="portfolio-tag">GRP Roofing</span>
        </div>
      </div>        <div class="portfolio-item reveal-child">
        <img src="assets/images/portfolio/work3.jpg" alt="Storm damage repair" loading="lazy">
        <div class="portfolio-overlay">
          <span class="portfolio-tag">Storm Damage</span>
        </div>
      </div>        <div class="portfolio-item reveal-child">
        <img src="assets/images/portfolio/work4.jpg" alt="Static caravan refit" loading="lazy">
        <div class="portfolio-overlay">
          <span class="portfolio-tag">Caravan Refit</span>
        </div>
      </div>        <div class="portfolio-item reveal-child">
        <img src="assets/images/portfolio/work5.jpg" alt="Panel repair work" loading="lazy">
        <div class="portfolio-overlay">
          <span class="portfolio-tag">Panel Repair</span>
        </div>
      </div>        <div class="portfolio-item reveal-child">
        <img src="assets/images/portfolio/work6.jpg" alt="Full roof replacement" loading="lazy">
        <div class="portfolio-overlay">
          <span class="portfolio-tag">Full Replacement</span>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'partials/divider.php'; ?>

<!-- ============================= SERVICES ============================= -->
<section class="services" id="services">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="section-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
      </div>
      <span class="eyebrow">What We Do</span>
      <h2>Repairs and alterations, done to trade standard.</h2>
      <p>From a single leak to a full roof replacement — free quotes on repairs and alterations to all makes and models of static caravan.</p>
    </div>
  </div>

  <div class="wrap">      <div class="service-grid stagger-children">
      <?php foreach ($services as $i => $s): ?>
        <div class="service-card reveal-child">
          <span class="service-index">0<?= $i + 1 ?></span>
          <svg class="service-roof roofline" viewBox="0 0 60 40" xmlns="http://www.w3.org/2000/svg">
            <path d="M2 36 L30 6 L58 36" stroke-width="3"/>
          </svg>
          <h3><?= htmlspecialchars($s['title']) ?></h3>
          <p><?= htmlspecialchars($s['desc']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================= PROCESS ============================= -->
<section class="process on-dark" id="process">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="section-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
      </div>
      <span class="eyebrow">How It Works</span>
      <h2>Four steps from enquiry to sign-off.</h2>
      <p>No hard sell, no jargon — just a clear path from "we've got a problem" to "it's fixed."</p>
    </div>

    <div class="process-list stagger-children">
      <?php foreach ($process as $i => $step): ?>
        <div class="process-step reveal-child">
          <div class="step-num"><?= $i + 1 ?></div>
          <h3><?= htmlspecialchars($step['title']) ?></h3>
          <p><?= htmlspecialchars($step['desc']) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================== TRUST =============================== -->
<section class="trust">
  <div class="marquee">
    <div class="marquee-track">
      <?php
        $marquee_items = [
          ['label' => 'Static Caravan Parks', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>'],
          ['label' => 'Dealers', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M16 8l-4 4-4-4"/><path d="M16 16l-4-4-4 4"/></svg>'],
          ['label' => 'Manufacturers', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 20h20"/><path d="M5 20V8l7-5 7 5v12"/><path d="M10 20v-6h4v6"/></svg>'],
          ['label' => 'Insurers', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>'],
          ['label' => 'Private Owners', 'icon' => '<svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>'],
        ];
        $repeat = array_merge($marquee_items, $marquee_items);
        foreach ($repeat as $item): ?>
        <span><?= $item['icon'] ?> <?= htmlspecialchars($item['label']) ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================= COVERAGE ============================= -->
<section class="coverage" id="coverage">
  <div class="wrap coverage-inner">
    <div class="reveal-left">
      <div class="section-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
      </div>
      <span class="eyebrow">Coverage</span>
      <h2 style="font-size:clamp(1.9rem,3.4vw,2.6rem); margin-top:14px;">Working UK-wide, on every major make.</h2>
      <p style="margin-top:16px;">Wherever the van is parked — on a residential park, a holiday site, or a dealer's forecourt — we can get to it.</p>
      <ul class="coverage-list">
        <?php foreach ($coverage_makes as $make): ?>
          <li><?= htmlspecialchars($make) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div class="coverage-map reveal-right">
      <svg viewBox="0 0 340 420" xmlns="http://www.w3.org/2000/svg">
        <path d="M170 12 L210 40 L200 78 L230 96 L226 140 L262 160 L250 200 L268 236 L240 262 L246 300 L210 330 L214 366 L178 402 L150 380 L156 340 L120 330 L96 296 L108 258 L78 232 L90 196 L70 160 L96 130 L88 96 L120 78 L112 44 Z"
          fill="none" stroke="var(--silver)" stroke-width="1.4" opacity="0.55"/>
        <circle cx="150" cy="150" r="4" fill="var(--silver-hi)"/>
        <circle cx="120" cy="230" r="4" fill="var(--silver-hi)"/>
        <circle cx="180" cy="300" r="4" fill="var(--silver-hi)"/>
        <circle cx="200" cy="120" r="4" fill="var(--silver-hi)"/>
        <circle cx="150" cy="150" r="10" fill="none" stroke="var(--silver-hi)" stroke-width="1"/>
      </svg>
    </div>
  </div>
</section>

<?php include 'partials/divider.php'; ?>

<!-- ============================ TESTIMONIAL ============================ -->
<section class="testimonial" id="reviews">
  <div class="wrap testimonial-inner reveal-scale">
    <div class="section-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
      </div>
      <span class="testimonial-badge">Verified Facebook Review</span>
    <blockquote>&ldquo;Looks 100% better.&rdquo;</blockquote>
    <cite>— Maureen Cowper, Pro-Static customer</cite>
  </div>
</section>

<!-- ============================= CONTACT ============================= -->
<section class="contact on-dark" id="contact">
  <div class="wrap contact-inner">
    <div class="contact-info reveal-left">
      <div class="section-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
      </div>
      <span class="eyebrow">Get In Touch</span>
      <h2>Tell us about the job — we'll quote it for free.</h2>
      <p>Repairs, alterations, roof replacements or ongoing park contracts — get a straight answer, fast.</p>

      <div class="contact-line">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        <a href="<?= htmlspecialchars($business['phone_href']) ?>"><?= htmlspecialchars($business['phone']) ?></a>
      </div>
      <div class="contact-line">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><path d="M22 6l-10 7L2 6"/></svg>
        <a href="mailto:<?= htmlspecialchars($business['email']) ?>"><?= htmlspecialchars($business['email']) ?></a>
      </div>
      <div class="contact-line">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
        <span>UK-Wide — On-site surveys arranged around you</span>
      </div>

      <div class="social-row">
        <a href="<?= htmlspecialchars($business['facebook']) ?>" target="_blank" rel="noopener" aria-label="Facebook">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
        </a>
        <a href="<?= htmlspecialchars($business['instagram']) ?>" target="_blank" rel="noopener" aria-label="Instagram">
          <svg viewBox="0 0 24 24" fill="none" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1"/></svg>
        </a>
      </div>
    </div>

    <form class="quote-form reveal-right" id="quoteForm" action="assets/quote-handler.php" method="POST">
      <div class="form-row">
        <div class="field">
          <label for="name">Full name</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="field">
          <label for="phone">Phone</label>
          <input type="tel" id="phone" name="phone" required>
        </div>
      </div>
      <div class="field">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="field">
        <label for="type">Type of job</label>
        <select id="type" name="type">
          <option>Roof replacement</option>
          <option>Roof or panel repair</option>
          <option>Insurance / warranty work</option>
          <option>Alteration or refit</option>
          <option>Park / dealer contract</option>
          <option>Not sure — need advice</option>
        </select>
      </div>
      <div class="field">
        <label for="message">Tell us about the caravan &amp; the issue</label>
        <textarea id="message" name="message" placeholder="Make, model, and what's going on..."></textarea>
      </div>
      <button type="submit" class="btn btn-amber btn-block">Send Enquiry</button>
      <p class="field-note">We reply to most enquiries within one working day.</p>
      <div class="form-msg" id="formMsg"></div>
    </form>
  </div>
</section>

<!-- ============================= FOOTER ============================= -->
<footer class="site-footer">
  <div class="wrap footer-inner">
    <p>&copy; <?= htmlspecialchars($year) ?> <?= htmlspecialchars($business['name_full']) ?>. All rights reserved.</p>
    <div class="footer-links">
      <a href="#services">Services</a>
      <a href="#contact">Contact</a>
      <a href="<?= htmlspecialchars($business['facebook']) ?>" target="_blank" rel="noopener">Facebook</a>
    </div>
  </div>
</footer>

<!-- =========================== FLOATING CONTACT =========================== -->
<div class="floating-contact" id="floatingContact">
  <button class="fc-toggle" id="fcToggle" aria-label="Contact us">
    <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
    </svg>
  </button>
  <div class="fc-panel" id="fcPanel">
    <a href="tel:+441482324744" class="fc-option">
      <svg viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
      <span>Call Us</span>
    </a>
    <a href="mailto:info@prostaticservices.co.uk" class="fc-option">
      <svg viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><path d="M22 6l-10 7L2 6"/></svg>
      <span>Email Us</span>
    </a>
    <a href="https://www.facebook.com/ProStaticCaravanServices" target="_blank" rel="noopener" class="fc-option">
      <svg viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
      <span>Facebook</span>
    </a>
  </div>
</div>

<script src="assets/script.js"></script>
</body>
</html>
