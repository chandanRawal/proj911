<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
	<title>Change password</title>

</head>
<body>
<?//php if(isset($_SESSION['tid'])):?>
	<form method="POST">
		<div class = "form-group">
			Previous pass:<input type="text" name="prevpass" required="true">
		</div>
		<div class="form-group">
			New pass:<input type="password" name="new" required="true">
		</div>
		<button type="submit" class="btn btn-default" name="fsub" value="submit">
	</form>
	<?php 
	if(isset($_POST['fsub'])){
		if($_POST['prevpass'] != '' || $_POST['new'] != ''){
			include_once('./connection.php');
			$conn = connectsql();
			$new = mysqli_real_escape_string($conn, $_POST['new']);
			$conn = connectsql();
			$id = $_SESSION['tid'];
			$sql = "UPDATE Regest SET pwd = '$new', cpwd = 0 WHERE team_id = '$id'";
			if(!mysqli_query($conn,$sql)) {
					echo (mysqli_error($conn));
			}else{
				header("location:./index.php?");
			}
		} else{
			echo "insert";
		}
	}
	?>
<?//php endif;?>
<?//php if(!(isset($_SESSION['tid']))){
	//header("location:index.php");
//}?>
</body>
</html>
