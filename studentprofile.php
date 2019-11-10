<?php

session_start();


$con = mysqli_connect('localhost','root');
if($con){
  echo"";
}else{
  echo " no connection"; 
}

mysqli_select_db($con, 'sessionpractical');

$q = " select * from signin ";

$result = mysqli_query($con, $q);

?>

<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    
  </style>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>
  <div class="container">
  <h2 align="center"><b>Student Profile Record</b></h2>
  <br><br><br>
  <center><img src="<?php echo $_SESSION['image1']; ?>" height="200" width="150"/></center>
  <br><br>
  <table align="center" class="table">
        <td> Roll Number</td>
        <td><?php echo $_SESSION['username1']; ?></td>
      </tr>
      <tr>
        <td> Name </td>
        <td><?php echo $_SESSION['naam1']; ?></td>
      </tr>
      <tr>
        <td colspan="2">Courses Enrolled :-</td>
      </tr>
      <tr>
        <td><?php echo $_SESSION['course_11']; ?></td>
      </tr>
      <tr>
        <td><?php echo $_SESSION['course_21']; ?></td>
      </tr>
      <tr>
        <td><?php echo $_SESSION['course_31']; ?></td>
      </tr>
  </table>
</div>
</body>
</html>
