<!DOCTYPE html>
<html lang="en-us">
<head>

	<meta charset="utf-8" >
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Cache-control" content="public">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Contact Us - Amplify Mindware</title>

	<!-- Change the author and description -->
	<meta name="author" content="Amplify Mindware">
	<meta name="description" content="Amplify Mindware Academy For Development of Education & Research (AMADER) is group of institutions formed from the long felt need for providing skilled & competent professional human capital for the emerging national economy.">
	<meta name="keywords" content="Amplify Mindware, Midsized Business, Mid size Business, Corporate Training, Fresher Learning Program, Campus To Corporate, Lateral Skill Enhancement, PTPS Professionals, Outbound Trainings, Delivery Methodology ">

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

	<section class="mb30" style="padding-top:5%">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-8 col-md-push-4" style="min-height:500px; background:url(images/contact-us.jpg) center top no-repeat ;background-size:cover;"> 
				</div>
				<div class="col-md-4 col-md-pull-8" style="padding:7% 0 30% 0">
					<h1 style="margin-bottom:0px;">Contact Us </h1>
					<!--<p>Our teams is available via phone, live chat and email and will be more than happy to assist you.</p> -->
					<p>Thank you for your interest in Amplify Mindware. For any further information or counseling please contact us by telephone or email shown below.</p>
					<!--<p><a href="#" class="enqPop btn btn-info btn-lg" style="border-radius: 40px;">Speak to our Business Analyst </a></p> -->
				</div>				
				
			</div>
		</div>
	</section>
	
	<section class="section-dark" style="11background:#2b2935;">
		<div class="skewedBox">
			<div class="container skewedBoxContent">
				<div class="row">
					<div class="col-md-6">
						<h2 class="section-title1 color-white">Sales </h2>	 
						<p> Questions about to help your business? <br>Please reach out to our sales team via phone or email. </p>
						
						<h3 class="box-title mt40">Communication Address:</h3>
						<p> BVU Campus, 2nd Floor, COA, Dhankawadi, <br>Katraj, Pune-411 043. </p>
						<p> Telephone: +91-20-24368316, 24372867 <!--<br> Toll Free: 1800 233 2424,--> <br> Fax No.: +91-20-24368718 <br> Email: <a href="mailto:contact@amplifymind.com">contact@amplifymind.com</a></p>
						
						<p class="mt40"><a href="#" class="btn btn-info  enqPop" style="border-radius: 40px;">Contact Sales</a></p>
					</div>
					
					<div class="col-md-6">
						<div class="col-md-12">
							<h2 class="section-title1 color-white">Support </h2>	 
							<p> Contact our support team 24/7 via phone or email, plus get access to industry access, articles, videos and Amplify user community. </p>
							<p class="mt40"><a href="#" class="btn btn-info  enqPop" style="border-radius: 40px;">Contact Support</a></p>
						</div> 
						
						<div class="col-md-12 mt40">
							<h2 class="section-title1 color-white">Social</h2>	 
							<ul class="list-inline">
								<li> <a href="http://twitter.com/AmplifyMindware" title="Twitter" target="_blank"> Twitter </a> </li> 
								<li> <a href="https://www.facebook.com/AmplifyMindware" title="Facebook" target="_blank"> Facebook </a> </li> 
								<li> <a href="https://www.linkedin.com/in/amplifymindware/" title="LinkedIn" target="_blank"> LinkedIn </li> 
								<li> <a href="http://www.youtube.com/amplifymindware" title="YouTube" target="_blank"> YouTube </a> </li> 
								<!--<li> <a href="#"> Pinterest </a> </li> 
								<li> <a href="#"> Google Plus </a> </li>-->
							</ul>
							
							 
						</div> 
						
					</div>
					
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