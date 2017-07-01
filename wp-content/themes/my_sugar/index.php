<?php

get_header();

wp_list_categories();
?>

<?php if (have_posts()) : ?>
<!--    --><?php //twentyeleven_content_nav('nav-above'); ?>
    <?php /* начинается цикл */ ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('content', get_post_format()); ?>
    <?php endwhile; ?>
<!--    --><?php //twentyeleven_content_nav('nav-below'); ?>
<?php endif;?>



<?php
if (is_category('salo')){
    echo 'КУРКА';
}

?>


<?php get_template_part( 'content', 'index' );


get_sidebar('right');


get_footer();?>
