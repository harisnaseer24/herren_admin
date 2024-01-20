<?php 

$server="localhost";
$username="root";
$dbpass="";
$dbname="herren";

$connection=mysqli_connect($server,$username,$dbpass,$dbname);
if(!$connection){
    die("Failed to connect");
}

?>