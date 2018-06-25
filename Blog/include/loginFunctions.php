<?php

include('Blog/config/config.php');
include('Blog/include/db_query.php');

// $userName = isset($_REQUEST['userName']);
// $passWord = isset($_REQUEST['passWord']);


function findUsers(){
	$result = dbQuery("
		SELECT *
		FROM users
	")->fetch();

	return $result;
}

function findUser($userName){
	var_dump($userName);
	$result = dbQuery("
		SELECT *
		FROM users
		WHERE userName = :userName
	",
	array("userName" => $userName)
)->fetch();


// var_dump($result);
	return $result;
}

function getDistinctUser($userName){
	$result = dbQuery("
		SELECT *
		FROM users
		WHERE userName = :userName
	",
	 array('userName' => $userName)
 )
	->fetch();

}

function verifyUser($userName, $passWord){
	$findUser = findUser($userName);
	$userNme = $findUser['userName'];
	$passWrd = $findUser['passWord'];
	$usrID = $findUser['userID'];
	var_dump($userName);
	var_dump($passWord);
	dbQuery("
		SELECT *
		FROM users
		WHERE userName = :userName
		AND passWord = :passWord
	",
	 array('userName' => $userName,
 	'passWord' => $passWord,)
 );

	if ($userName == $userNme && $passWord == $passWrd){
		$_SESSION['userID'] = $usrID;
		$_SESSION['userName'] = $userName;
		header('Location: logInConfirmation.php');

	}
	else{
		echo "Login Failed";
	}
}
