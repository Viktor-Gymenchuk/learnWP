<?php
/*
Template Name: Contacts
*/
?>
<?php get_header(); ?>
<section class="contact">
    <div class="container">
        <div class="col-lg-12">
            <div class="row">
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="row">
                <div class="info-contact">
                    <?php the_post(); the_content(); ?>
                </div>
                <div class="info-addres">
                    <?php the_field('address_yadss');?>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="row">
                <div class="map">
                    <div class="block-map">
                        <?php the_field('map_address');?>
                    </div>
                    <h5>Зв'язатися через:</h5>
                    <div class="wrapp-form">
                        <?php echo do_shortcode('[contact-form-7 id="112" title="На телефон"]'); ?>
                        <?php echo do_shortcode('[contact-form-7 id="40" title="На почту"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
