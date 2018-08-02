<?php

include('Project/include/headerPage.php');

printheader();
 ?>
 			<title>  View User Account on The Interview </title>
			<link href='https://fonts.googleapis.com/css?family=Give You Glory' rel='stylesheet'>
			<link href='https://fonts.googleapis.com/css?family=The Girl Next Door' rel='stylesheet'>
			<script src="/Blog/include/jquery.js"></script>
			<style type="text/css">
			<?php
			 include('Project/include/projectStyle.css');
			 ?>
			</style>
		</head>
		<body class='userProfileBody'>
			<div class="wrapper">
	<header>
	<h3 class="ticker"><span>Better than hard cash</span> why bankers are talking about Bitcoin as a rival to real money</h3>
	<div class="published">
	<time>Summer 2018</time>
	<p>Published in St. Louis, MO</p>
	<p><strong>$1.40</strong></p>
	</div>
	<header>
	<h1 class="title"><span>The</span> INTERVIEW</h1>
	<h2 class="website"> theinterview.com</h2>
	</header>
	</header>
	<div class="break"></div>

	<div class="teaser-block">
	<div class="student teasers">
	<h1>World's most influential teenager?</h1>
	<h2>Exeter student on fame and the web</h2>
	<figure class="background"><img src="https://static.guim.co.uk/sys-images/Guardian/About/General/2013/11/25/1385391990499/Beth-Reekles-009.jpg"></figure>

	</div>
	<div class="pop teasers">
	<h1>40 great facts about 1,000 No 1s</h1>
	<h2>Peter Robinson's pop trivia special</h2>
	<figure><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/124874/pop.png"></figure>
	</div>
	<div class="borgen teasers">
	<h1>Life after borgen</h1>
	<h2>Brigette Sørenson interview</h2>
	<figure><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/124874/30BRIDGET0811.png"></figure>
	<figure class="background"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/124874/cast.png"></figure></div>
	<div class="break"></div>
	</div>


	<div class="columns2">
		<?php
			$getTitle = getTitleAnswer($_REQUEST['projectUserID']);
			echo "<h1 class='headline'>$getTitle[Answers]</h1>";

			$getSubTitle = getSubTitleAnswer($_REQUEST['projectUserID']);
			echo "<h2 class='subhead'> $getSubTitle[Answers]</h2>";
		 ?>

	<article class="cols2 just">

		<?php
			$userInfo = getUsers($_REQUEST['projectUserID']); //this only finds the first participants info
			echo "<div class='byline'>$userInfo[p_UserName]<br/><span>The Interview Editor</span></div>";

		 ?>


	<?php

		$UserResponses = getProfileAnswers($_REQUEST['projectUserID']); //this only finds the first participants info

		foreach ($UserResponses as $key => $Responses) {
			echo "<p> $Responses[Answers]</p>
			";
		}
	 ?>

	<div class="cont">Continued on page 2 >> </div>
	</article>
	</div> <!-- ends cols2 -->

	<div class="columns2 van-dyck">
	<!-- <h2><span>Save for the nation </span>Van Dyck appeal</h2> -->

	<figure><img src="/images/profileMainPhoto.jpg" alt="books"/><figcaption> Don't judge a book by its cover! Read these answers to understand the depth of my contents.	<div class="logOutFooter">
			<p> Log out of your account<a href="logOutPage.php"> here </a></p>
		</div> <h3>13</h3></figcaption></figure>

	</div>

	<div class="break"></div>
</body>
