<?php

session_start();


$con = mysqli_connect('localhost','root');
if($con){
	echo" connection successful";
}else{
	echo " no connection"; 
}

mysqli_select_db($con, 'sessionpractical');

$name = $_POST['user'];
$pass = $_POST['password'];


$q = " select * from signin  where name = '$name' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	$row = $result->fetch_assoc();
	$_SESSION['username'] = $row['name'];
	$_SESSION['password'] = $row['password'];
	$_SESSION['designation'] = $row['designation'];
	$_SESSION['naam'] = $row['naam'];
	$_SESSION['course_1'] = $row['course_1'];
	$_SESSION['course_2'] = $row['course_2'];
	$_SESSION['course_3'] = $row['course_3'];
	$_SESSION['image']=$row['image'];
	$_SESSION['notification1']=$row['notification1'];
	
	

	if(strcasecmp($_SESSION['designation'], "teacher")==0){
		header('location:teacher.php');
	}
	elseif (strcasecmp($_SESSION['designation'], "administrator")==0) {
		header('location:administratorhome.php');
	}
	else{

	echo $_SESSION['username'];
	echo $_SESSION['password'];
	echo $_SESSION['designation'];
	echo $_SESSION['naam'];
	header('location:home.php');
}

}else{
	header('location:login.php');
}



?>