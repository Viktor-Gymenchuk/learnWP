<?php
/*
Template Name: Scientific Work
*/
?>
<?php get_header(); ?>
<section class="scientific_work">
    <div class="container">
        <div class="col-lg-12">
            <div class="row">
                <h2>Наукова робота</h2>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="row">
                <div class="left-info">
                    <?php the_post(); the_content(); ?>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="row">
                <div class="right-info">
                    <?php the_field('right_block');?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
