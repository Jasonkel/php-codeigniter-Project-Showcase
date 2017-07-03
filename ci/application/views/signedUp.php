<!doctype html>
<?php
 
$this->load->view('header'); 
$this->load->helper('url'); 

$img_base = base_url();
$base = base_url() .  "/"; 
$controller_base = base_url() . index_page();
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
		<div class="page">
			
			<div class="main">
				
				<h1>Account created</hi>
				
			</div>
			<?php
	$this->load->view('footer'); 
?>
