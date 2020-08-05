<?php
	include("includes/header.php");
	
	if(isset($_POST['cancel'])){
		header("Location: settings.php");
	}
	
	if(isset($_POST['close_account'])){
		$close_query = mysqli_query($con, "UPDATE users SET user_closed='yes' WHERE username='$userLoggedIn'");
		session_destroy();
		header("Location: register.php");
	}
	
?>

<div class="main_column column">

	<h4> <b>Close Account!</br> </h4>
	Are you sure you want to close your account! <br> <br>
	Closing your account will hide your profile and all your activity from the users<br> <br>
	You can re open your account at any time by simply loging in. <br> <br>
	
	<form action="close_account.php" method="POST">
	
		<input type="submit" name="close_account" class="danger settings_submit" id="close_account" value="yes, close it!">
		<input type="submit" name="cancel" id="cancel" class="info settings_submit" value="No way!">
	
	</form>
	
</div>