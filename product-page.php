<?php
/* Template Name: Один продукт */
get_header();?>

<main class="main">
    <section class="catalog">
        <div class="container">
            <div class="breadcrambs">
                <?php if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }?>
            </div>
            <h2 class="section__title"><?php the_title() ?></h2>
        </div>
    </section>
    <section class="catalog-gallery">
        <div class="container">
            <div class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    <?php $images = get_field('product_gallery'); 
                        		foreach( $images as $image ) {
                        	?>
                    <div class="swiper-slide">
                        <img src="<?php echo $image['url']; ?>" />
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div thumbsSlider="" class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php $images = get_field('product_gallery'); 
                        		foreach( $images as $image ) {
                        	?>
                    <div class="swiper-slide">
                        <img src="<?php echo $image['url']; ?>" />
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <section class="product">
        <div class="container">
            <div class="product__info">
                <?php echo get_field('product_desc');?>
            </div>

            <div class="product__list">
                <?php
			            if (have_rows('product_price')) { // если найдены данные 
				            while (have_rows('product_price')) {
					        the_row(); ?>
                <h3 class="product__subtitle">
                    <?php the_sub_field('product_price_title'); ?>
                </h3>
                <?php the_sub_field('product_price_info'); ?>

                <?php	}
			            } else {
				            // строки не найдены 
			            }
			         ?>
            </div>
            <?php
			            if (have_rows('table_price_all')) { // если найдены данные ?>
            <table class="product__price" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <td>
                            <span>Наименование</span>
                            <span>Наимен.</span>
                        </td>
                        <td>Ед.изм</td>
                        <td>Цена</td>
                    </tr>
                </thead>
                
                <tbody>
                
				          <?php  while (have_rows('table_price_all')) {
					        the_row(); ?>
                    <tr>
                        <td><?php the_sub_field('table_price_name'); ?></td>
                        <td><?php the_sub_field('table_price_uom'); ?></td>
                        <td><?php the_sub_field('table_price_one'); ?></td>
                    </tr>
                   
                    <?php	}
			            } else {
				            // строки не найдены 
			            }
			         ?>
                </tbody>

            </table>
        </div>
    </section>


    <?php get_footer()?>