<?php

include('Project/include/headerPage.php');

$Errors = array();
if (isset($_REQUEST['formSubmitButton'])) {
	//var_dump($_REQUEST);
	foreach($_REQUEST['Answers'] as $index => $value){
		echo "Question $index: $value<br/>";
		insertResponse( $_REQUEST['surveyID'], $index, $_SESSION['projectUserID'], $value);
	}
	header('Location: /Project/view/projectProfilePage.php');
	exit();
}

printHeader();

?>
		<title> Questionnaire </title>
		<link href='https://fonts.googleapis.com/css?family=Paprika' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Nothing You Could Do' rel='stylesheet'>

	</head>
	<body class='questionPageBody'>
		<img class='backgroundImageSurveyPage' src="/images/surveyPageBackground.jpg" alt="notebook">
		<div class='formContainer'>
			<h1> Title of This Questionnaire </h1>
			<h2>  Please answer these questions to the best of your ability </h2>
			<br/>
			<div class="questionDisplay">
				<form action='' method="post">

					<?php

						$Displayquestions = getSurveyQuestions($_REQUEST['surveyID']);

							foreach ($Displayquestions as $index => $question) {
								$questionID = $question['questionID'];
								//$questionID
								echo "
								$question[Question]
								<br/>
								<!--<input type='number' name='questionID' min='1' max='20' value='".@$_REQUEST['questionID']."'>-->
							  <input type='text'  name='Answers[$question[questionID]]' value='".@$_REQUEST['Answers_'.$questionID]."' required> <br/> <br/>";
							}

					 ?>
					 <br/>
					 <br/>
					<input type='submit' value='Submit Your Response' name='formSubmitButton' class='formSubmitButton'>
			 </form>
			</div>
			<br/>
			<br/>
			<?php
				if (isset($_SESSION['projectUserID'])) {
					echo "You're logged in.<a href='logOutPage.php'> Log Out Here";
				}else {
					echo "not logged in";
				}
			 ?>
		</div>
