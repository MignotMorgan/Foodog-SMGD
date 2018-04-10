<section class="article-middle-section">
    <div class="article-middle-left">
        <div class="article-middle-image">
            <?php
                if ( has_post_thumbnail() )     // On verifie si l'article contient une image
                {
                    the_post_thumbnail('thumbnail', array('class' => 'article-middle-img'));       // On affiche l'image.
                }
            ?>
        </div>
    </div>
    <div class="article-middle-right">
        <div class="article-middle-category">
            <?php the_category(); ?>
        </div>
        <div class="article-middle-title">
            <?= the_title(); ?>
        </div>
        <div class="article-middle-excerpt">
            <?php the_excerpt() ?>
        </div>

    </div>
</section>