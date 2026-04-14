<?php
/**
 * contact-mm.php — Zaw Win Htun (Myanmar Version)
 */
session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$intent = $_GET['intent'] ?? '';
$isSession = ($intent === 'session');

$pageTitle = $isSession ? "စကားပြောဆိုရန် ချိန်းဆိုခြင်း" : "ဆက်သွယ်ရန်";
include "includes/header.php";
?>

<section class="contact-hero">
  <div class="container narrow">
    <h1><?= $isSession ? "စတင်စကားပြောဆိုပါ" : "ဆက်သွယ်ရန်" ?></h1>
    <p>
      <?= $isSession 
          ? "စကားပြောဆိုရန် အောက်ပါဖောင်ကို ဖြည့်စွက်ပေးပါ။ ကျွန်ုပ် ၂၄ နာရီအတွင်း ပြန်လည် ဆက်သွယ်ပါမည်။" 
          : "ကျွန်ုပ်၏ ရေးသားချက်များနှင့် ပတ်သက်၍ဖြစ်စေ၊ အခြားကိစ္စများအတွက်ဖြစ်စေ အောက်ပါမှတစ်ဆင့် ဆက်သွယ်နိုင်ပါသည်။" ?>
    </p>

    <form action="send.php" method="POST" class="contact-form">
      <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
      <input type="hidden" name="subject_type" value="<?= $isSession ? 'Myanmar Session Request' : 'General Inquiry' ?>">

      <div class="form-group">
        <label for="name">အမည်</label>
        <input type="text" name="name" id="name" required>
      </div>

      <div class="form-group">
        <label for="email">အီးမေးလ်</label>
        <input type="email" name="email" id="email" required>
      </div>

      <div class="form-group">
        <label for="message">ပြောကြားလိုသော အကြောင်းအရာ</label>
        <textarea name="message" id="message" rows="6" required></textarea>
      </div>

      <button type="submit" class="primary-btn">ပေးပို့မည်</button>
    </form>
  </div>
</section>

<?php include "includes/footer.php"; ?>