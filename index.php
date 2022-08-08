<?php 
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
                <div class="about-block">
                <?php the_content() ?>

                </div>
            </div>
        </section>    


<?php get_footer(); ?>
