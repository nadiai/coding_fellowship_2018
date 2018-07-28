<?php

include('Project/include/headerPage.php');

$Errors = array();
if (isset($_REQUEST['formSubmitButton'])) {
	//var_dump($_REQUEST);
	foreach($_REQUEST['Answers'] as $index => $value){
		echo "Question $index: $value<br/>";
		updateUserResponses($rankID, $index, $_SESSION['projectUserID'], $value);
	}
	header('Location: /Project/view/projectProfilePage.php');
	exit();
}

printHeader();

?>
		<title> Questionnaire </title>
		<link href='https://fonts.googleapis.com/css?family=Bubbler One' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Nothing You Could Do' rel='stylesheet'>
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
		<!-- <img class='backgroundImageSurveyPage' src="/images/surveyPageBackground.jpg" alt="notebook"> -->
			<div class='divider'></div>
			<div class='divider2'></div>
			<div class='surveyHeader'>
				<?php
					$Survey = getAllSurveys();
					echo "<h1> $Survey[surveyName]</h1>";
				?>
				<h2>  Please answer these questions to the best of your ability </h2>
			</div>
			<hr style="width:100%; height:2px; background-color: #ff0000; border:none;" />
			<div class='formContainer'>
			<br/>
			<br/>
			<div class="questionDisplay">
				<form action='' method="post">

					<?php
						getUserQuestions($SESSION['projectUserID']);

						// $Displayquestions = getSurveyQuestions($_REQUEST['surveyID']);
						//
						// 	foreach ($Displayquestions as $index => $question) {
						// 		$questionID = $question['questionID'];
						// 		//$questionID
						// 		echo "
						// 		<p id='question'>$question[Question] </p>
						// 		<br/>
						// 	  <input id='answer' type='text'  name='Answers[$question[questionID]]' value='".@$_REQUEST['Answers_'.$questionID]."' placeholder='Answer Here' required> <br/> <br/>";
						// 	}

					 ?>
					 <br/>
					 <br/>
					<input type='submit' value='Submit Your Response' name='formSubmitButton' class='formSubmitButton'>
			 </form>
			</div>
			<br/>
			<br/>
			<div class='footer'>
			<?php
				if (isset($_SESSION['projectUserID'])) {
					echo "You're logged in.<a href='logOutPage.php'> Log Out Here";
				}else {
					echo "not logged in";
				}
			 ?>
		 </div>
		</div>
