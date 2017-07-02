<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<section class="slider-index">
    <div class="index-slick-slider">
        <?php query_posts('&cat=4&order=ASC');?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php if( have_rows('slider_main') ): ?>
                <?php while (have_rows('slider_main')): the_row();
                    // vars
                    $image = get_sub_field('image');
                    ?>
                    <div class="home-slider-item">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"/>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        <?php endwhile; ?>
        <?php endif; wp_reset_query(); ?>
    </div>
</section>
<div class="container">
    <section class="our-advantages">
        <h2><?php echo get_the_title(51); ?></h2>
        <div class="wrapp-advantages">
            <?php query_posts('&cat=4&order=ASC');?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php if( have_rows('list_benefits') ): ?>
                    <?php while (have_rows('list_benefits')): the_row();
                        // vars
                        $image = get_sub_field('advantage');
                        ?>
                        <div class="one-advantages">
                            <p><?php the_sub_field('advantage'); ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php endwhile; ?>
            <?php endif; wp_reset_query(); ?>
        </div>
    </section>
</div>
<section class="reviews">
    <div class="container">
        <h2><?php echo get_the_title(58); ?></h2>
        <div class="slick-reviews">
            <ul>
                <?php query_posts('&cat=4&order=ASC');?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php if( have_rows('carusel_reviews') ): ?>
                        <?php while (have_rows('carusel_reviews')): the_row();
                            // vars
                            $image = get_sub_field('image');
                            ?>
                            <li>
                                <a href="<?php echo $image['url']; ?>" class="fancybox">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"/>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php endwhile; ?>
                <?php endif; wp_reset_query(); ?>
            </ul>
        </div>
    </div>
</section>
<?php get_footer(); ?>
