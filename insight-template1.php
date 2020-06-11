<?php
    /*
    Template Name:Insight Template_test
    */
?>

<!--NEW SRC SERVER: http://www.collabcollective.com.au/wp-content/themes/C-Cwebsite/images/-->
<?php include (TEMPLATEPATH . '/small-header.php');  /* Tells WordPress to include the smaller header header.php */ ?>


<!--INSIGHT PAGE SECTION-->
<section class="container-fluid text-center aboutusbg">
    <div class="row about-container">
    <h5><?php the_field('insighttitle'); ?></h5>
        <div class="blocker2"></div>
        <p class="insight-small-title2"><?php the_field('insighttagline'); ?>What does our company do?</p>
        <div class="row about-text">
        <p class="director-small"><?php the_field('insighttex'); ?> </p>
        </div>
    </div>
</section>


<!--INSIGHT BUTTONS-->
 <section class="container fluid insight-buttons">
        <div class="col-sm-6 text-center connectorsbg">
            <div class="connectorsbox">
                <p class="insight-small-title2"><br><?php the_field('category1'); ?><br><br></p>
        <a href="<?php the_field('calltoactionbutton'); ?>" class="btn btn-primary"></a>
        </div>
        </div>
        
        <div class="col-sm-6 text-center connectorsbg">
        <div class="involvedbox">
            <p class="insight-small-title2"><?php the_field('category2'); ?><br><br></p>
        <a href="<?php the_field('calltoactionbutton'); ?>" class="btn btn-primary"></a>
        </div>
        </div>
    </section>


    
<!--DIRECTORS SECTION--> 
<section class="container-fluid directorsbg1">
    <div class="container">
  <div class="directors-text">
      <h4><?php the_field('directorstitle'); ?></h4>
    <p class="director-small1"><?php the_field('directorstagline'); ?></p>
      <img class="img-responsive directorimage" alt="director image" src="<?php the_field('directorsimage'); ?>"> 
          
        </div>
<!--
    </div>
           <div class="whitebox1">
-->
        <div class="col-md-12" style="background-color: white;padding-top:20px;margin-left:auto;margin-right:auto;margin-bottom:10%;">

            <div class="col-md-6">
                <p class="insight-small-title2"><?php the_field('directorstitle1'); ?></p>
            <!--            <div class="col-md-6">-->
        <p class="director-small2">><?php the_field('explination1'); ?></p>
<!--                </div>-->
        </div>  
        
<!--        <div class="whitebox2a">-->
<!--               <div style="background-color: white;padding-top:20px;margin-left:auto;margin-right:auto;margin-bottom:10%;">-->
            <div class="col-md-6">
            <p class="insight-small-title2"><?php the_field('directorstitle2');?></p>
                
<!--            <div class="col-md-6">-->
        <p class="director-small3"><?php the_field('explination2'); ?></p>
<!--                </div>-->
        </div>      
            
        </div>
    </div>
        
</section> 
    
    
<?php get_footer(); ?>   