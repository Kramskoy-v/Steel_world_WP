<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;700&display=swap" rel="stylesheet">

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(89288249, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/89288249" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<?php wp_head();?>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__logo">
                <a href="<?php echo get_permalink(7);?>">
                <img src="<?php bloginfo('template_url');?>/assets/img/logo.png" class="header__logo-img" alt="">
                </a>
            </div>
            <div class="header__contacts">
                <div class="header__item">
                    <div class="header__ico">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icon/phone_green.svg" alt="" class="header__ico-img">
                    </div>
                    <div class="header__item-wrap">
                        <a href="tel:+7<?php echo get_field( 'phone_link', 23 ); ?>" class="header__top-srtring"><?php echo get_field( 'phone_visual', 23 ); ?></a><br>
                        <a href="mailto:<?php echo get_field( 'email_field', 23 ); ?>" class="header__bottom-string"><?php echo get_field( 'email_field', 23 ); ?></a>
                    </div>
                </div>
                <div class="header__item">
                    <div class="header__ico">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icon/location_green.svg" alt="" class="header__ico-img">
                    </div>
                    <div class="header__item-wrap">
                        <p class="header__top-srtring"><?php echo get_field( 'address_city', 23 ); ?></p>
                        <p class="header__bottom-string"><?php echo get_field( 'address_street', 23 ); ?></p>
                    </div>
                </div>
                <div class="header__item">
                    <div class="header__ico">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icon/time_green.svg" alt="" class="header__ico-img">
                    </div>
                    <div class="header__item-wrap">
                        <p class="header__top-srtring">Время работы</p>
                        <p class="header__bottom-string"><?php echo get_field( 'work_clock', 23 ); ?></p>
                    </div>
                </div>
            </div>
            <div class="menu__wrap">
                <div class="menu__triangle"></div>
                <nav class="menu">
                    <div class="menu__hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'main_menu',
                        'container' => '',
                        'menu_class' => 'menu__list',
                        'menu_id' => ''
                    ])
                    ?>
                   
                    <div class="cross-close">
						<span></span>
						<span></span>
					</div>
                </nav>
            </div>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>