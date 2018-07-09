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
		header('Location: /Project/view/projectHomePage.php');
		exit();
	}
}

function getAllSurveys(){
	$result = dbQuery("
		SELECT *
		FROM project_surveys
	")->fetchAll();

	return $result;
}

// function getAllSurveys(){
// 	$result = dbQuery("
// 		SELECT *
// 		FROM project_surveys
// 	")->fetchAll();
//
// 	return $result;
// }

function getQuestions(){
	$result = dbQuery("
		SELECT *
		FROM project_questions_copy
	")->fetchAll();

	return $result;
}

function getSurveyQuestions($surveyID){
	$result = dbQuery("
		SELECT *
		FROM project_questions_copy
		WHERE surveyID = :surveyID
	",
		array('surveyID' => $surveyID)
	)->fetchAll();

	return $result;
}

//function matchQuestions()


function insertResponse($surveyID, $questionID, $projectUserID, $Answers){
	$result = dbQuery("
		INSERT INTO project_responses( surveyID, questionID, projectUserID, Answers)
		VALUES ( :surveyID, :questionID, :projectUserID, :Answers)
	",
		array( 'surveyID' => $surveyID,
		'questionID' => $questionID,
		'projectUserID' => $projectUserID,
		'Answers' => $Answers)
	)->fetch();
}


 function getAllAnswer(){
	 $result = dbQuery("
	 	SELECT *
		FROM project_responses
	 ")->fetchAll();

	 return $result;
 }

 function getAnswers($projectUserID){
	 $result = dbQuery("
	 	SELECT *
		FROM project_responses
		WHERE projectUserID = :projectUserID
	 ",
	 	array('projectUserID' => $projectUserID)
	 )->fetchAll();

	 return $result;
 }
