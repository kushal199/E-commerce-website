<?php
require('includes\common.php');
include('includes\header.php');
if(!isset($_SESSION['email'])){
	header('location: login.php');	
}
?>
<div class="container" style="padding-top:90px;">

<div class="row">
<div class="col-md-4 col-md-offset-4 ">

<div class="login-panel panel ">
<div class="panel-heading">
<h3 class="">Change Password</h3>
</div>
<div class="panel-body">
								
<form class="form" role="form" method="post" action="settings_script.php" >
<fieldset>
											
<div class="form-group">
<input class="form-control" placeholder="Old Password" name="old_password" type="password" value="">
</div>
<div class="form-group">
<input class="form-control" placeholder="New Password" name="new_password" type="password" value="">
</div>
<div class="form-group">
<input class="form-control" placeholder="Confirm New" name="confirm_new" type="password" value="">
</div>

<input type="submit" value="submit" class="btn btn-sm btn-primary" >
 
</fieldset>
</form>
</div>
</div>
</div>
</div>
</div>
<?php
include('includes\footer.php');
?>
