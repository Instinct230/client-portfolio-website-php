<?php
/**
 * Contact Page: Zen-Professional Style
 * Fixed: Added CSRF Security Token and Session Support
 */

// 1. MUST start session at the very top to handle security tokens
session_start();

// 2. Generate a security token if one doesn't exist
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$pageTitle = "Connect — Zaw Win Htun";
include('includes/header.php');

// Language Check
$is_mm = (strpos(basename($_SERVER['PHP_SELF']), '-mm.php') !== false);
?>

<main class="contact-page">
    <section class="hero" style="padding: 120px 0 60px;">
        <div class="container">
            <h1><?= $is_mm ? 'ဆက်သွယ်ရန်' : 'Get in Touch' ?></h1>
            <p class="hero-sub">
                <?= $is_mm 
                    ? 'သင်၏ ခရီးလမ်းတွင် အတူတကွ လျှောက်လှမ်းရန် ကျွန်ုပ် အသင့်ရှိနေပါသည်။' 
                    : 'I am here to support you on your journey toward mental clarity and peace.' ?>
            </p>
        </div>
    </section>

    <section class="contact-content" style="padding-bottom: 100px;">
        <div class="container" style="max-width: 600px;">
            <div class="contact-card" style="background: #fff; padding: 40px; border-radius: 16px; border: 1px solid var(--border); box-shadow: 0 10px 30px rgba(0,0,0,0.03);">
                
                <form action="send.php" method="POST">
                    
                    <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">
                    <input type="hidden" name="subject_type" value="<?= $is_mm ? 'Myanmar Inquiry' : 'General Inquiry' ?>">

                    <div style="margin-bottom: 25px;">
                        <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 14px; color: var(--slate);">
                            <?= $is_mm ? 'အမည်' : 'Your Name' ?>
                        </label>
                        <input type="text" name="name" required style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; background: var(--sage-soft);">
                    </div>

                    <div style="margin-bottom: 25px;">
                        <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 14px; color: var(--slate);">
                            <?= $is_mm ? 'အီးမေးလ်' : 'Email Address' ?>
                        </label>
                        <input type="email" name="email" required style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; background: var(--sage-soft);">
                    </div>

                    <div style="margin-bottom: 30px;">
                        <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 14px; color: var(--slate);">
                            <?= $is_mm ? 'မက်ဆေ့ချ်' : 'How can I help you?' ?>
                        </label>
                        <textarea name="message" rows="5" required style="width: 100%; padding: 12px; border: 1px solid var(--border); border-radius: 8px; background: var(--sage-soft); resize: none;"></textarea>
                    </div>

                    <button type="submit" class="primary-btn" style="width: 100%; border: none; cursor: pointer;">
                        <?= $is_mm ? 'ပေးပို့ပါ' : 'Send Message' ?>
                    </button>
                </form>

                <div style="margin-top: 40px; text-align: center; border-top: 1px solid var(--border); padding-top: 30px;">
                    <p style="font-size: 14px; color: var(--slate);"><?= $is_mm ? 'တိုက်ရိုက်အီးမေးလ် ပို့ရန်' : 'Or email directly at' ?></p>
                    <a href="mailto:contact@zawwinhtun.com" class="text-link" style="font-size: 16px;">contact@zawwinhtun.com</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include('includes/footer.php'); ?>