
<!doctype html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <?php wp_head( array());?>

</head>

<div class="wrapper">
    <div class="content">
        <div class="container">
            <header>
                <div id="up" class="logo">
                    <a href="">

                        <?php $the_query = new WP_Query('p=44'); ?>
                        <?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
                            <h1><?php the_title(); ?></h1>
                        <?php endwhile; ?>
                        <!--                        <img src="--><?php //echo esc_url(get_template_directory_uri()); ?><!--/images/logo.jpg" alt="">-->

                        <?php
                        global $dynamic_featured_image;
                        $nth_image = $dynamic_featured_image->get_all_featured_images(44);
                        foreach ($nth_image as $nth_image) {
                            echo "<img src='" . $nth_image ['full'] . "'/>";
                        };
                        ?>
                    </a>
                </div>
                <div class="nav-phone-addres">
                    <div class="wrap-phone-addres">
                        <div class="phone">
                            <p><?php echo (get_post_meta( 44, 'phone_header', true) );
                                ?>
                            </p>
                        </div>
                        <div class="addres">
                            <p>   <?php echo (get_post_meta( 44, 'Adres_header', true) );
                                ?>
                            </p>
                        </div>
                    </div>

                    <input class="burger-check" id="burger-check" type="checkbox"><label for="burger-check"
                                                                                         class="burger"></label>
                    <nav>
                        <?php wp_nav_menu( ); ?>

                    </nav>



                    <!--                    <nav>-->
                    <!--                        <ul>-->
                    <!--                            <li><a href="">Головна</a></li>-->
                    <!--                            <li><a href="">Про нас</a></li>-->
                    <!--                            <li><a href="">Біоенергетика</a></li>-->
                    <!--                            <li><a href="">Наукова робота</a></li>-->
                    <!--                            <li><a href="">Продукція</a></li>-->
                    <!--                            <li><a href="">Відгуки</a></li>-->
                    <!--                            <li><a href="">Контакти</a></li>-->
                    <!--                        </ul>-->
                    <!--                    </nav>-->
                </div>
            </header>
        </div>
