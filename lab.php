<?php

session_start();
//if(!isset($_SESSION['username'])){
  //  header('location:login.php');
//}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lab Assignments</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>    
    /* Set black background color, white text and some padding */
    footer {
      background-color:black;
      color: white;
      padding: 15px;
    }
    .bg-1 {
  background: #2d2d30;
  color: #bdbdbd;
}
.bg-1 p {color: #2d2d30;}
.main { 
        text-align:center; 
    } 
    .marq { 
        padding-top:30px; 
        padding-bottom:30px; 
    } 
    .geek1 { 
        font-size:36px; 
        font-weight:bold; 
        color:white; 
        padding-bottom:10px; 
    } 
     </style>
</head>

<body bgcolor="lightcyan">
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
        <li><a href="home.php">DASHBOARD</a></li>
    </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><style="color:red">LOGOUT</style></a></li>
    </ul>
    </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="studentprofile.php"><style="color:red">PROFILE</style></a></li>
    </ul>
  </div>
</div>
</nav>

	<br><br>
	<center><img src="lab.jpg" height="300" width="300"></center><br>
	<br><br>
<div class = "main"> 
    <marquee class="marq" bgcolor = "black" direction = "left" loop="" > 
        <div class="geek1">LAB ASSIGNMENTS</div>  
    </marquee> 
    </div> <br><br>

    <form class="form-inline" action="upload.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="f1"> Select file to upload</label>
    
    <input type="file" name="file" class="form-control-file" id="f1">
    <button type="submit" name="submit" value="Upload" class="btn btn-primary">SUBMIT</button>
</div>
    </form>
    <br><br>
    <br><br>

</body>
</html>