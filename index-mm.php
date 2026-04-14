<?php
/**
 * index-mm.php — Zaw Win Htun (Myanmar Version)
 */
require_once 'includes/Parsedown.php';
$pageTitle = "ဇော်ဝင်းထွန်း — သတိတရားနှင့် စိတ်ပိုင်းဆိုင်ရာ ကြည်လင်မှု";
$pageDescription = "ဘဝအတွေ့အကြုံနှင့် ဗုဒ္ဓဓမ္မလမ်းစဉ်ကို အခြေခံ၍ စိတ်ပိုင်းဆိုင်ရာ နားထောင်မှုနှင့် ပံ့ပိုးမှုပေးသော နေရာ။";
include "includes/header.php";
?>

<section class="hero">
  <div class="container">
    <h1>မငြိမ်သက်မှုများကြားတွင် တိတ်ဆိတ်ငြိမ်သက်စွာ မိမိကိုယ်ကို အဖော်ပြုခြင်း</h1>
    <p class="hero-sub">ဘဝအတွေ့အကြုံ၊ ဗုဒ္ဓဓမ္မနှင့် စိတ်ပညာရှုထောင့်များကို အခြေခံထားသော သတိတရားဖြင့် နားထောင်ခြင်း ဝန်ဆောင်မှု။</p>
    <div class="hero-actions">
      <a href="contact-mm.php?intent=session" class="primary-btn">စကားပြောဆိုရန် ချိန်းဆိုမည်</a>
      <a href="about-mm.php" class="text-link">ကျွန်ုပ်၏အကြောင်း ပိုမိုဖတ်ရှုရန်</a>
    </div>
  </div>
</section>

<section class="about-preview">
  <div class="container about-inner">
    <div class="about-text">
      <span class="section-label">အကြောင်းအရာ</span>
      <h2>သတိတရားနှင့် အတွေ့အကြုံပေါ် အခြေခံသော လမ်းစဉ်</h2>
      <p>ရေရှည်တရားထိုင်ခြင်း၊ စိတ်ပညာလေ့လာခြင်းနှင့် လက်တွေ့ဘဝတွင် စိတ်ပိုင်းဆိုင်ရာ အခက်အခဲကြုံတွေ့နေရသူများနှင့် စကားပြောဆိုခြင်းတို့မှတစ်ဆင့် ဤအစီအစဉ်ကို ဖော်ဆောင်ခဲ့ခြင်း ဖြစ်ပါသည်။</p>
      <a href="about-mm.php" class="text-link">ဆက်လက်ဖတ်ရှုရန်</a>
    </div>
    <div class="about-visual">
      <svg width="160" height="160" viewBox="0 0 160 160" fill="none" aria-hidden="true">
        <circle cx="80" cy="80" r="70" stroke="#5aa384" stroke-width="1.5"/>
      </svg>
    </div>
  </div>
</section>

<section class="blog-preview">
  <div class="container">
    <div class="section-head">
      <span class="section-label">အတွေးအမြင်များ</span>
      <h3>နောက်ဆုံးရ ရေးသားချက်များ</h3>
    </div>
    <div class="blog-grid">
      <?php
      $files = glob("posts/*.md");
      if ($files) {
          rsort($files);
          $latest = array_slice($files, 0, 3);
          foreach ($latest as $file) {
              $slug = basename($file, ".md");
              $markdown = file_get_contents($file);
              preg_match('/# (.*)/', $markdown, $titleM);
              preg_match('/\*\*Date:\*\* (.*)/', $markdown, $dateM);
              preg_match('/\*\*Excerpt:\*\* (.*)/', $markdown, $excerptM);
              ?>
              <article class="blog-card">
                <div class="card-meta"><?= htmlspecialchars($dateM[1] ?? 'မကြာသေးမီက') ?></div>
                <h4><a href="post.php?slug=<?= $slug ?>"><?= htmlspecialchars($titleM[1] ?? 'ခေါင်းစဉ်မရှိ') ?></a></h4>
                <p><?= htmlspecialchars($excerptM[1] ?? 'ဆက်လက်ဖတ်ရှုရန်...') ?></p>
                <a href="post.php?slug=<?= $slug ?>" class="read-more">ဆက်လက်ဖတ်ရှုရန် →</a>
              </article>
              <?php
          }
      }
      ?>
    </div>
  </div>
</section>

<?php include "includes/footer.php"; ?>