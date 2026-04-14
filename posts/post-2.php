<?php 
  // 1. Set the Title for this specific post
  $pageTitle = "Deep Listening: The Greatest Gift — Zaw Win Htun"; 
  
  // 2. Include Header (Note the '../' to exit the /posts/ folder)
  include('../includes/header.php'); 

  // Language check
  $is_mm = (strpos(basename($_SERVER['PHP_SELF']), '-mm.php') !== false);
?>

<article class="single-post">
    <header class="post-hero" style="padding: 140px 0 60px; background: #fff; border-bottom: 1px solid var(--border);">
        <div class="container" style="max-width: 800px;">
            <nav class="breadcrumb" style="margin-bottom: 20px; font-size: 14px;">
                <a href="../blog.php" class="text-link">← <?= $is_mm ? 'ဆောင်းပါးများသို့' : 'Back to Reflections' ?></a>
            </nav>
            
            <span class="card-meta" style="color: var(--sage-main); font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Jan 2026</span>
            <h1 style="font-size: 3rem; color: var(--charcoal); margin: 15px 0; line-height: 1.2;">
                <?= $is_mm ? 'နားထောင်ခြင်း၏ စွမ်းအား' : 'Deep Listening: The Greatest Gift' ?>
            </h1>
        </div>
    </header>

    <section class="post-body" style="padding: 80px 0; background: var(--zen-white);">
        <div class="container" style="max-width: 800px; font-size: 1.15rem; line-height: 2; color: var(--charcoal);">
            
            <p style="margin-bottom: 30px;">
                <?= $is_mm 
                    ? 'တစ်စုံတစ်ဦးကို အမှန်တကယ် နားထောင်ပေးခြင်းသည် ကျွန်ုပ်တို့ ပေးနိုင်သော အဖိုးတန်ဆုံးသော လက်ဆောင်တစ်ခု ဖြစ်ပါသည်။ ၎င်းသည် စကားလုံးများကို ကြားရုံသာမက တစ်ဖက်လူ၏ ခံစားချက်နှင့် စိတ်ဆန္ဒကို နားလည်ပေးခြင်း ဖြစ်သည်။' 
                    : 'To truly listen is to give someone the space to exist without judgment. In our fast-paced world, we often listen only to reply, rather than listening to understand.' ?>
            </p>

            <div style="background: rgba(90, 163, 132, 0.05); padding: 40px; border-radius: 12px; margin: 40px 0; border-left: 4px solid var(--sage-main);">
                <h4 style="margin-bottom: 15px; color: var(--sage-dark);">
                    <?= $is_mm ? 'နက်နဲစွာ နားထောင်ခြင်း အတတ်ပညာ' : 'The Art of Being Present' ?>
                </h4>
                <p style="font-size: 1.05rem; margin-bottom: 0;">
                    <?= $is_mm 
                        ? 'စစ်မှန်သော နားထောင်မှုတွင် အကြံပေးရန် သို့မဟုတ် ပြုပြင်ရန် ကြိုးစားခြင်းထက် တစ်ဖက်လူနှင့်အတူ ရှိနေပေးခြင်းက ပို၍ အရေးကြီးပါသည်။' 
                        : 'Deep listening is not about fixing or solving problems. It is about witnessing another person’s reality with a quiet mind and an open heart.' ?>
                </p>
            </div>

            <p style="margin-bottom: 30px;">
                <?= $is_mm 
                    ? 'ကျွန်ုပ်တို့သည် စိတ်ကို ငြိမ်သက်အောင် ထားနိုင်မှသာလျှင် တစ်ပါးသူ၏ အသံကို အမှန်တကယ် ကြားနိုင်မည် ဖြစ်သည်။' 
                    : 'When we quiet our internal monologue, we create a sacred container where healing can begin. It is within this silence that true connection is found.' ?>
            </p>

        </div>
    </section>

    <footer class="post-footer" style="padding: 60px 0; border-top: 1px solid var(--border); text-align: center;">
        <div class="container">
            <p style="margin-bottom: 25px; color: var(--slate);">
                <?= $is_mm ? 'ဤဆောင်းပါးက သင့်အတွက် အထောက်အကူ ဖြစ်စေပါသလား?' : 'Did this reflection resonate with you?' ?>
            </p>
            <a href="../contact.php" class="primary-btn"><?= $is_mm ? 'စကားပြောရန် ချိတ်ဆက်ပါ' : 'Connect for a Session' ?></a>
        </div>
    </footer>
</article>

<?php 
  include('../includes/footer.php'); 
?>