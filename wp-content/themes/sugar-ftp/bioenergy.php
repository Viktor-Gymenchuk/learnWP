<?php
/*
Template Name: Bioenergy
*/
?>
<?php get_header(); ?>
<section class="bioenergy">
    <div class="container">
        <div class="col-lg-12">
            <h2><?php echo get_cat_name(5);?></h2>
        </div>
        <div class="col-lg-4 col-md-5">
            <div class="row">
                <div class="slider-bioenergy">
                    <ul>
                        <?php query_posts('&cat=5&order=ASC');?>
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <?php if( have_rows('slider_bioenergy') ): ?>
                                <?php while (have_rows('slider_bioenergy')): the_row();
                                    // vars
                                    $image = get_sub_field('image');
                                    ?>
                                    <li>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"/>
                                        <p><?php the_sub_field('title_image'); ?></p>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                        <?php endif; wp_reset_query(); ?>
                    </ul>
                    <span id="sl-paginaion-bioenergy"></span>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-7">
            <div class="row">
                <?php query_posts('&cat=5&order=ASC');?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="info">
                        <h4><?php the_title(); ?></h4>
                        <?php the_content(); ?>
                    </div>
                    <div class="addres">
                        <h4><?php the_field('title_address'); ?></h4>
                        <?php the_field('enter_address'); ?>
                    </div>
                <?php endwhile; ?>
                <?php endif; wp_reset_query(); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
