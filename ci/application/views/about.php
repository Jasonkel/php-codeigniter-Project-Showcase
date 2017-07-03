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
               
		<title>About Multimedia Showcase</title>
		
		<link href="<?php echo $base . "ci/assets/css/screen_layout_medium.css"?>" rel="stylesheet" type="text/css" media="only screen and (min-width:401px) and (max-width:2800px)" />
		<link rel="shortcut icon" href="img/logo.png" type="image/x-icon"/>
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		
		<!--[if lt IE 9]>
					<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	<body>
		<div class="page">
			
			<div class="mainAbout">
				<div class="programme">
				
				<div class="aboutHeaders"><h2> The Programme </h2></div>
				<div class="programmeContent">
				<p>
				Multimedia is a discipline that offers rewarding and challenging possibilities for a wide range of people.<br> 
				This programme requires and develops capabilities in solving deep, multidimensional problems through practical appreciation
				of design concepts, development techniques and technical skills. This programme aims to give students the knowledge 
				and skills in the design and programming of computer-based interactive products that incorporate text, graphics, sound,
				digital illustration, animation and video.
				</p>
				</div>
				</div>
				
				<div class="job">
					<div class="jobHeader"><h2> Job Opportunities </h2></div>
					<div class="jobContent"><p>
						• Interactive Designer<br>• Web Developer<br>• Java Developer<br>• Multimedia Developer<br>
						• Multimedia Programmer<br>• App Developer<br>• Digital Video Specialist<br>
						• Motion Graphic Designer<br>• Database Developer<br>• User Interface Designer<br>
						• Designer<br>• eLearing Specialist<br>• Software Support Engineer<br>• Multimedia Concept Specialist<br>				
						</p>
					</div>
					<div class="jobHeader"><h2> Years </h2></div>
					<div class="jobContent"><p>
						Year 1: 25 hours per week<br> 
						Year 2: 25 hours per week<br> 
						Year 3: 22 hours per week<br>
						<span style="padding-left:3.3em">6 months work placement<br>
						Year 4: 17 hours per week<br> 
						</p>
					</div>
				</div>
				
				<div class="contactA">
				<div class="aboutHeaders"><h2> Contact </h2></div>
				<div class="aboutContentHeaders">
				<span style="padding-left:12px">Course Contact<span style="padding-left:220px">School Contact
				</div>
				<div class="aboutContent">
				<span style="padding-left:12px">Elizabeth Bourke, Programme Leader<span style="padding-left:80px">Email: aset@lit.ie<br>
				<span style="padding-left:12px">Email: elizabeth.bourke@lit.ie<span style="padding-left:138px">Telephone; 061 293000<br>
				<span style="padding-left:12px">Telephone; 061 293330<span style="padding-left:185px">Fax: 061 293001
				</div>
				</div>
				
				<div class="message">
				<div id="contact-form" class="clearfix">
				<h1>Send A Message</h1>	
			<!--			<form method="post" action="<?php echo $controller_base.'/showcase/sendEmail'?>"> -->
			
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" value="" required="required"  />
				 
				<label for="name">Subject:</label>
				<input type="text" id="email" name="name" value="" required="required"/>
				
				<label for="message">Message:</label>
				<textarea id="email" name="message" value="" style="border:2px inset white; margin-bottom:7px"></textarea>
				
<!--				<input type="submit" value="Send" id="submit-button"/> -->
				<div class="sendEmail">
					Send Mail
				</div>
			</form>
				
				</div>
				</div>
				
				<div class="studentSay">
				<div class="jobHeader"><h2> Student Say </h2></div>
				<div class="studentSayImage"></div>
				<div class="studentSayContent"><p>My life changed during my studies at Limerick Institute of Technology. Multimedia first started as an interest that gradually became a passion.
				Workshops, targeted projects and the friendly environment motivated me to study hard. When we started to combine the different tools and principles. 
				I realized that Multimedia was going to be my passion for life.
				</p>
				</div>
				</div>
				
				
			</div>
			<?php
	$this->load->view('footer'); 
?>
			
			
