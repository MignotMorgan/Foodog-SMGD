<!-- FONCTION Permetant d'afficher les CSS, Js, Jquery dans l'index -->

<?php add_theme_support('post-thumbnails' ); ?> <!-- ajoute fonctionnalité image a la une -->

<?php

    /**
     * Enqueue scripts
     *
     * @param string $handle Script name (identifiant subjectif)
     * @param string $src Script url (URL)
     * @param array $deps (optional)
     * @param string | bool $ver (optional)
     * @param bool $in_footer (optional)
     */

     function multipage_scripts() {
         // Active un feuille de style css.
         wp_enqueue_style('css', "<?php bloginfo('stylesheet_url'); ?>");
         // Desactive Jquery si il avait deja été activé.
         wp_deregister_script('Jquery');
         // Active Jquery.
         wp_enqueue_style('Jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
         // Active les scripts Js.            // Declare que js a besoin de jquery pour fonctionner.
         wp_enqueue_style('js', '/script.js', array('jquery'), false, false);
     }

     add_action('wp_enqueue_scripts', 'multipage_scripts');
?>

<?php

     register_nav_menus(
        array (
            'primaire' => __('menu primaire', 'test' )
        )
    
     );
?>

<?php 

if ( function_exists(‘register_sidebar’))
register_sidebar(array(
‘name’ => ‘Footer’,));

     register_sidebar($args);

