<?php
/*
Template Name: Sugar Beet
*/
?>
<?php get_header(); ?>
<section class="seed">
    <div class="container">
        <div class="col-lg-12">
            <div class="row">
                <a class="st-seed-left" href="/produkcija"></a>
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="wrapp-seed-table">
                    <?php the_post(); the_content(); ?>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="l-info">
                    <?php the_field('left_column');?>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="r-info">
                    <?php the_field('right_column');?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
