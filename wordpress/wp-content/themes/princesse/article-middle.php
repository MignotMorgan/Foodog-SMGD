<div>
    <div>
        <div>
            <?php
                if ( has_post_thumbnail() )     // On verifie si l'article contient une image
                {
                    the_post_thumbnail();       // On affiche l'image.
                }
            ?>
        </div>
    </div>
    <div>
        <div>
            <?php the_category(" "); ?>
        </div>
        <div>
            <?= the_title(); ?>
        </div>
        <div>
            <?php the_excerpt() ?>
        </div>

    </div>
</div>
