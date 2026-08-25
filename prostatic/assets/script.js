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
  var revealEls = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });
    revealEls.forEach(function (el) { io.observe(el); });
  } else {
    revealEls.forEach(function (el) { el.classList.add('is-visible'); });
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
