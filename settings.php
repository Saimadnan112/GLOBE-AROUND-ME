<?php

	include("includes/header.php");
	include("includes/form_handlers/settings_handler.php");

?>

<div class="main_column column">
	<!-- Main column
		account settings page -->
		
		<h2> Account Settings </h2>
		<?php
			
			echo "<img src='" . $user['profile_pic'] . "' class='small_profile_pic'>";
		?>
		
		<br>
		<a href="upload.php"> Upload new profile picture! </a><br> <br> <br>
		
		<?php 
			$user_data_query = mysqli_query($con, "SELECT first_name, last_name, email FROM users WHERE username='$userLoggedIn'");
			$row = mysqli_fetch_array($user_data_query);
			
			$first_name = $row['first_name'];
			$last_name = $row['last_name'];
			$email = $row['email'];
			
		?>
		
		Modify the values and click on 'Update Details'
		<form action="settings.php" method="POST"> 
			
			First Name: <input type="text" style="margin-left:20px;" name="first_name" id="settings_input" value="<?php echo $first_name; ?>"><br>
			Last Name: <input type="text" style="margin-left:20px;" name="last_name"  id="settings_input" value="<?php echo $last_name; ?>"> <br>
			Email: <input type="text" name="email" id="settings_input" style="margin-left:52px;" value="<?php echo $email; ?>"> <br>
			
			<?php
				echo $message;
			?>
			
			<input type="submit" name="update_details" class="success settings_submit" id="save_details" value="Update Details"><br>
			
		</form>
		
		<h4> Change Password </h4>
		<form action="settings.php" method="POST"> 
			
			Old Password: <input type="password" style="margin-left:44px;" id="settings_input" name="old_password"><br>
			New Password: <input type="password" id="settings_input" style="margin-left:37px;" name="new_password1"> <br>
			New Password Again: <input type="password" id="settings_input" name="new_password2"> <br>
			<input type="submit" name="update_password" id="update_password" class="info settings_submit" value="Update Password"><br>
		
		</form>
		
		<h4> Close Account </h4>
		<form action="settings.php" method="POST">
			<input type="submit" name="close_account" id="close_account" class="danger settings_submit" value="Close Account">
		</form>
		
		
		
		
 </div> 