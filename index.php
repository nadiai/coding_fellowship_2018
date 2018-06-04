
<?php
	include("include/header.php");


 /*<!--<img class='maincontent' src='/IMG_0601.JPG' alt='Nadia'>-->*/

 foreach($posts as $index) {
 var_dump($index);
 echo "
 	<p><a href='/Blog/view/blogpost.php?blogPostID=$index[blogPostID]'> $index[Title] </a></p>
 	";
 }
?>
