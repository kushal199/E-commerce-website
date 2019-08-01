<?php 
require('includes\common.php');

$email = $_SESSION['email'];
if($email==null){
      header('location: index.php');
}
$password = $_POST['old_password'];
$password_new = $_POST['new_password'];

 
 $passwords = $_POST['new_password'];
 $password_cur = $_POST['confirm_new'];
 if($passwords == $password_cur){
 

$password_update = "UPDATE users SET password = '$password_new' WHERE email = '$email' AND password = '$password' ";
}
$mysqli_result = mysqli_query($conn, $password_update) or die(mysqli_error($conn));

header('location: products.php');
 


?>
