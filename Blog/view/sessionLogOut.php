<?php

session_start();

?>
<style type="text/css">
<?php
 include('Blog/include/websiteMasterStyle.css');
 ?>
</style>

<?php

unset($_SESSION['userName']);

echo "<div class='logOutConfBackDrop'><div class='logOutConfirmation'>  You are Logged out. <br/> <a href='logIn.php'> Login here</a> <br/> Return to main page <a href='/index.php'> here</a></div></div>";


 ?>
