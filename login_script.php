

<?php 
require('includes\common.php');

$email = $_POST['email'];
$password = $_POST['password'];


$user_loginscript_query = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";
$mysqli_result = mysqli_query($conn, $user_loginscript_query) or die(mysqli_error($conn));

 
if(mysqli_num_rows($mysqli_result) == 0){
	
	header('location: login.php');	 
 
}
else{
	
	$row = mysqli_fetch_array($mysqli_result);
    $_SESSION['email'] = $row['email'];
    $_SESSION['id'] = $row['id'];
	
	
	header('location: products.php');
 } 


?>