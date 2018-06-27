<?php

session_start();

echo "Hello, " .$_SESSION['userID']. " You are logged in<br/>";
echo "You can <a href='session3.php'> Log out</a>";

 ?>
