<?php 
if(isset($_POST['addCategory'])){
    require_once('../partials/config.php');

$category_name=mysqli_real_escape_string($connection, $_POST['category_name']);
$category_desc=mysqli_real_escape_string($connection, $_POST['category_description']);


if($_FILES['category_image']['error'] ==4){
    echo "
    <script>alert('Image not found')
    window.location.href='../addnewCategory.php'
    </script>";
}else{

$category_pic=$_FILES['category_image']['name'];
$tmpname=$_FILES['category_image']['tmp_name'];
$size=$_FILES['category_image']['size'];
$validExtensions=["png","jpg","jpeg"];
$extension= explode(".",$category_pic);
$extension= strtolower(end($extension));//jpg

if($size > 1000000){
    echo "<script>alert('File too large')
    window.location.href='../addnewCategory.php'
    </script>";
    
}elseif(!in_array($extension, $validExtensions)){
    echo "<script>alert('File type not supported')
    window.location.href='../addnewCategory.php'
    </script>";
}else{

$insert="INSERT INTO `categories`(`category_name`, `category_description`, `category_picture`) VALUES ('$category_name','$category_desc','$category_pic')";
$result=mysqli_query($connection, $insert) or die("failed");
if($result){
    move_uploaded_file($tmpname, "../uploads/category_uploads/".$category_pic);
    echo "<script>alert('Category Added succesfully')
    window.location.href='../addnewCategory.php'
    </script>";
}else{
    echo "<script>alert('Something went wrong')
    window.location.href='../addnewCategory.php'
    </script>";
}
}
}
}






?>