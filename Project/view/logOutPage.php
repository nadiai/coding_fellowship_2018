<?php

include('Project/include/headerPage.php');

printheader();

unset($_SESSION['projectUserID']);

echo "<div class='logOutPage'><div class='logOutAnnouncement'><p> You are logged out. Return to <a href='projectLogin.php'> Login Page</a></p></div></div>";

 ?>
