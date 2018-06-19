<?php

include('Blog/config/config.php');
include('Blog/include/db_query.php');

function setUserName(){
	if (isset($_REQUEST['logInSubmit'])) {
		$_SESSION['userName'] = $userName;
	}
}
