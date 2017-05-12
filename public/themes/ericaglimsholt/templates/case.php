<?php
/*
Template Name: Case
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
    <div class="row case">
        <div class="col-md-8">
            <h2><?php the_field('title'); ?></h2>
            <p><?php the_field('description'); ?></p>
        </div>
    </div>
    <div class="row case">
        <div class="col-md-8">
            <?php if( have_rows('companies') ): ?>
                <?php while ( have_rows('companies') ) : the_row(); ?>
                    <h2><?php the_sub_field('column_1'); ?></h2>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>



<?php get_footer(); ?>
