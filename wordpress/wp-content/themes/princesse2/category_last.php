<section class="category_last-section">
<?php
<<<<<<< HEAD
=======

>>>>>>> 3837191c19dca9efa39fbbb2ef019effaafafaad
$args= array(
    // 'nbr' => 1,
    // 'showposts' => 5,
    'posts_per_page' => 6,
    'orderby'        => 'rand',
    'order' => 'DESC',
<<<<<<< HEAD
    //'title' => "The Importance of Letting Your Dog Sniff"
=======

    //'title' => "The Importance of Letting Your Dog Sniff"    
>>>>>>> 3837191c19dca9efa39fbbb2ef019effaafafaad
    // 'cat' => $catID
    'post_type'        => 'post',
    'meta_key'         => '_thumbnail_id',
    'meta_value_num'   => 0,
<<<<<<< HEAD
    'meta_compare'     => '!='
=======
    'meta_compare'     => '!=' 
>>>>>>> 3837191c19dca9efa39fbbb2ef019effaafafaad
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
<<<<<<< HEAD
        get_template_part( 'article-last', get_post_format() );
=======

        get_template_part( 'article-last', get_post_format() );

>>>>>>> 3837191c19dca9efa39fbbb2ef019effaafafaad
        echo '</div>';
        $i++;
    }
    endwhile;
endif;
<<<<<<< HEAD
?>

</section>
=======



?>

</section>
>>>>>>> 3837191c19dca9efa39fbbb2ef019effaafafaad
