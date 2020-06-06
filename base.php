<?php
    /*
    Template Name: Base 
    */
    ?>


<?php include (TEMPLATEPATH . '/small-header.php');  /* Tells WordPress to include the smaller header header.php */ ?>
<section>



<?php $post_id = 94;
$queried_post = get_post($post_id);?>
<?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
<h4><?php echo $queried_post->post_title; ?></h4>
<?php echo $queried_post->post_excerpt; ?>



</section>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>
