<?php 

include "head.php";
echo "<link rel='stylesheet' type='text/css' href='css.css' />";
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
<?php $active="add"; 

include "databaseconnection.php";

if(!empty($_POST['name']) && !empty($_POST['mobile']) && !empty($_POST['email']) && !empty($_POST['gender'])){
    if(!empty($_POST['age']) && !empty($_POST['blood_group'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $mobile=$_POST['mobile'];
    $blood_group=$_POST['blood_group'];

    // echo $name;
    // echo $email;
    // echo $gender;
    // echo $age;
    // echo $mobile;
    // echo $blood_group;

    $query="INSERT INTO donars_list(name,email,mobile,gender,age,blood_group) VALUES('$name','$email','$mobile','$gender','$age','$blood_group')";
    if(mysqli_query($conn,$query)){
        echo '<script> alert("succefully created Your Record");
               document.location.href("donate_blood.php");
             </script>';
        }
    

}
}

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

          <h1 class="page-title">Add Donor</h1>
        </div>
      </div>
      <hr>
      <div class = "login_box">
      <form action="#" method="POST">
    <label>Name</label>
    <label>Mobile No</label>
    <input type="text" name="mobile"><br><br>
    <label>EMail</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="email" name="email"><br><br>
    <label>Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select name="gender">
        <option value="male">Male</option>
        <option value="female">Fe-Male</optiion>
        <option value="other">Other</option>

</select><br><br>
    <label>Age</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="age"><br><br>
    <label>Blood Group</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select name="blood_group">
        <option value="A+">A+</optiion>
        <option value="A-">A-</optiion>
        <option value="B+">B+</option>
        <option value="B-">B-</optiion>
        <option value="O+">O+</option>
        <option value="O-">O-</optiion>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</optiion>


</select>
<div class="sub" align="center">
    <input type="submit">
</div>
</form>
</div>

      </div>
      </div>
      </div>
</body>
</html>
