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


<?php if (have_posts()): ?>
<?php while (have_posts()):the_post();?>

<?php the_post_thumbnail(); ?>

<?php the_title(); ?>
<?php the_content(''); ?>
<?php endwhile;?>

<?php else : ?> <h2>Oooopppsss...</h2> <p>Désolé, mais vous cherchez quelque chose qui ne se trouve pas ici .</p>
<?php include ("404.php"); ?>
<?php
endif;
?>

<?php include "sidebar.php"; ?>

<?php get_footer();?>


</body>
</html>
