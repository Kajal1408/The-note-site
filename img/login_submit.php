<?php
include 'common.php';
$con=mysqli_connect('localhost','root','','subjects');
$email=mysqli_real_escape_string($con,$_POST['email']);

$password=mysqli_real_escape_string($con,$_POST['password']);
$password1=md5($password);
$select_query="SELECT id,email FROM users WHERE email='$email' AND password='$password'";
$select_query_result=mysqli_query($con,$select_query);
if(mysqli_num_rows($select_query_result)==0)
{
    
}
else{
    $row=mysqli_fetch_array($select_query_result);
    $_SESSION['email']=$email;
    $_SESSION['id']=mysqli_insert_id($con);
    header('location:index.php');
}


?>

