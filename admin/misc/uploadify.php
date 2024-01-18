<?php
/*
Uploadify
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
Released under the MIT License <http://www.opensource.org/licenses/mit-license.php> 
*/

// Define a destination
$targetFolder = '/travel-main/admin/uploads'; // Relative to the root

if (!empty($_FILES)) {
	$tempFile = $_FILES['photo']['tmp_name'];
	$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
	//$targetPath = $targetFolder . basename($_FILES["fileToUpload"]["name"]);
	//$targetFile = rtrim($targetPath,'/') . '/' . $_FILES['Filedata']['name'];
	$targetFile = rtrim($targetPath,'/') . '/' . $tempFile;
	
	// Validate the file type
	$fileTypes = array('jpg','jpeg','gif','png'); // File extensions
	//$fileParts = pathinfo($_FILES['Filedata']['name']);
	$fileParts = pathinfo($tempFile, PATHINFO_EXTENSION);
	
	//if (in_array($fileParts['extension'],$fileTypes)) {
	if (in_array($fileParts,$fileTypes)) {
		move_uploaded_file($tempFile,$targetFile);
		//echo '1';
	} else {
		echo 'Invalid file type.';
	}
}
?>
w