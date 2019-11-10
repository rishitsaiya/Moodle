<?php

session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}
$_SESSION['username1'] = $_SESSION['username'] ;
$_SESSION['username1'] = $_SESSION['username'] ;
$_SESSION['naam1'] = $_SESSION['naam'] ;
$_SESSION['course_11'] = $_SESSION['course_1'] ;
$_SESSION['course_21'] = $_SESSION['course_2'] ;
$_SESSION['course_31'] = $_SESSION['course_3'] ;
$_SESSION['image1'] = $_SESSION['image'] ;
$_SESSION['notification11'] = $_SESSION['notification1'];

?>

<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        body{
            background-image: url(cool-background.png);
            background-repeat:no-repeat;
            background-size: cover; 
        }

    </style>
	<title>dashboard</title>
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
<body bgcolor="grey"> 
<?php
$total="";
$total2="";
$con = mysqli_connect('localhost','root');


mysqli_select_db($con, 'sessionpractical');
$query = " select * from signin ";

$result = mysqli_query($con, $query);
    $result = mysqli_query($con, $query);
    $i=1;

      while ($row = $result->fetch_assoc()) {
        if((strcasecmp($row['course_1'], $_SESSION['course_11'])==0)&&(strcasecmp($row['designation'], 'teacher')==0)){
          if($i>0){
        $notifier=$row['name'];
        $message1= $row['notification1']; 
        $announce1=$row['announcements1'];
        $message1=$notifier.' : '.$message1;
        $announce1=$notifier.' : '.$announce1;
        $total=$message1.$total;
        $total2=$announce1.$total2;
        $i=$i-1;
        ?>
        <?php
    }
  }
}
$con = mysqli_connect('localhost','root');


mysqli_select_db($con, 'sessionpractical');
$query = " select * from signin ";

$result = mysqli_query($con, $query);
    $result = mysqli_query($con, $query);
    $i=1;

      while ($row = $result->fetch_assoc()) {
        if((strcasecmp($row['course_1'], $_SESSION['course_21'])==0)&&(strcasecmp($row['designation'], 'teacher')==0)){
          if($i>0){
        $notifier=$row['name'];
        $message1= $row['notification1']; 
        $announce1=$row['announcements1'];
        $message1=$notifier.' : '.$message1;
        $announce1=$notifier.' : '.$announce1;
        $total=$message1.$total;
        $total2=$announce1.$total2;
        $i=$i-1;  
        ?>
        <?php
    }
  }
}
$con = mysqli_connect('localhost','root');


mysqli_select_db($con, 'sessionpractical');
$query = " select * from signin ";

$result = mysqli_query($con, $query);
    $result = mysqli_query($con, $query);
    $i=1;

      while ($row = $result->fetch_assoc()) {
        if((strcasecmp($row['course_1'], $_SESSION['course_31'])==0)&&(strcasecmp($row['designation'], 'teacher')==0)){
          if($i>0){
        $notifier=$row['name'];
        $message1= $row['notification1']; 
        $announce1=$row['announcements1'];
        $message1=$notifier.' : '.$message1;
        $announce1=$notifier.' : '.$announce1;
        $total=$message1.$total;
        $total2=$announce1.$total2;
        $i=$i-1;  
        ?>
        <?php
    }
  }
}
?>

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
        <li><a href="home1.php">DASHBOARD</a></li>
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
<div class = "main"> 
    <marquee class="marq" bgcolor = "black" direction = "left" loop="" > 
        <div class="geek1">DASHBOARD</div>  
    </marquee> 
    </div> <br><br>
<!--<center><img src="iit logo.png" height="150" width="150"></center><br>-->
<div class="container-fluid text-center bg-1">
    <div class="row"><br>
        <div class="col-lg-3 well">
            <div class="row">
                <div class="col-lg-12">
                    <div class="well">
                             <p>WELCOME <?php echo $_SESSION['naam'];?></p>
                            <img src="iit logo.png" class="img-circle" height="89" width="90" alt="AVATAR">
                    </div>
                </div>
                    <div class="col-lg-12">
                        <div class="well">
                        </div>
                    </div>
                </div>
            </div>
    <div class="col-lg-7">
        <div class="row">
            <div class="col-lg-12">
                <div class="well">
                    <a href="course_1.php"><?php echo $_SESSION['course_1']; ?></a>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-lg-12">
                <div class="well">
                    <a href="course_2.php"><?php echo $_SESSION['course_2']; ?></a>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-lg-12">
                <div class="well">
                    <a href="course_3.php"><?php echo $_SESSION['course_3']; ?></a>
                </div>
            </div>
        </div>
    </div>
        <div class="col-lg-2 well">
            <div class="well">
                <div class="row">
                    <div class="col-lg-12">
                        <p>upcoming events...</p>
                        <p>Talk on Soil Dynamics and Geotechnical
                        Earthquake Engineering</p>
                    </div>
                </div>
            </div>

            <div class="well">
                <div class="row">
                    <div class="col-lg-12">
                        <p><?php echo $total; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	

	<br><br>
    <footer class="container-fluid text-center">
  <p>signed in as <?php echo $_SESSION['username'];?></p>
</footer>
	

</body>
</html>
