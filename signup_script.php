<?php 

require('includes\common.php');


$name = mysqli_real_escape_string($_POST['name']);
$email = $_POST['email'];
$password = $_POST['password'];
$contact = mysqli_real_escape_string($_POST['contact']);
$city = mysqli_real_escape_string($_POST['city']);
$address = mysqli_real_escape_string($_POST['address']);

$user_registration_query = "insert into users(name,email,password,contact,city,address) values ('$name','$email','$password','$contact','$city','$address')";

$user_registration_submit = mysqli_query($conn, $user_registration_query) or die(
header('location: login.php')
);



$_SESSION['email'] = $email;
$_SESSION['id'] = mysql_insert_id($conn);

header('location: products.php');




?>