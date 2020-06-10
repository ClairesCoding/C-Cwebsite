<!--FOOTER-->
<footer class="footer">
  <div class="container">
    <div class="col-md-6 text-left">
        <h6><?php the_field('header1'); ?></h6><br>
          <a href="<?php the_field('blogarticleslink'); ?>http://www.collabcollective.com.au/insight/blog/" class="active footerlinks">BLOG AND ARTICLES</a><br>
          <a href="<?php the_field('podcastslink'); ?>http://www.collabcollective.com.au/podcast-2/" class="active footerlinks">PODCASTS</a><br>
          <a href="<?php the_field('educationlink'); ?>http://www.collabcollective.com.au/home-page/learning/" class="active footerlinks">EDUCATION</a><br>
          <a href="<?php the_field('privacylink'); ?>http://www.collabcollective.com.au/privacy-policy/" class="active footerlinks">PRIVACY POLICY</a><br>
          <a href="<?php the_field('eventslink'); ?>http://www.collabcollective.com.au/home-page/events/" class="active footerlinks">EVENTS</a><br><br>

    </div>
    <div class="col-md-6 text-left">
        <h6><?php the_field('header2'); ?></h6>
    <p class="footer-right">
        <br>
     <a href="mailto:someone@example.com" class="active footerlinks">collabcollective@humanitashr.com.au</a><br>
        
        <p class="linkedinname"><a href="<?php the_field('director1'); ?>https://au.linkedin.com/in/biancastarcevich" class="active footerlinks"><img class="icons" alt="LinkedIn" src="http://www.collabcollective.com.au/wp-content/uploads/2020/06/linkedin.png"></a>Bianca Starcevich</p>
       
        <p class="linkedinname"><a href="<?php the_field('director2'); ?> https://au.linkedin.com/in/sue-pember-6b969b20?challengeId=AQGXJiWxWtCHJgAAAXKeOkOiIKuf1_SiYIDrsEGy2Xl6614nqcK4w-XUgNcWxMyRLmVXeK8db9fw-8Jbw90bK_xwbibEELRGIQ&submissionId=09bf146b-dc2e-1716-b5fb-abf96b1ba36a" class="active footerlinks"><img class="icons" alt="LinkedIn" src="http://www.collabcollective.com.au/wp-content/uploads/2020/06/linkedin.png"></a>Sue Pember</p><br>
        

        
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