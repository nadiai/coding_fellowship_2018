<?php

include('Project/include/headerPage.php');

printHeader();

?>
			<title> Welcome to The Interview </title>
			<link href='https://fonts.googleapis.com/css?family=Amatic SC' rel='stylesheet'>
			<style type="text/css">
			<?php
			 include('Project/include/projectStyle.css');
			 ?>
			</style>
			<script src="/Blog/include/jquery.js"></script>
		</head>
		<body id="firstTestBody" >
			<div class="firstTestContainer">
				<div class="firstTitle">
					<h1> This is The INTERVIEW </h1>
				</div>
				<div class='firstTestBlurb'>
					<h2> This is More text</h2>
				</div>
			</div>
				<br/>
				<div class="firstTest">
					<div id="testItems">
						<?php
							$testObjects = firstTestObjects();

							$i=0;

							echo '<table>
									<tr>';

							foreach ($testObjects as $index => $test) {
								$i++;
								echo "<td> <div id='testItem'> <a href='/Project/view/secondTest.php?categoryID=$index'> $test[Category] <br/> </div><td>";

								if($i == $i/2){
									echo '</tr></tr>';
									$i = 0;
								}
							}

							echo '	</tr>
								</table>'

						 ?>
						 <!-- <input type="image" src="img_submit.gif" alt="Submit"> -->
					</div>
				</div>
			</div>
<?php
printFooter();
?>
