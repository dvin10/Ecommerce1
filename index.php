<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="utf-8" >
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Cache-control" content="public">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Amplify Mindware</title>
	<!-- Change the author and description -->
	<meta name="author" content="Amplify Mindware">
	<meta name="description" content="Amplify Mindware Academy For Development of Education & Research (AMADER) is group of institutions formed from the long felt need for providing skilled & competent professional human capital for the emerging national economy." />
	<meta name="keywords" content="Amplify Mindware, Corporate Training, Fresher Learning Program, Campus To Corporate, Lateral Skill Enhancement, PTPS Professionals, Outbound Trainings, Delivery Methodology " />
	
	<!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="Connected Customer with Digital transformation">
    <meta property="og:image" content="http://amplifymind.com/images/AmplifyLogo.png">
    <meta property="og:url" content="http://amplifymind.com/index.php">
    <meta property="og:site_name" content="Amplify Mindware">
    <meta property="og:description" content="Build your Digital Ecosystem with Amplify. With Industry 4.0, get end to end digitization with smart sensors & communication devices leading to Intelligent business decisions and deeper customer insights">
    
    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="Amplify Mindware">
    <meta name="twitter:title" content="Connected Customer with Digital transformation">
    <meta name="twitter:description" content="Build your Digital Ecosystem with Amplify. With Industry 4.0, get end to end digitization with smart sensors & communication devices leading to Intelligent business decisions and deeper customer insights">
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
		<div class="parallax" style="background-image: url('images/slider-e-com/slider-img-home.jpg');padding:7% 5%;min-height: 750px;">
			<div class="container bottom-align transparent-bg">
				<div class="row text-center">
					<h2 class="color-white11 flex-title">IOT Platform for your Digital services</h2> 
					<div class="mt40 animated11" data-anim="11fadeInUp" data-delay="1000">
						<!--<a href="#" class="flex-btn flex-btn1" style="border-radius: 40px;">Contact our digital expert </a>-->
						<a href="#" class="btn btn-primary btn-lg enqPop" style="border-radius: 40px;">Contact our digital expert </a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!--<section class="mb30">
		<div class="container">
			<div class="row text-center" style="margin-top:0%;padding:20px;min-height:500px;background:url(images/e-Com/digital-transformation.jpg) no-repeat right;"> 				<div class="col-md-6">
					<h1>Connected Customer with Digital transformation</h1>
					<p>Build your Digital Ecosystem with Amplify. With Industry 4.0, get end to end digitization with smart sensors & communication devices leading to Intelligent business decisions and deeper customer insights</p>
					<p><a href="#" class="btn btn-info btn-lg enqPop" style="border-radius: 40px;">START YOUR FREE TRIAL</a></p>
				</div>
			</div>
		</div>
	</section>-->
	
	<section class="mb30">
		<div class="container">
			<div class="row text-center" >
				<div class="col-md-6 col-md-push-6" style="margin-top:0%;11padding:20px;min-height:500px;background:url(images/e-Com/digital-transformation.png) no-repeat center; ">
					&nbsp;
				</div>
				<div class="col-md-6 col-md-pull-6">
					<h1>Connected Customer with Digital transformation</h1>
					<p>Build your Digital Ecosystem with Amplify. With Industry 4.0, get end to end digitization with smart sensors & communication devices leading to Intelligent business decisions and deeper customer insights</p>
					<p><a href="#" class="btn btn-info btn-lg enqPop" style="border-radius: 40px;">START YOUR FREE TRIAL</a></p>
				</div>
				
			</div>
		</div>
	</section>
	
	
	<section class="mt40">
		<div class="container" >
			<div class="row">
				<h4>Benefits with Amplify Enterprise Solutions</h4>
			</div>
			<div class="row ">
				<div class="col-md-3">
					<div class="box-shadow">
						<img src="images/e-Com/business-agility.jpg" alt="Business Agility & Efficiency" class="img-responsive" />
						<h5>Business Agility & Efficiency  </h5>
						<p>Integrated Processes, Service Automation, Intelligent Decision Making </p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="box-shadow">
						<img src="images/e-Com/intelligent-decision-making.jpg" alt="Intelligent Decision Making" class="img-responsive" />
						<h5>Intelligent Decision Making   </h5>
						<p>Data Analytics and Business <br>Insights </p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="box-shadow">
						<img src="images/e-Com/control-mechanism.jpg" alt="Governance & Control" class="img-responsive" />
						<h5>Governance & Control  </h5>
						<p>Timely Information & Control Mechanism </p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="box-shadow">
						<img src="images/e-Com/business-scalability.jpg" alt="Business Scalability" class="img-responsive" />
						<h5>Business Scalability  </h5>
						<p>Integrated Process, Easy Business Ramp-up </p>
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
	
	
	
	<script language="javascript">
	
	$(document).ready(function(){
	
		/*$("#contact-form").submit(function(event){ 
		
			var formUrl = "enquiry-post-ajax.php";	
			var postData = new FormData($(this)[0]); //$(this).serializeArray();
			
			$.ajax(
				{
					url: formUrl,
					type: "POST",
					data: postData,
					success: function(data, textStatus, jqXHR)
						{
							alert(data);
							
							//$("#frm-stud-profile").html(data);
							//$(window).scrollTop($('#fh5co-main').offset().top);
						},
					error: function(jqXHR, textStatus, errorThrown)
						{
						
						},
					cache: false,
					contentType: false,
					processData: false		
				});
			
			    event.preventDefault(); //STOP default action
		});*/
		
		
	});
	</script>	
	 
</body>
</html>