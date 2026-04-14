<?php
/**
 * blog-mm.php — Zaw Win Htun (Myanmar Version)
 * မော်ကွန်းစာမျက်နှာ - ရေးသားချက်များအားလုံးကို ဤနေရာတွင် စုစည်းဖော်ပြပါသည်။
 */

require_once 'includes/Parsedown.php';

$pageTitle = "အတွေးအမြင်များ — ဇော်ဝင်းထွန်း";
$pageDescription = "သတိတရား၊ စိတ်ပိုင်းဆိုင်ရာ တည်ငြိမ်မှုနှင့် ဘဝအတွေ့အမြင်များကို ဤနေရာတွင် ဖတ်ရှုနိုင်ပါသည်။";

include "includes/header.php";

// 1. .md ဖိုင်အားလုံးကို posts folder ထဲမှ ရှာဖွေခြင်း
$files = glob("posts/*.md");

// 2. နောက်ဆုံးတင်သောဖိုင်ကို ထိပ်ဆုံးမှ ပြသရန် (Newest first)
rsort($files);

$Parsedown = new Parsedown();
?>

<section class="hero hero-small">
  <div class="container">
    <span class="section-label">ဂျာနယ်</span>
    <h1>အတွေးအမြင်များ</h1>
    <p class="hero-sub">မငြိမ်သက်သောလောကကြီးတွင် တည်ငြိမ်မှုရှာဖွေခြင်းဆိုင်ရာ တိုတောင်းသော ရေးသားချက်များ။</p>
  </div>
</section>

<section class="blog-list-section section-padding" style="background-color: #f8faf9;">
  <div class="container">
    <div class="blog-grid">
      
      <?php if (empty($files)): ?>
          <p class="center">လက်ရှိတွင် ဖော်ပြထားသော ရေးသားချက်များ မရှိသေးပါ။</p>
      <?php else: ?>
          <?php foreach ($files as $file): ?>
              <?php
              $slug = basename($file, ".md");
              $markdown = file_get_contents($file);
              
              // Metadata များကို pattern matching ဖြင့် ဆွဲထုတ်ခြင်း
              preg_match('/# (.*)/', $markdown, $titleMatches);
              preg_match('/\*\*Date:\*\* (.*)/', $markdown, $dateMatches);
              preg_match('/\*\*Excerpt:\*\* (.*)/', $markdown, $excerptMatches);
              
              $title   = $titleMatches[1] ?? "ခေါင်းစဉ်မရှိ";
              $date    = $dateMatches[1] ?? "ရက်စွဲမသိရှိ";
              $excerpt = $excerptMatches[1] ?? "ဆက်လက်ဖတ်ရှုရန် နှိပ်ပါ...";
              ?>
              
              <article class="blog-card">
                <div class="card-meta"><?= htmlspecialchars($date) ?></div>
                <h4>
                  <a href="post.php?slug=<?= urlencode($slug) ?>" style="text-decoration: none; color: var(--text-dark);">
                    <?= htmlspecialchars($title) ?>
                  </a>
                </h4>
                <p style="font-size: 15px; color: var(--text-soft); margin: 15px 0;">
                    <?= htmlspecialchars($excerpt) ?>
                </p>
                <a href="post.php?slug=<?= urlencode($slug) ?>" class="read-more">ဆက်လက်ဖတ်ရှုရန် →</a>
              </article>
              
          <?php endforeach; ?>
      <?php endif; ?>

    </div>
  </div>
</section>

<?php include "includes/footer.php"; ?>