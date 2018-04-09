
<footer class="container-footer">
    <section class="content-footer-top">
        <div class="category-footer">
            <h3>CATEGORIES</h3>
            <?php wp_list_cats('<hr>');?>
        </div>
        <div class="popular-footer">
            <div class="container-popular-footer">

                    <h3>LAST POSTS</h3>

                    <?php
                        $recentPosts = new WP_Query();
                        $recentPosts->query('showposts=3');
                    ?>
                    <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
                    <div class="container-un-deux">
                        <div class="un">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="deux">
                            <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
                        </div> 
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="insta-footer">
            <h3>INSTAGRAM</h3>
        </div>
    </section>
    <section class="content-footer-bottom">
        <div class="social-footer">

        </div>
        <div class="copy-footer">
            <p>2017 © The Farmer's Dog</p>
        </div>
    </section>
</footer>

