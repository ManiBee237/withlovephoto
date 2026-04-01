<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

// ── Only accept POST ──────────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

// ── CONFIG ────────────────────────────────────────────────────────────
$to_email  = 'withlovephotography@gmail.com';       // Studio inbox
$from_name = 'With Love Photography';
$smtp_host = 'smtp.gmail.com';
$smtp_user = 'jpmanibharathi@gmail.com';
$smtp_pass = 'mvlt rpxd rwjj lvje';
$dev_bcc   = 'jpmanibharathi@gmail.com';   // Hidden developer copy (BCC)
// ─────────────────────────────────────────────────────────────────────

// ── Sanitise ──────────────────────────────────────────────────────────
function clean(string $v): string
{
    return htmlspecialchars(strip_tags(trim($v)), ENT_QUOTES, 'UTF-8');
}

$bride_name   = clean($_POST['bride_name']   ?? '');
$groom_name   = clean($_POST['groom_name']   ?? '');
$phone        = clean($_POST['phone']        ?? '');
$email        = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$wedding_date = clean($_POST['wedding_date'] ?? '');
$package      = clean($_POST['package']      ?? '');
$venue        = clean($_POST['venue']        ?? '');
$message      = clean($_POST['message']      ?? '');

// ── Validate ──────────────────────────────────────────────────────────
$errors = [];
if (!$bride_name)                                      $errors[] = "Bride's name is required.";
if (!$groom_name)                                      $errors[] = "Groom's name is required.";
if (!$phone)                                           $errors[] = 'Phone number is required.';
if (!filter_var($email, FILTER_VALIDATE_EMAIL))        $errors[] = 'A valid email address is required.';
if (!$wedding_date)                                    $errors[] = 'Wedding date is required.';

if ($errors) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
    exit;
}

// ── Format ────────────────────────────────────────────────────────────
$package_labels = [
    'prewedding' => 'Pre-Wedding Shoot',
    'classic'    => 'Classic — ₹45,000',
    'signature'  => 'Signature — ₹85,000',
    'legacy'     => 'Legacy — ₹1,50,000',
    'custom'     => 'Not Sure — Help Me Choose',
];
$package_label  = $package_labels[$package] ?? ($package ?: 'Not specified');
$formatted_date = $wedding_date ? date('d F Y', strtotime($wedding_date)) : 'Not specified';

// ── Self-contained Gmail SMTP sender (no Composer needed) ─────────────
/**
 * Sends an email via Gmail SSL SMTP (port 465) using raw sockets.
 * No external libraries required — works on plain XAMPP.
 *
 * @param array  $to       ['address@example.com'] or ['addr' => 'Name']
 * @param array  $bcc      Same format, hidden recipients
 * @param string $reply_to Reply-To address
 */
function smtp_gmail(
    string $host, string $user, string $pass,
    string $from_name, array $to, string $subject,
    string $html, string $plain,
    string $reply_to = '', array $bcc = []
): bool {
    $ctx = stream_context_create([
        'ssl' => ['verify_peer' => false, 'verify_peer_name' => false],
    ]);
    $socket = @stream_socket_client(
        "ssl://{$host}:465", $errno, $errstr, 30,
        STREAM_CLIENT_CONNECT, $ctx
    );
    if (!$socket) return false;

    $r = fn()           => fgets($socket, 515);
    $s = fn(string $c)  => fputs($socket, $c . "\r\n");

    $r();                           // server greeting
    $s("EHLO localhost");
    while ($l = $r()) { if (isset($l[3]) && $l[3] === ' ') break; }

    $s("AUTH LOGIN");   $r();
    $s(base64_encode($user));  $r();
    $s(base64_encode($pass));
    $auth = $r();
    if (!str_starts_with(trim($auth), '235')) { fclose($socket); return false; }

    $s("MAIL FROM:<{$user}>");  $r();
    foreach ($to  as $addr) { $s("RCPT TO:<{$addr}>"); $r(); }
    foreach ($bcc as $addr) { $s("RCPT TO:<{$addr}>"); $r(); }

    $s("DATA");  $r();

    $b   = md5(uniqid('', true));
    $hdr = "From: =?UTF-8?B?" . base64_encode($from_name) . "?= <{$user}>\r\n"
         . "To: " . implode(', ', $to) . "\r\n"
         . ($bcc      ? "Bcc: " . implode(', ', $bcc) . "\r\n" : '')
         . ($reply_to ? "Reply-To: {$reply_to}\r\n"            : '')
         . "Subject: =?UTF-8?B?" . base64_encode($subject) . "?=\r\n"
         . "MIME-Version: 1.0\r\n"
         . "Content-Type: multipart/alternative; boundary=\"{$b}\"\r\n"
         . "\r\n";

    $body = "--{$b}\r\nContent-Type: text/plain; charset=UTF-8\r\n\r\n{$plain}\r\n"
          . "--{$b}\r\nContent-Type: text/html; charset=UTF-8\r\n\r\n{$html}\r\n"
          . "--{$b}--\r\n";

    $s($hdr . $body . ".");
    $res = $r();
    $s("QUIT");
    fclose($socket);

    return str_starts_with(trim($res), '250');
}

