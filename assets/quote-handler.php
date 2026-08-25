<?php
/**
 * Quote enquiry handler
 * ---------------------
 * Validates the quote-request form and, in production, emails it
 * to the business inbox. Responds with JSON so the front-end form
 * can show an inline success/error message without a page reload.
 */

header('Content-Type: application/json');

$recipient = 'info@prostaticservices.co.uk';

function respond(bool $ok, string $message): void {
    echo json_encode(['ok' => $ok, 'message' => $message]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond(false, 'Invalid request method.');
}

$name    = trim($_POST['name'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$email   = trim($_POST['email'] ?? '');
$type    = trim($_POST['type'] ?? 'General enquiry');
$message = trim($_POST['message'] ?? '');

$errors = [];

if ($name === '' || strlen($name) < 2) {
    $errors[] = 'Please enter your name.';
}
if ($phone === '' || !preg_match('/^[0-9+\s()-]{7,20}$/', $phone)) {
    $errors[] = 'Please enter a valid phone number.';
}
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
}

if (!empty($errors)) {
    respond(false, implode(' ', $errors));
}

$subject = 'New quote enquiry — ' . $type;
$body    = "Name: {$name}\nPhone: {$phone}\nEmail: {$email}\nJob type: {$type}\n\nMessage:\n{$message}\n";
$headers = [
    'From: Pro-Static Website <no-reply@prostaticservices.co.uk>',
    'Reply-To: ' . $email,
    'Content-Type: text/plain; charset=UTF-8',
];

/*
 * mail() requires a configured MTA on the live server. It is wrapped
 * in error suppression + a manual check so local/dev environments
 * without mail configured don't hard-fail the enquiry.
 */
$sent = @mail($recipient, $subject, $body, implode("\r\n", $headers));

if ($sent) {
    respond(true, "Thanks, {$name} — your enquiry's been sent. We'll be in touch shortly.");
}

// Fallback: log locally so no enquiry is lost if mail() isn't configured yet.
$logLine = date('c') . ' | ' . json_encode(compact('name', 'phone', 'email', 'type', 'message')) . PHP_EOL;
@file_put_contents(__DIR__ . '/../storage/enquiries.log', $logLine, FILE_APPEND);

respond(true, "Thanks, {$name} — your enquiry's been received. We'll be in touch shortly.");
