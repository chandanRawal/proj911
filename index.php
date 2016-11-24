<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link href="assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="row">
	<div class = "col-lg-4">
		

	</div>
	<!-- form and model -->
		<div class="container-fluid" style="background: orange;width:50%;margin-top: 20%">
			<form action="#" method="POST">
			  <div class="form-group">
			    <label for="email1">UserName</label>
			    <input type="text" class="form-control" id="email1" placeholder="Username" name="usrname" required="true">
			  </div>
			  <div class="form-group">
			    <label for="password1">Password</label>
			    <input type="password" class="form-control" placeholder="Password" name="pass" required="true">
			   </div>
			  <button type="submit" class="btn btn-default" name = "subm">Submit</button>
			  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Register</button>
			  <p id = 'retur' style="float: right;"></p>
			</form>
		</div>


		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Regestration</h4>
		      </div>
		      <div class="modal-body">
				<form action="#" method="POST" onsubmit="return checkf()" enctype="multipart/form-data">
					  <div class="form-group" >
					    <label for="memail1">Email</label>
					    <input type="text" class="form-control" id="email1" placeholder="Email" name="memail" required="true">
					  </div>			  
					  <div class="form-group">
					    <label for="mteam">Team name</label>
					    <input type="text" class="form-control" placeholder="team_name" name="mteam" required="true">
					   </div>
					  <div class="form-group">
					    <label for="mcollege">College</label>
					    <input type="text" class="form-control" placeholder="College" name="mcollege" required="true">
					   </div>
					   <div class="form-group">
					   	<label for="userfile">Upload Team leaders PDF</label>
					   	<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
						<input name="userfile" type="file" id="userfile"> 
					   </div>					   
					   <input type="submit" name="submod" class="btn btn-default">
					   <p id = "mretur"></p>
				</form>       
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>
</div>	
<?php
	include_once('./logreg.php');
?>
<script>
function checkf() {
if(document.getElementById('userfile').value == ''){
		alert('file is not here');
		return false;
	}
}
</script>
    <script src="jqery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
