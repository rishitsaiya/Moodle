<?php

session_start();
echo $_SESSION['username1'];

$announce = $_POST['announcements'];
echo $announce;
$con = mysqli_connect('localhost','root');


mysqli_select_db($con, 'sessionpractical');
$query = " select * from signin ";

$result = mysqli_query($con, $query);

      while ($row = $result->fetch_assoc()) {
      	if(strcasecmp($row['name'], $_SESSION['username1'])==0){
        $announce1=$row['announcements1'];
    }
}
$announce=$announce.'  '.$announce1.'  ';

$q1="UPDATE signin SET announcements1 = '".$announce."' WHERE name = '".$_SESSION['username1']."' ";
mysqli_query($con,$q1);
header('location:teacher.php');
?>