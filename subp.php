<?php
		session_start();
		$targetfolder = "./pdfs/";
		$targetfolder = $targetfolder.basename($_FILES['file']['name']);
		$n_name = $_SESSION['tid'];
		if(($_FILES['file']['type']) == "application/pdf"){
				if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder)){
					rename("pdfs/".basename($_FILES['file']['name']), "pdfs/".$n_name);
					header("location:addpdf.php?sub=true");
				}else{
					//echo "error";
				}
			}else{
				
		}		
?>
