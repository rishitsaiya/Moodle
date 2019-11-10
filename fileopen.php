<?php

session_start();
if(!isset($_SESSION['filename'])){
	header('location:login.php');
}
echo $_SESSION['filename'] ;

$resource = opendir("uploads");
$myfile = fopen($_SESSION['filename'], "r") or die("Unable to open file!");
echo file_get_contents( $_SESSION['filename']  );
fclose($myfile);


?>