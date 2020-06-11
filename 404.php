<?php include (TEMPLATEPATH . '/small-header.php');  /*
    Template Name:404-template
    Tells WordPress to include the smaller header header.php */ ?>

<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
			</header>

			<div class="page-wrapper row">
				
                <div class="col-md-3"></div>
                
                <div class="col-md-6 page-content searchsubmit searchform">
					<h4><?php _e( 'Oops something went missing on our end', 'twentythirteen' ); ?></h4>
					<p><?php _e( 'It looks like nothing was found at this location. <br>We suggest going back to the home page.', 'twentythirteen' ); ?></p>
                    <a href="http://www.collabcollective.com.au/" class="btn btn-default">Home Page</a>
				</div><!-- .page-content -->
                <div class="col-md-3 screen-reader-text">
                    </div>
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); /* Tells WordPress to include footer.php */ ?>