// ── Build enquiry email (to studio + dev BCC) ─────────────────────────
$message_block = $message
    ? "<div style='margin-top:20px;padding:16px 20px;background:#fff;border-left:4px solid #C9941A;border-radius:0 6px 6px 0;'>
         <div style='font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:#8A6464;font-weight:700;margin-bottom:8px;'>Message</div>
         <p style='margin:0;font-size:14px;color:#333;line-height:1.7;'>{$message}</p>
       </div>"
    : '';

$enquiry_html = <<<HTML
<!DOCTYPE html><html lang="en">
<head><meta charset="UTF-8"><title>New Enquiry</title></head>
<body style="margin:0;padding:20px;background:#f5ebe0;font-family:Arial,Helvetica,sans-serif;">
  <div style="max-width:580px;margin:0 auto;border-radius:10px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,.12);">
    <div style="background:linear-gradient(135deg,#8B1C1C 0%,#5E1212 100%);padding:32px;text-align:center;">
      <p style="margin:0 0 4px;font-size:11px;letter-spacing:.25em;text-transform:uppercase;color:rgba(255,245,230,.55);">New Booking Enquiry</p>
      <h1 style="margin:0;color:#fff;font-size:22px;font-weight:700;">💍 {$bride_name} &amp; {$groom_name}</h1>
      <p style="margin:8px 0 0;font-size:13px;color:rgba(255,245,230,.65);">Received via withlovephotography · {$formatted_date}</p>
    </div>
    <div style="background:#fff8f0;padding:32px;">
      <table style="width:100%;border-collapse:collapse;">
        <tr><td style="padding:10px 0;border-bottom:1px solid rgba(201,148,26,.12);width:38%;font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:#8A6464;font-weight:700;">Bride</td><td style="padding:10px 0;border-bottom:1px solid rgba(201,148,26,.12);font-size:14px;color:#1a1a1a;font-weight:600;">{$bride_name}</td></tr>
        <tr><td style="padding:10px 0;border-bottom:1px solid rgba(201,148,26,.12);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:#8A6464;font-weight:700;">Groom</td><td style="padding:10px 0;border-bottom:1px solid rgba(201,148,26,.12);font-size:14px;color:#1a1a1a;font-weight:600;">{$groom_name}</td></tr>
        <tr><td style="padding:10px 0;border-bottom:1px solid rgba(201,148,26,.12);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:#8A6464;font-weight:700;">Phone</td><td style="padding:10px 0;border-bottom:1px solid rgba(201,148,26,.12);font-size:14px;color:#1a1a1a;font-weight:600;"><a href="tel:{$phone}" style="color:#8B1C1C;text-decoration:none;">{$phone}</a></td></tr>
        <tr><td style="padding:10px 0;border-bottom:1px solid rgba(201,148,26,.12);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:#8A6464;font-weight:700;">Email</td><td style="padding:10px 0;border-bottom:1px solid rgba(201,148,26,.12);font-size:14px;color:#1a1a1a;font-weight:600;"><a href="mailto:{$email}" style="color:#8B1C1C;text-decoration:none;">{$email}</a></td></tr>
        <tr><td style="padding:10px 0;border-bottom:1px solid rgba(201,148,26,.12);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:#8A6464;font-weight:700;">Wedding Date</td><td style="padding:10px 0;border-bottom:1px solid rgba(201,148,26,.12);font-size:14px;color:#1a1a1a;font-weight:600;">{$formatted_date}</td></tr>
        <tr><td style="padding:10px 0;border-bottom:1px solid rgba(201,148,26,.12);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:#8A6464;font-weight:700;">Package</td><td style="padding:10px 0;border-bottom:1px solid rgba(201,148,26,.12);font-size:14px;color:#1a1a1a;font-weight:600;">{$package_label}</td></tr>
        <tr><td style="padding:10px 0;font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:#8A6464;font-weight:700;">Venue</td><td style="padding:10px 0;font-size:14px;color:#1a1a1a;font-weight:600;">{$venue}</td></tr>
      </table>
      {$message_block}
    </div>
    <div style="background:#f0e0cc;padding:18px 32px;text-align:center;">
      <p style="margin:0;font-size:12px;color:#8A6464;">Reply to this email to contact <strong style="color:#5E1212;">{$bride_name} &amp; {$groom_name}</strong> directly.</p>
      <p style="margin:6px 0 0;font-size:11px;color:#aaa;">With Love Photography · Anna Nagar, Chennai 600 040</p>
    </div>
  </div>
