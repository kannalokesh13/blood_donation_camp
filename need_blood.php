<?php
@session_start();
include "header.php";
include "databaseconnection.php";
echo "<link rel='stylesheet' type='text/css' href='css.css' />";
if(!empty($_POST['name']) && !empty($_POST['mobile']) && !empty($_POST['email']) && !empty($_POST['gender'])){
    if(!empty($_POST['age']) && !empty($_POST['blood_group']) && !empty($_POST['cause'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $mobile=$_POST['mobile'];
    $blood_group=$_POST['blood_group'];
    $cause=$_POST['cause'];

    // echo $name;
    // echo $email;
    // echo $gender;
    // echo $age;
    // echo $mobile;
    // echo $blood_group;

    $query="INSERT INTO requested_list(name,email,mobile_no,gender,age,blood_group,cause,approve) VALUES('$name','$email','$mobile','$gender','$age','$blood_group','$cause','pending')";
    if(mysqli_query($conn,$query)){
        echo '<script> alert("succefully Requested And You Have To Wait For The Approval");
               document.location.href("need_blood.php");
             </script>';
        }
    

}
}
// else{
//     echo '<script> alert("Require All Details...!");
//                document.location.href("need_blood.php");
//              </script>';
// }


?>

<html>
    <head>
        <style>

            </style> 
</head>

<body>
<div class = "login_box">
<form action="#" method="POST">
    <label>Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="name"><br><br>
    <label>Mobile No</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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


</select><br><br>
<label>Cause</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="cause"><br><br>
    <div class="sub" align="center">
    <input type="submit">
</div>

</form>
</div>
</body>

    </html>