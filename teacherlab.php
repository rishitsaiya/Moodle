<?php

session_start();


$con = mysqli_connect('localhost','root');
if($con){
  echo"";
}else{
  echo " no connection"; 
}

mysqli_select_db($con, 'sessionpractical');

$q = " select * from files ";

$result = mysqli_query($con, $q);

?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style type="text/css">
    #notification{
      background-color: #CFD2CE;
      width: 300px;
      height:150px;
      border-radius: 5px

    }
    #administrator{
      background-color: #CFD2CE;
      width: 300px;
      height:150px;
      border-radius: 5px

    }
    footer {
      background-color:black;
      color: white;
      padding: 15px;
    }
  </style>

</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <!--<img  src="iit logo.png" class="img.circle" height="65" width="65">-->
       <ul class="nav navbar-nav">
        <li><a href="https://www.iitdh.ac.in/">IIT DHARWAD</a></li>
    </ul>
      <ul class="nav navbar-nav">
        <li><a href="teacher.php">DASHBOARD</a></li>
    </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><style="color:red">LOGOUT</style></a></li>
    </ul>
  </div>
</div>
</nav>
  <div class="container">
  <h2 align="center"><b>Student Assignment Record</b></h2>
  <table align="center" class="table">
    <t>
      <th> ID </th>
      <th> Time </th>
      <th colspan="2"> Filename </th>
    </t>
    <?php
      while ($row = $result->fetch_assoc()) {
       ?>
       <tr>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['time'] ?></td>
        <td><?php echo $row['filename']; $_SESSION['filename'] = $row['filename']; ?></td>
        <td><button class="btn btn-info" onclick="window.location.href='fileopen.php'">Open</button></td>
        
       </tr>
    <?php
      }
    ?> 
  </table>
</div>
 <footer class="container-fluid text-center">
  <p><a href="teacher.php">GO TO DASHBOARD</p>
</footer>
</body>
</html>
