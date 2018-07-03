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

function getQuestions(){
	$result = dbQuery("
		SELECT *
		FROM project_questions
	")->fetchAll();

	return $result;
}

function listQuestions($questionID){
	$result = dbQuery("
		SELECT *
		FROM project_questions
		WHERE questionID = :questionID
	",
		array('questionID' => $questionID)
	)->fetch();

	return $result;
}
 ?>
