<?php require_once("src/include/session.php"); ?>
<?php require_once("src/include/functions.php"); ?>

<?php
	$_SESSION["admin_id"] = null;
	$_SESSION["username"] = null;
	redirect_to("login.php");
?>