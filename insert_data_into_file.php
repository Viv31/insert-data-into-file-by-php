<?php

if(isset($_POST['insert'])){
	$content = $_POST['file_content'];
	//$filename = "log.txt";
	$filename = fopen("log.txt", "w");
	fwrite($filename, $content);
	//file_put_contents($filename, $content);
	fclose($filename);
	header("location:index.php");

}




//file_put_contents($filename, $content);




?>
Home 71.94%
contaqct
about