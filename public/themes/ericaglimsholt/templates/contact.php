<?php
/*
Template Name: Contact
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
<div class="row about">
    <div class="col-md-8">
    <?php if( have_rows('textfield') ): ?>
        <?php while ( have_rows('textfield') ) : the_row(); ?>
            <div class="textfield">
                <h2><?php the_sub_field('title_textfield'); ?></h2>
                <p><?php the_sub_field('description_textfield'); ?></p>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    </div>

    <div class="col-md-4">
        <?php if( have_rows('image') ): ?>
            <?php while ( have_rows('image') ) : the_row(); ?>
                <img class="image" src="<?php the_sub_field('image'); ?>" />
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
