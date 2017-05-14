<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

</div>

<div class="home">
    <div class="container">
        <div class="col-md-7">
            <div class="content">
                <h1><?php the_field('header_title'); ?><span class="blinking-cursor">|</span></h1>
                <hr>
                <p><?php the_field('header_description'); ?></p>
            </div>
        </div>
    </div>
</div>
<div class="container">

    <div class="row icons">
        <?php if( have_rows('icons') ): ?>
            <?php while ( have_rows('icons') ) : the_row(); ?>
                <div class="col-md-4">
                    <div class="icons">
                        <img src="<?php the_sub_field('image'); ?>" alt="">
                        <h4><?php the_sub_field('title'); ?></h4>
                        <?php the_sub_field('description'); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

<?php get_footer(); ?>
