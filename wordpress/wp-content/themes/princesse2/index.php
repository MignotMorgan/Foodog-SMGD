<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="style.css">


  <title>Foodog SMGD 2.0</title>
</head>
<body>
<?php get_header(); ?>

<?php get_template_part( 'category_first', get_post_format() );?>
<?php get_template_part( 'category_featured', get_post_format() ); ?>
<?php get_template_part( 'category_last', get_post_format() ); ?>



<?php include "sidebar.php"; ?>

<?php the_posts_pagination(); ?>

<?php get_footer();?>


</body>
</html>
