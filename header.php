<?php
	session_start();
	if(!isset($_SESSION['login']) && $_SESSION['login']!= true){
		header("location:index.php");
	}
	include'./connection.php';
	$conn = connectsql();
	$id = $_SESSION['tid'];
	$sql = "SELECT * FROM team_mem WHERE team_id = '$id'";
	$query = mysqli_query($conn,$sql);
	$tnum = mysqli_num_rows($query);
	$armx = array();
	while ($row = mysqli_fetch_assoc($query)) {
     array_push($armx, $row['mem']);
    }
	$sql = "SELECT * FROM Regest WHERE team_id = '$id'";
	$query = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($query);
	$tname = $row['team_name'];
	$sql = "SELECT mem FROM team_mem WHERE team_id = '$id'"
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<!-- Title-->
<title>FreeOff</title>
<!-- Favicons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/android-icon-144x144.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/android-icon-114x114.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/android-icon-72x72.png">
<link rel="apple-touch-icon-precomposed" href="assets/ico/android-icon-57x57.png.png">
<link rel="shortcut icon" href="assets/ico/favicon.ico">
<!-- CSS Stylesheet-->
<link type="text/css" rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="assets/css/bootstrap/bootstrap-themes.css" />
<link type="text/css" rel="stylesheet" href="assets/css/style.css" />

<!-- Styleswitch if  you don't chang theme , you can delete -->
<link type="text/css" rel="alternate stylesheet" media="screen" title="style1" href="assets/css/styleTheme1.css" />
<link type="text/css" rel="alternate stylesheet" media="screen" title="style2" href="assets/css/styleTheme2.css" />
<link type="text/css" rel="alternate stylesheet" media="screen" title="style3" href="assets/css/styleTheme3.css" />
<link type="text/css" rel="alternate stylesheet" media="screen" title="style4" href="assets/css/styleTheme4.css" />
<script type="text/javascript">

function nospaces(t){

if(t.value.match(/\s/g)){

alert('Sorry, you are not allowed to enter any spaces');

t.value=t.value.replace(/\s/g,'');

}

}

</script>
	
<script type="text/javascript">
$(document).ready(function(){
    $('#upload').on('click',function(){
        $('#upload_form').ajaxForm({
            target:'#preview',
            beforeSubmit:function(e){
                $('.progress').show();
            },
            success:function(e){
                $('.progress').hide();
            },
            error:function(e){
            }
        }).submit();
    });
});
</script>
</head>
<body>
<div id="wrapper" style="margin-left: 0px ">
		<!--
		/////////////////////////////////////////////////////////////////////////
		//////////     HEADER  CONTENT     ///////////////
		//////////////////////////////////////////////////////////////////////
		-->
		<div id="header">

				<div class="logo-area clearfix">
						<h1><font color="white">AAgaz</font></h1><a href="dashboard.php" class="logo"></a><!-- left for title -->
				</div>
				<!-- //logo-area-->
				
				<div class="tools-bar">
						<ul class="nav navbar-nav navbar-right tooltip-area">	
								<li class="hidden-xs hidden-sm"><a href="#" class="h-seperate">Help</a></li>
								<li><button class="btn btn-circle btn-header-search" ><i class="fa fa-search"></i></button></li>
								<li><a href="#" class="nav-collapse avatar-header">
												<img alt="" src="assets/img/freeoffavatar.png"  class="circle">
												<span class="badge">3</span>
										</a>
								</li>
								<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
											<em><strong>Hi</strong>, <?php echo $tname ?> </em> <i class="dropdown-icon fa fa-angle-down"></i>
										</a>
										<ul class="dropdown-menu pull-right icon-right arrow">
												<li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
												<li><a href="#"><i class="fa fa-cog"></i> Setting </a></li>
												<li><a href="#"><i class="fa fa-bookmark"></i> Bookmarks</a></li>
												<li><a href="#"><i class="fa fa-money"></i> Make a Deposit</a></li>
												<li class="divider"></li>
												<li><a href="logout.php"><i class="fa fa-sign-out"></i> Signout </a></li>
										</ul>
										<!-- //dropdown-menu-->
								</li>
								<li class="visible-lg">
									<a href="#" class="h-seperate fullscreen" data-toggle="tooltip" title="Full Screen" data-container="body"  data-placement="left">
										<i class="fa fa-expand"></i>
									</a>
								</li>
						</ul>
				</div>
				<!-- //tools-bar-->
				
		</div>
		<!-- //header-->
		
		
