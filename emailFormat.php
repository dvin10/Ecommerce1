<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

 
  <?php

			$message = "";
				$message .= "<font face='Trebuchet MS'>";
				$message .= "<table cellspacing='0' cellpadding='50' width='650px' border='1'>";
					$message .= "<tr><td>";	
						
						$message .= "<table cellspacing='0' cellpadding='0' width='100%' border='0'>";
							$message .= "<tr><td align='right'>";				
								$message .= "<img src='http://amplifymind.com/images/AmplifyLogo.png' alt='Amplify Mindware' width='200px' /> <hr>";
							$message .= "</td></tr>";			
							$message .= "<tr><td>";
								$message .= "<p>Dear {$name},</p>";
								$message .= "<p> Thank you for showing interest with Amplify Mindware.</p>";
								$message .= "<p> You have Requested for - {$enqTitle} </p>";
								$message .= "<p>We will be in touch with you very shortly...<p>";
								$message .= "<br>";
							
							$message .= "</td></tr>";			
							$message .= "<tr><td>";
								$message .= "<font size='2'>";
								$message .= "<p>Thanks & Regards,</p>";
								$message .= "<p>";
								$message .= "<b>Business Analyst</b>";
								$message .= "<br><font size='4' color='orange'> <b>Amplify Mindware Pvt. Ltd.</b> </font>";
								
									
									$message .= "<br> Contact - &#9742;  +91-20-2436 8316 Extn: 223| &#128224; +91-20-2436 8316 Extn: 214";
									$message .= "<br>Correspondence Address -";
									$message .= "<br>2nd Floor, COA,";
									$message .= "BVU Campus, ";
									$message .= "Dhankawadi, Pune-411043 ";
									$message .= "Maharashtra, India.";
								$message .= "</p>";
								$message .= "</font>";
							
							$message .= "</td></tr>";			
							$message .= "<tr><td>";				
								$message .= "<font size='1'><b>Visit us: <a href='http://amplifymind.com'>www.amplifymind.com</a> | <a href=''>Facebook</a> | <a href=''>LinkedIn</a> | <a href=''>Twitter</a> | <a href=''>YouTube</a></font>";
							$message .= "</td></tr>";			
							$message .= "<tr><td>";				
								$message .= "<hr> <font size='1'><b>Partners: SAP | Autodesk - Authorized Training Center | Microsoft Dynamics | Adobe | Learn2Live</font>";
							$message .= "</td></tr>";			
						$message .= "</table>";
					$message .= "</td></tr>";			
				$message .= "</table>";
				
				$message .= "</font>";
				
	echo "<br>".$message;
				

?>


</body>
</html>
