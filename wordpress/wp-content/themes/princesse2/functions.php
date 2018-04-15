<?php
    add_theme_support('post-thumbnails');

$pagelist = get_pages('sort_column=menu_order&sort_order=asc');
$pages = array();
foreach ($pagelist as $page) {
$pages[] += $page->ID;
}

$current = array_search(get_the_ID(), $pages);
$prevID = $pages[$current-1];
$nextID = $pages[$current+1];

register_sidebar($args);

add_theme_support('post-thumbnails');

function add_search_box($items, $args) {

       ob_start();
       get_search_form();
       $searchform = ob_get_contents();
       ob_end_clean();

       $items .= '<li>' . $searchform . '</li>';
       return $items;
}
add_filter('wp_nav_menu_items','add_search_box', 10, 2);


function page404_redirection()
{
 global $mapage;
 if(is_404())
 {
 wp_redirect(home_url("404")); //remplacez "erreur-404" par le nom d'identifiant de votre page
 exit;
 }
}

add_action('wp', 'page404_redirection',1);

add_theme_support('post-thumbnails');
