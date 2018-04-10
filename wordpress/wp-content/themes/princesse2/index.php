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

<<<<<<< HEAD
<?php get_template_part( 'category_first', get_post_format() );?>
<?php get_template_part( 'category_featured', get_post_format() ); ?>
<?php get_template_part( 'category_last', get_post_format() ); ?>



<?php include "sidebar.php"; ?>
=======
<section class="index-section">
  <head class="index-section-head">
    <?php get_template_part( 'category_first', get_post_format() );?>
  </head>
  <main class="index-section-main">
    <?php get_template_part( 'category_featured', get_post_format() ); ?>
    <?php get_template_part( 'category_last', get_post_format() ); ?>
  </main>
  <aside class="index-section-aside">
    <?php include "sidebar.php"; ?>
  </aside>
</section>



>>>>>>> 16b4677589fe9cff681bc7bf14e87a973df0e77b

<?php the_posts_pagination(); ?>

<?php get_footer();?>


</body>
</html>
