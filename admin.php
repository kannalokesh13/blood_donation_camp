<?php
@session_start();
include "header.php";

include "databaseconnection.php";
if(!empty($_POST['username']) && !empty($_POST['password'])){ 
    $usename = strtolower($_POST['username']);
    $pass = strtolower($_POST['password']);
//echo $usename;
$_SESSION['user1']=$usename;

//echo $pass;
$result=mysqli_query($conn,"SELECT name,password,email,user_name FROM doctor_logins where name='$usename'");
$row=mysqli_fetch_assoc($result);
// $query1="SELECT password FROM login where name='$usename'";
// $res=$conn->query($query1);

if(mysqli_num_rows($result)>0){
    // $options=mysqli_fetch_all($res,MYSQLI_ASSOC);
    // print_r($options);
    if($pass==$row["password"]){
        $_SESSION['email1']=$row["email"];
        $_SESSION['name1']=$row['name'];

        header('location:dashboard.php');
    }
//     else if(!empty($usename) && $pass ==''){
//         echo '<script type="text/javascript">
//             alert("Password..!"); 
//                 document.location.href ="index.php";
//             </script>';
// }
}
else{
    echo '<script type="text/javascript">
        alert("Your Data is Not Found Please Register And Sure You Must Be A Doctor..!"); 
            document.location.href ="admin.php";
        </script>';
}
    }
     
//      else{
//         echo '<script> alret("user is not registered");
//         document.location.href ="index.php"; </script>';
//      }
// }
?>
<html>
    <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- student menu -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
                        #anchor{
                    position: relative;
                    padding-top: 100px; //(whatever distance from the top of the page you want)
}
        </style>
</head>
<body>
<div class = "login_box">
    <form onclick="dashboard.php" method="POST" align="center">
    <div class ="form">
        <label>username</label>
        <br>
        <input type="text" name="username"><br><br>
        <label>password</label><br>
        <input type="password" name="password"><br><br>
        <input type="submit">
        </div> 
</form>
</div>
<br>
<div align ="center">
<!-- <span class = "register"><a href="register.php" class="glyphicon glyphicon-log-out" >Logout</a></span> -->
<p>If you are a new user?click on register!!</p>
<span class="register" id="anchor"><a href="register.php" align="center"><u>register</u></a></span>
</div>
</body>

    </html>