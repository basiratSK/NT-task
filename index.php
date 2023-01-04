<!DOCTYPE html>
<html>
<head>
	<link href="jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen"/>
	<script src="js/jquery-1.9.1.min.js"></script>
	<?php 
		include('dbconn.php');
		include('header.php');
	?>
</head>

<body>
	<div class="form">
		<form id="login_form"  method="post">
		<div class="title">Welcome</div>
      	<div class="subtitle">Let's create your account!</div>
	  	<div class="input-container ic1">
	  		<label for="username" style="color:white">Username</label>			
	  		<input type="email"  id="username1" class="input" name="username" placeholder="Enter your email" required>
		</div>
		<div class="input-container ic2">
			<label for="password" style="color:white">Password</label>
			<input type="password" id="password1" class="input" name="password" placeholder="Enter your password" required>
		</div>
		<button name="login" type="submit" class="submit">Sign in</button>
	     </form>
	</div>
	
	<script>
		jQuery(document).ready(function(){
		jQuery("#login_form").submit(function(e){
		e.preventDefault();
		var formData = jQuery(this).serialize();
		$.ajax({
			type: "POST",
			url: "login.php",
			data: formData,
			success: function(html){
			if(html=='true')
			{
				$.jGrowl("Welcome Back!", { header: 'Access Granted'});
				var delay = 2000;
				setTimeout(function(){ window.location ='viewDetails	.php'}, delay);  
			}
			else
			{
			$.jGrowl("Please Check your username and Password", { header: 'Login Failed' });
			}
			}
						
		});
		return false;
		});
		});
	</script>  
  
  	</div></div><br><br>
	
	
	<?php include('header.php');?>       
	<div class="title text-center">Register here</div>
		<form method="POST" action="signup.php" id="signup" onclick>
			<div class="input-container ic2">
				<label for="username" style="color:white" class="form-label">Username</label>
					<input type="email"  id="username1" class="input" name="username" placeholder="Enter your email" required>
				</div>
				<div class="input-container ic2">
					<label for="password" style="color:white">Password</label>
					<input type="password" id="password" class="input" name="password" placeholder="Enter your password" required>
				</div>
				<div class="input-container ic2">
					<label for="confirm_password" style="color:white">Confirm Password</label>
					<input type="password"  id="confirm_password" class="input" Placeholder="Confirm your password" required>
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
				<div class="input-container ic2">
        			<label for="contact" style="color:white">Contact Number</label>
					<input type="text" name="contact" class="input" Placeholder="Your contact details" required>
				</div>
				<button name="save" type="submit"  value="Save" class="submit">Sign Up</button>
			</form>
		</div>
		
<br>

<?php include('scripts.php');?>

</body>
</html>
<script>
		var password = document.getElementById("password");
		confirm_password = document.getElementById("confirm_password");

		function validatePassword(){
			if(password.value != confirm_password.value) {
				confirm_password.setCustomValidity("Passwords Don't Match");
			} else {
				confirm_password.setCustomValidity('');
			}
		}

		password.onchange = validatePassword;
		confirm_password.onkeyup = validatePassword;
</script>

