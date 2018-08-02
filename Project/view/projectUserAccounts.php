<?php

include('Project/include/headerPage.php');

printheader();
 ?>
 			<title>  Accounts on The Interview </title>
			<link href='https://fonts.googleapis.com/css?family=Marcellus SC' rel='stylesheet'>
			<link href='https://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet'>
			<script src="/Blog/include/jquery.js"></script>
			<style type="text/css">
			<?php
			 include('Project/include/projectStyle.css');
			 ?>
			</style>
		</head>
		<body class='userIndexBody'>
			<div class="userIndexHeader">
			<h1> All Users </h1>
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
		</div>
			<div class='userList'>
				<?php
				$i=0;
				$Users = getAllUsers();

				echo '<table>
						<tr>';

				foreach ($Users as $index => $user) {
					echo "<td>

					<img src='$user[p_ProfilePic]' alt='Avatar' class='avatar'><p>  <a href='/Project/view/projectUser.php?projectUserID=$index'> $user[p_FirstName] $user[p_LastName] </a></p></td> <br/>";
					$i++;
					if ($i == 2) {
						echo "</tr><tr>";
						$i=0;
					}
				}

				echo '</tr>
					</table>'
				 ?>
				<br/>
			</div>

		</body>
