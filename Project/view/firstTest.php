<?php

include('Project/include/headerPage.php');

printHeader();

?>
			<title> Welcome to The Interview </title>
			<head>
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
			window.onscroll = function() {myFunction()};

				var header = document.getElementById("firstTestHead");
				var sticky = header.offsetTop;

				function myFunction() {
				if (window.pageYOffset > sticky) {
					console.log("I'm here");
					header.classList.add("sticky");
				} else {
					header.classList.remove("sticky");
				}
				}
			</script>

		<body id="firstTestBody" >
			<?php
			// reSubmitTest($_SESSION['projectUserID']); //I wouldnt like to call this function EVERY time the page is loaded,
			?>
			<div class="firstTestContainer" id='firstTestHead' class="sticky">
				<!-- <div class="firstTitle">
					<h1> the INTERVIEW </h1>
				</div> -->
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
				<hr class="style12">
				<div class='firstTestBlurb'>
					<!-- <h2> This is More text</h2> -->
				</div>
			</div>
				<div class="firstTest">

					<div id="testItems">
						<?php
							$testObjects = firstTestObjects();

							$i=0;

							echo '<table>
								<tr>';

							foreach ($testObjects as $index => $test) {
								$i++;
								echo "<td> <div id='testItem'> <img class='itemImage' src='$test[Images]' alt='table data'/><div class='imageOverlay'><div class='imageText'>  <a href='/Project/view/secondTest.php?categoryID=$index'> $test[Category]</div></div></div></td>";

								if($i == 2){
									echo '</tr></tr>';
									$i = 0;
								}
							}

							echo '</table>'

						 ?>
						 <!-- <input type="image" src="img_submit.gif" alt="Submit"> -->
					</div>
					<hr class="style2">
				</div>
			</div>
<?php
printFooter();
?>