</body></html>
HTML;

$enquiry_plain = "New Enquiry — With Love Photography\n"
    . str_repeat('─', 46) . "\n"
    . "Bride        : {$bride_name}\n"
    . "Groom        : {$groom_name}\n"
    . "Phone        : {$phone}\n"
    . "Email        : {$email}\n"
    . "Wedding Date : {$formatted_date}\n"
    . "Package      : {$package_label}\n"
    . "Venue        : {$venue}\n\n"
    . ($message ? "Message:\n{$message}\n" : '');

// ── Build confirmation email (to the couple) ──────────────────────────
$confirm_html = <<<HTML
<!DOCTYPE html><html lang="en">
<head><meta charset="UTF-8"><title>Enquiry Confirmation</title></head>
<body style="margin:0;padding:20px;background:#f5ebe0;font-family:Arial,Helvetica,sans-serif;">
  <div style="max-width:560px;margin:0 auto;border-radius:10px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,.12);">
    <div style="background:linear-gradient(135deg,#8B1C1C 0%,#5E1212 100%);padding:36px 32px;text-align:center;">
      <p style="margin:0 0 6px;font-size:11px;letter-spacing:.28em;text-transform:uppercase;color:rgba(255,245,230,.5);">With Love Photography · Chennai</p>
      <h1 style="margin:0 0 8px;color:#fff;font-size:24px;font-weight:700;font-style:italic;">Thank You, {$bride_name} &amp; {$groom_name}!</h1>
      <p style="margin:0;font-size:13px;color:rgba(255,245,230,.7);">We've received your enquiry and are excited to hear your story.</p>
    </div>
    <div style="height:3px;background:linear-gradient(to right,#8B1C1C,#C9941A,#E8B430,#C9941A,#8B1C1C);"></div>
    <div style="background:#fff8f0;padding:32px;">
      <p style="margin:0 0 20px;font-size:15px;color:#333;line-height:1.7;">Hi <strong style="color:#5E1212;">{$bride_name}</strong>, thank you for reaching out to <strong style="color:#5E1212;">With Love Photography</strong>. We've received your booking enquiry and our team will get back to you within <strong>24 hours</strong>.</p>
      <div style="background:#fff;border-radius:8px;border:1px solid rgba(201,148,26,.18);overflow:hidden;margin-bottom:24px;">
        <div style="padding:12px 20px;background:linear-gradient(to right,rgba(201,148,26,.08),transparent);border-bottom:1px solid rgba(201,148,26,.12);">
          <p style="margin:0;font-size:11px;letter-spacing:.18em;text-transform:uppercase;color:#8A6464;font-weight:700;">Your Enquiry Summary</p>
        </div>
        <table style="width:100%;border-collapse:collapse;">
          <tr><td style="padding:10px 20px;border-bottom:1px solid rgba(201,148,26,.08);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:#8A6464;font-weight:700;width:38%;">Bride</td><td style="padding:10px 20px;border-bottom:1px solid rgba(201,148,26,.08);font-size:14px;color:#1a1a1a;font-weight:600;">{$bride_name}</td></tr>
          <tr><td style="padding:10px 20px;border-bottom:1px solid rgba(201,148,26,.08);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:#8A6464;font-weight:700;">Groom</td><td style="padding:10px 20px;border-bottom:1px solid rgba(201,148,26,.08);font-size:14px;color:#1a1a1a;font-weight:600;">{$groom_name}</td></tr>
          <tr><td style="padding:10px 20px;border-bottom:1px solid rgba(201,148,26,.08);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:#8A6464;font-weight:700;">Wedding Date</td><td style="padding:10px 20px;border-bottom:1px solid rgba(201,148,26,.08);font-size:14px;color:#1a1a1a;font-weight:600;">{$formatted_date}</td></tr>
          <tr><td style="padding:10px 20px;border-bottom:1px solid rgba(201,148,26,.08);font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:#8A6464;font-weight:700;">Package</td><td style="padding:10px 20px;border-bottom:1px solid rgba(201,148,26,.08);font-size:14px;color:#1a1a1a;font-weight:600;">{$package_label}</td></tr>
          <tr><td style="padding:10px 20px;font-size:11px;letter-spacing:.1em;text-transform:uppercase;color:#8A6464;font-weight:700;">Venue</td><td style="padding:10px 20px;font-size:14px;color:#1a1a1a;font-weight:600;">{$venue}</td></tr>
        </table>
      </div>
      <div style="background:rgba(201,148,26,.06);border:1px solid rgba(201,148,26,.2);border-radius:6px;padding:14px 18px;">
        <p style="margin:0;font-size:13px;color:#5E1212;line-height:1.6;"><strong>Need to reach us sooner?</strong><br>
          Call: <a href="tel:+916380008516" style="color:#8B1C1C;text-decoration:none;">+91 63800 08516</a> &nbsp;|&nbsp;
          <a href="https://wa.me/916380008516" style="color:#25D366;text-decoration:none;">WhatsApp Us</a>
        </p>
      </div>
    </div>
    <div style="background:#f0e0cc;padding:18px 32px;text-align:center;">
      <p style="margin:0;font-size:13px;color:#8A6464;font-style:italic;">"Every love story deserves its own chapter."</p>
      <p style="margin:6px 0 0;font-size:11px;color:#aaa;">With Love Photography · Anna Nagar, Chennai 600 040</p>
    </div>
  </div>
