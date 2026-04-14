<?php 
  // 1. Set the Title for this specific post
  $pageTitle = "The Value of Stillness — Zaw Win Htun"; 
  
  // 2. Include Header (Note the '../' because this file is in the /posts/ folder)
  include('../includes/header.php'); 

  // Language check to show correct back-link text
  $is_mm = (strpos(basename($_SERVER['PHP_SELF']), '-mm.php') !== false);
?>

<article class="single-post">
    <header class="post-hero" style="padding: 140px 0 60px; background: #fff; border-bottom: 1px solid var(--border);">
        <div class="container" style="max-width: 800px;">
            <nav class="breadcrumb" style="margin-bottom: 20px; font-size: 14px;">
                <a href="../blog.php" class="text-link">← <?= $is_mm ? 'ဆောင်းပါးများသို့' : 'Back to Reflections' ?></a>
            </nav>
            
            <span class="card-meta" style="color: var(--sage-main); font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Feb 2026</span>
            <h1 style="font-size: 3rem; color: var(--charcoal); margin: 15px 0; line-height: 1.2;">
                <?= $is_mm ? 'ငြိမ်သက်ခြင်း၏ တန်ဖိုး' : 'The Value of Stillness' ?>
            </h1>
        </div>
    </header>

    <section class="post-body" style="padding: 80px 0; background: var(--zen-white);">
        <div class="container" style="max-width: 800px; font-size: 1.15rem; line-height: 2; color: var(--charcoal);">
            
            <p style="margin-bottom: 30px;">
                <?= $is_mm 
                    ? 'ငြိမ်သက်ခြင်းဆိုသည်မှာ ဘာမျှမလုပ်ဘဲနေခြင်းမဟုတ်ပါ။ ၎င်းသည် ကျွန်ုပ်တို့၏ ရှုပ်ထွေးနေသော စိတ်အာရုံများကြားတွင် ကြည်လင်မှုဖြစ်ပေါ်လာသည့် နေရာတစ်ခုဖြစ်သည်။' 
                    : 'In a world that never stops moving, we often mistake silence for emptiness and stillness for inactivity. However, stillness is where our most profound clarity is born.' ?>
            </p>

            <blockquote style="border-left: 4px solid var(--sage-main); padding-left: 25px; margin: 40px 0; font-style: italic; color: var(--slate);">
                <?= $is_mm 
                    ? '“စိတ်ငြိမ်သက်မှသာလျှင် ဘဝကို အမှန်အတိုင်း မြင်နိုင်ပါလိမ့်မည်။”' 
                    : '"Within yourself is a stillness and a sanctuary to which you can retreat at any time and be yourself."' ?>
            </blockquote>

            <p style="margin-bottom: 30px;">
                <?= $is_mm 
                    ? 'နေ့စဉ်ဘဝ၏ ရုန်းကန်မှုများကြားတွင် ခဏတာ ရပ်တန့်ခြင်းသည် စွမ်းအင်သစ်ကို ရရှိစေပါသည်။' 
                    : 'By practicing intentional stillness, we allow the mud in our minds to settle, leaving the water clear so we can see the path ahead.' ?>
            </p>

        </div>
    </section>

    <footer class="post-footer" style="padding: 60px 0; border-top: 1px solid var(--border); text-align: center;">
        <div class="container">
            <h3 style="margin-bottom: 20px;"><?= $is_mm ? 'ဆွေးနွေးလိုပါသလား?' : 'Want to discuss this?' ?></h3>
            <a href="../contact.php" class="primary-btn"><?= $is_mm ? 'ကျွန်ုပ်ထံ စာရေးပါ' : 'Reach out to me' ?></a>
        </div>
    </footer>
</article>

<?php 
  // 3. Include Footer (Again, note the '../')
  include('../includes/footer.php'); 
?>