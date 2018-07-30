<?php

include('Project/include/headerPage.php');

//Request itself is an array and the items within it are indexes
//The problem was because of how I had the form set up... i didnt use form tags just the imputs so it wasnt working

if(isset($_POST['submitRankings'])){
	foreach ($_REQUEST['Ranking'] as $index => $value) {
//running into a problem with the "Ranking" being an array but I dont know how to get inside the array
		generateUserResponseOptions($index, $value);
	}
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
					//var_dump($_SESSION['projectUserID']);
					$i = 0;
					$rankings = testRankings($_REQUEST['categoryID']);

					echo '<table>
						<tr>';

					foreach ($rankings as $index => $rank) {
						$rankID = $rank['rankID'];
						$i++;
						echo "
								<td><p>$rank[Options]</p>
								<input type='number' name='Ranking[$rank[rankID]]' value='".@$_REQUEST['Ranking_'.$rankID]."'/></td>
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
					 <input id='secondTestSubmit' type='submit' name='submitRankings' value='Submit'/>
			 	</form>

			</div>
