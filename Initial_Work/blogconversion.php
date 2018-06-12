<?php

$BlogpostID = array(
	'0' => array(
		'Title' => 'Time for Change' ,
	 	'Date' => 'May 28th, 2018' ,
		'Pic'=> 'Sunflower',
		'Text'=> 'There comes growing pains with all change, but through that pain you bloom into something more beautiful and stronger than you were before. Im ready to bloom.'),
	'1' => array(
		'Title' => 'Hello Happiness' ,
	 	'Date' => 'May 29th, 2018' ,
		'Pic'=> 'Headphones',
		'Text'=> 'The only thing more powerful than having your favorite songs at the tip of your fingers, is having them on the tip of your lips.'),
	'2' => array(
	'Title' => 'Sandcastles' ,
	 'Date' => 'May 30th, 2018' ,
	 'Pic'=> 'Sunflower',
	 'Text'=> 'Today, nothing would be more satisfying than sticking my toes in the sand, feeling the warmth of the sun blazing under my feet, and feeling the cool caress of ocean waves.'),
);

die('TEST');
echo "<pre>";
var_dump($_REQUEST);
echo "</pre>";

	if ($_REQUEST['BlogpostID'] == '0') {
		echo "$BlogpostID['0']['Title']";
		echo "<br>";
		echo $BlogpostID['0']['Date'];
		echo "<br>";
		echo $BlogpostID['0']['Text'];
		echo "<br>";
	} elseif ($_REQUEST['BlogpostID'] == '1') {
		echo $BlogpostID['1']['Title'];
		echo "<br>";
		echo $BlogpostID['1']['Date'];
		echo "<br>";
		echo $BlogpostID['1']['Text'];
		echo "<br>";
	} elseif ($_REQUEST['BlogpostID'] == '2') {
		echo $BlogpostID['2']['Title'];
		echo "<br>";
		echo $BlogpostID['2']['Date'];
		echo "<br>";
		echo $BlogpostID['2']['Text'];
		echo "<br>";
	}

/*foreach ($Blogpost as $i => $item) {
	echo $Blogpost[$i]['Title'];
	echo "<br>";
	echo $Blogpost[$i]['Date'];
	echo "<br>";
	echo $Blogpost[$i]['Text'];
	echo "<br>";
}


for ($i=0; $i = 'Blogpost'; $i++) {
	echo $Blogpost[$i]['Title'];
	echo "<br>";
	echo $Blogpost[$i]['Date'];
	echo "<br>";
	echo $Blogpost[$i]['Text'];
	echo "<br>";

}

function printItem($n){
    echo $n['Title'];
		echo "<br>";
    echo $n['Date'];
		echo "<br>";
}

array_map('printItem', $Blogpost);*/




?>
