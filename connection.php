<?php

session_start();


$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'she');

$username = $_POST['username'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];

$s = " select * from registration where username = '$username' ";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "username already taken";
}
else{
    $reg = " insert into registration(username, gender, email, password, number) values ('$username', '$gender', '$email', '$password', '$number')";
    mysqli_query($con, $reg);
 header('location:login.php');

}
?>