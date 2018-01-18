<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Log Out</title>
  <?php
	header("Location: index.php");
	?>
</head>
</html>
