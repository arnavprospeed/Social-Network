<?php include("../includes/layouts/header.php"); ?>
<?php require_once("../includes/functions/functions.php"); ?>
<?php require_once("../includes/functions/db_connection.php"); ?>
<?php
	if(isset($_POST["username"])){
		if(check_available($_POST["username"])){
				echo "Username available";
		}
		else{
			echo "<p class=\"invalid_cred\">Username not available</p>";
		}

	}
?>
<html>
<body>
	<h3> Enter details for signing up:</h3>
	<form name="signup" action="signup.php" method="POST" onsubmit="return validateForm()">
		<input type="text" placeholder="new username" id="username" name="username"
		value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>" required
       oninvalid="this.setCustomValidity('User ID is a must')" oninput="setCustomValidity('')"></input>
			 <!--<input type="button" value="Check Availability" onsubmit="signup.php"></input>-->
			 <br>
		<input type="password" placeholder="password" id="password" name="password" required
       oninvalid="this.setCustomValidity('Please provide a password')" oninput="setCustomValidity('')"></input>
			 <br>
	  <input type="text" placeholder="Full Name" id="name" name="name"
		value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>" required
			 oninvalid="this.setCustomValidity('Please enter your name')" oninput="setCustomValidity('')"></input>
			 <br>
		<input type="text" placeholder="phone number" id="phone_no" name="phone_no"
		value="<?php echo isset($_POST['phone_no']) ? $_POST['phone_no'] : '' ?>" required
		   oninvalid="this.setCustomValidity('Please enter your Phone no')" oninput="setCustomValidity('')"></input>
			 <br>
		<input type="text" placeholder="Email address" id="email_id" name="email_id"
		value="<?php echo isset($_POST['email_id']) ? $_POST['email_id'] : '' ?>" required
	 		 oninvalid="this.setCustomValidity('Please enter your email id')" oninput="setCustomValidity('')"></input>
		<br>
		<input type="submit" id="signup.php" name="Submit"></input>
	</form>
	<br>
	<hr>
	<br>
	<a href="index.php">Have an account? Log in</a>
	<br><br>
</body>
<?php include("../includes/layouts/footer.php"); ?>
