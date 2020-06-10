<!--FOOTER-->
<footer class="footer">
  <div class="container">
    <div class="col-md-6 text-left">
        <h6><?php bloginfo('title1'); ?>LINKS</h6><br>
          <a href="file:///C:/Users/tomas/Desktop/Website/C-Cwebsite/index.html" class="active footerlinks"><?php bloginfo('blogandarticles'); ?></a><br>
          <a href="#" class="active footerlinks"><?php bloginfo('podcast'); ?></a><br>
          <a href="#" class="active footerlinks"><?php bloginfo('education'); ?></a><br>
        <a href="#" class="active footerlinks"><?php bloginfo('privacypolicy'); ?></a><br>
          <a href="#" class="active footerlinks"><?php bloginfo('events'); ?></a><br><br>

    </div>
    <div class="col-md-6 text-left">
        <h6><?php bloginfo('title2'); ?></h6>
    <p class="footer-right">
        <br>
     <a href="collabcollective@humanitashr.com.au" class="active footerlinks"><?php bloginfo('email'); ?></a><br>
        <p class="linkedinname"><a href="<?php the_field('linkedin1'); ?>" class="active footerlinks"><img class="icons" alt="LinkedIn" src="<?php the_field('displayimage1'); ?>"></a><?php bloginfo('director1'); ?></p>
        
        <p class="linkedinname"><a href="<?php the_field('linkedin2'); ?>" class="active footerlinks"><img class="icons" alt="LinkedIn" src="<?php the_field('displayimage2'); ?>"></a><?php bloginfo('director2'); ?></p><br>
        

        
    </div>
  </div>
    <div class="col-md-6 text-left">
        <img class="footer-image" alt="logo" src="/images/logo.jpg">
    </div>
    <div class="col-md-6 text-center collapse navbar-collapse footer-small">
<a href="<?php the_field('homelink'); ?>" class="active"><?php bloginfo('home'); ?></a>
<a href="<?php the_field('getinvolvedlink'); ?>"><?php bloginfo('getinvolved'); ?></a>
<a href="<?php bloginfo('insightslink'); ?>"><?php bloginfo('insights'); ?></a>
<a href="<?php bloginfo('learninglink'); ?>"><?php bloginfo('learning'); ?></a>
<a href="<?php bloginfo('connectlink'); ?>"><?php bloginfo('connect'); ?></a>
        
    </div>

    
</footer>
<?php wp_footer(); ?>