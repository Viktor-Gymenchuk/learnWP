
<h1>фжівалотіфалоптфущвшка</h1>
<?php
$args = array(
    'post_per_page' => '-1',
    'post_type' => 'salo',
    'tax_query' => array(
        array(
            'taxonomy'=> 'category',
            'field' => 'slug',
            'terms' => 'slug'
        )
    )
);
$My_Salo = new WP_Query($args);
while($My_Salo ->have_posts()): $My_Salo -> the_post();

//        global $post;
//        print_r ($post);
    ?>
    <a href="<?php the_permalink();?>"><?php the_title();?> </a><br/>
    <a href="<?php the_author_link()?>"><?php the_author();?> </a><br>

    <?php the_content();
    the_category();

endwhile;
wp_reset_postdata();

?>