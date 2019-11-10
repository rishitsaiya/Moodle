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

  <link rel="stylesheet" type="text/css" href="bootstrap.css">
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
        <li><a href="administratorhome.php">DASHBOARD</a></li>
    </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><style="color:red">LOGOUT</style></a></li>
    </ul>
  </div>
</div>
</nav>
  <marquee bgcolor="yellow" behavior=alternate><h1><i>ADMINISTRATOR MOODLE</i></h1></marquee>
  <br><br><br><br><br>
      </div>
      <div class="col-lg-6">
        <h2>Add Faculty</h2>

        <form action="addFaculty.php" method="post">
          <div class="form-group">
            <label>Name:</label>
            <input placeholder="Enter Name" type="text" name="user" class="form-control">
          </div>

          <div class="form-group">
            <label>Password:</label>
            <input placeholder="Enter Password" type="password" name="password" class="form-control">
          </div>

          <div class="form-group">
            <label>Course:</label>
            <input placeholder="Enter Course Code" type="text" name="course_1" class="form-control">
          </div>
            <button type="submit" class="btn btn-success">Add</button>
        </form>
        
      </div>
      
    </div>
    
  </div>

</body>
</html>