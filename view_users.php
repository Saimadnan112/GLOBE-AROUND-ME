<?php 

	include("includes/header.php");
	
	$query = mysqli_query($con, "SELECT * FROM users ORDER by 1 DESC");
	
	$i = 0;
	
	while($row = mysqli_fetch_array($query)){
		
		$user_id = $row['id'];
		$fname = $row['first_name'];
		$lname = $row['last_name'];
		$username = $row['username'];
		$email = $row['email'];
		$user_closed = $row['user_closed'];
		$i++;	

?>

<html>

<head> 
	<title> Users </title> 
</head>

<body> 

		<div class="table-responsive">
		  <table class="table" align="center" width="1000" border="4">
			<thead>
				<tr align="">	
					<th> Id </th>
					<th> Username </th>
					<th> First Name </th>
					<th> Last Name </th>
					<th> Email </th>
					<th> User Closed </th>
					<th> Edit </th>
					<th> Delete </th>
				</tr>
			</thead>
			
			<tbody>
				<tr align="">
					<td> <?php echo $user_id; ?> </td>
					<td> <?php echo $username; ?> </td>
					<td> <?php echo $fname ?> </td>
					<td> <?php echo $lname; ?> </td>
					<td> <?php echo $email; ?> </td>
					<td> <?php echo $user_closed; ?> </td>
					<td><a href="view_users.php?view_users&edit=<?php echo $user_id?>"> Edit </td>
					<td><a href="delete.php?del=<?php echo $user_id ?>"> Delete</td>
				</tr>
			</tbody>			
	<?php } ?>
		  </table>
</div>		
</body>

</html>