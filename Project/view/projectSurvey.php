<?php

include('Project/include/headerPage.php');

$Errors = array();
if (isset($_REQUEST['formSubmitButton'])) {
	//var_dump($_REQUEST);
	foreach($_REQUEST['Answers'] as $index => $value){
		echo "Question $index: $value<br/>";
		updateUserResponses($_REQUEST['rankID'], $index, $_SESSION['projectUserID'], $value);
	}
	header('Location: /Project/view/projectProfilePage.php');
	exit();
}

printHeader();

?>
		<title> Questionnaire </title>
		<link href='https://fonts.googleapis.com/css?family=Marcellus SC' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet'>
		<script src="/Blog/include/jquery.js"></script>
		<style type="text/css">
		<?php
		 include('Project/include/projectStyle.css');
		 ?>
		</style>
		<!-- <script>
		$(document).ready(function(){
			$("#question").click(function(){
	    $("#answer").slideToggle("easing");
		});
});
		</script> -->

	</head>
	<body class='questionPageBody'>
			<div class='surveyHeader'>
				<?php
					$Survey = getSurveys($_REQUEST['rankID']);
					echo "<h1> $Survey[Options]</h1>
						<hr class='style14'>
					";
				?>
				<h2>  Please answer these questions to the best of your ability </h2>
				<br/>
			</div>
			<section class="navigation">
				<div class="nav-container">
					<nav>
								<div class='dropDown'>
									<div class='dropdown-Content'>
										<a class="dropDownItem" href="logOutPage.php">Log Out</a>
										<a class="dropDownItem" href="projectProfilePage.php">My Profile</a>
									</div>
									<button onclick="showDropDown()"id="nav-dropdown" >My Account
										<i class="fa fa-caret-down"></i>
									</button>
								</div>
								<a href='projectUserAccounts.php'> Find Users</a>
								<a href='projectHomePage.php'> Surveys</a>
							 <div class='nav-logo'>
								 <img src='/images/logoImage.png' alt='logo'/>
							</div>

					</nav>
				</div>
			</section>
			<div class='formContainer'>
			<div class="questionDisplay">
				<form action='' method="post">

					<?php
					$i = 1;

						$userQuestions = getUserQuestions($_SESSION['projectUserID'], $_REQUEST['rankID']);
						foreach ($userQuestions as $key => $findQuestions) {
							$qID = $findQuestions['questionID'];

						$Displayquestions = getSurveyQuestions($_REQUEST['rankID']);
							foreach ($Displayquestions as $index => $question) {
								$questionID = $question['questionID'];
								if ($qID == $questionID ) {
									echo "
									<p id='question'> $i. $question[Question] </p>
									<br/>
									<input id='answer' type='text'  name='Answers[$question[questionID]]' value='".@$_REQUEST['Answers_'.$questionID]."' placeholder='Answer Here' required>
									<hr class='style6'> <br/> <br/>";
									$i++;
								}
							}
						}

					 ?>
					 <!-- <br/>
					 <br/> -->
					<input type='submit' value='Submit Your Response' name='formSubmitButton' class='formSubmitButton'>
					<br/>
					<br/>
			 </form>
			</div>
			<br/>
			<br/>
			<!-- <div class='footer'>
			<?php
				if (isset($_SESSION['projectUserID'])) {
					echo "You're logged in.<a href='logOutPage.php'> Log Out Here";
				}else {
					echo "not logged in";
				}
			 ?>
		 </div> -->
		</div>
