<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            
            <div class="footer-section">
                <h4 style="color: var(--sage-main); margin-bottom: 20px; font-family: 'Montserrat', sans-serif;">Zaw Win Htun</h4>
                <p style="font-size: 14px; color: var(--slate); line-height: 1.6;">
                    <?= isset($is_mm) && $is_mm 
                        ? 'သတိတရားအခြေခံသော နားထောင်မှုနှင့် စိတ်ပိုင်းဆိုင်ရာ အထောက်အကူပြုခြင်း။' 
                        : 'Mindfulness-based supportive listening and emotional clarity.' ?>
                </p>
                <div style="margin-top: 20px; display: flex; gap: 15px;">
                    <a href="https://www.facebook.com/share/1KKQ9FN2Yu/" class="text-link" style="font-size: 13px;">Facebook</a>
                    <a href="https://www.tiktok.com/@thathar34?_r=1&_t=ZS-93oUweYAYTt" class="text-link" style="font-size: 13px;">TikTok</a>
                </div>
            </div>

            <div class="footer-section partner-info">
                <p style="font-size: 10px; text-transform: uppercase; letter-spacing: 2px; color: var(--slate); margin-bottom: 8px;">Digital Partner</p>
                <p style="font-size: 13px; margin-bottom: 12px;">Premium IT & Web Services</p>
                <a href="https://theniche.site" target="_blank" class="text-link" style="font-weight: 700; color: var(--charcoal) !important;">
                    Built by The Niche
                </a>
            </div>

            <div class="footer-section contact-info">
                <h4 style="color: var(--sage-main); margin-bottom: 20px; font-family: 'Montserrat', sans-serif;">Contact</h4>
                <p style="font-size: 14px; margin-bottom: 5px;">contact@zawwinhtun.com</p>
                <p style="font-size: 14px; margin-bottom: 5px;">zawwinhtun820.ygn.mm@gmail.com</p>
                <p style="font-size: 11px; color: var(--slate); font-style: italic; margin-top: 15px;">
                    <?= isset($is_mm) && $is_mm 
                        ? 'ဤဝန်ဆောင်မှုသည် ဆေးဘက်ဆိုင်ရာ ကုသမှုအတွက် အစားထိုးရန်မဟုတ်ပါ။' 
                        : 'Not a substitute for professional medical or psychiatric care.' ?>
                </p>
            </div>

        </div>

        <div class="footer-bottom-bar">
            <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
                <p>&copy; <?php echo date("Y"); ?> Zaw Win Htun. All rights reserved.</p>
                <div class="footer-legal-links">
                    <a href="<?= isset($is_mm) && $is_mm ? 'privacy-mm.php' : 'privacy.php' ?>" style="margin-right: 20px; font-size: 12px; opacity: 0.8;">
                        <?= isset($is_mm) && $is_mm ? 'ကိုယ်ရေးအချက်အလက် မူဝါဒ' : 'Privacy Policy' ?>
                    </a>
                     <a href="<?= isset($is_mm) && $is_mm ? 'terms-mm.php' : 'terms.php' ?>" style="font-size: 12px; opacity: 0.8;">
                        <?= isset($is_mm) && $is_mm ? 'စည်းကမ်းချက်များ' : 'Terms of Use' ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="/assets/js/main.js"></script>

</body>
</html>