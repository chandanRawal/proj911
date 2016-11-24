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
<?php
	$file = "./pdfs/".$_SESSION['tid'];
	if(file_exists($file)){
		$pdf_exist = "TRUE";
	}else{
		$pdf_exist = "FALSE";
	}
?>
	<div id="main">

				

				<div id="content">
				
						<div class="row">
								<div class="col-md-6">
										<div class="well bg-lightseagreen">
												<div class="widget-tile">
													<section>
															
													<h5><strong>REGISTERED</strong> MEMBERS </h5>
															
														<h2><?php echo $tnum?></h2>
															
															<div class="progress progress-xs progress-white progress-over-tile">		
															<div class="progress-bar  progress-bar-white" aria-valuetransitiongoal=<?php echo $tnum;?> aria-valuemax="3"></div>
															</div>
													</section>
													<div class="hold-icon"><i class="fa fa-users"></i></div>
												</div>
										</div>
								</div>

									
								<div class="col-md-6">
										<div class="well" id = "tobe" style="color: white">
												<div class="widget-tile">
													<section>
															<h5><strong>PDF</strong> SUBMISSION </h5>
															<h2 id = "check"><?php echo $pdf_exist;?></h2>
													</section>
													<div class="hold-icon"><i id = "fntaws"></i></div>
												</div>
										</div>
								</div>
								
						</div>
						<div class="row">
						

								
								<div class="col-md-12">
										<div class="well bg-inverse">
												<div class="widget-tile">
													<section>
															<h5><strong>RATE</strong> YOUR FAV TEAM </h5>

													</section>
													<div class="hold-icon"><i class="fa fa-laptop"></i></div>
												</div>
										</div>
								</div>
								<div class="col-lg-4">

										<section class="panel">
												<div class="widget-clock">
														<div id="clock"></div>
												</div>
										</section>							
								</div>
						</div>
						<!-- //content > row-->
						
				</div>
				<!-- //content-->
				
		</div>
		<!-- //main-->
		<script type="text/javascript">
			var check = document.getElementById('check').innerHTML;
			if(check == "TRUE"){
				document.getElementById('tobe').style.backgroundColor = "lightseagreen";
				document.getElementById('fntaws').className = "fa fa-check";
			}else{
				document.getElementById('tobe').style.backgroundColor = "red";
				document.getElementById('fntaws').className = "fa fa-times";
			}

		</script>

		
		<?php include('footer.php'); ?>