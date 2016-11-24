
	<!--
		/////////////////////////////////////////////////////////////////////////
		//////////     HEADER  CONTENT     ///////////////
		//////////////////////////////////////////////////////////////////////
		-->
		
		<?php include('header.php'); ?>
		
		<!--
		/////////////////////////////////////////////////////////////////////////
		//////////     SLIDE LEFT CONTENT     //////////
		//////////////////////////////////////////////////////////////////////
		-->
		
		<?php include('slide_left.php'); ?>
		
		<!--
		/////////////////////////////////////////////////////////////////////////
		//////////     TOP SEARCH CONTENT     ///////
		//////////////////////////////////////////////////////////////////////
		-->
		<?php include('top_searchbar.php'); ?>
		
		<!--
		/////////////////////////////////////////////////////////////////////////
		//////////     MAIN SHOW CONTENT     //////////
		//////////////////////////////////////////////////////////////////////
		-->
			<div id="main">
		
				<ol class="breadcrumb">
						<li><a href="dashboard.php">Home</a></li>
						<li><aclass = "active" >Add Member</a></li>
				</ol>
				<!-- //breadcrumb-->
				<style type="text/css">
					.form-control{
						width: 40%;
					}
				</style>
				<div id="content">
				
						<div class="row">
							
							<div class="col-lg-8"></div>
								
										<section class="panel">
												<header class="panel-heading sm" data-color="theme-inverse">
														<h2><strong>ADD MEMBERS</strong>&nbsp&nbsp&nbsp<label>Users already registerd : <strong><?php echo $tnum ?>&nbsp&nbsp&nbsp*(max no of members allowed is 3 once a mem is added their name can be edited by visting edit team)</strong></label></h2>
												</header>
												
												<div class="panel-heading">
														<b>Add User Details</b>
												</div>
												</br>
												<div class="panel-body">
														<form class="form-horizontal" data-collabel="3" data-alignlabel="left" action="./subt.php" method="POST" enctype="multipart/form-data" ">
																<div class="form-group">
																		<label class="control-label">Member 1</label>
																		<div>
																				<input type="text" class="form-control" id = "disabledInput0" placeholder="Enter Name" name="mem1" <?php if(in_array('mem1', $armx)):?> 
																					disabled value = "member added to edit go to edit team"<?php endif ?>
																				>
															
																		</div>
													
																</div>
																
																<div class="form-group">
																		<label class="control-label">Member 2</label>
																		<div>
																				<input type="text" class="form-control" id = "disabledInput1" placeholder="Enter Name" name="mem2"  <?php if(in_array('mem2', $armx)) :?> 
																					disabled value = "member added to edit go to edit team"<?php endif ?> 
																				>
															
																		</div>
													
																</div>

																<div class="form-group">
																		<label class="control-label">Member 3</label>
																		<div>
																				<input type="text" class="form-control" id = "disabledInput2" placeholder="Enter Name" name="mem3"  <?php if(in_array('mem3', $armx)): ?> 
																					disabled value = "member added to edit go to edit team"<?php endif ?>
																				>
															
																		</div>
												
																</div>																																
																</br>
																<div class="form-group offset">
																		<div>
																				<input type="submit" class="btn btn-theme" value="Add Member" id = "sub">
																		</div>
																</div>
														</form>
														</br>
												</div>
										</section>
										
								<!-- //content > row > col-lg-12 -->
								
						</div>
						<!-- //content > row-->
						
				</div>
				<!-- //content-->
		</div>
		<script type="text/javascript">
		
			var mem1 = document.getElementById('disabledInput0');
			var mem2 = document.getElementById('disabledInput1');
			var mem3 = document.getElementById('disabledInput2');
				if(mem1.disabled == true && mem2.disabled == true && mem3.disabled == true){
				document.getElementById("sub").disabled = true;
		}
		</script>

		<!-- //main-->
	<!--
		///////////////////////////////////////////////////////////////////
		//////////     MODAL MESSAGES NOTIFICATION    //////////
		///////////////////////////////////////////////////////////////
		-->
		<?php include('models.php'); ?>
		
	<!--
		//////////////////////////////////////////////////////////////
		//////////     LEFT NAV MENU     //////////
		///////////////////////////////////////////////////////////
		-->

				<!--
		/////////////////////////////////////////////////////////////////
		//////////     RIGHT NAV MENU     //////////
		/////////////////////////////////////////////////////////////
		-->

		<!--
		////////////////////////////////////////////////////////////////////////
		//////////   FOOTER  JAVASCRIPT  LIBRARY     //////////
		/////////////////////////////////////////////////////////////////////
		-->
		<?php include('footer.php'); ?>
