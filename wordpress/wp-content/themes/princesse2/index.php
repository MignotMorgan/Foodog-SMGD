<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="style.css">


  <title>Document</title>
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
<?php endwhile;endif; ?>

<?php include "sidebar.php"; ?>

<?php get_footer();?>


</body>
</html>
