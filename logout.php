<?php
	session_unset();
	//unset($_COOKIE['login']);
	header("location:../index.php?logout=true");
?>
