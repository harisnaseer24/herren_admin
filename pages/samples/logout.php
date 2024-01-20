<?php 
require_once("../../process/process_auth.php");
if(logout()==1){
    header("location: login.php");
}

?>