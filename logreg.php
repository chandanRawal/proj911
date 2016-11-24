 <?php
 	include_once ('connection.php');
	$conn = connectsql();
	if (!$conn) {
	    die("Connection failed: " . $conn->connect_error);
	}else{
		if(isset($_POST['usrname'])&&isset($_POST['pass'])){
			$uname = mysqli_real_escape_string($conn, $_POST['usrname']);
			$pass = mysqli_real_escape_string($conn, $_POST['pass']);
					
			if(isset($_POST['subm'])){
				$sql = "SELECT * FROM Regest WHERE email = '$uname' AND pwd = '$pass'";
				$query = mysqli_query($conn,$sql);
				$nrow = mysqli_num_rows($query);
				if($nrow!=0){
					$row = mysqli_fetch_assoc($query);
					$name = $row['team_name'];
					$id = $row['team_id'];
					$cpw = $row['cpwd'];
					if($cpw == 1){
						$_SESSION['tid'] = $id;
						header("location:./changepasswd.php");
					}else{
						session_start();
						$_SESSION['login'] = true;
						$_SESSION['tid']=$id;
						header("location:./dashboard.php?tname=$name");
					}
				}else{
					echo "<script>
						var x = document.getElementById('retur').innerHTML = 'incorrect username or password';
					</script>";
					die();
				}
			}
		}
	}

if(isset($_POST['submod'])){
	if($_POST['mteam'] != '' && $_POST['memail'] != '' && $_POST['mcollege'] != ''){
		//$muname = mysqli_real_escape_string($conn, $_POST['musrname']);
		$memail = mysqli_real_escape_string($conn, $_POST['memail']);
		$mteam = mysqli_real_escape_string($conn, $_POST['mteam']);
		$mcollege = mysqli_real_escape_string($conn, $_POST['mcollege']);
		$teamid = mt_rand(1111,9999) . $mteam . mt_rand(111,999);
		$fileName = $_FILES['userfile']['name'];
		$tmpName  = $_FILES['userfile']['tmp_name'];
		$fileSize = $_FILES['userfile']['size'];
		$fileType = $_FILES['userfile']['type'];
		$fp      = fopen($tmpName, 'r');
		$content = fread($fp, filesize($tmpName));
		$content = addslashes($content);
		fclose($fp);

		if(!get_magic_quotes_gpc())
		{
		    $fileName = addslashes($fileName);
}
		function rand_string($length){
	   	$keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    	$str = '';
    	$max = mb_strlen($keyspace, '8bit') - 1;
    	if ($max < 1) {
        	throw new Exception('$keyspace must be at least two characters long');
    	}
    	for ($i = 0; $i < $length; ++$i) {
        	$str .= $keyspace[random_int(0, $max)];
    	}
   		 return $str;
		}
		$passw = rand_string(8);
		$sql = "SELECT * FROM Regest WHERE email = '$memail'";
		if(mysqli_num_rows(mysqli_query($conn,$sql)) > 0){
			echo "<script>
				alert('email already registered');
			</script>";
			die ();
		}
		$sql = "INSERT INTO Regest (email,team_name,team_id,pwd,college,cpwd,pdf)
		VALUES ('$memail','$mteam','$teamid','$passw','$mcollege',1,'$content')";
						
		if(mysqli_query($conn,$sql)){
			$msg = "your password is ".$passw."for your email id".$memail;
			echo "<script>alert('REGISTERED pwd emailed')</script>";
			mail($memail, "subject", $msg);
		}else{
			die (mysqli_error($conn));
		}
	}else{
		//enter user name and pass;
	}
		
}
?> 
