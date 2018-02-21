<!DOCTYPE html>
<html lang="en-us">
<head>

	<meta charset="utf-8" >
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Amplify Mindware: Site Map</title>

	<!-- Change the author and description -->
	<meta name="author" content="Amplify Mindware">
	<meta name="description" content="Amplify Mindware Academy For Development of Education & Research (AMADER) is group of institutions formed from the long felt need for providing skilled & competent professional human capital for the emerging national economy.">
	<meta name="keywords" content="Amplify Mindware, Corporate Training, Fresher Learning Program, Campus To Corporate, Lateral Skill Enhancement, PTPS Professionals, Outbound Trainings, Delivery Methodology ">

  	<?php $index=1;include("includes/common-css.php"); ?>
	
	<!-- BX Slider -->
	<link rel="stylesheet" href="js/jquery.bxslider/jquery.bxslider.css">
	
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
		<div class="container">
			<div class="row" style="margin-top:10%;padding:20px;"> <!--background:url(images/BigCom/ent-hero-boxes.png) no-repeat right;background-size:70%;"> -->
				<div class="col-md-12">
					<h1>Site Map</h1> 
				</div>
				 
			</div>
		</div>
	</section>
	
	<section class="mb30">
		<div class="container">
			<div class="row" style="padding:20px;"> <!--background:url(images/BigCom/ent-hero-boxes.png) no-repeat right;background-size:70%;"> -->
				<div class="col-md-12">
					
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
	
	<!-- BX Slider -->
	<script src="js/jquery.bxslider/jquery.bxslider.js"></script>
	<script language="javascript">
		$(document).ready(function(){
			///http://bxslider.com/options
		  $('.slider1').bxSlider({
			/*slideWidth: 200,*/
			slideWidth: 280,
			minSlides: 1,
			maxSlides: 4,
			slideMargin: 10,
			/*moveSlides: 1,*/
			auto: true,
			autoHover: true, 
			tickerHover: true
		  });
		});
	</script>
	
	
	<script language="javascript">
	
	$(document).ready(function(){
	
		$("#contact-form").submit(function(event){ 
		
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
		});
		
	});
	</script>	

</body>
</html>