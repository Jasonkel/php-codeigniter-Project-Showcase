<!doctype html>
<?php

$this->load->view('header'); 
$this->load->helper('url'); 
$img_base = base_url();
$base = base_url() .  "/"; 
$controller_base = base_url() . index_page();
$student = $this->session->userdata('student');
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
		
		
	</head>
	
	<body>
		
			<div class="main">
				<div class="insideUploadMain">
					
				 	<form enctype="multipart/form-data" action="<?php echo $controller_base.'/showcase/uploadWork' ?>" method="POST">
                        
						<br>
                        <h2>Title</h2>
                        <input type="text" name="title" >
                        <br>
                        <h2>Description</h2>
                        <textarea maxlength="200" type="text" name="description" id="description"></textarea>
                        <br>
                        <h2>Category</h2>
						<select name="category">
							  <option value="web">Web</option>
							  <option value="video">Video</option>
							  <option value="design">Design</option>
							  <option value="threeD">3D</option>
							</select>
						<h2>Upload File</h2>
						<input name="userfile" id="userfileUpload" type="file" size="5000" />
                        <input type="submit" name="submitUploadButton"/>
                    </form>
					
				</div>
				
				
			</div>
<?php
	$this->load->view('footer'); 
?>
