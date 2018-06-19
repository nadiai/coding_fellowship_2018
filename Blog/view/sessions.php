<?php

session_start();

if(!isset($_SESSION['userName'])){
	echo "You are not Logged in. <a href='index.php'> Return to the Log in Page</a>";
} else{
	echo "You are logged in as" .@$_SESSION['userName']. "<a href='sessions1.php'> Log out </a>";
}

 ?>
