<?php

include('Project/include/headerPage.php');

printheader();
 ?>
 			<title> The Interview </title>
			<link href='https://fonts.googleapis.com/css?family=Give You Glory' rel='stylesheet'>
			<link href='https://fonts.googleapis.com/css?family=The Girl Next Door' rel='stylesheet'>
			<script src="/Blog/include/jquery.js"></script>
			<style type="text/css">
			<?php
			 include('Project/include/projectStyle.css');
			 ?>
			</style>
		</head>
		<script type="text/javascript">
			console.log("I'm here");
				$(document).ready(function(){
					$("#nav-dropdown").click(function(){
			    $("#dropDown").slideToggle("drop");
				});
		});

		function myFunction() {
    document.getElementById("dropDown").style.display = "block";
}
		</script>
		<body class='homePageBody'>
			<div class='homePageContainer'>
				<div>
					<img class="homePageBackground"src='/images/homePageBackground3.jpg' alt=" A Coffeeshop"/>
				</div>
				<section class="navigation">
					<div class="nav-container">
						<nav>
										<div id="dropDown">
											<a class="dropDownItem" href="logOutPage.php">Log Out</a>
											<a class="dropDownItem" href="projectProfilePage.php">My Profile</a>
										</div>
									 <button onclick="showDropDown()"id="nav-dropdown" >My Account</button>
									 <a href="projectHomePage.php">Surveys</a>
									 <a href="projectHomePage.php">Home</a>

						</nav>
						<div class="brand">
							<a href="#!">Logo</a>
						</div>
					</div>
				</section>
				<div class="homePageHead">
					<h1> THE INTERVIEW </h1>
					<h2> Welcome to my website, that is a source of alternative social media that is meant to foster deeper meaningful interactions </h2>
				</div>
				<div class="listSurveys">
					<?php
						$Surveys = getSpecialSurveys($_SESSION['surveyTrait']);
						$i=0;
						echo ' <table>
										<tr>';
						foreach ($Surveys as $index => $Survey) {
							$i++;
							echo " <td> <div class='survey'><p> <a href='/Project/view/projectSurvey.php?surveyID=$index'> $Survey[surveyName] </a></p></div></td>";

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
					$getUsersName = getUsers($_SESSION['projectUserID']);
					if (isset($_SESSION['projectUserID'])) {
						echo "<p class='homePageFooter'> You're logged in as $getUsersName[p_FirstName] $getUsersName[p_LastName]</p>";
					}else {
						echo "not logged in";
					}
				 ?>
			</div>
<?php
printfooter();
 ?>
