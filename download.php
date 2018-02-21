<?php
header("Content-Type: application/octet-stream");


if(isset($_GET["file"]))
{
//$file = $_GET["file"] .".pdf";

	$file = base64_decode($_GET["file"]);
	
	//echo "FILE: ".$file;
	if( file_exists( $file ) ) 
	{
		
		header("Content-Disposition: attachment; filename=" . basename($file));   
		header("Content-Type: application/force-download");
		header("Content-Type: application/octet-stream");
		header("Content-Type: application/download");
		header("Content-Description: File Transfer");            
		header("Content-Length: " . filesize($file));
		flush(); // this doesn't really matter.
		$fp = fopen($file, "r");
		while (!feof($fp))
		{
			echo fread($fp, 65536);
			flush(); // this is essential for large downloads
		} 
		fclose($fp);
	 
	}
	else
	{
		header( 'HTTP/1.1 404 Not Found' );
		echo "<h1>File not found</h1>";
	}

}
else
	header( 'Location: index.php' ) ;

?>