<?php

get_header();

    //wp_list_categories();
?>

<?php
get_header();
?>

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

                <!--                    --><?php //$count=1;
                //                    if (have_posts()) : // если имеются записи в блоге.
                //                        query_posts('post=36');   // указываем ID рубрик, которые необходимо вывести.
                //                        while (have_posts()) : the_post();  // запускаем цикл обхода материалов блога
                //                            ?>
                <!--                  <div>-->
                <!---->
                <!--                  </div>-->
                <!--                            --><?php //$count++;
                //                        endwhile;  // завершаем цикл.
                //                    endif;
                //                    /* Сбрасываем настройки цикла. Если ниже по коду будет идти еще один цикл, чтобы не было сбоя. */
                //                    wp_reset_query();
                //                    ?>

                <?php global $dynamic_featured_image;
                $nth_image = $dynamic_featured_image->get_all_featured_images(36);
                foreach ($nth_image as $nth_image) {
                    echo "<div> <img src='" . $nth_image ['full'] . "' /> </div>";
                };
                ?>


                <!--                    <img src="-->
                <?php //echo esc_url( get_template_directory_uri() ); ?><!--/images/index-sl2.jpg" alt="">-->
                <!--                    <img src="-->
                <?php //echo esc_url( get_template_directory_uri() ); ?><!--/images/index-sl3.jpg" alt="">-->
                <!--                    <img src="-->
                <?php //echo esc_url( get_template_directory_uri() ); ?><!--/images/index-sl4.jpg" alt="">-->
                <!--                    <img src="-->
                <?php //echo esc_url( get_template_directory_uri() ); ?><!--/images/index-sl1.jpg" alt="">-->
            </div>

        </section>
        <?php
        if (class_exists('Dynamic_Featured_Image')) {
            global $dynamic_featured_image;
            $featured_images = $dynamic_featured_image->get_featured_images(36);
            //You can now loop through the image to display them as required
            foreach ($featured_images as $featured_images) {
//                    print_r($featured_images);
//                        echo("<br>");
//                        echo($featured_images[thumb]);
//                        echo("<br>");
//                        echo($featured_images[full]);
//                        echo("<br><hr>");
//                        $thumbnail = $dynamic_featured_image -> get_image_url( $featured_images[attachment_id], "thumbnail" );
//                        $alt = $dynamic_featured_image ->get_image_alt( $thumbnail );
//                       echo ($alt);
            };
        }
        ?>
        <div class="container">
            <section class="our-advantages">
                <h2>
                    <?php echo(get_the_title(37)); ?>
                </h2>
                <div class="wrapp-advantages">
                    <?php
                    $my_Filds = get_post_meta('37');
                    foreach ($my_Filds[MyFyild] as $my_Filds[MyFyild]) {
                        ?>
                        <div class="one-advantages">
                            <?php echo("<p>" . $my_Filds[MyFyild] . "</p>"); ?>
                        </div>
                    <?php }
                    ?>
                </div>
            </section>
        </div>
        <section class="reviews">
            <div class="container">
                <h2>
                    <?php echo(get_the_title(38)); ?></h2>
                <div class="slick-reviews">
                    <ul>

                        <?php global $dynamic_featured_image;
                        $nth_image = $dynamic_featured_image->get_all_featured_images(38);
                        foreach ($nth_image as $nth_image) {
                            echo "<li> <img src='" . $nth_image ['full'] . "' /> </li>";
                        };
                        ?>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <?php get_footer(); ?>
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






<?php //if (have_posts()) : ?>
<!--<!--    --><?php ////twentyeleven_content_nav('nav-above'); ?>
<!--    --><?php ///* начинается цикл */ ?>
<!--    --><?php //while (have_posts()) : the_post(); ?>
<!--        --><?php //get_template_part('content', get_post_format()); ?>
<!--    --><?php //endwhile; ?>
<!--<!--    --><?php ////twentyeleven_content_nav('nav-below'); ?>
<?php //endif;?>
<!---->
<!---->
<!---->
<?php
//if (is_category('salo')){
//    echo 'КУРКА';
//}
//
//?>
<!---->
<!---->
<?php //get_template_part( 'content', 'index' );
//
//
//get_sidebar('right');


get_footer();?>
