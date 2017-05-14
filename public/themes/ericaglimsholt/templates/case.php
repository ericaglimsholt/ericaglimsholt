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

    <div class="row img">
        <div class="col-md-6">
            <?php if( have_rows('work') ): ?>
                <?php while ( have_rows('work') ) : the_row(); ?>
                    <div class="work">
                        <a href="<?php the_sub_field('url'); ?>">
                            <img src="<?php the_sub_field('image'); ?>" alt="">
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="col-md-6">
            <?php if( have_rows('work_copy') ): ?>
                <?php while ( have_rows('work_copy') ) : the_row(); ?>
                    <div class="work">
                        <a href="<?php the_sub_field('url'); ?>">
                            <img src="<?php the_sub_field('image'); ?>" alt="">
                        </a>
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
