<?php
/*
Template Name: About
*/
?>
<?php get_header(); ?>
<section class="about_us">
    <div class="container">
        <div class="col-lg-12">
            <h2><?php the_title(); ?></h2>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="row">
                <div class="firft-info">
                    <?php the_post(); the_content(); ?>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="row">
                <div class="second-info">
                    <?php the_field('column_two');?>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="more_about-us">
                <a  href="">Більше про нас</a>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <h6><?php the_field('more_services_title');?></h6>
                <ul class="additional-services">
                    <?php if( have_rows('more_services_list') ): ?>
                        <?php while (have_rows('more_services_list')): the_row();
                            ?>
                            <li>
                                <?php echo get_sub_field('additional_services', true); ?>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
