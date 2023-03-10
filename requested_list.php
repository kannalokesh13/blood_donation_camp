<?php 
include "head.php";

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
</style>
</head>

<body style="color:black">
<div id="header">
<?php $active="query"; 

include "databaseconnection.php";


    $query="SELECT * FROM requested_list";
    $result=$conn->query($query);
if($result->num_rows>0){
  $options=mysqli_fetch_all($result,MYSQLI_ASSOC);
}

// print_r($options);

?>
</div>
<div id="sidebar">
<?php include 'sidebar.php'; ?>

</div>
<div id="content">
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 lg-12 sm-12">

          <h1 class="page-title">Requested List</h1>
        </div>
      </div>
      <hr>
      <table align="center" class="table table-hover">
            <tr>
            <th>S.no</th>
            <th>Name</th>
            <th style="text-align:left;">Email</th>
            <th>Mobile</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Blood Group</th>
            <th>Cause</th>
            </tr>
            <?php
            $sn=1;
            foreach($options as $option)
            {
            ?>
            <tr>
            <td><?PHP echo $sn; ?></td>
            <td><?php echo $option['name']; ?></td>
            <td style="text-align:left;"><?php echo $option['email']; ?></td>
            <td><?php echo $option['mobile_no']; ?></td>
            <td><?php echo $option['gender']; ?></td>
            <td><?php echo $option['age']; ?></td>
            <td><?php echo $option['blood_group']; ?></td>
            <td><?php echo $option['cause']; ?></td>
            </tr>
            <?php $sn++;
            }
            ?>
        </table>

      </div>
      </div>
      </div>
</body>
</html>