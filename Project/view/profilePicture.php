<?php

include('Project/include/headerPage.php');

 if(isset($_POST['but_upload'])){

	$name = $_FILES['file']['name'];
	$target_dir = "images/";
	$target_file = $target_dir . basename($_FILES["file"]["name"]);

	// Select file type
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	// Valid file extensions
	$extensions_arr = array("jpg","jpeg","png","gif");

	// Check extension
	if( in_array($imageFileType,$extensions_arr) ){

	 // Convert to base64
	 $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
	 $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
	 // Insert record
	 insertProfilePic($_SESSION['projectUserID'], $_REQUEST['p_ProfilePic)']);

	 // Upload file
	 move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
	}

 }


printheader();
 ?>
 			<title> Upload a Profile Pic </title>
			<link href='https://fonts.googleapis.com/css?family=Give You Glory' rel='stylesheet'>
			<link href='https://fonts.googleapis.com/css?family=The Girl Next Door' rel='stylesheet'>
			<script src="/Blog/include/jquery.js"></script>
			<style type="text/css">
			<?php
			 include('Project/include/projectStyle.css');
			 ?>
			</style>
		</head>
		<body class="profilePicBody">
			<div class='profilePicForm'>
				<form action="" method="post" enctype="multipart/form-data">
					<?php
					echo "
    Select image to upload:
    <input type='file' name='fileToUpload' id="fileToUpload" value=''>
    <input type="submit" value="Upload Image" name="submit">
";
?>
			</form>
			</div>
		</body>
