<?php
/*
 * Template Name: Work
 * Template Post Type: post
 */
?>

 <?php get_header(); ?>

</div>
<div class="home">
    <div class="container">
        <div class="col-md-7">
            <div class="content">
                <h1><?php the_field('header_title'); ?> <span class="blinking-cursor">|</span></h1>
                <hr>
                <p><?php the_field('header_description'); ?></p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row work">
        <div class="col-md-12">
            <?php if( have_rows('description') ): ?>
                <?php while ( have_rows('description') ) : the_row(); ?>
                    <div class="work">
                        <?php the_sub_field('text'); ?>
                        <img src="<?php the_sub_field('image'); ?>" alt="">
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

</div>

    <div class="row footer">
        <div class="container">
            <div class="md-col-4"></div>
            <div class="md-col-4">
                <?php the_field('text'); ?>
                <p><?php the_field('copywrite'); ?></p>
            </div>
            <div class="md-col-4"></div>
        </div>
    </div>

 <?php get_footer(); ?>
