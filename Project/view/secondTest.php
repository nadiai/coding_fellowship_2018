<?php

include('Project/include/headerPage.php');

//Request itself is an array and the items within it are indexes
//The problem was because of how I had the form set up... i didnt use form tags just the imputs so it wasnt working

if(isset($_POST['submitRankings'])){
	foreach ($_REQUEST['Ranking'] as $index => $value) { //running into a problem with the "Ranking" being an array but I dont know how to get inside the array
		insertPersonalityTestResponse($_SESSION['projectUserID'], $_REQUEST['categoryID'], $index, $value);
	}
	findRanking($_REQUEST['categoryID'], $index, $_REQUEST['Ranking']);
	//var_dump($_REQUEST);
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
		<script type="text/javascript">

		</script>
		<body id='secondTestBody'>
			<div id='secondTestContainer'>
				<form action='' method="post">
					<?php
					var_dump($_SESSION['projectUserID']);

					$rankings = testRankings($_REQUEST['categoryID']);

					echo '<ul id="quiz" class="listGroup">';

					foreach ($rankings as $index => $rank) {
						$rankID = $rank['rankID'];

						echo "
								<p>$rank[Options]</p>
								<input type='number' name='Ranking[$rank[rankID]]' value='".@$_REQUEST['Ranking_'.$rankID]."'
						 ";
					}

						echo '</ul>';

					?>
					 <input type='submit' name='submitRankings' value='Submit'/>
			 	</form>

			</div>
