<?php
/*
Template Name: Product
*/
?>
<?php get_header(); ?>
<section class="product">
    <div class="container">
        <div class="col-lg-12">
            <div class="row">
                <h2><?php the_title(); ?></h2>
                <div class="slider-product">
                    <ul>
                        <?php if( have_rows('slider_product') ): ?>
                            <?php while (have_rows('slider_product')): the_row();
                                // vars
                                $image = get_sub_field('image');
                                ?>
                                <li>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>"/>
                                    <p><?php the_sub_field('title_image'); ?></p>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                    <span id="sl-paginaion-product"></span>
                </div>
            </div>
        </div>
        <div class="list-products clearfix">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" >
                <div class="row">
                    <h4><?php the_field('crop_first');?></h4>
                    <?php if ( has_nav_menu( 'cereals' ) ) : ?>
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'cereals',
                            'container'      => 'nav',
                        ) );
                        ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="row">
                    <h4><?php the_field('crop_second');?></h4>
                    <?php if ( has_nav_menu( 'legumes' ) ) : ?>
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'legumes',
                            'container'      => 'nav',
                        ) );
                        ?>
                    <?php endif; ?>
                    <h4><?php the_field('crop_third');?></h4>
                    <?php if ( has_nav_menu( 'industrial_crops' ) ) : ?>
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'industrial_crops',
                            'container'      => 'nav',
                        ) );
                        ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="row">
                    <h4><?php the_field('crop_fourth');?></h4>
                    <?php if ( has_nav_menu( 'seeds_clover' ) ) : ?>
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'seeds_clover',
                            'container'      => 'nav',
                        ) );
                        ?>
                    <?php endif; ?>
                    <h4><?php the_field('crop_fifth');?></h4>
                    <?php if ( has_nav_menu( 'seeds_beets' ) ) : ?>
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'seeds_beets',
                            'container'      => 'nav',
                        ) );
                        ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
