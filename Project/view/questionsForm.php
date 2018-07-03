<?php

include('Project/include/headerPage.php');

printHeader();

?>
		<title> Title..Questionnaire </title>
		<link href='https://fonts.googleapis.com/css?family=Paprika' rel='stylesheet'>
		
	</head>
	<body class='questionPageBody'>
		<div class='formContainer'>
			<h1> Title of This Questionnaire </h1>
			<div class="questionDisplay">
				<?php

					$questionDisplay = listQuestions($_REQUEST['questionID']);

						foreach ($questionDisplay as $index => $question) {
							echo "<p>$question[Question]</p>";
						}
				 ?>
			</div>
		</div>
