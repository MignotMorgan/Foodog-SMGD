
<?php
/*
Template Name: Headersingle
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <title>FooDog</title>
    <?php wp_head();?>
</head>
<body>
    <div class="header-single">
      <div class="left">
        <div class="hamb">
          <a href="#"><img src="hamb.png" alt="Icone menu hamburger"> </a>
        </div>
        <div class="digest">
          <a href="#"><img src="digest-logo.png" alt="Logo Digest"> </a>
        </div>


      </div>
      <div class="middle">
        <p>Digest In Your Inbox</p>
        <form class="signup" action="#" method="post">
          <input value="" name="email" class="yourmail" placeholder="Your email" type="email">
          <button type="submit" class="buttonmail">SIGN UP</button>
        </form>
      </div>
      <div class="right">
        <a href="#"><img src="farmer.png" alt="Logo Farmer's"> </a>
      </div>
      <div class="headerloupe">
        <a href="#"><img src="loupe2.png" alt="Logo loupe"> </a>
      </div>
    </div>
    <?php wp_footer();?>
</body>
</html>
