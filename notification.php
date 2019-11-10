<?php

session_start();
echo $_SESSION['username1'];

$message = $_POST['notification'];
echo $message;
$con = mysqli_connect('localhost','root');


mysqli_select_db($con, 'sessionpractical');
$query = " select * from signin ";

$result = mysqli_query($con, $query);

      while ($row = $result->fetch_assoc()) {
      	if(strcasecmp($row['name'], $_SESSION['username1'])==0){
        $message1= $row['notification1']; 
    }
}
echo $message1;
$message=$message.'  '.$message1.'  ';

$q="UPDATE signin SET notification1 = '".$message."' WHERE name = '".$_SESSION['username1']."' ";
mysqli_query($con,$q);
header('location:teacher.php');
?>