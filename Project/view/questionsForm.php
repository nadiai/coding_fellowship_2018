<?php

include('Project/include/headerPage.php');

$Errors = array();
if (isset($_REQUEST['formSubmitButton'])) {
		insertResponse($_SESSION['projectUserID'], @$_REQUEST['Answers']);
}

printHeader();

?>
		<title> Questionnaire </title>
		<link href='https://fonts.googleapis.com/css?family=Paprika' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Nothing You Could Do' rel='stylesheet'>

	</head>
	<body class='questionPageBody'>
		<div class='formContainer'>
			<h1> Title of This Questionnaire </h1>
			<?php
				if (isset($_SESSION['projectUserID'])) {
					echo "You're logged in as $_SESSION[p_FirstName]";
				}else {
					echo "not logged in";
				}
			 ?>
			<h2>  Please answer these questions to the best of your ability </h2>
			<br/>
			<div class="questionDisplay">
				<form action='' method="post">

					<?php

						$questionDisplay = getQuestions();

							foreach ($questionDisplay as $question) {
								echo "
							 $question[questionID]. <input type='text' placeholder='$question[Question]' name='questionResponse' value='".@$_REQUEST['Answers']."' required> <br/> <br/>";
							}

					 ?>
					 <br/>
					 <br/>
					<input type='submit' value='Submit Your Response' name='formSubmitButton' class='formSubmitButton'>
			 </form>
			</div>
		</div>
