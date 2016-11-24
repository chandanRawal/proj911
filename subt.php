<?php
	session_start();
	if(!isset($_SESSION['login']) && $_SESSION['login']!= true){
		header("location:./index.php");
	}
	include 'connection.php';
	$conn = connectsql();
		$id = $_SESSION['tid'];
		$sql = "SELECT * FROM team_mem WHERE team_id = '$id'";
		$query = mysqli_query($conn,$sql);
		$armx = array();
		while ($row = mysqli_fetch_assoc($query)) {
     		array_push($armx, $row['mem']);
    	}
		$tnum = mysqli_num_rows($query);
		if($tnum >= 3){
			die();
			header("location:index.php");
		}else
		var_dump($_POST);
		$mem1 = mysqli_real_escape_string($conn, $_POST['mem1']);
		$mem2 = mysqli_real_escape_string($conn, $_POST['mem2']);
		$mem3 = mysqli_real_escape_string($conn, $_POST['mem3']);
		$memb = array($mem1,$mem2,$mem3);
		$tid = $_SESSION['tid'];
		if($mem1 != '' && !(in_array("mem1", $armx))){
			$sql = "INSERT INTO team_mem (team_id,team_memb,mem) VALUES
			('$tid','$mem1','mem1')";
				if(!mysqli_query($conn,$sql)){
					die (mysqli_error($conn));
				}else{
					
				}	

		}if ($mem2 != '' && !(in_array("mem2", $armx))) {
			$sql = "INSERT INTO team_mem (team_id,team_memb,mem) VALUES
			('$tid','$mem2','mem2')";
				if(!mysqli_query($conn,$sql)){
					die (mysqli_error($conn));
				}else{
					
				}		
		}if ($mem3 != '' && !(in_array("mem3", $armx))) {
			$sql = "INSERT INTO team_mem (team_id,team_memb,mem) VALUES
			('$tid','$mem3','mem3'	)";
				if(!mysqli_query($conn,$sql)){
					die (mysqli_error($conn));
				}else{
					
				}			
		}
		header("location:./adduser.php");

?>
