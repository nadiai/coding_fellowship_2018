<?php

include('Project/include/headerPage.php');

//Request itself is an array and the items within it are indexes
//The problem was because of how I had the form set up... i didnt use form tags just the imputs so it wasnt working

if(isset($_POST['submitRankings'])){
	foreach ($_REQUEST['Ranking'] as $index => $value) { //running into a problem with the "Ranking" being an array but I dont know how to get inside the array
		echo "Question $index: $value<br/>";
		insertPersonalityTestResponse($_SESSION['projectUserID'], $_REQUEST['categoryID'], $index, $value);
	}
	 header('Location: /Project/view/projectHomePage.php');
	 exit();
}

printHeader();

?>
			<title> Rank these options: The Interview </title>
			<link href='https://fonts.googleapis.com/css?family=Amatic SC' rel='stylesheet'>
			<style type="text/css">
			<?php
			 include('Project/include/projectStyle.css');
			 ?>
			</style>
			<script src="/Blog/include/jquery.js"></script>
		</head>
		<body id='secondTestBody'>
			<div id='secondTestContainer'>
				<form action='' method="post">
					<?php

					$rankings = testRankings($_REQUEST['categoryID']);


					foreach ($rankings as $index => $rank) {
						$rankID = $rank['rankID'];

						echo "
							$rank[Options]
							<input id='ranking' type='number' name='Ranking[$rank[rankID]]' value='".@$_REQUEST['Ranking_'.$rankID]."' min='1' max='3'/>
						 ";
					}

					?>
					 <input type='submit' name='submitRankings' value='Submit'/>
			 	</form>

			</div>
