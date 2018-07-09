<?php

include('Project/include/headerPage.php');

printheader();
 ?>
 			<title> The Interview </title>
			<link href='https://fonts.googleapis.com/css?family=Give You Glory' rel='stylesheet'>
			<link href='https://fonts.googleapis.com/css?family=The Girl Next Door' rel='stylesheet'>
		</head>
		<body class='homePageBody'>
			<div class='homePageContainer'>
				<div>
					<img class="homePageBackground"src='/images/homePageBackground3.jpg' alt=" A Coffeeshop"/>
				</div>
				<div class="homePageHead">
					<h1> THE INTERVIEW </h1>
					<h2> Welcome to my website, that is a source of alternative social media that is meant to foster deeper meaningful interactions </h2>
				</div>
				<div class="listSurveys">
					<?php
						$Surveys = getAllSurveys();
						$i=0;
						echo ' <table>
										<tr>';
						foreach ($Surveys as $index => $Survey) {
							$i++;
							echo " <td> <div class='survey'><p> <a href='/Project/view/projectSurvey.php?surveyID=$index'> $Survey[surveyName] </a></p></div> <br/></td>";

							if ($i == 3){
								echo '</tr><tr>';
								$i = 0;
							}
						}

						echo '		</tr>
										</table>';

					 ?>
				</div>
				<?php
					if (isset($_SESSION['projectUserID'])) {
						echo "You're logged in.<a href='logOutPage.php'> Log Out Here";
					}else {
						echo "not logged in";
					}
				 ?>
			</div>
<?php
printfooter();
 ?>
