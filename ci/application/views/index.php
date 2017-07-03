<!doctype html>
<?php

$this->load->view('header'); 
$this->load->helper('url'); 
$img_base = base_url();
$base = base_url(); 
$controller_base = base_url() . index_page();

$home = $this->session->set_userdata('home','home');
$gallery = $this->session->unset_userdata('gallery');
$about = $this->session->unset_userdata('about');
?>
<html>
	<head>
	
		<meta charset="utf-8">
               
		<title>Multimedia Showcase</title>
		
		
		<link href="<?php echo $base . "ci/assets/css/screen_layout_medium.css"?>" rel="stylesheet" type="text/css" media="only screen and (min-width:401px) and (max-width:2800px)" />
		
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans" />
		
		<!--[if lt IE 9]>
					<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		
	</head>
	
	<body>
		
			<div class="mainHome">
				<div class="welcome">
					<h2>Welcome to Multimedia Programming<br>
						& Design at LIT</h2>
						
						<p>Multimedia Programming is a field that is growing
							so fast it is almost impossible to predict what will
							happen next...</p>
							
							<a class="readMore" href="<?php echo $controller_base.'/showcase/about' ?>">
								<h2>Read more</h2>
							</a>
				
				</div>
				<div class="student_work">
				<p><a href="<?php echo $controller_base.'/showcase/viewWork/'.$studentID.'/'.$title.'/'.$image.'/'.$firstName?>"><?php echo $title?> </a> 
				 |<a href="<?php echo $controller_base.'/showcase/userProfile/'.$studentID.'/'.$firstName ?>"><?php echo $firstName.' '.$lastName?></a> 
				 <?php echo $course." ".$year ?></p>
				
				<style>
					.student_work{
						background-image: url("<?php echo $base . "ci/assets/student/".$studentID."/work/".$image ?> ");
					}
				</style>
					
				</div>
				<a href="http://penandpixel.ie/" class="news">
					
				</a>
				<a href="https://smartertravel.limerick.ie/" class="event">
				
				</a>
				<div class="contactH">
				<h1>Got a question?</h1>
					<a class="contactButton" href="<?php echo $controller_base.'/showcase/about' ?>">
						<h2>Contact Us</h2>
					</a>
				</div>
				<div class="createAccount" >
				<h1>Already a student?</h1>
					<a class="createButton" href=" <?php echo $controller_base.'/showcase/register'?>">
						<h2>Create account</h2>
					</a>
				</div>
				
			</div>
			<div style="clear:both"></div>
<?php
	$this->load->view('footer'); 
?>
