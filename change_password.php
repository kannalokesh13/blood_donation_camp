<?php
@session_start();
include "databaseconnection.php";

include "head.php";
$name=$_SESSION['name1'];
$email=$_SESSION['email1'];
if(!empty($_POST['password1']) && !empty($_POST['password2'])){
    
    $pass1=$_POST['password1'];
    $pass2=$_POST['password2'];
    
if($pass1==$pass2){
    $query="UPDATE doctor_logins SET password='$pass1' WHERE name='$name' AND email='$email'";
    if(mysqli_query($conn,$query)){
        echo '<script> alert("Password Has Changed Successfully");
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



?>
<html>
    <head>
        <style>
             <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


            </style>

</head>
<body>
<form action="#" method="post" align="center">
    <h2>Password Feilds</h2>
    <label>New Password</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="password1"><br><br>
    <label>confirm password</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="password2"><br><br>
    <input type="submit">

</form>
</body>


    </html>
