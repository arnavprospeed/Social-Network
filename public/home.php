<?php include("../includes/layouts/header.php"); ?>
<?php require_once("../includes/functions/functions.php"); ?>
<?php require_once("../includes/functions/db_connection.php"); ?>
<?php

?>
<html>
<body>
	<div id="main">
		<h3> Logged in as <?php echo htmlentities($SESSION["username"])?></h3>
	</div>
</body>
<?php include("../includes/layouts/footer.php"); ?>
