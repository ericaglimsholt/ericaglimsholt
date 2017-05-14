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

    <div class="row about-me">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <?php if( have_rows('textfield') ): ?>
                <?php while ( have_rows('textfield') ) : the_row(); ?>
                    <div class="textfield-about">
                        <hr>
                        <p><?php the_sub_field('description_textfield'); ?></p>
                        <hr>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="col-md-2">
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
