<?php require_once "header.php"; ?>
	<!-- end of header -->
		
	<div id="top-video">	

		<div class="container-fluid" id="home-video">
			<video autoplay muted loop>			
				<source src="http://www.carbon.tv/wp-content/uploads/2015/11/HomePage_Edit_Oct14_compressed.mp4" type="video/mp4">
			</video>
		</div>
		
		<span id="tagline">A work</br>in <span>motion</span>.</span>
	
		<div id="down-arrow">
			<a href="#"><span class="glyphicon glyphicon-menu-down"></span></a>
		</div>		
	</div>
	
	<!-- beginning of who we are-->
	<?php require_once "about-us.php"; ?>

	<!-- beginning of projects -->
	<?php require_once "projects.php"; ?>
	
	<!-- beginning of our clients -->
	<?php require_once "clients.php"; ?>
	
	<!-- beginning of where we live (contact us) -->
	<?php require_once "contact-us.php"; ?>

	<!-- beginning of "to be" (careers) -->
	<?php require_once "careers.php"; ?>
	
	<!-- beginning of footer -->
	<?php require_once "footer.php"; ?>