<?php 
/*Template Name: Общий каталог*/
get_header(); ?>

<main class="main">
        <section class="catalog">
            <div class="container">
                <div class="breadcrambs">
                <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
                </div>
                <h2 class="section__title"><?php echo the_title()?></h2>
                <div class="catalog__list">
                    <div class="catalog__item">
                        <div class="catalog__image rollback">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog_rollback.png" alt="" class="catalog__img">
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
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog_gates_auto.png" alt="" class="catalog__img">
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
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog_awning.png" alt="" class="catalog__img">
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
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog_complete.png" alt="" class="catalog__img">
                        </div>
                        <h3 class="catalog__item-title">
                            <a href="<?php echo get_permalink(136)?>" class="catalog__link">
                                <span>Комплектующие</span><br>
                                <span>для ворот</span>
                            </a>
                        </h3>
                    </div>
                    <div class="catalog__item">
                        <div class="catalog__image stairs">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog_stairs.png" alt="" class="catalog__img">
                        </div>
                        <h3 class="catalog__item-title">
                            <a href="<?php echo get_permalink(122)?>" class="catalog__link">
                                <span>Лестницы</span><br>
                                <span></span>
                            </a>
                        </h3>
                    </div>
                    <div class="catalog__item bg-green">
                        <div class="catalog__image fence">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog_fence.jpeg" alt="" class="catalog__img">
                        </div>
                        <h3 class="catalog__item-title bg-darkgrey">
                            <a href="<?php echo get_permalink(138)?>" class="catalog__link">
                                <span>Забор</span><br>
                                <span>Жалюзи</span>
                            </a>
                        </h3>
                    </div>
                    <div class="catalog__item-big">
                        <div class="catalog__image construction_1">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog_construction_1.png" alt="" class="catalog__img">
                        </div>
                        <div class="catalog__image construction_2">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog_construction_2.png" alt="" class="catalog__img">
                        </div>
                        <div class="catalog__image construction_3">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog_construction_3.png" alt="" class="catalog__img">
                        </div>
                        <h3 class="catalog__item-title">
                            <a href="<?php echo get_permalink(140)?>" class="catalog__link">
                                <span>Металлоконструкции</span><br>
                                <span></span>
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
                            <img src="<?php bloginfo('template_url'); ?>/assets/icon/shield.svg" alt="" class="features__img">
                        </div>
                        <h4 class="features__title">Качество изделий</h4>
                        
                    </div>
                    <div class="features__item">
                        <div class="features__ico">
                            <img src="<?php bloginfo('template_url'); ?>/assets/icon/range.svg" alt="" class="features__img">
                        </div>
                        <h4 class="features__title">Большой охват</h4>
                        
                    </div>
                    <div class="features__item">
                        <div class="features__ico">
                            <img src="<?php bloginfo('template_url'); ?>/assets/icon/price_ru.svg" alt="" class="features__img">
                        </div>
                        <h4 class="features__title">Выгодные цены</h4>
                     
                    </div>
                </div>
            </div>
        </section>
        <setion class="shipping">
            <div class="container mt-75">
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

<?php get_footer();?>