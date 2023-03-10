<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .navbar {
    background-color: #333333  ;
    padding: 10px 10px;
    color:#FF0404  ;
  }
  .navbar a {
    float: left;
    color: white;
    text-align: center;
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    line-height: 25px;
  }
  .navbar-brand {
    font-size: 25px;
    font-weight: bold;

  }
  .navbar a {
    float: none;
    display: block;
    text-align: left;
  }
  .navbar-right {
    float: none;
  }
   #qq:hover{
    background-color:#E5E8E8 ;
    border-radius: 5px;
  }

  </style>
</head>
<body>
    <?php
    @session_start();
    $name=$_SESSION['name1'];
    $email=$_SESSION['email1'];
    include "databaseconnection.php";
        $sql="SELECT * FROM doctor_logins WHERE name='$name' AND email='$email'";
        $result=mysqli_query($conn,$sql) or die("query failed.");
        $row=mysqli_fetch_assoc($result);
        // echo "Hello ".$row['admin_name'];
    
    ?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" id="qq" href="dashboard.php" style="color:#F51A14;">Blood Bank & Donation Admin Panel</a>
      <h3><?php echo "Welcome ".$row['name'];  ?></h3>
    </div>
    <ul class="nav navbar-nav navbar-right">

      <li class="dropdown"><a class="dropdown-toggle" id="qw" data-toggle="dropdown" href="#" style="font-weight:bold;color:white "> <span class="glyphicon glyphicon-user"></span>&nbsp&nbsp
        <?php
        
       ?><span class="caret"></span></a>
        <ul class="dropdown-menu" style="background-color:#D6EAF8;">
          <li><a href="change_password.php" style="color:#DC7633  ">Change Password </a></li>
          <li><a href="admin.php" style="color:#D35400 ;">Logout</a></li>
        </ul>
    </li>
    </ul>

  </div>

</nav>
</body></html>
