<?php require_once("../includes/functions/sessions.php"); ?>
<?php require_once("../includes/functions/functions.php"); ?>

<?php
  $_SESSION=array();
  if(isset($_COOKIE[session_name()])){
    setcookie(session_name(),'',time()-42000,'/');
  }
  session_destroy();
  redirect("index.php");

?>
