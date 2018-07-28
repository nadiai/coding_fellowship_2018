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

	// var callReset = document.getElementById('resetButton');
	// callReset.onclick = reset;
	//
	// function reset(){
	// 	alert('Do You Want to Retake the Personality test? Previous responses will be deleted.');
	// 	document.location='/Project/view/firstTest.php';
function reset() {
	var x;
	var r=confirm("Do you want ot retake the personality test? Previous responses will be deleted.")
	if (r == true){
			x = "Your responses have been deleted you may retake the test"; //need to create an ajax function to be able to call my php function to delete database values here
			document.location.href="firstTest.php";
	} else{
			x = "You pressed Cancel! Please continue wiht your current forms";
	}

	document.getElementById("resetButton").innerHTML = x;
	}


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
									 <button id='resetButton' onclick='reset();' >Personality Test</button>
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
					$userRank = findRanks($_SESSION['projectUserID']);
					$i = 0;
					echo ' <table>
									<tr>';
						foreach($userRank as $index => $ranks){
							$UserRanks = $ranks['rankID'];
							$getSurveys = getSurveys();
							foreach ($getSurveys as $index => $value) {
								if($value['rankID'] == $UserRanks){
									$i++;
								echo " <td> <div class='survey'><p> <a href='/Project/view/projectSurvey.php?rankID=$index'> $value[Options] </a></p></div></td>";
								}
								if ($i == 3){
									echo '</tr><tr>';
									$i = 0;
								}
							}
				 	 }


					 echo '		</tr>
									 </table>';

						// getUserSurveys($_SESSION['projectUserID']);
						// $i=0;
						// echo ' <table>
						// 				<tr>';
						// // foreach ($Surveys as $index => $Survey) {
						// 	$i++;
						// 	echo " <td> <div class='survey'><p> <a href='/Project/view/projectSurvey.php?rankID=$index'> $Survey[surveyName] </a></p></div></td>";
						//
						// 	if ($i == 3){
						// 		echo '</tr><tr>';
						// 		$i = 0;
						// 	}
						// }

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
