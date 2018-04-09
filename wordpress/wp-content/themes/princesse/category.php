<?php
/**
* Template Name: category
**/

get_header();

?>




<?php 
get_category_by_path();
$myCat = get_category(get_query_var("cat")); // On récupère la catégorie
echo $myCat->name;//on affiche la catégorie
// echo "<pre>";
// var_dump($myCat);
// echo "</pre>";

// the_archive_title();
// the_archive_description();


// the_title();
    // the_category(); 
    $catID = $myCat->cat_ID;
    // $args= array(
    //     'showposts' => 15,
    //     'cat' => $catID,
    //     'orderby'  => 'post_date',
    //     'order' => 'DESC'
    //     );
    $args= array(
        // 'nbr' => 1,
        // 'showposts' => 5,
        'posts_per_page' => 6,
        'cat' => $catID
        );
    $the_query = new WP_Query($args);
    if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post();
            // the_content();
            get_template_part( 'article-middle', get_post_format() );
        endwhile;
        the_posts_pagination( array( 'mid_size' => 2 ) );
    else :
        
        get_template_part( 'index', 'none' );
    endif;
// echo "<pre>";
// var_dump($the_query);
// echo "</pre>";




    ?>








<?php get_footer(); ?>