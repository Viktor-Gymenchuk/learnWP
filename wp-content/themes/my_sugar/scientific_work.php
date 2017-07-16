<?php
/*
Template Name: scientific_work

*/
?>

<?php get_header(); ?>

    <section class="scientific_work">
        <div class="container">
            <div class="col-lg-12">
                <div class="row">
<h2>Наукова робота</h2>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="left-info">

                        <?php
                        query_posts("category_name=scientific_work_left_text");
                        while (have_posts()) :
                            the_post();

                            the_content();


                        endwhile;

                        wp_reset_query();
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="right-info">
                        <?php
                        query_posts("category_name=scientific_work_right_text");
                        while (have_posts()) :
                            the_post();

                            the_content();


                        endwhile;

                        wp_reset_query();

                        ?>

                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>