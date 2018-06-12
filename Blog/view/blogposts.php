<html>
	<head>
		<title> Nadia's Blogposts </title>
		<link rel='stylesheet' href="/Blog/include/websiteMasterStyle.css">
		<?php
		include('Blog/include/functions.php');
		 ?>
	 </head>

	<body>
		<img alt='Background' src="/images/backdrop2.jpg" class="background">
		<h1 class="searchenginepg"> Nadia's Blog Posts </h1>
		<?php

			//$blogPostID = $_REQUEST['blogPostID'];
			 //$Blogpost = GetBlogPost($_REQUEST['blogPostID']);


			 //$allPostComments = getComments($_REQUEST['blogPostID']);

			 $Blogpost = GetBlogPost($_REQUEST['blogPostID']);

			  echo "
			  	<body style='background-color:#dce5f4'/>
			  	<h1 style='text-align:center; background-color:#a1c1f4;font-size: 50px;color: #fff; margin-top: 0px;'> $Blogpost[Title] </h1>
			  	<h2 style='text-align: center;'> By: $Blogpost[Author]</h2>
			  	<h2 style='text-align: center;'> $Blogpost[Date]</h2>
			  	<img src='$Blogpost[Images]' style='width:50%; height: auto; margin: auto; align: center; margin-left: auto; margin-right: auto; display: block;'>
			  	<p style='font-size: 20px;text-align: center;'> $Blogpost[Text]</p>

			  ";

				echo "<h1 style=' border-top: solid; border-color:#052455; background-color:#a1c1f4; font-size: 30px;color: #fff; margin-top: 0px;'> Comments </h1>";

			$postComments = getComments($_REQUEST['blogPostID']);

			$Comments = getComments($_REQUEST['blogPostID']);

				foreach($Comments as $index => $Comment){
					echo "
					<br/>
					<p style='margin-right: 25%'> $Comment[userID] : $Comment[commentDateTime]</p>
					<p style='border: 2px solid black; display: block; background-color: #fff; margin-right: 50%'> $Comment[Comment]</p>
				";}

				$postComment = submitComment(@$_REQUEST['userID'], @$_REQUEST['commentDateTime'], @$_REQUEST['Comment']);


				// $Errors = array();
				// if(isset($_REQUEST['submitComment'])){
				//
				// 	if($_REQUEST['userID'] == ''){
				// 		$Errors['userID'] = "required";
				//
				// 	}
				//
				// 	if($_REQUEST['Comment'] == ''){
				// 		$Errors['Comment'] = "required";
				//
				// 	}
				//
				// 	if (sizeof($Errors) == 0) {
				//
				// 		submitComment(
				// 			$_REQUEST['userID'],
				// 			$_REQUEST['Comment']
				// 		);
				// 	}
				//
				// 	if (sizeof($Errors) == 0) {
				//
				// 		insertBlogComment(
				// 			$_REQUEST['blogPostID'],
				// 			$_REQUEST['userID'],
				// 			$_REQUEST['commentDateTime'],
				// 			$_REQUEST['Comment']
				// 		);
				// 	}
				// }
				// var_dump($Errors);

				echo "
				<h2> Submit a Comment! </h2>

				<form action='' method='post' style='background-color: #052455; display: inline-block; padding: 20px;'>

				UserID:
					 <input type='text' name='userID' value='".@$_REQUEST['userID']."'>
					 <br/>
				Comment:
					 <input type='text' name='Comment' value='".@$_REQUEST['Comment']."' >
					 <br/>
					 <input type='submit' name='submitComment' value='Submit Comment'>
				</form>
				";

				$insertComment = insertBlogComment($_REQUEST['blogPostID'], @$_REQUEST['userID'], @$_REQUEST['commentDateTime'], @$_REQUEST['Comment']);



		 ?>
	</body>

</html>
