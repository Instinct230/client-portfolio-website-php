<?php
/**
 * Privacy Policy: Professional & Minimal
 */
$pageTitle = "Privacy Policy — Zaw Win Htun";
include('includes/header.php');

// Language check
$is_mm = (strpos(basename($_SERVER['PHP_SELF']), '-mm.php') !== false);
?>

<main class="legal-page">
    <section class="hero" style="padding: 100px 0 40px; background: #fff;">
        <div class="container" style="max-width: 800px; text-align: left;">
            <h1 style="font-size: 2.5rem; color: var(--charcoal);"><?= $is_mm ? 'ကိုယ်ရေးအချက်အလက် လုံခြုံမှုမူဝါဒ' : 'Privacy Policy' ?></h1>
            <p style="color: var(--slate); margin-top: 10px;">Last Updated: February 2026</p>
        </div>
    </section>

    <section style="padding-bottom: 100px;">
        <div class="container" style="max-width: 800px; line-height: 1.8; color: var(--charcoal);">
            
            <div class="policy-section" style="margin-bottom: 40px;">
                <h3 style="margin-bottom: 15px; color: var(--sage-main);"><?= $is_mm ? '၁။ စုဆောင်းရရှိသော အချက်အလက်များ' : '1. Information We Collect' ?></h3>
                <p>
                    <?= $is_mm 
                        ? 'သင်သည် ဆက်သွယ်ရန် ဖောင်ကို ဖြည့်စွက်သောအခါတွင် သင်၏ အမည်နှင့် အီးမေးလ်လိပ်စာတို့ကိုသာ ကျွန်ုပ်တို့ စုဆောင်းပါသည်။' 
                        : 'We only collect basic information such as your name and email address when you voluntarily submit them through our contact form.' ?>
                </p>
            </div>

            <div class="policy-section" style="margin-bottom: 40px;">
                <h3 style="margin-bottom: 15px; color: var(--sage-main);"><?= $is_mm ? '၂။ အချက်အလက်များကို အသုံးပြုခြင်း' : '2. How We Use Information' ?></h3>
                <p>
                    <?= $is_mm 
                        ? 'သင်၏ အချက်အလက်များကို သင့်ထံ ပြန်လည်ဆက်သွယ်ရန်နှင့် သင်တောင်းဆိုထားသော ဝန်ဆောင်မှုများပေးရန်အတွက်သာ အသုံးပြုပါသည်။' 
                        : 'Your information is used solely to respond to your inquiries and provide the supportive listening services you requested.' ?>
                </p>
            </div>

            <div class="policy-section" style="margin-bottom: 40px;">
                <h3 style="margin-bottom: 15px; color: var(--sage-main);"><?= $is_mm ? '၃။ လုံခြုံရေး' : '3. Confidentiality' ?></h3>
                <p>
                    <?= $is_mm 
                        ? 'ကျွန်ုပ်တို့သည် သင်၏ အချက်အလက်များကို လျှို့ဝှက်စွာ ထိန်းသိမ်းထားပြီး ပြင်ပအဖွဲ့အစည်းများထံ ရောင်းချခြင်း သို့မဟုတ် မျှဝေခြင်း လုံးဝပြုလုပ်မည်မဟုတ်ပါ။' 
                        : 'As a mindfulness practitioner, I prioritize your privacy. We do not sell, trade, or otherwise transfer your personal information to outside parties.' ?>
                </p>
            </div>

            <div class="policy-section" style="margin-bottom: 40px;">
                <h3 style="margin-bottom: 15px; color: var(--sage-main);"><?= $is_mm ? '၄။ ဆက်သွယ်ရန်' : '4. Contact' ?></h3>
                <p>
                    <?= $is_mm 
                        ? 'ဤမူဝါဒနှင့် ပတ်သက်၍ မေးမြန်းလိုပါက zawminoo9086@gmail.com သို့ ဆက်သွယ်နိုင်ပါသည်။' 
                        : 'If you have any questions regarding this privacy policy, you may contact me at zawminoo9086@gmail.com.' ?>
                </p>
            </div>

            <div style="margin-top: 60px; padding-top: 30px; border-top: 1px solid var(--border);">
                <a href="index.php" class="text-link">← <?= $is_mm ? 'ပင်မစာမျက်နှာသို့' : 'Back to Home' ?></a>
            </div>
        </div>
    </section>
</main>

<?php include('includes/footer.php'); ?>