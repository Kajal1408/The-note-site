<?php

include 'common.php';
if(!isset($_SESSION['email']))
{
    header('location:index.php');
    
}
$password=mysqli_real_escape_string($con,password);
$newpassword=mysqli_real_escape_string($con,newpassword);
$renewpassword=mysqli_real_escape_string($con,renewpassword);
$p2=count($newpassword);
$p3=count($renewpassword);
if($p2!=$p3)
{
    echo "error ";
}
$user_email=$_SESSION['email'];
$select_query="SELECT password FROM users WHERE eamil='$user_email'";
$select_query_result=mysqli_query($con,$select_query);
if(mysqli_num_rows($select_query_result)!=0)
{
    $update_query="UPDATE users SET password='$newpassword' where email='$user_email'";
    $result1=mysqli_query($con,$update_query);
    echo "password updated";
}
else
{
    header('location:index.php');
    
}
?>