<?php
function Authenticate($connection){
if(isset($_POST['Login']) && $_SERVER['REQUEST_METHOD']=="POST"){
    $email= mysqli_real_escape_string($connection, $_POST['email']);
   $password= mysqli_real_escape_string($connection, $_POST['password']);
    $check="SELECT * FROM `admin` WHERE email='$email';";
    $result=mysqli_query($connection , $check) or die("failed to insert query.");
 if($result){
 if(mysqli_num_rows($result) == 1){
 $row=mysqli_fetch_assoc($result);
 $regUsername=$row['username'];
 $regEmail=$row['email'];
 $regPass=$row['password'];
 
 $verifyPass=password_verify($password, $regPass);
 if($verifyPass){
     session_start();
     $_SESSION['email']=$regEmail;
     $_SESSION['username']=$regUsername;
     $_SESSION['isAdmin']=true;
       return 1;
       exit();
 }else{
     return 1;
     exit();
 }
 }
 else{
      echo "<script>alert('You are not an admin.')
        window.location.href='../pages/samples/login.php';</script>;";
 }
 }}
}

function logout(){
  session_start();
session_unset();
session_destroy();
return 1;
}
?>