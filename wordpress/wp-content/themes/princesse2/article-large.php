<section class="article-large-section">
    <div class="article-large-image">
        <?php
            if ( has_post_thumbnail() )     // On verifie si l'article contient une image
            {
                echo "<a href='" .get_the_permalink() ."'>";
                the_post_thumbnail('thumbnail', array('class' => 'article-large-img img_filter'));       // On affiche l'image.
                echo "</a>";            
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
<a href=""></a>