<!DOCTYPE html>
<html lang="en">
<head>
    
<meta charset="<?php bloginfo('charset'); ?>">
    
  <title><?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
?>
</title>

<meta name="description" content="<?php bloginfo('description'); ?>">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
    
  <meta charset="utf-8">
    
<!—Viewport responsive  -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">

 

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    

<link rel="stylesheet" href="responsive.css"/>
    
<!—Google fonts  -->   
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,600;0,700;0,800;1,700&display=swap" rel="stylesheet">
<?php wp_head(); ?> <!—very important that this is added-->
</head>
    
<body>
    

    
<nav class="navbar">
     <div>
        <div class="navbar-header image-float">   
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('logo') ) : endif; ?>
        </div>
    </div>
    <div class="nav-colour">
        <div class="save-space">
<?php wp_nav_menu( array( 'theme_location' => 'max_mega_menu_1' ) ); ?>
        </div>
 </div>
</nav>

    
    
    
    <header class="container-fluid herobg"<?php if ( get_field(' headerbackgroundimage ') ) { echo 'style="background: url(' . get_field(' headerbackgroundimage ') . ')"'; } ?>>
    <div class="row">
  <div class=" text-center header-text">
    <h1><?php the_field('tagline1'); ?></h1>
      <h2><b><?php the_field('tagline2'); ?></b></h2>
    <p class="subhead"><?php the_field('tagline3'); ?></p>
    <a href="<?php the_field('herocta'); ?>" class="btn btn-primary3">Find out more</a>
    </div>
    
        <div class="col-sm-6 text-center connectorsbg">
            <div class="connectorsbox">
        <h3 class="white-text"><?php the_field('categorytitle'); ?></h3>
        <p class="white-text"><?php the_field('categorytext'); ?></p>
            <a href="<?php the_field('categorycta'); ?>" class="btn btn-primary">Learn more</a>
        </div>
        </div>        

            
        <div class="col-sm-6 text-center connectorsbg">
            <div class="involvedbox">
        <h3 class="white-text"><?php the_field('categorytitle_copy'); ?></h3>
            <p class="white-text"><?php the_field('categorytext_copy'); ?></p>
            <a href="<?php the_field('categorycta_copy'); ?>" class="btn btn-primary">Learn more</a>
        </div>
    </div>
    </div>
        
    </header>