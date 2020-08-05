<?php
	require"uploadFiles.php";
	$upload = new UploadFiles();
	if (isset($_POST['envoyer']) && !empty($_POST['envoyer'])) {
		
		$upload->Upload($_FILES);
		
		var_dump($_FILES);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>upload files</title>
</head>
<body>
	<h1>Upload de fichier en php</h1>
	<fieldset>
		<legend>Upload d'image en php</legend>
		<form method="post" action="" enctype="multipart/form-data">
		<input type="file" name="upload">
		<input type="submit" name="envoyer" value="ENVOYER">
		</form>
	</fieldset>

</body>
</html>
