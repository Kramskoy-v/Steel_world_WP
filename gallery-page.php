<?php 
/*Template Name: Наши работы*/
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
                <h2 class="section__title"><?php the_title() ?></h2>
                <div class="gallery-all">

                <?php $images = get_field('gallery_all'); 
                        foreach( $images as $image ) {
                                ?>
                    <div class="gallery-all__item">

                        <a data-fancybox="responsive" data-src="<?php echo $image['url']; ?>">
                            <img src="<?php echo $image['url']; ?>" alt="" width="100%" height="100%" />
                        </a>
                    </div>
                    <?php } ?>

                </div>
            </div>
        </section>   
        <section class="catalog">
            <div class="container">
                <div class="about-block">
                <?php the_content() ?>

                </div>
            </div>
        </section>     
       <?php get_footer();?>        