<section class="category_first-section">
<?php
$args= array(
    // 'nbr' => 1,
    // 'showposts' => 5,
    'posts_per_page' => 5,
    'orderby'        => 'rand',
    // 'title' => "MORGAN article"
    // 'cat' => $catID
);
$the_query = new WP_Query($args);
$i = 0;
if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post();
    {
        if($i == 0)
        {
            echo '<div class="category_first-large">';
                get_template_part( 'article-large', get_post_format() );
            echo '</div>';
            // echo '<div class="category_first-small_2">';
            // get_template_part( 'article-small', get_post_format() );
            // echo '</div>';
            // echo '<div class="category_first-small_3">';
            // get_template_part( 'article-small', get_post_format() );
            // echo '</div>';
            // echo '<div class="category_first-small_4">';
            // get_template_part( 'article-small', get_post_format() );
            // echo '</div>';
            // echo '<div class="category_first-small_5">';
            // get_template_part( 'article-small', get_post_format() );
            // echo '</div>';
        }
        else
        {
            echo '<div class="category_first-small">';
            get_template_part( 'article-small', get_post_format() );
            echo '</div>';
        }
        $i++;
    }
endwhile;
endif;
?>
</section>
