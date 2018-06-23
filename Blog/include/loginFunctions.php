<?php

include('Blog/config/config.php');
include('Blog/include/db_query.php');

function setUserName(){
	if (isset($_REQUEST['logInSubmit'])) {
		$_SESSION['userName'] = $userName;
	}
}

function checkUser(){
	$result = dbQuery("
		SELECT *
		FROM users
	")->fetchAll();

	return $result;
}

function checkUserID($userID){
	$result = dbQuery("
		SELECT *
		FROM users
	")->fetchAll();

	return $result;
}
