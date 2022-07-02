<?php 
include 'common.php';
$email=mysqli_real_escape_string($con,$_POST['email']);
$name=$_POST['name'];
$contact=$_POST['contact'];
$password=$_POST['password'];
$city=$_POST['city'];
$address=$_POST['address'];
$select_query="SELECT id FROM users WHERE email='$email'";
$select_query_result=mysqli_query($select_query);
$row=mysqli_num_rows($select_query_result);
if($row>0){
    echo "email already exists";
}
else
{
   $insert_query="insert into users(name,email,password,contact,city,address) values('$name','$email','$password','$contact','$city','$address')";
   $result=mysqli_query($con,$insert_query);
   $_SESSION['id']=mysqli_insert_id($con);
   heaeder('location:product.php');
}
?>