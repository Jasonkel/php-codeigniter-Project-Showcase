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
		
			<div class="main">
				<div class="usersWork">
					<img src="<?php echo $base . "ci/assets/student/".$studentID."/work/".$image ?>" height="auto" width="582" style=" margin-bottom: -2px;">
				</div>
               
               
                
				<div class="commentBox">
                    <div class="commentHeader">
				 <p>Comments</p>
                        </div>
                    <div id="disqus_thread"></div>
			<script>
			/**
			* RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
			* LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
			*/

			var disqus_config = function () {
			this.page.url = '<?php echo $controller_base."/clickIntoWork" ?>'; // Replace PAGE_URL with your page's canonical URL variable
			this.page.identifier = '<?php echo $base . "ci/assets/student/".$studentID; ?>'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
			};

			(function() { // DON'T EDIT BELOW THIS LINE
			var d = document, s = d.createElement('script');

			s.src = '//mm3team4.disqus.com/embed.js';

			s.setAttribute('data-timestamp', +new Date());
			(d.head || d.body).appendChild(s);
			})();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
					
				</div>
					
				
			
                 <div class="workDescription">
                     <div class="workDescriptionTitle">
                         <p><?php echo $title; ?></p>
                     </div>
                     <div class="workDescriptionDetails">
                     	<p><?php echo $firstName ?></p>
                     
                     </div>
                </div>
				<div Style="clear:both">
				</div>
                </div>
<?php
	$this->load->view('footer'); 
?>
