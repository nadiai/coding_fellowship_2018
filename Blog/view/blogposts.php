<?php

$Errors = array();
if (isset($_REQUEST['submitComment'])) {
	if ($_REQUEST['userName'] == '') {
		$Error['userName'] = "required";
		echo "Username required";
	}
	if ($_REQUEST['Comment'] == '') {
		$Error['Comment'] = "required";
		echo "Comment required";
	}
	if (sizeof($Errors) == 0) {
		header("location:?blogPostID=$_REQUEST[blogPostID]");
	}

}

?>
<?php
include('Blog/include/functions.php');
if (isset($_REQUEST['submitComment'])) {
	if ($_REQUEST['userName'] != '' && $_REQUEST['Comment'] != '') {
	insertBlogComment($_REQUEST['blogPostID'], @$_REQUEST['userName'], @$_REQUEST['commentDateTime'], @$_REQUEST['Comment']);
	}
}
?>


<html>
	<head>
		<title> Nadia's Blogposts </title>
		<link rel='stylesheet' href="/Blog/include/websiteMasterStyle.css">
	</head>

	<body>
		<img alt='Background' src="/images/backdrop2.jpg" class="background">
		<h1 class="searchenginepg"> Nadia's Blog Posts </h1>
		<?php

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

			// $postComments = getComments($_REQUEST['blogPostID']);

			// $postComment = echoComment(@$_REQUEST['userID'], @$_REQUEST['commentTimeStamp'], @$_REQUEST['Comment']);

			$Comments = getComments($_REQUEST['blogPostID']);

				foreach($Comments as $index => $Comment){
					echo "
					<br/>

					<p style='margin-right: 25%; background-color: #a1c1f4;'> $Comment[userName] : $Comment[commentTimeStamp] </p>
					<br/>

					<div class='dialogBox'>
						<div class='body'>
						<span class='tip tipUp'></span>
							<p class='commentBox'> $Comment[Comment]</p>
						</div>
					</div>

				";}



				echo "

					<form class='commentForm' action='' method='post'>

					<h2> Submit a Comment! </h2>

					<div class='formContents'>
					UserID:
						 <input type='text' name='userName' value='".@$_REQUEST['userName']."'>
						 <br/>
						 <br/>
					Comment:
						 <input type='text' name='Comment' value='".@$_REQUEST['Comment']."' >
						 <br/>
						 <br/>
						 <input type='submit' name='submitComment' value='Submit Comment' id='submitButton'>
						</div>
					</form>
				";

				//insertBlogComment($_REQUEST['blogPostID'], @$_REQUEST['userName'], @$_REQUEST['commentDateTime'], @$_REQUEST['Comment']);
		 ?>
	</body>

</html>
