<?php
    /*
    Template Name:Insight Template
    */
?>

<!--NEW SRC SERVER: http://www.collabcollective.com.au/wp-content/themes/C-Cwebsite/images/-->
<?php include (TEMPLATEPATH . '/small-header.php');  /* Tells WordPress to include the smaller header header.php */ ?>

<?php get_header(); /* Tells WordPress to include header.php */ ?>

<!--INSIGHT PAGE SECTION-->
<section class="container-fluid text-center aboutusbg">
    <div class="row about-container">
    <h5><?php the_field('insighttitle'); ?></h5>
        <div class="blocker2"></div>
        <p class="insight-small-title2"> <?php the_field('insightsmalltitle'); ?></p>
        <div class="row about-text">
        <p class="director-small"><?php the_field('insighttext'); ?></p>
        </div>
    </div>
</section>


<!--INSIGHT BUTTONS-->
 <section class="container fluid insight-buttons">
        <div class="col-sm-6 text-center connectorsbg">
            <div class="connectorsbox">
                <p class="insight-small-title2"><br>Tune in to our podcast and find out more information.<br><br></p>
        <a href="<?php the_field('calltoactionbutton'); ?>" class="btn btn-primary">Podcasts</a>
        </div>
        </div>
        
        <div class="col-sm-6 text-center connectorsbg">
        <div class="involvedbox">
            <p class="insight-small-title2">Read our blog for updated information and articles.<br><br></p>
        <a href="<?php the_field('calltoactionbutton'); ?>" class="btn btn-primary">Blog</a>
        </div>
        </div>
    </section>


    
<!--DIRECTORS SECTION--> 
<section class="container-fluid directorsbg1">
    <div>
  <div class="directors-text">
      <h4><?php the_field('directorsheader'); ?></h4>
    <p class="director-small1"><?php the_field('directorssmalltitle'); ?></p>
    </div>
        
        <div class="whitebox1">
            <div class="col-md-4">
            <img class="img-responsive" alt="director profile" src="<?php the_field('insightimage'); ?>">
            <div class="col-md-6">
        <p class="director-small2"><?php the_field('directortext'); ?></p>
                </div>
        </div>  
        
        <div class="whitebox2">
            <div class="col-md-4">
            <img class="img-responsive" alt="director profilr" src="<?php the_field('insightimage'); ?>"> 
                </div>
            <div class="col-md-6">
        <p class="director-small3"><?php the_field('directortext'); ?></p>
                </div>
        </div>      
            
        </div>
    </div>
        
</section> 
    
    
<?php get_footer(); ?>   