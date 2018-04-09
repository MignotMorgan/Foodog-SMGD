<?php
/**
* Template Name: index
**/

get_header();

// wp_list_categories();µ

echo "FIRST";
get_template_part( 'category_first', get_post_format() );
echo "FEATURED";
get_template_part( 'category_featured', get_post_format() );
echo "LAST";
get_template_part( 'category_last', get_post_format() );

get_footer();
?>
