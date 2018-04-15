<section class="category_featured-section">
<?php
$args= array(
    // 'nbr' => 1,
    // 'showposts' => 5,
    'posts_per_page' => 5,
    'orderby'        => 'rand',
    // 'title' => "The Importance of Letting Your Dog Sniff"

    // 'cat' => $catID
    );
$the_query = new WP_Query($args);
$i = 0;
if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post();
            get_template_part( 'article-middle', get_post_format() );

    endwhile;
endif;
?>

</section>
