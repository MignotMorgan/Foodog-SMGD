<?php
/*
Template Name: 404
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- <link rel="stylesheet" href="wp-content/themes/princesse/css/reset.css" type="text/css">
  <link rel="stylesheet" href="wp-content/themes/princesse/css/style-404.css" type="text/css"> -->
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <title>Page not found - FooDog</title>
</head>
<body>

  <?php
  get_header();
   ?>
<div class="page-404">

  <h1>404</h1>
</div>
<div class="looks">
<p>It looks like nothing was found at this location. Maybe try a search?</p>
</div>

<div class="search-404">
  <form class="searchbar" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
        <input type="text" name="s" id="s" placeholder="Search and hit enter..." />
        <input type="image" value="" class="loupe"  id="searchsubmit" src="wp-content/themes/princesse/loupe.png" width="35px" alt="search"/>
      </form>
</div>
<?php
get_footer();
 ?>
</body>
</html>
