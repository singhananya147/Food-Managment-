<?php

session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'she');

$username = $_POST['username'];
$password  = $_POST['password'];

$s = " select * from registration where username = '$username' && password = '$password' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $username;
    header('location:index11.php');
}
else{
    header('location:login.php');
	//alert('page is not found');
}

?>