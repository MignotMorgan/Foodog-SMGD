
<?php get_header( ); ?>



<div class="page-single">
<div class="grid">

	<aside class="article">
        <?php
            if (have_posts() ):?><?php while (have_posts()):the_post();
        ?>
                <div class="categorie-single"><p><?php the_category(''); ?></p></div>
                <div class="titre-single"><h1><?php the_title(); ?></h1></div>
                <div class="image-single"><img class="img-single" src="<?php the_post_thumbnail();?>"></div>
                <div class="social-single"><p><?php the_author_link();  ?></p></div>
                <div class="contenu-single"><?php the_content(''); ?></div>
				<section class="comment-container"><?php comments_template(); ?></section>
        <?php endwhile;endif;
        ?>
    </aside>
</div>
</div>
<?php get_footer(); ?>
