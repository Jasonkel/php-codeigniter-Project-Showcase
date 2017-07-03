<?php 

$this->load->helper('url'); 

$base = base_url() .  "/"; 
$img_base = base_url();
$controller_base = base_url() . index_page();

?>
			<footer>
				<div class="socialMedia">
					<h3>Social Media</h3>
					<a href="https://twitter.com/limerickit">
						<img class="twitterLogo" src="<?php echo $base . "ci/assets/img/twitterLogo.png"?>" alt="Twitter Logo">
					</a>
					
					<a href="https://www.facebook.com/multimedia.lit/">
					<img class="faceBookLogo" src="<?php echo $base . "ci/assets/img/faceBookLogo.png"?>" alt="Facebook Logo">
					</a>
				</div>
				<div class="exploreMenu">
					<h3>Explore the Showcase</h3>
					<div class="footerMenu">
						<a href=" <?php echo $controller_base.'/showcase/galleryChoice/Design' ?> ">Design</a>
						<a href=" <?php echo $controller_base.'/showcase/galleryChoice/web' ?> ">Web</a>
						<a href=" <?php echo $controller_base.'/showcase/galleryChoice/video' ?> ">Video</a>
						<a href=" <?php echo $controller_base.'/showcase/galleryChoice/threeD' ?> ">3D</a>
					</div>
					<p>
						Copyright &copy Multimedia Year 3
					</p>
				</div>
				<div class="litAddress">
					<h3>LIT</h3>
					<p>
					Limerick Institute of Technology<br>
					Moylish Campus<br>
					Limerick</p>
					<a href="http://lit.ie/default.aspx/">
						<img class="litLogo" src="<?php echo $base . "ci/assets/img/litLogo.png"?>" alt="LIT Logo">
					</a>	
				</div>
			</footer>
		</div>
	</body>
</html>