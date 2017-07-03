<!doctype html>
<?php
 
$this->load->view('header');
$this->load->helper('url'); 

$img_base = base_url();
$base = base_url() .  "/"; 
$controller_base = base_url() . index_page();

$home = $this->session->unset_userdata('home');
$gallery = $this->session->set_userdata('gallery','home');
$about = $this->session->unset_userdata('about');
?>
<html>
	<head>
	
		<meta charset="utf-8">
               
		<title>Multimedia Showcase</title>
		
		<link href="<?php echo $base . "ci/assets/css/screen_layout_medium.css"?>" rel="stylesheet" type="text/css" media="only screen and (min-width:401px) and (max-width:2800px)" />
		<link rel="shortcut icon" href="img/logo.png" type="image/x-icon"/>
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans" />
		
		<!--[if lt IE 9]>
					<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	<body>
		<div class="page">
			
			<div class="mainGallery">
				
				<div class="galleryMenu">
					
					<a href="<?php echo $controller_base.'/showcase/galleryChoice/web' ?>" class="web">
					</a>
					
					<a href="<?php echo $controller_base.'/showcase/galleryChoice/video' ?>" class="video">
						
					</a>
					
					<a href="<?php echo $controller_base.'/showcase/galleryChoice/threeD' ?>" class="threeD">
						
					</a>
					
					<a href="<?php echo $controller_base.'/showcase/galleryChoice/design' ?>" class="design">
						
					</a>
				
				</div>
			</div>
			<?php

	$this->load->view('footer'); 
?>

