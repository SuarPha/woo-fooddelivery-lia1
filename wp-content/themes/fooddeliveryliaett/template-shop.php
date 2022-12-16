<?php

/*
Template Name: Shop Page
*/

get_header(); ?>

<section class= "products">

<div class="container-products">
    <div class="products-item">
        <div class="products-item">
     
      
        <h1><?php the_title(); ?></h1>
        <?php if (have_posts()):
            while (have_posts()):
                the_post(); ?>

        <?php the_content(); ?>

        <?php
            endwhile;
        else:
        endif; ?>
        
</div>
</div>
</div>
    </section>
<?php get_footer(); ?>
