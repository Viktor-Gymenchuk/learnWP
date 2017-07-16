<?php
/*
Template Name: Bioenergy
*/
?>

<?php get_header(); ?>
    <section class="bioenergy">
        <div class="container">
            <div class="col-lg-12">
                <?php
                query_posts("category_name=bioenergy");
                while (have_posts()) : the_post();
                    echo '<h2>';
                    the_title();
                    echo '</h2>';

                endwhile;
                wp_reset_query();
                ?>
            </div>
            <div class="col-lg-4 col-md-5">
                <div class="row">

                    <div class="slider-bioenergy">
                        <ul>
                            <?php global $dynamic_featured_image;
                            $nth_image = $dynamic_featured_image->get_all_featured_images(85);
                            foreach ($nth_image as $nth_image) {
                                $nth_image2 = $dynamic_featured_image->get_image_alt($nth_image['full']);
                                 ?>
                                <li> <img src=' <?php echo ($nth_image ['full']); ?>    ' />
                                    <p>
                                        <?php echo($nth_image2); ?>
                                    </p>
                                    </li>
                         <?php   };
                            ?>

<!--                            <li><img src="/images/sl-bioenergy.jpg" alt="sl-bioenergy">-->
<!--                                <p>Міскантус</p>-->
<!--                            </li>                            <li><img src="/images/sl-bioenergy.jpg" alt="sl-bioenergy">-->
<!--                                <p>Міскантус</p>-->
<!--                            </li>                            <li><img src="/images/sl-bioenergy.jpg" alt="sl-bioenergy">-->
<!--                                <p>Міскантус</p>-->
                            </li>
                        </ul>
                        <span id="sl-paginaion-bioenergy">3/3</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="row">
                    <div class="info">
                        <?php
                        query_posts("category_name=bioenergy");
                        while (have_posts()) : the_post();
                            echo the_content();

                        endwhile;
                        wp_reset_query();
                        ?>

                    </div>

                    <!--                    <div class="info">-->
                    <!--                        <h4>Біоенергетичні культури</h4>-->
                    <!--                        <p>Починаючи з 2008 року на станції розпочато дослідження по вивченню агротехніки вирощування нових видів біоенергетичних культур: міскантусу, світч-грасу та енергетичної верби. В 2011 році на базі лабораторії ґрунтозахисного землеробства була утворена лабораторія технологій вирощування біоенергетичних культур на малопродуктивних землях.</p>-->
                    <!--                        <p>Поряд з вивченням агротехніки вирощування на станції проводиться робота по селекції та насінництву світчграсу і міскантусу. В результаті проведеної роботи було сформовано сорт світчграсу – Морозко та сорт міскантусу – Снігова королева (спільна робота співробітників ІБКіЦБ, Весело-Подільської ДСС та Ялтушківської ДСС). Дані сорти пройшли Державне сортовипробування і з 2016 та 2017 років занесені до реєстру сортів рослин України.</p>-->
                    <!--                        <p><strong>Ялтушківська дослідно-селекційна станція ІБКіЦБ проводить реалізацію батьківських компонентів районованих гібридів цукрових та кормових буряків, елітного та репродукційного насіння ярого ячменю сорту Оксамитовий та гречки сорту Крупнозелена, насіння світчграсу сорту Морозко та ризоми міскантусу сорту Снігова королева.</strong></p>-->
                    <!--                    </div>-->
                    <!--                    <div class="addres">-->
                    <!--                        <h4>За довідками звертатися за адресою:</h4>-->
                    <!--                        <p>23092 Ялтушківська ДСС,</p>-->
                    <!--                        <p>с. Черешневе</p>-->
                    <!--                        <p>Барського р-ну</p>-->
                    <!--                        <p>Вінницької обл.</p>-->
                    <!--                        <p>тел./факс (04341) 35-4-68</p>-->
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>