<?php include("includes/config.php"); ?>
<?php include("includes/dbconn.php"); ?>
<?php include("includes/sendEmail.php"); ?>
<?php

	//print_r($_POST);
	
	$var_domain = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST); 

	if(isset($_POST['enqTitle'])) 
	{  
		if($g_domain==$var_domain )
		{
		
			//echo"<h5> Please wait while your enquiry is been submitted..... </h5>";
			foreach($_POST as $key=>$value)
			{
			 $$key=htmlspecialchars($value,ENT_QUOTES);
			}
			
			
			if(trim($name)=="" || trim($email)=="" ||  trim($mobileNo)=="" ) //|| !is_numeric($txtContact) ) //|| preg_match("/http/i","$message") )
			{
				echo"error#Your Enquiry is not submitted this time, Please try later, or contact us.";
				exit();
			}
				
			
			date_default_timezone_set('Asia/Calcutta');
			$dtTime= date("Y-m-d H:i:s");
			$ipAddress=$_SERVER["REMOTE_ADDR"]; 
			$remark = "";
			
			$sql = " INSERT INTO `e-comm-product-enquiry` (`enqDate`, `enqTitle`, `name`, `organization`, `mobileNo`, `email`, `userComment`, `ipAddress`, `remark`) ";
			$sql .= " VALUES ('{$dtTime}', '{$enqTitle}', '{$name}', '{$organization}', '{$mobileNo}', '{$email}', '{$userComment}', '{$ipAddress}', '{$remark}')  ";
			//echo "<br>".$sql;
			
			$rs = mysql_query($sql) or die("error#Unable to insert e-comm product Enquiry...".mysql_error());
			
			if($rs)
			{
				//All Pages: GET STARTED
				///Home Page: Contact Digital Expert, START YOUR FREE TRIAL, 
				//Large Enterprise: Request a Demo, Get Started Now, Contact our business analyst
				//Mid-Sized Business: Speak to our Business Analyst
				//B2B: Speak to our B2B Expert
				//IOT Platform: Contact our IOT expert
				//Mobility Solutions: Speak to our Mobility expert
				//Cloud Services: Speak to our Cloud experts
			
				/*$message = "";
				
				$message .= "<table cellspacing='0' cellpadding='0' width='100%'>";
					$message .= "<tr><td>";				
						$message .= "<img src='http://amplifymind.com/images/AmplifyLogo.png' alt='Amplify Mindware' /> <br /><br /><br />";
					$message .= "</td></tr>";			
					$message .= "<tr><td>";
						$message .= "<p>Dear {$name},</p>";
						$message .= "<p> Thank you for showing interest with Amplify Mindware.</p>";
						$message .= "<p> You have Requested for - {$enqTitle} </p>";
						$message .= "<p>We will be in touch with you very shortly...<p>";
						$message .= "<br>";
					
					$message .= "</td></tr>";			
					$message .= "<tr><td>";
						$message .= "<p>Thanks & Regards,</p>";
						$message .= "<p>Business Analyst,</p>";
						$message .= "<h4>Amplify Mindware Pvt. Ltd.</h4>";
						$message .= "<p>";
							$message .= "<br><b>Correspondence Address:</b>";
							$message .= "<br>2nd Floor, COA,";
							$message .= "BVU Campus,";
							$message .= "<br>Dhankawadi, Pune-411043.";
							$message .= "<br>Maharashtra, India.";
						$message .= "</p>";
					
					$message .= "</td></tr>";			
					$message .= "<tr><td>";				
						$message .= "<p><b>Visit us: <a href='http://amplifymind.com'>www.amplifymind.com</a></p>";
					$message .= "</td></tr>";			
				$message .= "</table>>";*/
				
				$custMessage = "";
				
				
				switch(strtoupper(trim($enqTitle)))
				{
					case "GET STARTED":
						$custMessage .= "<p>Thank you for your interest. We would like to understand your current IT challenges & how Amplify can help you to address it. Please give us a suitable time so that, we can schedule preliminary interaction with you and your team.</p>";
						$custMessage .= "<p>Will be happy to set up telephonic or a web-meeting between you & our business analyst.</p>";
						$custMessage .= "<p>We look forward to taking our interaction ahead and participate in your 2018 IT roadmap.</p>";						
					break;
					
					case "CONTACT DIGITAL EXPERT": 
						$custMessage .= "<p>Thank you for showing your interest. It will be great to know little more about you & the organization. We will be happy to setup an interaction with as per your convenience.</p>";
						$custMessage .= "<p>Please feel free to drop in a line, listing out your requirements in Digital Services. We look forward to taking interaction ahead.</p>";
					break;
					case "START YOUR FREE TRIAL":
						$custMessage .= "<p>Welcome to Amplify Mindware . We are happy to help evaluate our IT Consulting Services. Let us connect up & discuss the various possibilities on how we can partner with you.</p>";
						$custMessage .= "<p>Our team of analyst will understand your business challenges and recommend the most effective way ahead & ALL FOR FREE. This will help you to identify products & solutions that can assist in achieving your 2018 IT objectives.</p>";
						$custMessage .= "<p>We look forward to taking this interaction ahead.</p>";
					break;
					case "REQUEST A DEMO":
						$custMessage .= "<p>Thank you for showing your interest in our Omni channel Enterprise platform.</p>";
						$custMessage .= "<p>We would like schedule our demo as per your convenience. One of our client manager will touch base with you for the showcasing our Enterprise capabilities. Look forward to your confirmation.</p>";
					break;
					case "CONTACT OUR BUSINESS ANALYST":
						$custMessage .= "<p>Thank you for showing your interest in Amplify’s business solutions for Large Enterprises. We look forward to scheduling your interaction with our solution architects.</p>";
						$custMessage .= "<p>Please feel free to drop in a line, listing out your requirements and we will take it up from there on. We await your confirmation on the same.</p>"; 
					break;
					case "SPEAK TO OUR BUSINESS ANALYST":
						$custMessage .= "<p>Thank you for showing your interest in our solutions stack for Mid Sized businesses.</p>";
						$custMessage .= "<p>Would you like us to schedule a demo and an interactive session with your team?  Upon your confirmation, one of our client managers will touch base with you to take this ahead.</p>"; 
					break;
					case "SPEAK TO OUR B2B EXPERT":
						$custMessage .= "<p>Amplify Mindware appreciates your interest in knowing more about B2B solutions for businesses.</p>";
						$custMessage .= "<p>Based on mutual convenience, we can setup an interaction between our team & you to understand your requirements better.</p>";
						$custMessage .= "<p>Please feel free to drop in a line listing your requirements. One of our analyst will take it up from there on.</p>";
					break;
					case "CONTACT OUR IOT EXPERT":
						$custMessage .= "<p>Thank you for connecting with us.</p>";
						$custMessage .= "<p>Amplify Mindware has been helping organizations in the space of IOT & Sensors driven technologies, across Manufacturing, Automobile, Shipping, Logistics & retail business domains.</p>";
						$custMessage .= "<p>Please feel free to share your business challenges or requirements that you believe can be addressed through IOT & sensor based platforms. We will have one of our expert reach out to you & take the interaction ahead.</p>";
					break;
					case "SPEAK TO OUR MOBILITY EXPERT":
						$custMessage .= "<p>Thank you for your interest in our Enterprise Mobility platform.</p>";
						$custMessage .= "<p>Please allow one of our Mobility Practice team member to understand your requirements & help you to address the same. Based on your convenience we will be happy to schedule a Call/Web-Meeting to discuss with you the various possibilities across Mobile domain for your business. </p>";
						$custMessage .= "<p>We look forward to hearing from you on the next steps.</p>";
						$custMessage .= "";
					break;
					case "SPEAK TO OUR CLOUD EXPERT":
						$custMessage .= "<p>Thank you for your interest in our cloud solutions.</p>";
						$custMessage .= "<p>We would like to know bit more about you and your business requirements. Based on your convenience, we will be happy to schedule a Call/Web-Meeting to understand your requirements and help you with the most effective solution.</p>";
						$custMessage .= "<p>Once we have your confirmation, one of our cloud experts will take the interaction ahead. </p>";
					break;	
					
					default:
						$custMessage .= "<p> Thank you for showing interest with Amplify Mindware.</p>";
						$custMessage .= "<p> You have Requested for - {$enqTitle} </p>";
						$custMessage .= "<p>We will be in touch with you very shortly...<p>"; 
				}
				
				
				$message = "";
				$message .= "<font face='Trebuchet MS'>";
				$message .= "<table cellspacing='0' cellpadding='50' width='650px' border='1'>";
					$message .= "<tr><td>";	
						
						$message .= "<table cellspacing='0' cellpadding='0' width='100%' border='0'>";
							$message .= "<tr><td align='right'>";				
								$message .= "<img src='http://amplifymind.com/images/AmplifyLogo.png' alt='Amplify Mindware' width='200' /> <hr>";
							$message .= "</td></tr>";			
							$message .= "<tr><td>";
								$message .= "<p>Dear {$name},</p>";
								
								/*$message .= "<p> Thank you for showing interest with Amplify Mindware.</p>";
								$message .= "<p> You have Requested for - {$enqTitle} </p>";
								$message .= "<p>We will be in touch with you very shortly...<p>";*/
								
								$message .= $custMessage;
								$message .= "<br>";
							
							$message .= "</td></tr>";			
							$message .= "<tr><td>";
								$message .= "<font size='2'>";
								$message .= "<p>Thanks & Regards,</p>";
								$message .= "<p>";
								$message .= "<b>Business Analyst</b>";
								$message .= "<br><font size='4' color='orange'> <b>Amplify Mindware Pvt. Ltd.</b> </font>";
								$message .= ", <font size='3'> Pune - 411 043 (MH, India) </font>";	
									//$message .= "<br> Contact - &#9742;  +91-20-2436 8316 Extn: 223| &#128224; +91-20-2436 8718  Extn: 214";
									$message .= "<br> Contact - Tel. +91-20-2436 8316 Extn: 223 | Fax. +91-20-2436 8718  Extn: 214";
									/*$message .= "<br>Correspondence Address -";
									$message .= "<br>2nd Floor, COA,";
									$message .= "BVU Campus, ";
									$message .= "Dhankawadi, Pune-411043 ";
									$message .= "Maharashtra, India.";*/
								$message .= "</p>";
								
								$message .= "</font>";
							
							$message .= "</td></tr>";	
									
							$message .= "<tr><td>";				
								$message .= "<font size='1'><b>Visit us: <a href='http://amplifymind.com'>www.amplifymind.com</a> | <a href='https://www.facebook.com/AmplifyMindware'>Facebook</a> | <a href='https://www.linkedin.com/in/amplifymindware/'>LinkedIn</a> | <a href='http://twitter.com/AmplifyMindware'>Twitter</a> | <a href='http://www.youtube.com/amplifymindware'>YouTube</a></font>";
							$message .= "</td></tr>";			
							$message .= "<tr><td>";				
								//$message .= "<hr> <font size='1'><b>Partners: SAP | Autodesk - Authorized Training Center | Microsoft Dynamics | Adobe | Learn2Live </b></font>";
								$message .= "<hr>";
								$message .= "<font size='3'><b>Connected Customer with Digital Transformation</b></font>";
								$message .= "<br><font size='2'>Mobile Applications | IOT - Sensors & Gateways | Enterprise Integration | Cloud Consulting | Managed IT Services & AMC</font>";
								$message .= "<hr>";
							$message .= "</td></tr>";
										
						$message .= "</table>";
					$message .= "</td></tr>";			
				$message .= "</table>";
				
				$message .= "</font>";
				
				
				$to=$email;
				$subject="Your Enquiry at Amplify Mindware For {$enqTitle} ";
				$cc="contact@amplifymind.com";
				 
				/*echo"<p>To: {$to}";
				echo"<br>CC: {$cc}";
				echo"<br>Subject: {$subject}";
				echo"<br>Message:<br>{$message}</p>"; */
				
				$mailStat = sendEmailtoUser($to,$message,$subject,$cc);
				
				if($mailStat)
				{
					$message = "";
					$message .= "<p>Dear Amplify Team,</p>";
					$message .= "<p>Following enquiry generated for {$enqTitle}</p>";
					$message .= "<p>";
						$message .= "<br><b>Enquiry Date:</b> {$dtTime}";  
						$message .= "<br><b>Name:</b> {$name}";
						$message .= "<br><b>Mobile No:</b> {$mobileNo}";
						$message .= "<br><b>Email:</b> {$email}";
						$message .= "<br><b>Oraganization Name:</b> {$organization}"; 
						$message .= "<br><b>Page URL:</b> {$_SERVER['HTTP_REFERER']}"; 
						$message .= "<br><b>User Comment:</b> <br> {$userComment}";  
					$message .= "</p>";
					$message .= "<p>Kindly check the same do needfull.</p>";
					$message .= "<br>";
					$message .= "<p>Thanks & Regards,<br> Web Support, Amplify Mindware Pvt. Ltd.</p>";
					
					$subject = "Enquiry at Amplify Mindware For {$enqTitle}";
					$from="{$email}";
					/*
					echo"<p>To: contact@amplifymind.com"; 
					echo"<br>Subject: {$subject}";
					echo"<br>Message:<br>{$message}</p>";*/
					
					$mailStat1 = sendEmailtoSupport($message,$subject,$from="",$cc2="",$to="contact@amplifymind.com");
					if($mailStat1)
					{
						echo"success#Your request has been registered with us, we will be in touch with you very shortly";
					}
					else
						echo"success#Your request has been registered with us.";
					
				}
				else
					echo"success#Your request has been registered with us....";
			
			}
			else
				echo"error#Unable to submit your request right now, please try after some time";
			
		}
		else
		{
			echo"error#Un-authorized access of this page.....";
		}	
	}
	else 
	{
		echo"error#Un-authorized access of this page.";	
	}
	
	
?>