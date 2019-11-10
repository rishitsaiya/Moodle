<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root');
if($con){
	echo" connection successful";
}else{
	echo " no connection"; 
}

mysqli_select_db($con, 'sessionpractical');

$name = $_POST['user'];
$pass = $_POST['password'];
$student = $_POST['student'];
$teacher = $_POST['teacher'];


$q = " select * from signin  where name = '$name' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	echo" duplicate data ";
}else{
	if(empty($teacher)){
	$qy= " insert  into signin(name , password , designation) values ('$name' , '$pass' , '$student') ";
	mysqli_query($con, $qy);
	}
	elseif (empty($student)) {
	$qy= " insert  into signin(name , password , designation) values ('$name' , '$pass' , '$teacher') ";
	mysqli_query($con, $qy);
	}
}



?>