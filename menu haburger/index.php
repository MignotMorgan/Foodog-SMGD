<!DOCTYPE html>
<html>
  <head>

      <?php wp_head(); ?>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>

    <!-- menu -->
    <nav>
        <div class="nav-wrapper">
        <a href="#!" class="brand-logo"><img src="<?php echo get_template_directory_uri() ?>/nasa.png" width="50px" height="50px" alt=""></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">

            <?php 
            // the query
            $the_query = new WP_Query( 
                array( 
                    'category_name' => 'one_page', // catégorie => one_page
                    'order'   => 'ASC',  // trié par  => assendant
                    ) 
                );
            ?>
                <!-- boucle pour le menu -->
            <?php if ( $the_query->have_posts() ) : ?>

                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <li><a href="#lien_<?php the_ID(); ?>"><?php the_title(); ?></a></li> <!-- affiche les titre dans le menu sous forme de lien  +  #lien vers les ID des articles -->
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

            <?php endif; ?>

        </div>
    </nav>

    <!-- menu hampburger -->
    <ul class="sidenav" id="mobile-demo">
        <?php if ( $the_query->have_posts() ) : ?>

        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <li><a href="#"><?php the_title(); ?></a></li> <!-- affiche les titre dans le menu sous forme de lien -->
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

        <?php endif; ?>
    </ul>






      <!-- Pointe un lien vers le repertoire du theme. -->
      <img src="<?php echo get_template_directory_uri() ?>/nasa.png" width="50px" height="50px" alt="">

        <?php 
        // the query
        // Affiche les article de la           catégorie => one_page,    trié par  => assendant  
        $the_query = new WP_Query( 
            array( 
                'category_name' => 'one_page', // catégorie => one_page
                'order'   => 'ASC',  // trié par  => assendant
                ) 
            );
        ?>

        <?php if ( $the_query->have_posts() ) : ?>

        <!-- pagination here -->

        <!-- the loop -->
        <!--   Tant qu'il y a de poste                 je les affiche. -->
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <!-- paramètre image à la une. -->
        <?php
        // variable vers l'id des images a la une
        $imageAlaUneId = get_post_thumbnail_id();
        // variable qui déféini la source de $imageAlaUneId
        $imgSrc = wp_get_attachment_url($imageAlaUneId);
        ?>

        <!-- effet de parallax -->
        <div class="parallax-container" id="lien_<?php the_ID(); ?>"> <!-- défini un ID pour le lien ancre -->
            <div class="parallax"><img src="<?php echo $imgSrc;  ?>" alt=""></div>
        </div>
        <div class="section white">
            <div class="row container">
                <h2 class="header"><?php the_title(); ?></h2>
                <p class="grey-text text-darken-3 lighten-3"><?php the_content(); ?></p>
            </div>
        </div>

        <!-- affichage -->
        <h2><?php the_title(); ?></h2> <!-- titre -->
        <p> <?php the_content(); ?></p> <!-- contenu -->
        <img src="<?php echo $imgSrc;  ?>" alt="">
        <!-- <?php the_date(); ?>  date -->
        <!-- <?php the_author(); ?>  auteur -->





            <?php endwhile; ?>
            <!-- end of the loop -->

            <!-- pagination here -->

            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>


    <script> // effet parallax
        $(document).ready(function(){
        $('.parallax').parallax();
        });
    </script>

    <script> // menu hamburger
        $(document).ready(function(){
        $('.sidenav').sidenav();
        });
    </script>


    <?php  wp_footer(); ?> <!-- Génère la barre de menu WP administrateur -->

  </body>
</html>