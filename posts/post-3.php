<?php 
  // 1. Set the Title
  $pageTitle = "Mindfulness in Daily Life — Zaw Win Htun"; 
  
  // 2. Include Header
  include('../includes/header.php'); 

  $is_mm = (strpos(basename($_SERVER['PHP_SELF']), '-mm.php') !== false);
?>

<article class="single-post">
    <header class="post-hero" style="padding: 140px 0 60px; background: #fff; border-bottom: 1px solid var(--border);">
        <div class="container" style="max-width: 800px;">
            <nav class="breadcrumb" style="margin-bottom: 20px; font-size: 14px;">
                <a href="../blog.php" class="text-link">← <?= $is_mm ? 'ဆောင်းပါးများသို့' : 'Back to Reflections' ?></a>
            </nav>
            
            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                <span class="card-meta" style="color: var(--sage-main); font-weight: 600;">Dec 2025</span>
                <span style="color: var(--slate); font-size: 12px; background: var(--sage-soft); padding: 2px 10px; border-radius: 20px;">
                    <?= $is_mm ? '၄ မိနစ်ဖတ်ရန်' : '4 min read' ?>
                </span>
            </div>

            <h1 style="font-size: 3rem; color: var(--charcoal); margin: 0; line-height: 1.2;">
                <?= $is_mm ? 'သတိတရားနှင့် နေ့စဉ်ဘဝ' : 'Mindfulness in Daily Life' ?>
            </h1>
        </div>
    </header>

    <section class="post-body" style="padding: 80px 0; background: var(--zen-white);">
        <div class="container" style="max-width: 800px; font-size: 1.15rem; line-height: 2; color: var(--charcoal);">
            
            <p style="margin-bottom: 30px;">
                <?= $is_mm 
                    ? 'သတိတရားဆိုသည်မှာ တရားထိုင်နေစဉ်အချိန်၌သာ ရှိနေရမည့်အရာမဟုတ်ပါ။ ၎င်းသည် ကျွန်ုပ်တို့၏ အလုပ်များသော နေ့စဉ်ဘဝထဲတွင် အစဉ်အမြဲ ထည့်သွင်းကျင့်သုံးရမည့် အလေ့အထတစ်ခုဖြစ်သည်။' 
                    : 'Many believe that mindfulness belongs only on a meditation cushion in a quiet room. In reality, the true test of mindfulness is how we maintain it during a stressful workday or a difficult conversation.' ?>
            </p>

            <h3 style="margin: 40px 0 20px; color: var(--charcoal);">
                <?= $is_mm ? 'ရိုးရှင်းသော နည်းလမ်းများ' : 'Finding Zen in the Chaos' ?>
            </h3>

            <p style="margin-bottom: 30px;">
                <?= $is_mm 
                    ? 'လက်ဖက်ရည်သောက်ခြင်း သို့မဟုတ် လမ်းလျှောက်ခြင်းကဲ့သို့သော သာမန်လုပ်ရပ်များကို သတိကပ်၍ လုပ်ဆောင်ခြင်းဖြင့် စိတ်ဖိစီးမှုကို လျှော့ချနိုင်ပါသည်။' 
                    : 'Whether it is the simple act of feeling the warmth of a tea cup or noticing your breath while waiting in traffic, these small "anchors" bring us back to the present moment.' ?>
            </p>

            <p style="margin-bottom: 30px;">
                <?= $is_mm 
                    ? 'သတိတရားသည် ကျွန်ုပ်တို့အား ဖြစ်ပျက်သမျှအရာများကို တုံ့ပြန်ရာတွင် ပိုမိုကြည်လင်သော ဆုံးဖြတ်ချက်များ ချနိုင်ရန် ကူညီပေးပါသည်။' 
                    : 'When we practice mindfulness in daily life, we move from a state of "reacting" to a state of "responding." We gain the freedom to choose our actions rather than being driven by blind emotion.' ?>
            </p>

        </div>
    </section>

    <footer class="post-footer" style="padding: 80px 0; border-top: 1px solid var(--border); text-align: center;">
        <div class="container">
            <h4 style="margin-bottom: 30px;"><?= $is_mm ? 'နောက်ထပ် ဖတ်ရှုရန်' : 'Read More' ?></h4>
            <div style="display: flex; justify-content: center; gap: 40px;">
                <a href="post-1.php" class="text-link">← Previous</a>
                <a href="post-2.php" class="text-link">Next →</a>
            </div>
        </div>
    </footer>
</article>

<?php include('../includes/footer.php'); ?>