<?php

$args= array(
    // 'nbr' => 1,
    // 'showposts' => 5,
    'posts_per_page' => 5,
    'orderby'        => 'rand',
    // 'cat' => $catID
    );
$the_query = new WP_Query($args);
$i = 0;
if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post();
    {
        if($i == 0)
            get_template_part( 'article-large', get_post_format() );
        else
            get_template_part( 'article-small', get_post_format() );
        $i++;
    }
    endwhile;
endif;



?>