<?php

$this->load->helper('url'); 
$img_base = base_url();
$base = base_url() .  "/"; 
$controller_base = base_url() . index_page();
$student = $this->session->userdata('student');

$home = $this->session->userdata('home');
$gallery = $this->session->userdata('gallery');
$about = $this->session->userdata('about');

?>
<link rel="shortcut icon" href= "<?php echo $base . "ci/assets/img/logo.png"?>" type="image/x-icon"/>
<div class="page">
			<header>
			
				<a href="<?php echo $controller_base.'/showcase' ?>">
					<img src="<?php echo $base . "ci/assets/img/logo.png"?>" alt="logo">
				</a>
				<h3>"A Showcase of Students' Talent in<br>Multimedia Programming & Design"</h3>
				<img class="textLogo" src="<?php echo $base . "ci/assets/img/typeLogo.png"?>" alt="LIT Multimedia Showcase">
			</header>
			<nav>
				<div class="menuHolder">
					<a class="<?php echo $home ?>" href="<?php echo $controller_base.'/showcase' ?>">Home</a>
					<a class="<?php echo $gallery ?>" href="<?php echo $controller_base.'/showcase/gallery' ?>">Gallery</a>
					<a class="<?php echo $about ?>" href="<?php echo $controller_base.'/showcase/about' ?>">About</a>
					
					<div class="menuLogin">
					<?php if($student){
								echo '<a href="'.$controller_base.'/showcase/profileUserView">'.$student['firstName'].'</a><a href="'.$controller_base.'/showcase/logOut">'.'Sign out</a>';
							}
							else{
								echo '<a href="'.$controller_base.'/showcase/register">Register</a><a href="'.$controller_base.'/showcase/loginPage">Login</a>';
							}
					
					
					?>
					
					</div>
				</div>
					
			</nav>