<?php
/**
 * Terms of Use: Professional Disclaimer
 */
$pageTitle = "Terms of Use — Zaw Win Htun";
include('includes/header.php');

// Language check
$is_mm = (strpos(basename($_SERVER['PHP_SELF']), '-mm.php') !== false);
?>

<main class="legal-page">
    <section class="hero" style="padding: 100px 0 40px; background: #fff;">
        <div class="container" style="max-width: 800px; text-align: left;">
            <h1 style="font-size: 2.5rem; color: var(--charcoal);"><?= $is_mm ? 'အသုံးပြုမှုဆိုင်ရာ စည်းကမ်းချက်များ' : 'Terms of Use' ?></h1>
            <p style="color: var(--slate); margin-top: 10px;">Effective Date: February 2026</p>
        </div>
    </section>

    <section style="padding-bottom: 100px;">
        <div class="container" style="max-width: 800px; line-height: 1.8; color: var(--charcoal);">
            
            <div class="policy-section" style="margin-bottom: 40px;">
                <h3 style="margin-bottom: 15px; color: var(--sage-main);"><?= $is_mm ? '၁။ ဝန်ဆောင်မှု၏ သဘောသဘာဝ' : '1. Nature of Service' ?></h3>
                <p>
                    <?= $is_mm 
                        ? 'ကျွန်ုပ်၏ ဝန်ဆောင်မှုများသည် သတိတရားအခြေခံသော နားထောင်မှုနှင့် စိတ်ပိုင်းဆိုင်ရာ အထောက်အကူပြုခြင်းသာ ဖြစ်ပါသည်။ ၎င်းသည် ဆေးဘက်ဆိုင်ရာ ကုသမှု သို့မဟုတ် စိတ်ကျန်းမာရေး ကုသမှု မဟုတ်ပါ။' 
                        : 'My services consist of mindfulness-based supportive listening and emotional clarity sessions. These services do NOT constitute medical, psychological, or psychiatric advice, diagnosis, or treatment.' ?>
                </p>
            </div>

            <div class="policy-section" style="margin-bottom: 40px;">
                <h3 style="margin-bottom: 15px; color: var(--sage-main);"><?= $is_mm ? '၂။ ကိုယ်တိုင်တာဝန်ယူမှု' : '2. Personal Responsibility' ?></h3>
                <p>
                    <?= $is_mm 
                        ? 'ဤဝဘ်ဆိုက်ရှိ အချက်အလက်များနှင့် ဝန်ဆောင်မှုများကို အသုံးပြုခြင်းသည် သင့်ကိုယ်ပိုင် ဆုံးဖြတ်ချက်နှင့် တာဝန်သာ ဖြစ်ပါသည်။' 
                        : 'By using this website and my services, you agree to take full responsibility for your own well-being and any decisions you make based on our sessions or blog reflections.' ?>
                </p>
            </div>

            <div class="policy-section" style="margin-bottom: 40px;">
                <h3 style="margin-bottom: 15px; color: var(--sage-main);"><?= $is_mm ? '၃။ အသိဉာဏ်ပစ္စည်း ပိုင်ဆိုင်မှု' : '3. Intellectual Property' ?></h3>
                <p>
                    <?= $is_mm 
                        ? 'ဤဝဘ်ဆိုက်ရှိ ဆောင်းပါးများနှင့် အကြောင်းအရာများအားလုံးသည် Zaw Win Htun ၏ မူပိုင်ဖြစ်ပါသည်။' 
                        : 'All content, including reflections and articles on this website, is the intellectual property of Zaw Win Htun unless otherwise stated. Unauthorized reproduction is prohibited.' ?>
                </p>
            </div>

            <div class="policy-section" style="margin-bottom: 40px;">
                <h3 style="margin-bottom: 15px; color: var(--sage-main);"><?= $is_mm ? '၄။ တာဝန်ကန့်သတ်ချက်' : '4. Limitation of Liability' ?></h3>
                <p>
                    <?= $is_mm 
                        ? 'ဤဝဘ်ဆိုက် သို့မဟုတ် ဝန်ဆောင်မှုကို အသုံးပြုခြင်းကြောင့် ဖြစ်ပေါ်လာနိုင်သော မည်သည့် တိုက်ရိုက် သို့မဟုတ် သွယ်ဝိုက်သော ထိခိုက်မှုများအတွက်မဆို ကျွန်ုပ်တို့တွင် တာဝန်မရှိပါ။' 
                        : 'In no event shall Zaw Win Htun or his partners (The Niche) be liable for any direct, indirect, or consequential damages arising out of your use of this website.' ?>
                </p>
            </div>

            <div style="margin-top: 60px; padding-top: 30px; border-top: 1px solid var(--border);">
                <a href="index.php" class="text-link">← <?= $is_mm ? 'ပင်မစာမျက်နှာသို့' : 'Back to Home' ?></a>
            </div>
        </div>
    </section>
</main>

<?php include('includes/footer.php'); ?>