<?php 
require_once "functions.php"; 
require_once "vdo-array.php"; 
?>
<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="<?php echo $dirPath; ?>css/style.css" />
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Ranga" rel="stylesheet">
<title>CARBON || Motion Graphics | Video Production | Animation</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta charset="utf-8">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="shortcut icon" href="<?php echo $imgPath; ?>favicon.ico" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
function redirect() {
    setTimeout(function(){ window.location.replace("index.php"); }, 1000);
}
$(document).ready(function(){
	$(".navbar-fixed-top, .navbar-right").css("top", "-500px").animate({top: "0"}, {duration: 1000});	
	
	$(".navbar-header").click(function(){
		$(".navbar-fixed-top").animate({top: "-500px"}, {duration: 3000, complete: redirect()});
	})
	
	$('#back-top').css("display", "none");

	$(window).scroll(function () {
		if ($(this).scrollTop() > 300) {
             $('#back-top').fadeIn();
        } else {
             $('#back-top').fadeOut();
           }
       });
       $('#back-top').click(function () {
           $("html, body").animate({
               scrollTop: 0
           }, 600);
           return false;
       });
		
       $('#down-arrow').click(function () {
           $("html, body").animate({
               scrollTop: $('#who-we-are').offset().top
           }, 600);
           return false;
       });
	   
		if (window.innerWidth < 768) {
			$(".navbar-fixed-top, .navbar-header").css("position", "absolute");
			$(".navbar-right").css("position", "absolute");	

		}
		
		$('.navbar-right').click(function(){
			$("#menu-btn").toggleClass("closePage");
			if($('#menu-btn').hasClass('closePage')){
				$("#dropDownPage").slideDown();
				$(".navbar-fixed-top, .navbar-header").css("position", "fixed");
			} else {
				$('#dropDownPage').slideUp();
			}
		})
});	

</script>
</head>
<body>

	<nav class="nav navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<span><a href="<?php echo $dirPath; ?>index.php" class="navbar-brand">C</a></span>
			</div>
		<div class="nav navbar-nav navbar-right">
			<span id="menu-btn"></span>
			</div>		
	</nav>
	
	<!-- beginning of drop down page-->
	<div id="dropDownPage">
	
		<div id="menu-inner">
			<nav>
				<ul>
					<li><a href="<?php echo $dirPath; ?>about-us.php">we</a></li>
					<li><a href="<?php echo $dirPath; ?>projects.php">show</a></li>
					<li><a href="<?php echo $dirPath; ?>clients.php">them</a></li>
					<li><a href="<?php echo $dirPath; ?>contact-us.php">where</a></li>
					<li><a href="<?php echo $dirPath; ?>careers.php">to be</a></li>
				</ul>
			</nav>
		</div>

		<div id='social-links'>
			<ul>
				<li><a href="#"><img src="<?php echo $imgPath; ?>facebook.png"></img></a></li>
				<li><a href="#"><img src="<?php echo $imgPath; ?>vimeo.png"></img></a></li>
				<li><a href="#"><img src="<?php echo $imgPath; ?>behance.png"></img></a></li>
				<li><a href="#"><img src="<?php echo $imgPath; ?>instagram.png"></img></a></li>
			</ul>
		</div>
	</div>