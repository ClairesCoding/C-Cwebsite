<!--FOOTER-->
<footer class="footer">
  <div class="container">
    <div class="col-md-6 text-left">
        <h6><?php the_field('header1'); ?></h6><br>
          <a href="#" class="active footerlinks"><?php the_field('blogarticleslink'); ?></a><br>
          <a href="#" class="active footerlinks"><?php the_field('podcastslink'); ?>PODCAST</a><br>
          <a href="#" class="active footerlinks"><?php the_field('educationlink'); ?></a><br>
          <a href="#" class="active footerlinks"><?php the_field('privacylink'); ?></a><br>
          <a href="#" class="active footerlinks"><?php the_field('eventslink'); ?>EVENTS</a><br><br>

    </div>
    <div class="col-md-6 text-left">
        <h6><?php the_field('header2'); ?></h6>
    <p class="footer-right">
        <br>
     <a href="mailto:someone@example.com" class="active footerlinks">collabcollective@humanitashr.com.au</a><br>
        <p class="linkedinname"><a href="https://au.linkedin.com/in/biancastarcevich" class="active footerlinks"><img class="icons" alt="LinkedIn" src="images/linkedin.png"></a><?php the_field('director1'); ?></p>
        <p class="linkedinname"><a href="https://au.linkedin.com/in/sue-pember-6b969b20" class="active footerlinks"><img class="icons" alt="LinkedIn" src="images/linkedin.png"></a><?php the_field('director2'); ?></p><br>
        

        
    </div>
  </div>
    <div class="col-md-6 text-left">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('logo') ) : endif; ?>
    </div>
    <div class="col-md-6 text-center collapse navbar-collapse footer-small">
<a href="#home" class="active">Home</a>
<a href="#">Get Involved</a>
<a href="#">Insights</a>
<a href="#">Learning</a>
<a href="#">Connect</a>
        
    </div>

    
</footer>

<?php wp_footer(); ?>