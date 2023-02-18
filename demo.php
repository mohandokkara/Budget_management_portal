<?php
	$FileName=$_FILES['n1']['name'];
	$TmpName=$_FILES['n1']['tmp_name'];
	
	move_uploaded_file($TmpName,$FileName);
	
	echo("file uploaded successfully");
?>