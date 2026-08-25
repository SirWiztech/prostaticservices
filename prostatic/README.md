# Pro-Static — Website

A one-page marketing site for Pro-Static Caravan & Leisure Services, built in PHP.

## Structure

```
index.php                 Main page (content lives in PHP arrays at the top)
partials/divider.php      Reusable roofline section divider
assets/style.css          All styles (design tokens at the top of the file)
assets/script.js          Nav, scroll reveal, AJAX form submit
assets/quote-handler.php  Validates + emails the quote form, JSON response
storage/                  Fallback log for enquiries if mail() isn't configured
```

## Running it locally

Needs PHP 8+. From this folder:

```
php -S localhost:8000
```

Then open `http://localhost:8000`.

## Going live

1. Upload everything to your web host (anywhere PHP runs — most UK hosting is fine).
2. Point your domain at the folder.
3. Make sure the server's `sendmail`/SMTP is configured so `mail()` in
   `assets/quote-handler.php` can actually deliver — most hosts have this
   set up already. If not, enquiries still land safely in
   `storage/enquiries.log` so nothing gets lost.
4. `storage/.htaccess` blocks public access to that log — keep it in place
   (Nginx hosts: add an equivalent `location` block denying `/storage/`).

## Editing content

- Services, the 4-step process, and makes covered are all plain PHP arrays
  near the top of `index.php` — edit the text there, no HTML editing needed.
- Phone/email/social links are in the `$business` array at the very top.
- Colours and fonts are CSS custom properties at the top of `assets/style.css`
  under `:root` — change a value once, it updates everywhere.
