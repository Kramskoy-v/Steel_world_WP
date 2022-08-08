<?php 
/*Template Name: Главная*/
get_header(); ?>
<main class="main">
    <section class="banner">
        <div class="container">
            <div class="banner__image">
                <img src="<?php echo get_field('banner') ?>" alt="" class="banner__img kenburns-top">
            </div>
            <div class="guarantee">
                <h1 class="guarantee__title">
                    Гарантия более 3 лет
                </h1>
            </div>
        </div>

    </section>
    <section class="about">
        <div class="container">
            <div class="about__info">
                <h2 class="section__title">О нас</h2>
                <?php echo get_field('about_me')?>
            </div>

            <div class="feedback-price">
                <h3 class="feedback-price__title">Заявка на расчет стоимости</h3>
               <?php echo do_shortcode('[contact-form-7 id="9" title="Contact form price"]') ?>
            </div>
        </div>
    </section>
    <section class="catalog">
        <div class="container">
            <h2 class="section__title">Каталог</h2>
            <div class="catalog__list">
                <div class="catalog__item">
                    <div class="catalog__image rollback">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog_rollback.png" alt=""
                            class="catalog__img">
                    </div>
                    <h3 class="catalog__item-title">
                        <a href="<?php echo get_permalink(68)?>" class="catalog__link">
                            <span>Откатные</span><br>
                            <span>ворота</span>
                        </a>
                    </h3>
                </div>
                <div class="catalog__item bg-green">
                    <div class="catalog__image gatesauto">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog_gates_auto.png" alt=""
                            class="catalog__img">
                    </div>
                    <h3 class="catalog__item-title bg-darkgrey">
                        <a href="<?php echo get_permalink(90)?>" class="catalog__link">
                            <span>Автоматика</span><br>
                            <span>для ворот</span>
                        </a>
                    </h3>
                </div>
                <div class="catalog__item bg-green">
                    <div class="catalog__image awning">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog_awning.png" alt=""
                            class="catalog__img">
                    </div>
                    <h3 class="catalog__item-title bg-darkgrey">
                        <a href="<?php echo get_permalink(92)?>" class="catalog__link">
                            <span>Навесы</span><br>
                            <span></span>
                        </a>
                    </h3>
                </div>
                <div class="catalog__item">
                    <div class="catalog__image complete">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog_complete.png" alt=""
                            class="catalog__img">
                    </div>
                    <h3 class="catalog__item-title">
                        <a href="<?php echo get_permalink(136)?>" class="catalog__link">
                            <span>Комплектующие</span><br>
                            <span>для ворот</span>
                        </a>
                    </h3>
                </div>
            </div>
            <div class="features">
                <div class="features__item">
                    <div class="features__ico">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icon/time.svg" alt="" class="features__img">
                    </div>
                    <h4 class="features__title">Соблюдение сроков</h4>
                    
                </div>
                <div class="features__item">
                    <div class="features__ico">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icon/shield.svg" alt=""
                            class="features__img">
                    </div>
                    <h4 class="features__title">Качество изделий</h4>
                   
                </div>
                <div class="features__item">
                    <div class="features__ico">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icon/range.svg" alt=""
                            class="features__img">
                    </div>
                    <h4 class="features__title">Большой охват</h4>
                    
                </div>
                <div class="features__item">
                    <div class="features__ico">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icon/price_ru.svg" alt=""
                            class="features__img">
                    </div>
                    <h4 class="features__title">Выгодные цены</h4>
                    
                </div>
            </div>
        </div>
    </section>
    <section class="gallery">
        <div class="container">
            <h2 class="section__title">Наши работы</h2>
            <div class="swiper swiper-work">
                <div class="swiper-wrapper">
                <?php $images = get_field('main_gallery'); 
                        		foreach( $images as $image ) {
                        	?>
                        <div class="swiper-slide">
                             <img src="<?php echo $image['url']; ?>"
                            alt="">
                        </div>
                <?php } ?>    
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <section class="plan">
        <div class="container">
            <h2 class="section__title">Схема работы</h2>
            <div class="plan__list">
                <div class="plan__item">
                    <div class="plan__ico">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icon/contract.svg" alt="" class="plan__img">
                    </div>
                    <h3 class="plan__title">Заключение договора</h3>
                    <p class="plan__desc">физическое перемещение товара из одной точки в другую, например,
                        перемещение товара со склада к покупателю</p>
                    <div class="plan__number">01</div>
                </div>
                <div class="plan__item">
                    <div class="plan__ico">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icon/car.svg" alt="" class="plan__img">
                    </div>
                    <h3 class="plan__title">Выезд замерщика</h3>
                    <p class="plan__desc">физическое перемещение товара из одной точки в другую, например,
                        перемещение товара со склада к покупателю</p>
                    <div class="plan__number">02</div>
                </div>
                <div class="plan__item">
                    <div class="plan__ico">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icon/calc.svg" alt="" class="plan__img">
                    </div>
                    <h3 class="plan__title">Расчёт</h3>
                    <p class="plan__desc">физическое перемещение товара из одной точки в другую, например,
                        перемещение товара со склада к покупателю</p>
                    <div class="plan__number">03</div>
                </div>
                <div class="plan__item">
                    <div class="plan__ico">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icon/document.svg" alt="" class="plan__img">
                    </div>
                    <h3 class="plan__title">Заключение договора</h3>
                    <p class="plan__desc">физическое перемещение товара из одной точки в другую, например,
                        перемещение товара со склада к покупателю</p>
                    <div class="plan__number">04</div>
                </div>
                <div class="plan__item">
                    <div class="plan__ico">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icon/gear.svg" alt="" class="plan__img">
                    </div>
                    <h3 class="plan__title">Монтаж</h3>
                    <p class="plan__desc">физическое перемещение товара из одной точки в другую, например,
                        перемещение товара со склада к покупателю</p>
                    <div class="plan__number">05</div>
                </div>
                <div class="plan__item">
                    <div class="plan__ico">
                        <img src="<?php bloginfo('template_url'); ?>/assets/icon/star.svg" alt="" class="plan__img">
                    </div>
                    <h3 class="plan__title">Завершение работы</h3>
                    <p class="plan__desc">физическое перемещение товара из одной точки в другую, например,
                        перемещение товара со склада к покупателю</p>
                    <div class="plan__number">06</div>
                </div>
            </div>
        </div>
    </section>
    <setion class="shipping">
        <div class="container">
            <div class="shipping__wrap">
                <h2 class="section__title">Доставка</h2>
                <p class="shipping__desc">
                <?php echo get_field('shipping', 7)?>
                </p>
                <a href="#feedback_form" class="shipping__link">Связаться с нами</a>
            </div>
            <div class="shipping__image"></div>
        </div>
    </setion>
    <section class="provider">
        <div class="container">
            <h2 class="section__title">Наши поставщики</h2>
            <div class="provider__list">
               
                <?php $images = get_field('provider_logo'); 
                        		foreach( $images as $image ) {
                        	?>
                             <div class="provider__image">
                    <img src="<?php echo $image['url']; ?>" alt=""
                        class="provider__img">
                </div>
                <?php } ?>                    
                
            </div>
        </div>
    </section>



    <?php get_footer(); ?>