<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


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
        <i class="fa fa-facebook-official" style="font-size:35px"></i>
        <i class="fa fa-instagram" style="font-size:35px"></i>
        <i class="fa fa-twitter" style="font-size:35px"></i>
        </div>
        <div class="copy-footer">
            <p>2017 © The Farmer's Dog</p>
        </div>
    </section>
</footer>
