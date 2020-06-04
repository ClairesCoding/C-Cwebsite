<?php get_header(); /* Tells WordPress to include header.php */ ?>

<!--NEW SRC SERVER: http://www.collabcollective.com.au/wp-content/themes/C-Cwebsite/images/-->

<!--INSIGHT SECTION-->
    <section class="container-fluid text-left">
    <div class="row">
        <div class="col-md-8">
            <img class="img-responsive" alt="communication-graphic" src="http://www.collabcollective.com.au/wp-content/themes/C-Cwebsite/images/insight.jpg">
        </div>
         <div class="col-md-4 insightbg text-center">
            <h5 class= "text-left">INSIGHT</h5>
             <div class="blocker"></div>
             <p class="insight-small-title"> What does our company do?</p>
            <p class="insight-text">Much of the curent funding and sponsorship available for Non For Profits (NFP) is becoming increasing competative and takes NFP’s away from their core purpose  using funds to manage marketing, fundraising, sponsorship, stakeholders, grants applications and events development and delivery.  This program enables the NFP to remain true to their core purpose and service delivery wjile exploring diverse strategies to ensure their relevance into the future without a massive internal investment.</p>
            <button type="button" class="btn btn-default">Read More</button>
        </div>
    </div>
</section>
    
    
<!--LEARNING SECTION-->
<div class="container learningbg">

    <div class="row">

  <h5 class="text-center title">LEARNING</h5>
      <div class="col-sm-6 text-center learningbg1 half">
            
<?php $post_id = 21;
$queried_post = get_post($post_id);?>
<?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
<h4><?php echo $queried_post->post_title; ?></h4>
<?php echo $queried_post->post_excerpt; ?>
<?php echo '<a class="btn-primary" href="'.get_permalink($queried_post).'"><br>Resources</a>';?>

          </div>
                
         <div class="col-sm-6 text-center learningbg2 half">

<?php $post_id = 23;
$queried_post = get_post($post_id);?>
<?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
<h4><?php echo $queried_post->post_title; ?></h4>
<?php echo $queried_post->post_excerpt; ?>
<?php echo '<a class="btn-primary" href="'.get_permalink($queried_post).'"><br>Coaching</a>';?>


</div>
        
        </div>
    </div>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>