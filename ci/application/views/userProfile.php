<!doctype html>
<?php

$this->load->view('header'); 
$this->load->helper('url'); 
$img_base = base_url();
$base = base_url() .  "/"; 
$controller_base = base_url() . index_page();
$category = $this->session->userdata('category');
$student = $this->session->userdata('studentUser');

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
			<div class="mainAbout">
		
			<div class="textTopLeft">
			<div class="breadCrumbs">
					<a href="<?php echo $controller_base.'/showcase/gallery' ?>">Gallery </a>-<a href=""> <?php echo $category; ?></a>
				</div>
			</div>
	
			
				<div class="studentGallery">
					<?php
					
					foreach ($AllWork as $work){
						
					?>
						<div class="studentWork" style="background-image: url(<?php echo $base . "ci/assets/student/".$work['studentID']."/work/".$work['image'] ?>);
														background-size: 350px auto;
															background-position: -30px -30px;">
						
							<div class="caption">	
								<a href="<?php echo $controller_base.'/showcase/viewWork/'.$work['studentID'].'/'.$work['title'].'/'.$work['image'].'/'.$work['firstName']?>"><?php echo $work['title']?> </a>  
								
								<?php //echo $work['like']?>
								<!--<a class="like" style="	background-image: url( <?php echo $base . "ci/assets/img/like.png"?> );
																				background-size: 50px auto;
																				background-position: -0px 0px;
																				width: 23px;
																				height: 21px;
																				">
																				
								</a>-->
							</div>
											
						</div>
					<?php } ?>
					
					<?php echo $this->pagination->create_links();?>

				</div>
				
				<div class="studentPic">
					<div class="profilePic" style="	background-image: url(<?php echo $base . "ci/assets/student/".$student['studentID']."/".$student['profileImg']?>);
													background-size: 200px auto;
													background-position: -10px -10px; " > </div>
													
					<div class="studentPicHeader"><?php echo $student['firstName'].' '.$student['lastName']?></div>
					<div class="studentPicText"> <?php echo $student['location'].' - '.$student['socialMediaLink'].' year '.$student['year']?>
					</div>
				</div>
				
				<div class="studentAbout">
				<div class="aboutHeader">About</div>
				<div class="aboutText"><?php echo $student['about']?>
				</div>
				</div>
				
				<div class="studentSoftware">
				<div class="softwareHeader">Skills</div>
				<div class="softwareText"> <?php echo $student['skill']?>
				</div>
				</div>
				
				</div>
				
			</div>
<?php
	$this->load->view('footer'); 
?>
