<?php
@session_start();
include "header.php";
include "databaseconnection.php";
echo "<link rel='stylesheet' type='text/css' href='css.css' />";
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
// else{
//     echo '<script> alert("Require All Details...!");
//                document.location.href("donate_blood.php");
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
<form action="#" method="POST" >
    <label>Name</label>
    <input type="text" name="name">
    <label>Mobile No</label>
    <input type="text" name="mobile">
    <label>EMail</label>
    <input type="email" name="email">
    <label>Gender</label>
    <select name="gender">
        <option value="male">Male</option>
        <option value="female">Fe-Male</optiion>
        <option value="other">Other</option>

</select>
    <label>Age</label>
    <input type="text" name="age">
    <label>Blood Group</label>
    <select name="blood_group">
        <option value="A+">A+</optiion>
        <option value="A-">A-</optiion>
        <option value="B+">B+</option>
        <option value="B-">B-</optiion>
        <option value="O+">O+</option>
        <option value="O-">O-</optiion>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</optiion>
        <option value="Bombay_Blood">Bombay Blood</option>


</select>
<div class="sub" align="center">
    <input type="submit">
</div>
</form>
</div>
</body>

    </html>