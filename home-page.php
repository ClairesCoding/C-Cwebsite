<?php
    /*
    Template Name: Home page
    */
    ?>


<?php get_header(); /* Tells WordPress to include header.php */ ?>

<!--NEW SRC SERVER: http://www.collabcollective.com.au/wp-content/themes/C-Cwebsite/images/-->

<!--INSIGHT SECTION-->
    <section class="container-fluid text-left">
    <div class="row">
        <div class="col-md-8">
            <img class="img-responsive" alt="connection graphic" src="<?php the_field('insightimage'); ?>"> 
        </div>
         <div class="col-md-4 insightbg text-center">
             <h4 class= "text-left"><?php the_field('insighttitle'); ?></h4>
             <p class="insight-small-title"><?php the_field('insightsmalltitle'); ?></p>
             <p class="insight-text"><?php the_field('insighttext'); ?></p>
             <a href="<?php the_field('calltoactionbutton'); ?>" class="btn btn-default">Read More</a>
             
            
        </div>
    </div>
</section>
    
    
<!--LEARNING SECTION-->
<div class="container learningbg">

    <div class="row">
        <h5 class= "text-center title"><?php the_field('sectionheader'); ?></h5>
        
      <div class="col-sm-6 text-center learningbg1 half">
          <div class="coachingbox">
          <img class="img-responsive Cicon" alt=“coachingicon” src="<?php the_field('displayimage'); ?>">
            <p><?php the_field('explanationtext'); ?> </p>
            <a href="<?php the_field('calltoactionbutton'); ?>" class="btn btn-primary">Coaching</a>
          </div>
        </div>
                
         <div class="col-sm-6 text-center learningbg2 half">
             <div class="coachingbox">
                <img class="img-responsive Ricon" alt=“Resourcesicon” src="<?php the_field('displayimage'); ?>">
                <p><?php the_field('explanationtext_copy'); ?> </p>
                <a href="<?php the_field('calltoactionbutton_copy'); ?>" class="btn btn-primary">Resources</a>
            </div>
        </div>
        
    </div>
</div>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>
