<!DOCTYPE html>
<html>
<head>

        <style type="text/css">
        body{
            background-image: url("moodle.png");
            background-repeat:no-repeat;
            background-size: cover; 
        }
        footer {
      background-color:black;
      color: white;
      padding: 15px;
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
        <h2>Add Student</h2>

        <form action="addStudent.php" method="post">
          <div class="form-group">
            <label>Username:</label>
            <input placeholder="Enter Roll Number" type="text" name="user" class="form-control">
          </div>

          <div class="form-group">
            <label>Password:</label>
            <input placeholder="Enter Password" type="password" name="password" class="form-control">
          </div>

          <div class="form-group">
            <label>Name:</label>
            <input placeholder="Enter your Name" type="text" name="naam" class="form-control">
          </div>
          <div class="form-group">
            <label>COURSE 1:</label>
            <input placeholder="Enter Course Code" type="text" name="course_1" class="form-control">
          </div>
          <div class="form-group">
            <label>COURSE 2:</label>
            <input placeholder="Enter Course Code" type="text" name="course_2" class="form-control">
          </div>

          <div class="form-group">
            <label>COURSE 3:</label>
            <input placeholder="Enter Course Code" type="text" name="course_3" class="form-control">
          </div>
            <button type="submit" class="btn btn-success">Add</button>
        </form>
        
      </div>
      
    </div>
    
  </div>
  
</body>
</html>