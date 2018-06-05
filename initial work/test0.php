<?php

session_start();

if(!isset($_SESSION['UserID'])){
	die("You're not logged in. <a href='tes.php'> Go to the Login page. </a>");
}

echo "You're logged in as user " .$_SESSION['UserID']."
<br/><br/>
<a href='test1.php'> Log Out </a>" ;

//this page says if they're logged in they can't proceed but if they are then it registers their id and related information

 ?>
