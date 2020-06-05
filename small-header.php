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
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,600;0,700;0,800;1,700&display=swap" rel="stylesheet"> <?php wp_head(); ?> <!—very important that this is added-->
</head>
    
<body>
    

    
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
        <img class="logo" alt="logo" src="http://www.collabcollective.com.au/wp-content/themes/C-Cwebsite/images/logo.jpg">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li class="active"></li>
      <li><a href="#">Partners</a></li>
      <li><a href="#">Get Involved</a></li>
      <li><a href="#">Learning</a></li>
      <li><a href="#">Insights</a></li>
      <li><a href="#">Connect</a></li>
    </ul>
  </div>
    </div>
</nav>
    
    
    
<header class="container-fluid small-herobg">
        <div class="container-fluid">
        </div>
</header>