<section class="article-large-section">
    <div class="article-large-image">
        <?php
            if ( has_post_thumbnail() )     // On verifie si l'article contient une image
            {
                the_post_thumbnail('thumbnail', array('class' => 'article-large-img'));       // On affiche l'image.
            }
        ?>
    </div>
    <div class="article-large-category">
         <?php the_category() ?>
    </div>
    <div class="article-large-title">
        <?= the_title(); ?>
    </div>
</section>
