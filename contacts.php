<?php 
/* Template Name: Контакты */
get_header();
?>

<main class="main">
    <section class="contacts">
        <div class="container">
            <div class="breadcrambs">
                <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
            </div>
            <h2 class="section__title">
                <?php echo the_title()?>
            </h2>
        <div class="contacts__wrap">
            <div class="contacts__info">
            <div class="contacts__item">
                    <div class="contacts__ico">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icon/phone_green.svg" alt="" class="contacts__ico-img">
                    </div>
                    <div class="contacts__item-wrap">
                        <a href="tel:+7<?php echo get_field( 'phone_link', 23 ); ?>" class="contacts__top-srtring"><?php echo get_field( 'phone_visual', 23 ); ?></a><br>
                        <a href="mailto:<?php echo get_field( 'email_field', 23 ); ?>" class="contacts__bottom-string"><?php echo get_field( 'email_field', 23 ); ?></a>
                    </div>
                </div>
                <div class="contacts__item">
                    <div class="contacts__ico">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icon/location_green.svg" alt="" class="contacts__ico-img">
                    </div>
                    <div class="contacts__item-wrap">
                        <p class="contacts__top-srtring"><?php echo get_field( 'address_city', 23 ); ?></p>
                        <p class="contacts__bottom-string"><?php echo get_field( 'address_street', 23 ); ?></p>
                    </div>
                </div>
                <div class="contacts__item">
                    <div class="contacts__ico">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icon/time_green.svg" alt="" class="contacts__ico-img">
                    </div>
                    <div class="contacts__item-wrap">
                        <p class="contacts__top-srtring">Время работы</p>
                        <p class="contacts__bottom-string"><?php echo get_field( 'work_clock', 23 ); ?></p>
                    </div>
                </div>
            </div>
            <div class="contacts__map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4576f2b228e611404a687dc9685840047695485314c93453c28da661720134f6&amp;width=100%&amp;height=500&amp;lang=ru_RU&amp;scroll=false"></script>
            </div>
        </div>  
            

        </div>
    </section>

    <?php get_footer();?>