<?php
/**
 * Index: Zen-Professional Landing Page
 * Optimized for Zaw Win Htun
 */

// 1. Setup Header Info
$pageTitle = "Zaw Win Htun — Mindful Listening & Emotional Clarity";

// 2. Include the Header
include('includes/header.php');

// 3. Language Check Logic
$is_mm = (strpos(basename($_SERVER['PHP_SELF']), '-mm.php') !== false);
?>

<main>
    <section class="hero">
        <div class="container">
            <h1>
                <?= $is_mm ? 'စိတ်ကြည်လင်မှုနှင့် သတိတရား၏ နေရာ' : 'A space for clarity and mindful presence' ?>
            </h1>
            <p class="hero-sub">
                <?= $is_mm 
                    ? 'သတိတရားအခြေခံသော နားထောင်မှုမှတစ်ဆင့် သင့်စိတ်၏ ငြိမ်းချမ်းမှုကို အတူတကွ ရှာဖွေကြပါစို့။' 
                    : 'Discover emotional balance and mental peace through mindfulness-based supportive listening.' ?>
            </p>
            <div class="hero-actions">
                <a href="<?= $is_mm ? 'contact-mm.php' : 'contact.php' ?>" class="primary-btn">
                    <?= $is_mm ? 'စတင်ဆက်သွယ်ပါ' : 'Get Started' ?>
                </a>
                <a href="<?= $is_mm ? 'about-mm.php' : 'about.php' ?>" class="text-link">
                    <?= $is_mm ? 'ကျွန်ုပ်အကြောင်း ပိုမိုသိရှိရန်' : 'Learn more about me' ?>
                </a>
            </div>
        </div>
    </section>

    <section class="blog-preview">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 60px; font-weight: 500; color: var(--charcoal);">
                <?= $is_mm ? 'မကြာသေးမီက ရေးသားချက်များ' : 'Recent Reflections' ?>
            </h2>
            
            <div class="blog-grid">
                
                <a href="posts/post-1.php" class="blog-card">
                    <span class="card-meta">Feb 2026</span>
                    <h4><?= $is_mm ? 'ငြိမ်သက်ခြင်း၏ တန်ဖိုး' : 'The Value of Stillness' ?></h4>
                    <p>
                        <?= $is_mm 
                            ? 'ငြိမ်သက်ခြင်းဆိုသည်မှာ ဘာမျှမလုပ်ဘဲနေခြင်းမဟုတ်ပါ။ ၎င်းသည် ကြည်လင်မှုဖြစ်ပေါ်လာသည့် နေရာတစ်ခုဖြစ်သည်။' 
                            : 'Stillness is not inactivity. It is the space where clarity forms.' ?>
                    </p>
                    <span class="text-link" style="font-size: 13px;">
                        <?= $is_mm ? 'ဆက်လက်ဖတ်ရှုရန်' : 'Read reflection' ?> →
                    </span>
                </a>

                <a href="posts/post-2.php" class="blog-card">
                    <span class="card-meta">Jan 2026</span>
                    <h4><?= $is_mm ? 'နားထောင်ခြင်း၏ စွမ်းအား' : 'Deep Listening' ?></h4>
                    <p>
                        <?= $is_mm 
                            ? 'တစ်စုံတစ်ဦးကို အလေးအနက် နားထောင်ပေးခြင်းသည် ကြီးမားသော လက်ဆောင်တစ်ခုဖြစ်သည်။' 
                            : 'Listening deeply to someone is one of the greatest gifts you can offer.' ?>
                    </p>
                    <span class="text-link" style="font-size: 13px;">
                        <?= $is_mm ? 'ဆက်လက်ဖတ်ရှုရန်' : 'Read reflection' ?> →
                    </span>
                </a>

                <a href="posts/post-3.php" class="blog-card">
                    <span class="card-meta">Dec 2025</span>
                    <h4><?= $is_mm ? 'သတိတရားနှင့် နေ့စဉ်ဘဝ' : 'Mindfulness in Daily Life' ?></h4>
                    <p>
                        <?= $is_mm 
                            ? 'ကျွန်ုပ်တို့၏ အလုပ်များသော နေ့စဉ်ဘဝထဲတွင် သတိတရားကို မည်သို့ ထည့်သွင်းမလဲ။' 
                            : 'How to maintain mindfulness throughout the chaos of a busy workday.' ?>
                    </p>
                    <span class="text-link" style="font-size: 13px;">
                        <?= $is_mm ? 'ဆက်လက်ဖတ်ရှုရန်' : 'Read reflection' ?> →
                    </span>
                </a>

            </div>

            <div style="text-align: center; margin-top: 80px;">
                <a href="<?= $is_mm ? 'blog-mm.php' : 'blog.php' ?>" class="text-link" style="font-size: 1.1rem;">
                    <?= $is_mm ? 'ဆောင်းပါးအားလုံးကို ကြည့်ရန်' : 'View all reflections' ?>
                </a>
            </div>
        </div>
    </section>
</main>

<?php 
// 4. Include the Footer
include('includes/footer.php'); 
?>