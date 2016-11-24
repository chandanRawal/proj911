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
						<li class="active">Upload Pdf</li>
				</ol>
				<!-- //breadcrumb-->
				
				<div id="content">
				
						<div class="row">
							
							<div class="col-lg-8"></div>
								
										<section class="panel">
												<header class="panel-heading sm" data-color="theme-inverse">
														<h2><strong>ADD PDF FOR YOUR TEAM :</strong>&nbsp&nbsp&nbsp<?php echo $tname; ?></h2>
												</header>

												<div class="panel-body">
														<form class="form-horizontal" data-collabel="3" data-alignlabel="left" action="./subp.php" method="post" enctype="multipart/form-data">
																
																<div class="form-group">
																		<label class="control-label">Select your pdf</label>
																		<input type="file" name="file" size="50" />
																		<br />																
																</div>
																
																</br>
																<div class="form-group offset">
																		<div>
																				<input type="submit" class="btn btn-theme" name="sub" value="Upload">
																				<button type="reset" class="btn">Reset</button>
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
		<?php include('left_menu.php'); ?>
		
		
				<!--
		/////////////////////////////////////////////////////////////////
		//////////     RIGHT NAV MENU     //////////
		/////////////////////////////////////////////////////////////
		-->
		<?php include('right_menu.php'); ?>

		<!--
		////////////////////////////////////////////////////////////////////////
		//////////   FOOTER  JAVASCRIPT  LIBRARY     //////////
		/////////////////////////////////////////////////////////////////////
		-->
		<?php include('footer.php'); ?>
