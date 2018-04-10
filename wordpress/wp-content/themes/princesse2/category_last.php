<section class="category_last-section">
<?php
$args= array(
    // 'nbr' => 1,
    // 'showposts' => 5,
    'posts_per_page' => 6,
    'orderby'        => 'rand',
    'order' => 'DESC',

    //'title' => "The Importance of Letting Your Dog Sniff"
    // 'cat' => $catID
    'post_type'        => 'post',
    'meta_key'         => '_thumbnail_id',
    'meta_value_num'   => 0,
    'meta_compare'     => '!='
    );
$the_query = new WP_Query($args);
$i = 0;
if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post();
    {
        if($i %2 == 0)
            echo '<Div class="category_last-left">';
        else
            echo '<Div class="category_last-right">';

        get_template_part( 'article-last', get_post_format() );

        echo '</div>';
        $i++;
    }
    endwhile;
endif;

?>

</section>
