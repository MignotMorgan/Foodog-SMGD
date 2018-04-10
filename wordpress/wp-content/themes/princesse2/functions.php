<?php
    add_theme_support('post-thumbnails');
?>

<?php
$pagelist = get_pages('sort_column=menu_order&sort_order=asc');
$pages = array();
foreach ($pagelist as $page) {
$pages[] += $page->ID;
}

$current = array_search(get_the_ID(), $pages);
$prevID = $pages[$current-1];
$nextID = $pages[$current+1];
?>

<div class="navigation">
<?php if (!empty($prevID)) { ?>
<div class="alignleft">
<a href="<?php echo get_permalink($prevID); ?>"
title="<?php echo get_the_title($prevID); ?>">Previous</a>
</div>
<?php }
if (!empty($nextID)) { ?>
<div class="alignright">
<a href="<?php echo get_permalink($nextID); ?>"
title="<?php echo get_the_title($nextID); ?>">Next</a>
</div>
<?php } ?>
</div>
<!-- afficher l'option widget -->
<?php register_sidebar($args); ?>



<!-- //PAGINATION -->

<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>


<?php
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

  ?>
