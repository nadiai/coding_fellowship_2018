<?php

include('Project/include/headerPage.php');

//Request itself is an array and the items within it are indexes
//The problem was because of how I had the form set up... i didnt use form tags just the imputs so it wasnt working

if(isset($_POST['submitRankings'])){
	foreach ($_REQUEST['Ranking'] as $index => $value) {
//running into a problem with the "Ranking" being an array but I dont know how to get inside the array
		generateUserResponseOptions($index, $value);
	}
	$getRandomQuestions = getRandomSurveyOptions();

	foreach ($getRandomQuestions as $index => $value) {
		insertUserPlaceholders(null, $value['rankID'], $value['questionID'], $_SESSION['projectUserID'], null);
	}
	randomQuestions();
}

printHeader();

?>
			<title> Rank these options: The Interview </title>
			<link href='https://fonts.googleapis.com/css?family=Marcellus SC' rel='stylesheet'>
			<link href='https://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet'>
			<style type="text/css">
			<?php
			 include('Project/include/projectStyle.css');
			 ?>
			</style>
			<script src="/Blog/include/jquery.js"></script>
		</head>
		<script type="text/javascript">

		</script>
		<body id='secondTestBody'>
			<div class='secondTestheader'>
				<h1> Rank These Options </h1>
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
			<div class='secondTestBlurb'>
				<hr class="jagged">
				<h2> Rank them in order of preference from 1-3 based on what you'd be most interested in doing </h2>
				<hr class="jagged">
			</div>
			<div id='secondTestContainer'>
				<form action='' method="post">
					<?php
					$i = 0;
					$rankings = testRankings($_REQUEST['categoryID']);
					echo '<table>
						<tr>';

					foreach ($rankings as $index => $rank) {
						$rankID = $rank['rankID'];
						$i++;
						echo "
								<td> <div id='rankItem'>
								<img class='rankImage' src='$rank[Images]' alt='Rank option'/> <br/>
								<input type='number' placeholder='Your Ranking Here' name='Ranking[$rank[rankID]]' value='".@$_REQUEST['Ranking_'.$rankID]."' max='3' min='1'/></td>
								<br/>
								<br/>
							";

							if($i == $i/2){
								echo "</tr><tr>";
								$i=0;
							}
					}
					echo "</tr>
					</table>"

					?>
					<br/>
					 <input id='secondTestSubmit' type='submit' name='submitRankings' value='Submit'/>
					 <br/>
					  <br/>
			 	</form>

			</div>
