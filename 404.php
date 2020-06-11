<?php include (TEMPLATEPATH . '/small-header.php');  /*
    Template Name:404-template
    Tells WordPress to include the smaller header header.php */ ?>

<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Not Found', 'twentythirteen' ); ?></h1>
			</header>

			<div class="page-wrapper row">
				
                <div class="col-md-3"></div>
                
                <div class="col-md-6 page-content">
					<h4><?php _e( 'Oops something went missing on our end', 'twentythirteen' ); ?></h4>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentythirteen' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
                <div class="col-md-3"></div><b></b><br>
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); /* Tells WordPress to include footer.php */ ?>