<?php

@session_start();
include "head.php";
$mail=$_SESSION['email1'];



?>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>

#sidebar{position:relative;margin-top:-20px}
#content{position:relative;margin-left:210px}
@media screen and (max-width: 600px) {
  #content {
    position:relative;margin-left:auto;margin-right:auto;
  }
}


.block-anchor {
            color:red;

            cursor: pointer;
        }
</style>
</head>

<body style="color:black;" >

  <?php
  include 'databaseconnection.php';
    //include 'session.php';
    
    ?>

<div id="header">

</div>
<div id="sidebar">
<?php
$active="dashboard";
include 'sidebar.php'; ?>

</div>
<div id="content">

  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 lg-12 sm-12">
          <h1 class="page-title">Dashboard</h1>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3">
              <div class="panel panel-default panel-info" style="border-radius:50px;">
                <div class="panel-body panel-info bk-primary text-light" style="background-color:#D6EAF8; border-radius:50px">
                  <div class="stat-panel text-center">
                    <?php
                      $sql =" SELECT * from donars_list ";
                      $result=mysqli_query($conn,$sql) or die("query failed.");
                      $row=mysqli_num_rows($result);

                    ?>


                    <div class="stat-panel-number h1"><?php echo $row?></div>
                    <div class="stat-panel-title text-uppercase">Blood Donors Available </div>
                    <br>
                      <button class="btn btn-danger" onclick="window.location.href = 'donar_list.php';">
                        Full Detail <i class="fa fa-arrow-right"></i>
                      </button>


                  </div>
                </div>

              </div>
            </div>

            <div class="col-md-3">
              <div class="panel panel-default panel-info" style="border-radius:50px;">
                <div class="panel-body panel-info bk-primary text-light" style="background-color:#ABEBC6;border-radius:50px;">
                  <div class="stat-panel text-center">
                    <?php
                      $sql1 =" SELECT * from requested_list ";
                      $result1=mysqli_query($conn,$sql1) or die("query failed.");
                      $row1=mysqli_num_rows($result1);

                    ?>


                    <div class="stat-panel-number h1 "><?php echo $row1?></div>
                    <div class="stat-panel-title text-uppercase"> All Requesters For Blood </div>
                    <br>
                    <button class="btn btn-danger" onclick="window.location.href = 'requested_list.php';">
                      Full Detail <i class="fa fa-arrow-right"></i>
                    </button>
                  </div>
                </div>

              </div>
            </div>

            <!-- <div class="col-md-3">
              <div class="panel panel-default panel-info" style="border-radius:50px;">
                <div class="panel-body panel-info bk-primary text-light" style="background-color:#E8DAEF ;border-radius:50px; ">
                  <div class="stat-panel text-center">
                    <?php
                    //   $sql2 ="SELECT * from contact_query where query_status=2 ";
                    //   $result2=mysqli_query($conn,$sql2) or die("query failed.");
                    //   $row2=mysqli_num_rows($result2);

                    ?>


                    <div class="stat-panel-number h1 "><?php echo $row2 ?></div>
                    <div class="stat-panel-title text-uppercase"> Pending Queries </div>
                    <br>
                    <button class="btn btn-danger" onclick="window.location.href = 'pending_query.php';">
                      Full Detail <i class="fa fa-arrow-right"></i>
                    </button>
                  </div>
                </div>

              </div>
            </div>



        </div>
      </div>
    </div> -->
     <form method="post" name="" action="admin.php" class="form-horizontal">
       <div class="form-group">
         <div class="col-sm-8 col-sm-offset-4" style="float:left">

           <button class="btn btn-primary" name="submit" type="submit">Go to Login Page</button>
         </div>
       </div>
     </form>


</body>
</html>
