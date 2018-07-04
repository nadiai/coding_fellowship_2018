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

function insertUser($p_FirstName, $p_LastName, $p_UserEmail, $p_UserName, $p_PassWord){
	$result = dbQuery("
		INSERT INTO project_users(p_FirstName, p_LastName, p_UserEmail, p_UserName, p_PassWord)
		VALUES (:p_FirstName, :p_LastName, :p_UserEmail, :p_UserName, :p_PassWord)",
		array('p_FirstName' => $p_FirstName,
		'p_LastName' => $p_LastName,
		'p_UserEmail' => $p_UserEmail,
		'p_UserName' => $p_UserName,
		'p_PassWord' => $p_PassWord)
		)->fetch();
}

function getUser($p_UserName){
	$result = dbQuery("
		SELECT *
		FROM project_users
		WHERE p_UserName = :p_UserName
	",
	array('p_UserName' => $p_UserName)
	)->fetch();

	return $result;
}

function verifyUser($p_UserName, $p_PassWord){
	$findUser = getuser($p_UserName);
	$loginUserName = $findUser['p_UserName'];
	$loginPassWord = $findUser['p_PassWord'];
	$loginUserID = $findUser['projectUserID'];

	if ($p_UserName == $loginUserName && $p_PassWord == $loginPassWord) {
		$_SESSION['projectUserID'] = $loginUserID;
		header('Location: /Project/view/questionsForm.php');
		exit();
	}
}

function getQuestions(){
	$result = dbQuery("
		SELECT *
		FROM project_questions_copy
	")->fetchAll();

	return $result;
}

function listQuestions($Question){
	$result = dbQuery("
		SELECT *
		FROM project_questions
		WHERE Question = :Question
	",
		array('Question' => $Question)
	)->fetchAll();

	return $result;
}

//function matchQuestions()


function insertResponse($questionID, $projectUserID, $Answers){
	$result = dbQuery("
		INSERT INTO project_responses(questionID, projectUserID, Answers)
		VALUES ( :questionID, :projectUserID, :Answers)
	",
		array('questionID' => $questionID,
		'projectUserID' => $projectUserID,
		'Answers' => $Answers)
	)->fetch();
}
 ?>
