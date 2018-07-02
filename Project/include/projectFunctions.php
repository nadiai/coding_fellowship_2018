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

function insertUser($p_UserName, $p_UserEmail){
	$result = dbQuery("
		INSERT INTO project_users( p_UserName, p_UserEmail)
		VALUES (:p_UserName, :p_UserEmail)",
		array('p_UserName' => $p_UserName,
		'p_UserEmail' => $p_UserEmail)
		)->fetch();
}
 ?>
