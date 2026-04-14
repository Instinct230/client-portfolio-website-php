<?php
/**
 * Blog: Full Reflections List
 * Optimized for Zaw Win Htun
 */

// 1. Setup Header Info
$pageTitle = "Reflections — Zaw Win Htun";

// 2. Include the Header
include('includes/header.php');

// 3. Language Check Logic
$is_mm = (strpos(basename($_SERVER['PHP_SELF']), '-mm.php') !== false);
?>

<main>
    <section class="hero" style="padding: 100px 0 60px; background: var(--pure-white);">
        <div class="container">
            <h1 style="font-size: 3rem;">
                <?= $is_mm ? 'ဆင်ခြင်တွေးတောချက်များ' : 'Reflections' ?>
            </h1>
            <p class="hero-sub">
                <?= $is_mm 
                    ? 'သတိတရားနှင့် စိတ်အေးချမ်းမှုဆိုင်ရာ ရေးသားချက်များကို ဤနေရာတွင် စုစည်းဖော်ပြထားပါသည်။' 
                    : 'A collection of thoughts on mindfulness, emotional balance, and the art of being present.' ?>
            </p>
        </div>
    </section>

    <section class="blog-preview" style="background: var(--sage-soft); border-top: 1px solid var(--border);">
        <div class="container">
            <div class="blog-grid">
                
                <a href="posts/post-1.php" class="blog-card">
                    <span class="card-meta">Feb 2026</span>
                    <h4><?= $is_mm ? 'ငြိမ်သက်ခြင်း၏ တန်ဖိုး' : 'The Value of Stillness' ?></h4>
                    <p><?= $is_mm ? 'ငြိမ်သက်ခြင်းဆိုသည်မှာ...' : 'Stillness is not inactivity...' ?></p>
                    <span class="text-link" style="font-size: 13px;">Read more →</span>
                </a>

                <a href="posts/post-2.php" class="blog-card">
                    <span class="card-meta">Jan 2026</span>
                    <h4><?= $is_mm ? 'နားထောင်ခြင်း၏ စွမ်းအား' : 'Deep Listening' ?></h4>
                    <p><?= $is_mm ? 'နားထောင်ပေးခြင်းသည်...' : 'Listening deeply is a gift...' ?></p>
                    <span class="text-link" style="font-size: 13px;">Read more →</span>
                </a>

                <a href="posts/post-3.php" class="blog-card">
                    <span class="card-meta">Dec 2025</span>
                    <h4><?= $is_mm ? 'သတိတရားနှင့် နေ့စဉ်ဘဝ' : 'Mindfulness in Daily Life' ?></h4>
                    <p><?= $is_mm ? 'နေ့စဉ်ဘဝထဲတွင်...' : 'Maintaining focus in chaos...' ?></p>
                    <span class="text-link" style="font-size: 13px;">Read more →</span>
                </a>

                </div>
        </div>
    </section>
</main>

<?php 
// 4. Include the Footer
include('includes/footer.php'); 
?>