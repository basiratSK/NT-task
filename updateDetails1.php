<?php 
   include('dbconn.php');
   $username = $_POST['username'];
   $firstname = $_POST ['firstname'];
   $lastname = $_POST ['lastname'];
   $role = $_POST['role'];
  
   $sql="UPDATE user SET firstname='$firstname',lastname='$lastname',role='$role' WHERE username='$username'";
   mysqli_query($conn,$sql);
?>
		
		<script>
			alert('Your profile has been updated.');
			window.location = 'viewDetails.php';
		</script>	