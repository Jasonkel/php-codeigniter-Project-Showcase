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
               
		<title>Register</title>
		
		
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
			
			<div class="registerMain">
			
				
				<form class="signUp" enctype="multipart/form-data" action="<?php echo $controller_base.'/showcase/signUp' ?>" method="POST"  />
					<div class="leftInput">
						<p>
							<label for="FirstName">Firstname</label><br>
							<input type="text" name="firstName" id="firstName" required="required" />
						</p>
						<p>
							<label for="LastName">Lastname</label><br>
							<input type="text" name="lastName" id="lastName" required="required" />
						</p>
						<p>
							<label for="UserName">Knumber</label><br>
							<input type="text" name="userName" id="userName" required="required" />
						</p>
						<p>
							<label for="Email">Email</label><br>
							<input type="text" name="email" id="email" required="required" />
						</p>
						<p>
							<label for="Password">Password</label><br>
							<input type="text" name="password" id="password" required="required" />
						</p>
						<p>
							<label for="Location">Location</label><br>
							<input type="text" name="location" id="location" required="required" />
						</p>
						<p>
							<label for="Course">Course</label><br>
							<select name="course">
							  <option value="MM">Multimedia</option>
							  <option value="ISD">Networking</option>
							  <option value="SW">Software</option>
							</select>
						</p>
						
					</div>
					<div class="rightInput">
						<p>
							<label for="AboutYourself">About Yourself</label><br>
							<textarea maxlength="200" type="text" name="about" id="about"></textarea>
						</p>
						<p>
							<label for="socialMediaLink">Social Media Link</label><br>
							<input type="text" name="socialMediaLink" id="socialMediaLink" />
						</p>
						<p>
							<label for="Skill">Skills</label><br>
							<input type="text" name="skill" id="skill" />
						</p>
						<p>
							<label for="Year">Year</label><br>
							<select name="year">
							  <option value="1">Year 1</option>
							  <option value="2">Year 2</option>
							  <option value="3">Year 3</option>
							  <option value="4">Year 4</option>
							</select>
						</p>
						<p>
							<label for="Photo">Profile Photo</label><br>
							<input name="userfile" id="userfile" type="file" size="5000" />
							
						</p>
						<input type="submit" name="button" id="button" value="Sign Up" />
					</div>
				</form>
				
			</div>
			<?php
	$this->load->view('footer'); 
?>
