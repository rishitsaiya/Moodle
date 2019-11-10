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
$naam = $_POST['naam'];
$course_1 = $_POST['course_1'];
$course_2 = $_POST['course_2'];
$course_3 = $_POST['course_3'];


$q = " select * from signin  where name = '$name' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	echo" duplicate data ";
}else{
	$qy= " insert  into signin(name , password ,designation, naam, course_1 ,course_2, course_3) values ('$name' , '$pass' ,'student', '$naam' ,'$course_1', '$course_2', '$course_3') ";
	mysqli_query($con, $qy);
	header('location:administrator_addstudent.php');
}



?>