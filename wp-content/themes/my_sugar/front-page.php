<?php
get_header();
?>

    <div class="wrapper">
        <div class="content">
            <div class="container">
                <header>
                    <div id="up" class="logo">
                        <a href="">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.jpg" alt="">
                            <h1> Ялтушківська ДСС</h1>
                        </a>
                    </div>
                    <div class="nav-phone-addres">

                        <div class="wrap-phone-addres">
                            <div class="phone">
                                <p>+38 (063) 595-59-59</p>
                            </div>
                            <div class="addres">
                                <p>Вінницька обл., Барський р-н,с. Черешневе</p>
                            </div>
                        </div>

                        <input class="burger-check" id="burger-check" type="checkbox"><label for="burger-check" class="burger"></label>
                        <nav>
                            <ul>
                                <li><a href="">Головна</a></li>
                                <li><a href="">Про нас</a></li>
                                <li><a href="">Біоенергетика</a></li>
                                <li><a href="">Наукова робота</a></li>
                                <li><a href="">Продукція</a></li>
                                <li><a href="">Відгуки</a></li>
                                <li><a href="">Контакти</a></li>
                            </ul>
                        </nav>
                    </div>
                </header>
            </div>

            <section class="slider-index">
                <div class="index-slick-slider">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/index-sl2.jpg" alt="">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/index-sl3.jpg" alt="">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/index-sl4.jpg" alt="">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/index-sl1.jpg" alt="">
                </div>

            </section>
            <div class="container">
                <section class="our-advantages">
                    <h2>Наші переваги</h2>
                    <div class="wrapp-advantages">
                        <div class="one-advantages">
                            <p>Якість</p>
                        </div>
                        <div class="one-advantages">
                            <p>надійність</p>
                        </div>
                        <div class="one-advantages">
                            <p>чесність</p>
                        </div>
                        <div class="one-advantages">
                            <p>професіоналізм
                                у своїй сфері</p>
                        </div>
                        <div class="one-advantages">
                            <p>компетентність</p>
                        </div>
                    </div>
                </section>
            </div>
            <section class="reviews">
                <div class="container">
                    <h2>Відгуки</h2>
                    <div class="slick-reviews">
                        <ul>
                            <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pic-reviews1.jpg" alt=""></li>
                            <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pic-reviews2.jpg" alt=""></li>
                            <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pic-reviews3.jpg" alt=""></li>
                            <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pic-reviews4.jpg" alt=""></li>
                            <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pic-reviews4.jpg" alt=""></li>
                            <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pic-reviews1.jpg" alt=""></li>
                            <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pic-reviews2.jpg" alt=""></li>
                            <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/pic-reviews4.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
            </section>

        </div>
        <?php get_footer();?>
    </div>


<!--<div id="showcase">-->
<!--    --><?php
//    global $post;
//    $args = array(
//        'post_type' => 'slides',
//        'numberposts' => -1,
//        'orderby' => 'rand'
//    );
//    $slider_posts = get_posts($args);
//    // отображаем демонстрационные поля, только если существуют слайды
//    if ($slider_posts) {
//    foreach ($slider_posts as $post) : setup_postdata($post);
//        // получаем изображение
//        $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'home-slide');
//        if ($thumbnail[l] == "600" && $thumbnail[2] == "160") {
//            // проверяем размеры миниатюры в css ?>
<!--            <div id="feature---><?php //echo $post->ID; ?><!--" class="slide">-->
<!--                <a href="--><?php //the_permalink(); ?><!--" title="--><?php //the_title(); ?><!--">-->
<!--                    <img src="--><?php //echo $thumbnail[0]; ?><!--" title="--><?php //the_title(); ?><!--"/>-->
<!--                </a>-->
<!--            </div>-->
<!--        --><?php //} ?>
<!--    --><?php //endforeach; ?>
<!--    --><?php //wp_reset_postdata(); ?>
<!--    --><?php //}?>
<!--</div>-->

