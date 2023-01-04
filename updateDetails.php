<!DOCTYPE html>
<html>
<head>
	
	<?php 
		include('dbconn.php');
    	include('session.php');
		 include('header.php');
	?>
    
</head>

<body>
	<div class="title text-center">
		<h2><label>Welcome <?php echo $member_row['firstname']." ".$member_row['lastname'];?></label></h2>
	</div>
	<br>
	<br>
	
	<div align="right">
		<a href="viewDetails.php"><button class="btn btn-primary">View Profile</button></a>
		<a href="logout.php"><button class="btn btn-primary">Log Out</button></a>
	</div>
	
	<form method="POST" action="updateDetails1.php" id="updateDetails" onclick>
		<div class="input-container ic3">
			<label for="username" style="color:white" class="form-label">Username</label>
			<input type="email"  id="username1" class="input" name="username" placeholder="Enter your email" required>
		</div>
		<div class="input-container ic2">
        	<label for="firstname" style="color:white">First Name</label>
			<input type="text" name="firstname" class="input" Placeholder="Enter your first name" required>
		</div>
		<div class="input-container ic2">
        	<label for="lastname" style="color:white">Last Name</label>
			<input type="text" name="lastname" class="input" Placeholder="Enter your last name" required>
		</div>
		<div class="input-container ic2">
			<label for="role" style="color:white">Role</label>
			<select name="role" id="role" class="input" aria-label="Default select example" onChange="SelectRedirect();">
				<!-- <option value="#">Choose your role</option>	 -->
				<option value="Editor">Editor</option>
				<option value="Writer">Writer</option>
			</select>
		</div>
		<button name="save" type="submit"  value="Save" class="submit">Update</button>
    </form>

<br>

<?php include('footer.php');?>

</body>
</html>