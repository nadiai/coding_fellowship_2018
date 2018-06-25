<?php

session_start();

?>

<style type="text/css">
<?php
 include('Blog/include/websiteMasterStyle.css');
 ?>
</style>

<?php

if (!isset($_SESSION['userName'])) {
	echo "Your account was not created <a href='/index.php'> Please try again</a>";
} else{
	echo "<div class='signUpConfBackDrop'><div class='signUpConfirmation'> Your account was successfully created! Please <a href='logIn.php'> login </a> to continue as a user or return to the <a href='/index.php'> Home Page</a>
	</div>
	</div>
	";
}

 ?>
