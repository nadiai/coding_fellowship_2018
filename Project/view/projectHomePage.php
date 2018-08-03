<?php

include('Project/include/headerPage.php');

printheader();
 ?>
 			<title> The Interview </title>
			<link href='https://fonts.googleapis.com/css?family=Marcellus SC' rel='stylesheet'>
			<link href='https://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet'>
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
				<div>
					<img class="homePageBackground"src='/images/homePageBackground3.jpg' alt=" A Coffeeshop"/>
				</div>
				<div class="homePageHead">
					<h1> Your Personalized Surveys</h1>
					<h2> These surveys & subsequent questions were specially selected for you based on your responses to the personality test you took in the beginning. </h2>
				</div>
				<br/>
				<div class="listSurveys">
					<?php
					$userRank = findRanks($_SESSION['projectUserID']);
					echo ' <table>
									<tr>';
									$i = 0;
						foreach($userRank as $index => $ranks){
							$UserRanks = $ranks['rankID'];
							$getSurveys = getAllSurveys();
							foreach ($getSurveys as $index => $value) {
								if($value['rankID'] == $UserRanks){
								echo " <td> <div class='survey'><p> <a href='/Project/view/projectSurvey.php?rankID=$index'> $value[Options] </a></p></div></td>";
									$i++;
								}
								if ($i == 4){
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
