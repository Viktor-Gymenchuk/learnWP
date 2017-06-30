<?php
/*
Template Name: Reviews
*/
?>
<?php get_header(); ?>
<section class="revies">
    <div class="container">
        <div class="col-lg-12">
            <div class="row">
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="row">
                <?php the_post(); the_content(); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
