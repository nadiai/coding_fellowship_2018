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
				<div class="firstTestSection1">
					<h1> This is The INTERVIEW </h1>
					<h2> This is More text</h2>
				</div>
				<br/>
				<div class="firstTest">
					<div id="testItems">
						<?php
							firstTestObjects();

						 ?>
					</div>
				</div>
			</div>
<?php
printFooter();
?>
