<?php
	session_start();
	session_destroy();
	session_unset();
	nset($_COOKIE['login']);
	header("location:./index.php?logout=true");
?>
