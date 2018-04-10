<section class="article-small-section">
    <div class="article-small-image">
        <?php
            if ( has_post_thumbnail() )     // On verifie si l'article contient une image
            {
                echo "<a href='" .get_the_permalink() ."'>";
                the_post_thumbnail('thumbnail', array('class' => 'article-small-img img_filter'));       // On affiche l'image.
                echo "</a>";            
            }
        ?>
    </div>
    <div class="article-small-title">
        <?= the_title(); ?>
    </div>
</section>
