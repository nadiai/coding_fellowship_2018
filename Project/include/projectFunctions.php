<?php

function printHeader(){
	echo "
	<html>
		<head>
	";
}

function printMid(){
	echo "
		</head>
		<body>
	";
}

function printFooter(){
	echo "
		</body>
	</html>
	";
}

function insertUser($projectUserID, $p_UserName, $p_UserEmail){
	$result = dbQuery("
		INSERT INTO project_users
		VALUES
	")
}
 ?>
