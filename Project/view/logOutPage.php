<?php

include('Project/include/headerPage.php');

printheader();

unset($_SESSION['projectUserID']);

unset($_SESSION['surveyTrait']);

echo "<div class='logOutPage'><div class='logOutAnnouncement'><p> You are logged out. Return to <a href='projectSignUp.php'> Login Page</a></p></div></div>";

 ?>
