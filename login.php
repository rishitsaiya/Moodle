<!DOCTYPE html>
<html>
<head>
      <style type="text/css">
        body{
            background-image: url("moodle.png");
            background-repeat:no-repeat;
            background-size: cover; 
        }

    </style>

  <title></title>
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
<body>
  <center><img src="iit logo.png" class="animated swing delay-1s" alt="Transparent Logo" id="animated-img1"></center>
  <div class = "main"> 
    <marquee class="marq" bgcolor = "black" direction = "left" loop="" > 
        <div class="geek1">IIT DH MOODLE</div>  
    </marquee> 
    </div> <br><br>

  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2>Login Form</h2>
        <form action="validation.php" method="post">
          <div class="form-group">
            <label>Username</label>
            <input placeholder="Enter Username" type="text" name="user" class="form-control">
          </div>

          <div class="form-group">
            <label>Password</label>
            <input placeholder="Enter password" type="password" name="password" class="form-control">
          </div>
          
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
        
      </div>
      
    </div>
    
  </div>

</body>
</html>