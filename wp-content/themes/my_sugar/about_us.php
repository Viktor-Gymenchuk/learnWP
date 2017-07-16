<?php
/*
Template Name: About_us
*/
?>

<?php
get_header();
?>



<section class="about_us">
    <div class="container">
        <div class="col-lg-12">
            <h2>Про нас</h2>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="row">
                <div class="firft-info">

<?php
query_posts("category_name=about_ua_left_text");
while (have_posts()) : the_post();
    echo'<p>'; the_content(); echo'</p>';
endwhile;
wp_reset_query();
?>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="row">
                <div class="second-info">

                    <?php
                    query_posts("category_name=about_ua_right_text");
                    while (have_posts()) : the_post();
                        echo'<p>'; the_content(); echo'</p>';
                    endwhile;
                    wp_reset_query();
                    ?>


                </div>

            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="more_about-us">
                <a href="">Більше про нас</a>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">

                <?php
                query_posts("category_name=about_ua_bottom_text");
                while (have_posts()) : the_post();
                    echo'<p>'; the_content(); echo'</p>';
                endwhile;
                wp_reset_query();
                ?>


<!--                <h6>Наші додаткові послуги:</h6>-->
<!--                <ul class="additional-services">-->
<!--                    <li>консультації і рекомендації з вирощування насінників і маточників цукрових буряків;</li>-->
<!--                    <li>з вирощування фабричних цукрових буряків;</li>-->
<!--                    <li>біоенергетичних культур;</li>-->
<!--                    <li>з вирощування інших сільськогосподарських культур.</li>-->
<!--                </ul>-->
            </div>
        </div>
    </div>
</section>


<?php
get_footer();?>

