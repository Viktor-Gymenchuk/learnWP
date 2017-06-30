<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
    <meta http-equiv="content-script-type" content="text/javascript">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <title><?php is_page(4) ? bloginfo('name') : wp_title(''); ?></title>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="wrapper">
    <div class="content">
        <div class="container">
            <header>
                <div id="up" class="logo">
                    <a href="<?php echo get_home_url(); ?>">
                        <img src="/wp-content/themes/yadss/images/logo.jpg" alt="">
                        <h1>Ялтушківська ДСС</h1>
                    </a>
                </div>
                <div class="nav-phone-addres">

                    <div class="wrap-phone-addres">
                        <div class="phone">
                            <p><?php echo get_option( 'eg_phone' ); ?></p>
                        </div>
                        <div class="addres">
                            <p><?php echo get_option( 'eg_address' ); ?></p>
                        </div>
                    </div>

                    <input class="burger-check" id="burger-check" type="checkbox"><label for="burger-check" class="burger"></label>

                    <?php if ( has_nav_menu( 'primary' ) ) : ?>
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'container'      => 'nav',
                        ) );
                        ?>
                    <?php endif; ?>
                </div>
            </header>
        </div>
