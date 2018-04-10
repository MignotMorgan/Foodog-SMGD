<section class="article-last-section">
    <div class="article-last-left">
        <div class="article-last-image">
            <?php
                if ( has_post_thumbnail() )     // On verifie si l'article contient une image
                {
                    echo "<a href='" .get_the_permalink() ."'>";
                    the_post_thumbnail('thumbnail', array('class' => 'article-last-img img_filter'));       // On affiche l'image.
                    echo "</a>";            
                }
            ?>
        </div>
    </div>
    <div class="article-last-right">
        <div class="article-last-category">
            <?php the_category(); ?>
        </div>
        <div class="article-last-title">
            <?= the_title(); ?>
        </div>
        <div class="article-last-excerpt">
            <?php the_excerpt() ?>
        </div>

    </div>
</section>
