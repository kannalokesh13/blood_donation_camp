<?php
@session_start();
include "databaseconnection.php";
if(!empty($_POST['doctor']) && !empty($_POST['hospital']) && !empty($_POST['designation']) && !empty($_POST['mobile'])){
    if(!empty($_POST['email'] && !empty($_POST['user']) && !empty($_POST['password1']) && !empty($_POST['password2']))){
    $pass1=$_POST['password1'];
    $pass2=$_POST['password2'];
    $email=$_POST['email'];
    $d_name=$_POST['doctor'];
    $h_name=$_POST['hospital'];
    $mobile=$_POST['mobile'];
    $u_name=$_POST['user'];
    $designation=$_POST['designation'];
if($pass1==$pass2){
    $query="INSERT INTO doctor_logins(name,hospital_name,designation,email,mobile_no,user_name,password) VALUES('$d_name','$h_name','$designation','$email','$mobile','$u_name','$pass1')";
    if(mysqli_query($conn,$query)){
        echo '<script> alert("succefully created");
               document.location.href("register.php");
             </script>';
        }
    
}
else{
    echo '<script> alert("password is not matched");
               document.location.href("register.php");
             </script>';
}
}
}


?>

<html>
    <head>
        <style>

            </style> 
</head>

<body>
    <div align="right">
    <a href="admin.php">go back</a>
</div>
<form action="#" method="post" align="center">
    <label>Doctor Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="doctor"><br><br>
    <label>Hospital Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="hospital"><br><br>
    <label>Designation</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="designation"><br><br>
    <label>Mobile No</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="mobile"><br><br>
    <label>EMail</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="email" name="email"><br><br>
    <label>User Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="user"><br><br>
    <label>Password</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="password1"><br><br>
    <label>confirm password</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="password2"><br><br>
    <input type="submit">

</form>

</body>

    </html>