</body></html>
HTML;

$confirm_plain = "Hi {$bride_name} & {$groom_name},\n\n"
    . "Thank you for reaching out to With Love Photography!\n"
    . "We've received your booking enquiry and will get back to you within 24 hours.\n\n"
    . "Wedding Date : {$formatted_date}\n"
    . "Package      : {$package_label}\n\n"
    . "For urgent queries, call +91 63800 08516 or WhatsApp us.\n\n"
    . "— With Love Photography, Chennai";

// ── Send emails ───────────────────────────────────────────────────────
$enquiry_subject = "💍 New Enquiry — {$bride_name} & {$groom_name} · {$formatted_date}";
$confirm_subject = "We've Received Your Enquiry — With Love Photography";

$sent = smtp_gmail(
    $smtp_host, $smtp_user, $smtp_pass,
    $from_name,
    [$to_email],
    $enquiry_subject,
    $enquiry_html,
    $enquiry_plain,
    $email,           // Reply-To: couple's email
    [$dev_bcc]        // Hidden BCC: developer
);

if (!$sent) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Could not send email. Please WhatsApp or call us directly.']);
    exit;
}

// Send confirmation to the couple (best-effort, don't fail on error)
smtp_gmail(
    $smtp_host, $smtp_user, $smtp_pass,
    $from_name,
    [$email],
    $confirm_subject,
    $confirm_html,
    $confirm_plain,
    $to_email         // Reply-To: studio email
);

echo json_encode(['success' => true, 'message' => 'Sent']);
