<?php include("../includes/layouts/header.php"); ?>
<?php require_once("../includes/functions/functions.php"); ?>
<?php require_once("../includes/functions/db_connection.php"); ?>
<?php
	if(isset($_POST["username"])){
		if(validate_user($_POST["username"],$_POST["password"])){
				echo "Valid user";
		}
		else{
			echo "<p class=\"invalid_cred\">Invalid Username or Password</p>";
		}

	}
?>
<html>
<body>
	<form action="index.php" method="POST">
		<input type="text" placeholder="username" id="username" name="username" required
       oninvalid="this.setCustomValidity('User ID is a must')" oninput="setCustomValidity('')"></input>
			 <br>
		<input type="password" placeholder="password" id="password" name="password" required
       oninvalid="this.setCustomValidity('User ID is a must')" oninput="setCustomValidity('')"></input>
		<br>
		<input type="submit" id="submit" name="Submit"></input>
	</form>
	<br>
	<hr>
	<br>
	<a href="signup.php">Sign up for new account for free!</a>
</body>
<?php include("../includes/layouts/footer.php"); ?>
