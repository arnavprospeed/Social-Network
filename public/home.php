<?php session_start(); ?>
<?php include("../includes/layouts/header.php"); ?>
<?php require_once("../includes/functions/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("../includes/functions/db_connection.php"); ?>
<?php

?>
<html>
<body>
	<div id="main">
		<h3> Logged in as <?php echo htmlentities($_SESSION["username"])?></h3>
	</div>
</body>
<a href="logout.php">Log out</a>
<?php include("../includes/layouts/footer.php"); ?>
