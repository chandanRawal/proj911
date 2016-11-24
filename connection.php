<?php
	function connectsql(){	
		$host = "localhost";
		$usrname = "root";
		$pass = "root";
		if($cont = new mysqli($host,$usrname,$pass,"users")){
			return $cont;
		}else{
			return (mysqli_error($cont));
		}
	}
?>