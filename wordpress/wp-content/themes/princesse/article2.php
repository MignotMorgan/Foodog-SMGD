<?php

// the_title();
$id = get_the_ID();
$attachments = get_attached_media('image', $id);
// the_content();
// $id = the_ID();
// echo $id;
// if ( wp_attachment_is_image( 1 ) )
//     echo "TTTTTTTTTTTTT";
//     else
//     echo "GGGG";
if ( has_post_thumbnail() ) {
    the_post_thumbnail();
    }
// // the_post_thumbnail();
// the_post_thumbnail( 'thumbnail' );


// $post = get_post(13);
// // $post_thumbnail_id = get_post_thumbnail_id( $post );
// echo '<pre>';
// var_dump($post);
// // var_dump($post_thumbnail_id);
// echo "</pre>";
// the_ID();

// $test = wp_get_attachment_image_src(1);
// echo "<pre>";
// var_dump($attachments);
// echo "</pre>";

// var_dump($id);
// echo sizeof($attachments);
// var_dump($attachments["10"]->guid);

// var_dump($attachments["10"]->ID);
?>


<div>
    <?php foreach($attachments as $key => $value) : ?>
        <img src="<?= $value->guid ?>" alt="">
        <?php break; ?>
    <?php endforeach; ?>
    <div>
        <?= the_title(); ?>
    </div>
</div>