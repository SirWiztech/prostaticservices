(function () {
  'use strict';

  /* Sticky header state */
  var header = document.getElementById('siteHeader');
  var onScroll = function () {
    if (window.scrollY > 40) header.classList.add('is-scrolled');
    else header.classList.remove('is-scrolled');
  };
  document.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  /* Mobile menu */
  var toggle = document.getElementById('menuToggle');
  var body = document.body;
  toggle.addEventListener('click', function () {
    body.classList.toggle('nav-open');
  });
  document.querySelectorAll('#navLinks a').forEach(function (a) {
    a.addEventListener('click', function () { body.classList.remove('nav-open'); });
  });

  /* Scroll reveal */
  var revealSelectors = '.reveal, .reveal-left, .reveal-right, .reveal-scale, .stagger-children';
  var revealEls = document.querySelectorAll(revealSelectors);
  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });
    revealEls.forEach(function (el) { io.observe(el); });
  } else {
    revealEls.forEach(function (el) { el.classList.add('is-visible'); });
  }

  /* Floating contact button */
  var fcToggle = document.getElementById('fcToggle');
  var fcPanel = document.getElementById('fcPanel');
  if (fcToggle && fcPanel) {
    fcToggle.addEventListener('click', function () {
      fcPanel.classList.toggle('is-open');
    });
    document.addEventListener('click', function (e) {
      if (!e.target.closest('.floating-contact')) {
        fcPanel.classList.remove('is-open');
      }
    });
  }

  /* Smooth scroll for nav links */
  document.querySelectorAll('a[href^="#"]').forEach(function (a) {
    a.addEventListener('click', function (e) {
      var target = document.querySelector(a.getAttribute('href'));
      if (target) {
        e.preventDefault();
        var offset = 80;
        var top = target.getBoundingClientRect().top + window.pageYOffset - offset;
        window.scrollTo({ top: top, behavior: 'smooth' });
      }
    });
  });

  /* Marquee — continuous scroll animation via JS for reliability */
  var marqueeTrack = document.querySelector('.marquee-track');
  if (marqueeTrack) {
    // Pause CSS animation and use JS instead
    marqueeTrack.style.animation = 'none';
    var marqueePos = 0;
    var marqueeSpeed = 0.5; // pixels per frame
    function animateMarquee() {
      marqueePos -= marqueeSpeed;
      // When half the track has scrolled, reset (seamless loop since content is doubled)
      var halfWidth = marqueeTrack.scrollWidth / 2;
      if (Math.abs(marqueePos) >= halfWidth) {
        marqueePos = 0;
      }
      marqueeTrack.style.transform = 'translateX(' + marqueePos + 'px)';
      requestAnimationFrame(animateMarquee);
    }
    requestAnimationFrame(animateMarquee);
  }

  /* Quote form — AJAX submit to PHP handler */
  var form = document.getElementById('quoteForm');
  var msg = document.getElementById('formMsg');

  if (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var submitBtn = form.querySelector('button[type="submit"]');
      submitBtn.disabled = true;
      submitBtn.textContent = 'Sending...';

      fetch(form.action, {
        method: 'POST',
        body: new FormData(form),
        headers: { 'X-Requested-With': 'XMLHttpRequest' }
      })
        .then(function (res) { return res.json(); })
        .then(function (data) {
          msg.className = 'form-msg ' + (data.ok ? 'success' : 'error');
          msg.textContent = data.message;
          if (data.ok) form.reset();
        })
        .catch(function () {
          msg.className = 'form-msg error';
          msg.textContent = 'Something went wrong sending that — please call us instead.';
        })
        .finally(function () {
          submitBtn.disabled = false;
          submitBtn.textContent = 'Send Enquiry';
        });
    });
  }
})();
