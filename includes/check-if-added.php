<?php


 function check_if_added_to_cart($item_id){
	 
	 require('includes\common.php');
	 
	 $user_id = $_SESSION['id'];
	 
	 $user_query = "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart' ";
	 
	 $user_registration_submit = mysqli_query($conn, $user_query) or die(mysqli_error($conn));
	 
	 
		if(mysqli_num_rows($user_registration_submit) >= 1){
			return 1;
		}  
		else{		 
			return 0;
		}	  
 }
 
 
 
?>
