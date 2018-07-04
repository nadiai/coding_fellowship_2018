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

function getUser($projectUserID){
	$result = dbQuery("
		SELECT *
		FROM project_users
		WHERE projectUserID = :projectUserID
	",
	array('projectUserID' => $projectUserID)
	)->fetch();

	return $result;
}

function getQuestions(){
	$result = dbQuery("
		SELECT *
		FROM project_questions_copy
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
	)->fetchAll();

	return $result;
}


function insertResponse( $projectUserID, $Answers){

	// $findElement = getQuestions();
	// $questionID = $findElement['questionID'];
	$result = dbQuery("
		INSERT INTO project_answers(projectUserID, Answers)
		VALUES ( :projectUserID, :Answers)
	",
		array('projectUserID' => $projectUserID,
		'Answers' => $Answers)
	)->fetch();
}
 ?>
