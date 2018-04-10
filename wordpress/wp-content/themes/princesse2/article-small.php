<section class="article-small-section">
    <div class="article-small-image">
        <?php
            if ( has_post_thumbnail() )     // On verifie si l'article contient une image
            {
                the_post_thumbnail('thumbnail', array('class' => 'article-small-img img_filter'));       // On affiche l'image.
            }
        ?>
    </div>
    <div class="article-small-title">
        <?= the_title(); ?>
    </div>
</section>
