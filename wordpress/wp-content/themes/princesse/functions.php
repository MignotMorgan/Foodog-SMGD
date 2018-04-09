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

 <?php the_posts_pagination( $args ); ?>

<?php the_posts_pagination( array(
    'mid_size' => 2,
    'prev_text' => __( 'Back', 'textdomain' ),
    'next_text' => __( 'Onward', 'textdomain' ),
) ); ?>


<?php //posts_nav_link(); ?>

 <?php posts_nav_link( $sep, $prelabel, $nextlabel ); ?>

<div class="navigation">
<div class="alignleft"><?php previous_posts_link( '&laquo; Previous Entries' ); ?></div>
<div class="alignright"><?php next_posts_link( 'Next Entries &raquo;', '' ); ?></div>
</div>
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

  ?>
