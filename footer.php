<!--FOOTER-->
<footer class="footer">
  <div class="container">
    <div class="col-md-6 text-left">
        <h6><?php the_field('header1'); ?></h6><br>
          <a href="#" class="active footerlinks">BLOG AND ARTICLES</a><br>
          <a href="#" class="active footerlinks">PODCAST</a><br>
          <a href="#" class="active footerlinks">EDUCATION</a><br>
          <a href="#" class="active footerlinks">PRIVACY POLICY</a><br>
          <a href="#" class="active footerlinks">EVENTS</a><br><br>

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