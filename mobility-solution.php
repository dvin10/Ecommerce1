<!DOCTYPE html>
<html lang="en-us">
<head>

	<meta charset="utf-8" >
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Cache-control" content="public">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Mobility Solution: Amplify Mindware</title>

	<!-- Change the author and description -->
	<meta name="author" content="Amplify Mindware">
	<meta name="description" content="Amplify Mindware Academy For Development of Education & Research (AMADER) is group of institutions formed from the long felt need for providing skilled & competent professional human capital for the emerging national economy.">
	<meta name="keywords" content="Amplify Mindware, Mobility Solution, Mobility, Corporate Training, Fresher Learning Program, Campus To Corporate, Lateral Skill Enhancement, PTPS Professionals, Outbound Trainings, Delivery Methodology ">
	
	<!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="ROBUST AND CUSTOMIZED MOBILE SOLUTIONS">
    <meta property="og:image" content="http://amplifymind.com/images/AmplifyLogo.png">
    <meta property="og:url" content="http://amplifymind.com/mobility-solution.php">
    <meta property="og:site_name" content="Amplify Mindware">
    <meta property="og:description" content="Amplify’s mobility services include: Consulting & advisory, application development & designing enterprise mobile solutions. Our mobility experts have experience of working in various industry domains in addition to bringing in integration capabilities for IOT platforms.">
    
    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="Amplify Mindware">
    <meta name="twitter:title" content="ROBUST AND CUSTOMIZED MOBILE SOLUTIONS">
    <meta name="twitter:description" content="Amplify’s mobility services include: Consulting & advisory, application development & designing enterprise mobile solutions. Our mobility experts have experience of working in various industry domains in addition to bringing in integration capabilities for IOT platforms.">
    <meta name="twitter:image" content="http://amplifymind.com/images/AmplifyLogo.png">

  	<?php $index=1;include("includes/common-css.php"); ?>
	 
	
</head>
<body class="flex-full-height header-top">
<?php $index=1;include("includes/body-top.php"); ?>

<!-- Global Wrapper -->
<div id="wrapper">

	<!-- Header -->
	<?php //include("includes/menu-e-com-home-inc.php"); ?>
	 <!-- END Header -->
	 <?php
		if($index==1)
			$pathSt="";
		else
			$pathSt="../";
	?>
 
	<header class="header-wrapper">
		<!-- Main-Header -->
		<?php include("includes/header.php"); ?>
		 <!-- END Main-Header -->
	</header>
	
	 
	 
	<div id="a"></div>
	
	<!-- Slider - flexslider -->
	<?php //include("includes/slider-e-com-inc.php"); ?>	
	 <!-- END Slider wrapper -->
	
	<section class="mb30">
		<div class="parallax" style="background-image: url('images/slider-e-com/slider-img-mobility.jpg');padding:7% 5%;min-height: 750px;">
			<div class="container bottom-align transparent-bg">
				<div class="row text-center">
					<h2 class="color-white flex-title">Robust and Customized Mobile Solutions </h2>
				</div>
			</div>
		</div>
	</section>
	
	<section class="mb30 section-2">
		<div class="container">
			<div class="row text-center">
				<p> Amplify’s mobility services include: Consulting & advisory, application development & designing enterprise mobile solutions. Our mobility experts have experience of working in various industry domains in addition to bringing in integration capabilities for IOT platforms. </p>
				<p> Our dedicated Mobility Practice brings end to end mobile solutions capability for industries including Telecom, Retail, Manufacturing, Automobile & Enterprises into B2B transactions.  </p>
				<p><a href="#" class="enqPop btn btn-info btn-lg" style="border-radius: 40px;">Speak to our Mobility expert  </a></p>
			</div>
			
		</div>
	</section>
	
	<section class="section-gray section-3">
		<div class="container">
			<div class="row 11text-center">
				<h4> Mobile Products & Solutions  </h4>
			</div>
			<div class="row"> 
				<div class="col-md-4">
					<img src="images/e-Com/market-place.jpg" alt="Aggregated Platform" class="img img-responsive">
					<h4>Aggregated Platform </h4>
					<p> Market Place Platform | B2B/ B2C Selling | Integrated Inventory  Platform   </p>  
				</div>
				<div class="col-md-4">
					<img src="images/e-Com/enterprise-mobile-platform.jpg" alt="Enterprise Mobile Platform" class="img img-responsive">
					<h4>Enterprise Mobile Platform  </h4>
					<p> Integrated Dealers, Distributors | Customer Connect Platform | Sales & Marketing Analytics Platform  </p>  
				</div>
				<div class="col-md-4">
					<img src="images/e-Com/cloud-technology-in-industry.jpg" alt="Factory Integration & Updates" class="img img-responsive">
					<h4>Digital Enterprise</h4>
					<p> Integrated IOT cloud updates| Location based services | Digital Content Management   </p>  
				</div>
				 
			</div>
		</div>
	</section>
	
	
	<!-- Footer -->
	<?php //include("includes/footer-inc.php"); ?>
	<!-- END Footer -->
	
	<?php include("includes/footer.php");?>

</div> <!-- END Global Wrapper -->

	<?php include("includes/common-js.php"); ?>
	 
</body>
</html>