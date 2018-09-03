<?php

$path = $_SERVER['REQUEST_URI'];
if (preg_match("/categories|work/", $path) == 1){
	$dirPath = "../";
	$imgPath = "../images/";
} elseif (preg_match("/(about-us|clients|contact-us|careers|projects)/", $path) == 1){
	$dirPath = "";
	$imgPath = "images/";	
} else {
	$dirPath = "";
	$imgPath = "images/";
}


function output($projectName){
	global $dirpath, $imgPath, $productions;
	
	$productionPageCodes = <<<HEREDOC
	
	<div class="production-vdo">
		<iframe src='{$productions[$projectName]['vdo-path']}' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
	</div>

	<div class="vdo-description text-center">
		<h1>{$productions[$projectName]['vdo-title']}</h1>
		<h2>{$productions[$projectName]['vdo-subtitle']}</h2>
		<p class="text-left">{$productions[$projectName]['vdo-description']}</p>
	</div>
	
	<div class="sub-vdo">
		<div class="container-fluid">
			<div class="rows">
				<div class="col-sm-6 col-xs-12">
					<iframe src='{$productions[$projectName]['sub-vdo-1']}' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				</div>
				<div class="col-sm-6 col-xs-12">
					<iframe src='{$productions[$projectName]['sub-vdo-2']}' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="vdo-screenshots">
		<div class="container-fluid">
			<div class="rows">
				<div class="col-sm-6 col-xs-12">
					<img src="{$productions[$projectName]['vdo-screenshots'][0]}" class="img-responsive"></img>
				</div>
				<div class="col-sm-6 col-xs-12">
					<img src="{$productions[$projectName]['vdo-screenshots'][1]}" class="img-responsive"></img>
				</div>
				<div class="col-sm-6 col-xs-12">
					<img src="{$productions[$projectName]['vdo-screenshots'][2]}" class="img-responsive"></img>
				</div>
				<div class="col-sm-6 col-xs-12">
					<img src="{$productions[$projectName]['vdo-screenshots'][3]}" class="img-responsive"></img>
				</div>
			</div>
		</div>
	</div>
	
	<footer>
		<div class="container-fluid text-center">
		
			<div class="rows client-name">
				<div class="col-xs-12">
					<p>{$productions[$projectName]['client-name']}</p>
				</div>
			</div>
			
			<div class="rows site-links">
				<div class="col-sm-4 col-xs-12">
					<p><a href="../categories/branding.php">Branding</a></p>
					<p><a href="../categories/storytelling.php">storytelling</a></p>
				</div>
				<div class="col-sm-4 col-xs-12">
					<p><a href="../categories/motion.php">motion</a></p>
					<p><a href="../categories/footprint.php">footprint</a></p>
				</div>
				<div class="col-sm-4 col-xs-12">
					<p><a href="../categories/live-action.php">Live Action</a></p>
				</div>
			</div>
			
			<div class="rows footer-social-links">
				<div class="col-xs-12">
					<p>SHARE ON</p>
					<div>
						<a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
HEREDOC;

	if ($productions[$projectName]['sub-vdo-1'] == "") {
		echo "<script>
			$(document).ready(function(){				
				$('.sub-vdo').remove();
			})
		</script>";
	}


	if ($productions[$projectName]['vdo-screenshots'][0] == "") {
		echo "<script>
			$(document).ready(function(){				
				$('.vdo-screenshots').remove();
			})
		</script>";
	}

	echo $productionPageCodes;
}

function generateCat(){
	
	global $imgPath, $dirPath, $productions, $categoriesPage;	
	
	foreach ( $categoriesPage[basename($_SERVER["REQUEST_URI"], ".php")] as $value) {

	$cat_page = <<<HEREDOC
				<div class="col-sm-3 col-xs-12 cat-vdo-wrapper">
				<img class="img-responsive" src="{$productions[$value]['cat-img']}"></img>
				<a href="{$dirPath}work/{$value}.php">
					<div class="vdo-hover-text">				
						<div class="vdo-hover-text-inner text-center">
							<h4>{$productions[$value]['vdo-title']}</h4>
							<h5>{$productions[$value]['cat-tagline']}</h5>
						</div>
					</div>	
				</a>
			</div>
HEREDOC;

	echo $cat_page;
	}
}

function vh100 () {
if ( basename($_SERVER["REQUEST_URI"], ".php") == "careers" or basename($_SERVER["REQUEST_URI"], ".php") == "contact-us"){
	$var = <<<EOD
	<script>
		$(document).ready(function(){
			$("#to-be").css("height", "100vh");
			$("#where-we-live").css("height", "100vh");
		})
	</script>
EOD;
echo $var;
} else {
$var = <<<EOD
<scirpt>
$(document).ready(function(){
			$("#to-be").css("height", "auto");
			$("#where-we-live").css("height", "auto");
})
</script>
EOD;
}
};

?>