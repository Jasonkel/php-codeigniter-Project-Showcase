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
               
		<title>Edit Profile</title>
		
		
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
			
			<div class="mainEditProfile">
			<h1>Edit Profile</h1>
				
				<form class="signUp" enctype="multipart/form-data" action="<?php echo $controller_base.'/showcase/saveUpdatedProfile' ?>" method="POST"  />
				
					<div class="leftInput">
						<p>
						<input type="hidden" name="studentID" value="<?php echo $student['studentID']; ?> " /><br> 
							<label for="FirstName">Firstname</label><br>
							<input type="text" name="firstName" id="firstName" required="required" value="<?php echo $student['firstName'] ?>" />
						</p>
						<p>
							<label for="LastName">Lastname</label><br>
							<input type="text" name="lastName" id="lastName" required="required" value="<?php echo $student['lastName'] ?>"/>
						</p>
						<p>
							<label for="UserName">Knumber</label><br>
							<input type="text" name="userName" id="userName" required="required" value="<?php echo $student['userName'] ?>" />
						</p>
						<p>
							<label for="Email">Email</label><br>
							<input type="text" name="email" id="email" required="required" value="<?php echo $student['email'] ?>"/>
						</p>
						
						<p>
							<label for="Location">Location</label><br>
							<input type="text" name="location" id="location" required="required" value="<?php echo $student['location'] ?>"/>
						</p>
						<p>
							<label for="Course">Course</label><br>
							<select name="course">
							<option value="<?php echo $student['course'] ?>"><?php echo $student['course']?></option>
								<option disabled="true">...</option>
							  <option value="MM">Multimedia (MM)</option>
							  <option value="ISD">Networking (ISD)</option>
							  <option value="SW">Software (SW)</option>
							</select>
						</p>
						
					</div>
					<div class="editRightInput">
						<p><br>
							<label for="aboutYourself" >About Yourself</label><br>
							<textarea maxlength="200" type="text" name="about" id="about" value=""><?php echo $student['about'] ?></textarea>
							
						</p>
						<p>
							<label for="socialMediaLink">Social Media Link</label><br>
							<input type="text" name="socialMediaLink" id="socialMediaLink" value="<?php echo $student['socialMediaLink'] ?>" />
							
						</p>
						<p>
							<label for="Skill">Skills</label><br>
							<input type="text" name="skill" id="skill" value="<?php echo $student['skill'] ?>"/>
						</p>
						<p>
							<label for="Year">Year</label><br>
							<select name="year">
								<option value="<?php echo $student['year'] ?>"><?php echo 'Year '.$student['year']?></option>
								<option disabled="true">...</option>
								<option value="1">Year 1</option>
								<option value="2">Year 2</option>
								<option value="3">Year 3</option>
								<option value="4">Year 4</option>
							</select>
						</p>
						
						<input type="submit" name="button" id="button" value="Save" />
					</div>
				</form>
				<br>
				<a class="deleteAccount"  href="<?php echo $controller_base.'/showcase/deleteAccount/'.$student['studentID'] ?>" onclick="return confirmDelete();">Delete Account</a>
				
				<script type="text/javascript">
					function confirmDelete() {
						return confirm('Are you sure you want to delete this Account?');
					}
				</script>
			</div>
			<?php
	$this->load->view('footer'); 
?>
