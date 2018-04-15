<?php
/*
Template Name: Header
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <title>FooDog</title>
    <?php wp_head();?>
</head>
<body>
       <div class="header">

        <div class="header-links">
            <a href="https://www.facebook.com/thefarmersdog" target="_blank"><img src="<?php echo get_template_directory_uri();?>/facebook-logo.jpg"></a>
            <a href="https://twitter.com/farmersdog" target="_blank"><img src="<?php echo get_template_directory_uri();?>/twitter-logo.jpg"></a>
            <a href="https://www.instagram.com/thefarmersdog/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/instagram-logo.jpg"></a>
            <a class="loupe-header" href=" " target="_top"><img src="<?php echo get_template_directory_uri();?>/loupe.png"></a>
        </div>
        <div class="header-title">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" > FooDog </a>
    </div>
            <div class="category-list">
              <ul> <li>
              <?php list_cats(" "); ?>
            </li> </ul>
            </div>
    </div>


<?php wp_footer();?>
</body>
</html>
