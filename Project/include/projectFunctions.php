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
		header('Location: /Project/view/firstTest.php');
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

 function getTitleAnswer($projectUserID){
	 $result = dbQuery("
	 	SELECT *
		FROM project_responses
		WHERE projectUserID = :projectUserID
		AND surveyID = '0'
		AND questionID = '1'
	 ",
	 	array('projectUserID' => $projectUserID)
	 )->fetch();

	 return $result;

 }

 function getSubTitleAnswer($projectUserID){
	$result = dbQuery("
	 SELECT *
	 FROM project_responses
	 WHERE projectUserID = :projectUserID
	 AND surveyID = '0'
	 AND questionID = '11'
	",
	 array('projectUserID' => $projectUserID)
	)->fetch();

	return $result;

 }

 function getUsers($projectUserID){
 	$result = dbQuery("
 		SELECT *
 		FROM project_users
 		WHERE projectUserID = :projectUserID
 	",
 	array('projectUserID' => $projectUserID)
 	)->fetch();

 	return $result;
 }

 function firstTestObjects(){
	 $result = dbQuery("
  		SELECT *
  		FROM project_categories
			")->fetchAll();

			return $result;
 }

 function testRankObjects(){
	$result = dbQuery("
		 SELECT *
		 FROM project_rankings
		 ")->fetchAll();

		 return $result;
 }

 function testRankings($categoryID){
  $result = dbQuery("
 		SELECT *
 		FROM project_rankings
		WHERE categoryID = :categoryID
 		",
		array('categoryID' => $categoryID))->fetchAll();

 		return $result;
 }

 function insertPersonalityTestResponse($projectUserID, $categoryID, $rankID, $Ranking){
 	$result = dbQuery("
 		INSERT INTO project_user_rankings( projectUserID, categoryID, rankID, Ranking)
 		VALUES ( :projectUserID, :categoryID, :rankID, :Ranking)
 	",
 		array(
 		'projectUserID' => $projectUserID,
		'categoryID' => $categoryID,
		'rankID' => $rankID,
 		'Ranking' => $Ranking)
 	)->fetch();
 }

 function getUserRankings($projectUserID){
 	$result = dbQuery("
 		SELECT *
 		FROM project_user_rankings
 		WHERE projectUserID = :projectUserID
 	",
 	array('projectUserID' => $projectUserID)
 	)->fetch();

 	return $result;
 }

 function getSpecialSurveys($surveyTrait){
	 $result = dbQuery("
		 SELECT *
		 FROM project_surveys
		 WHERE surveyTrait = :surveyTrait
	 ",
	 array('surveyTrait' => $surveyTrait)
	 )->fetchAll();

	 return $result;
 }

 function findRanking($categoryID, $rankID, $Ranking){
	 $UserRanking = getUserRankings($_SESSION['projectUserID']);
	 $findCategory = $UserRanking['categoryID'];
	 $findRankID = $UserRanking['rankID'];
	 $findRanking = $UserRanking['Ranking'];
	 if($findCategory == '0' && $findRankID == '0' && $findRanking == '1'){
		 $_SESSION['surveyTrait'] = 'self-discovery';
		header('Location: /Project/view/projectHomePage.php');
		exit();
 	}elseif ($findCategory == '1' && $findRankID == '3' && $findRanking == '1') {
		$_SESSION['surveyTrait'] = 'self-expression';
		header('Location: /Project/view/projectHomePage.php');
		exit();
 	} else {
		$_SESSION['surveyTrait'] = 'other';
 		header('Location: /Project/view/projectHomePage.php');
		exit();
 	}
 }

 function reSubmitTest($projectUserID){
	 $result = dbQuery("
	 	DELETE *
		FROM project_user_rankings
		WHERE projectUserID = :projectUserID
	 ",
	 array('projectUserID' => $projectUserID)
	 )->fetch();
 }
