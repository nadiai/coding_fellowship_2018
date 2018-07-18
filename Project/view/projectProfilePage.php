<?php

include('Project/include/headerPage.php');

printheader();

 ?>
 		<title> Profile </title>
		<link href='https://fonts.googleapis.com/css?family=Peralta' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Poiret One' rel='stylesheet'>
		<style type="text/css">
		<?php
		 include('Project/include/projectStyle.css');
		 ?>
		</style>
	</head>
	<body>
		<!-- <div id="profileContainer">
			<div class="imageContainer">
				<img class='profileImage' src="/images/profileBaseImage.jpg" alt='stripe-y lines'>
			</div>
			<h1> THIS IS THE TITLE OF THE MOVIE THAT IS MY LIFE </h1>
			<div id="informationContainer">
				<div class="sectionOne">
					<?php

						$UserResponses = getAnswers($_SESSION['projectUserID']);

						foreach ($UserResponses as $key => $Responses) {
							if($Responses['surveyID'] == 0 && $Responses['questionID'] == 1){
							continue;
						}
							echo "<p> $Responses[Answers]</p>
							<br/>";
						}
					 ?>
					<!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. forem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt tincidunt commodo. Curabitur porta bibendum dolor non iaculis. Etiam malesuada ante et faucibus fermentum. Sed viverra bibendum neque, id cursus dolor egestas vitae. Ut convallis turpis eu mauris ullamcorper, in molestie metus laoreet. Donec sagittis in orci in rutrum. Duis consequat scelerisque mollis. Nullam porttitor laoreet velit. Vestibulum lacinia bibendum orci. Suspendisse hendrerit posuere metus ac pretium. Duis nec tempor urna. Vivamus vehicula erat in lobortis gravida.</p> -->
				<!-- </div>
				<div class="sectionTwo">
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. forem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt tincidunt commodo. Curabitur porta bibendum dolor non iaculis. Etiam malesuada ante et faucibus fermentum. Sed viverra bibendum neque, id cursus dolor egestas vitae. Ut convallis turpis eu mauris ullamcorper, in molestie metus laoreet. Donec sagittis in orci in rutrum. Duis consequat scelerisque mollis. Nullam porttitor laoreet velit. Vestibulum lacinia bibendum orci. Suspendisse hendrerit posuere metus ac pretium. Duis nec tempor urna. Vivamus vehicula erat in lobortis gravida.</p>
				</div>
				<div class="sectionThree">
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. forem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tincidunt tincidunt commodo. Curabitur porta bibendum dolor non iaculis. Etiam malesuada ante et faucibus fermentum. Sed viverra bibendum neque, id cursus dolor egestas vitae. Ut convallis turpis eu mauris ullamcorper, in molestie metus laoreet. Donec sagittis in orci in rutrum. Duis consequat scelerisque mollis. Nullam porttitor laoreet velit. Vestibulum lacinia bibendum orci. Suspendisse hendrerit posuere metus ac pretium. Duis nec tempor urna. Vivamus vehicula erat in lobortis gravida.</p>
				</div>
			</div>
		</div> -->

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
		$getTitle = getTitleAnswer($_SESSION['projectUserID']);
		echo "<h1 class='headline'>$getTitle[Answers]</h1>";

		$getSubTitle = getSubTitleAnswer($_SESSION['projectUserID']);
		echo "<h2 class='subhead'> $getSubTitle[Answers]</h2>";
	 ?>

<article class="cols2 just">

	<?php
		$getUsersName = getUsers($_SESSION['projectUserID']);
		echo "<div class='byline'>$getUsersName[p_UserName]<br/><span>Energy editor</span></div>";

	 ?>


<?php

	$UserResponses = getAnswers($_SESSION['projectUserID']);

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
