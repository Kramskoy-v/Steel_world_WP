<section class="feedback" id="feedback_form">
    <div class="container">
        <h2 class="section__title">Остались вопросы?</h2>
        <div class="feedform">
            <?php echo do_shortcode('[contact-form-7 id="22" title="Contact form feedback"]')?>
        </div>
    </div>
</section>
</main>
<footer class="footer">
    <div class="container">
        <div class="footer__top">
            <div class="footer__contact">
                <a href="tel:+7<?php echo get_field( 'phone_link', 23 ); ?>" class="footer__top-srtring"><?php echo get_field( 'phone_visual', 23 ); ?></a><br>
                <a href="mailto:<?php echo get_field( 'email_field', 23 ); ?>" class="footer__bottom-string"><?php echo get_field( 'email_field', 23 ); ?></a>
            </div>
            <div class="footer__contact">
                <p class="footer__top-srtring"><?php echo get_field( 'address_city', 23 ); ?></p>
                <p class="footer__bottom-string"><?php echo get_field( 'address_street', 23 ); ?></p>
            </div>
            <div class="footer__whatsapp">
                <a href="https://wa.me/7<?php echo get_field( 'whatsapp_phone', 23 ); ?>" class="footer__link" target="_blank"><span>Написать в</span> WhatsApp</a>
            </div>
        </div>
        <div class="footer__bottom">
            <p class="footer__copyright">
                Все права защищены <span><?php echo date('Y')?></span>
            </p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>