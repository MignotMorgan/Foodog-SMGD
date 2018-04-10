



<?php get_header(); ?> <!-- importation du header -->

<div id="corps">
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<p class="postmetadata">
   <?php the_time('j F Y') ?> par <?php the_author() ?> |
   Cat&eacute;gorie: <?php the_category(', ') ?> |
   <?php edit_post_link('Editer', ' | ', ''); ?>
</p>
<div class="post_content">
<?php the_content(); ?>
</div>
</div>
<div class="post_commentaires">
<?php comments_template(); ?>
</div>
<?php endwhile; ?>
<!-- lien vers post suivant -->
<?php previous_post_link() ?> <?php next_post_link() ?>
<?php endif; ?>
</div>

<!-- ici on place la sidebar -->
<?php get_sidebar(); ?>

<!-- ici on place le footer -->
<?php get_footer(); ?>
</body>
</html>