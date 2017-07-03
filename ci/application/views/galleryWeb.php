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
	<body>
		
			
			<div class="galleryMain">
				<div class="breadCrumbs">
					<a href="<?php echo $controller_base.'/showcase/gallery' ?>">Gallery </a>-<a href=""> <?php echo $AllWork[0]['category']; ?></a>
				</div>
				
				<div class="filterMenu">
					<h2>Filter By</h2>
					<a href="?mm1=mm1" name="mm1">Multimedia 1</a>
					<a href="?mm2=mm2" name="mm1">Multimedia 2</a>
					<a href="?mm3=3" name="mm1">Multimedia 3</a>
					<a href="?mm4=4" name="mm1">Multimedia 4</a>
				</div>
				
				<div class="workContainer">
						
						<?php
					if(isset($AllWork) && $AllWork != null ){
						
						foreach ($AllWork as $work){
			
						?>
							<div class="studentWork" style="background-image: url(<?php echo $base . "ci/assets/student/".$work['studentID']."/work/".$work['image'] ?>);
															background-size: 350px auto;
															background-position: -30px -30px;">
							
								<div class="caption">
								
										<a href="<?php echo $controller_base.'/showcase/userProfile/'.$work['studentID'].'/'.$AllWork[0]['category']?>"><?php echo $work['firstName'].' '.$work['lastName']?></a>
										<hr>
										<a href="<?php echo $controller_base.'/showcase/viewWork/'.$work['studentID'].'/'.$work['title'].'/'.$work['image'].'/'.$work['firstName']?>"><?php echo $work['title']?> </a> 
										<?php// echo $work['like']?>
										<!--<a class="like" style="	background-image: url( <?php echo $base . "ci/assets/img/like.png"?> );
																						background-size: 50px auto;
																						background-position: -0px 0px;
																						width: 23px;
																						height: 21px;
																						">
																						
										</a>-->
									
								</div>
												
							</div>
						<?php }
					}else{echo '<h1> Add Some Work</h1>';
						 }?>
				<?php echo $this->pagination->create_links();?>
				</div>
						
				
			</div>
<?php
	
	$this->load->view('footer'); 
?>
