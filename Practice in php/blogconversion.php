<?php

$BlogpostID = array(
	'0' => array(
		'Title' => 'Time for Change' ,
	 	'Date' => 'May 28th, 2018' ,
		'Pic'=> 'Sunflower',
		'Text'=> 'There comes growing pains with all change, but through that pain you bloom into something mre beautiful and stronger than you were before. Im ready to bloom.'),
	'1' => array(
		'Title' => 'Hello Happiness' ,
	 	'Date' => 'May 29th, 2018' ,
		'Pic'=> 'Headphones',
		'Text'=> 'The only thing more powerful than having your favorite songs at the tip of your fingers, is having them on the tip of your lips.'),
	'2' => array(
		'Title' => 'Time for Change' ,
	 'Date' => 'May 28th, 2018' ,
	 'Pic'=> 'Sunflower',
	 'Text'=> 'There comes growing pains with all change, but through that pain you bloom into something mre beautiful and stronger than you were before. Im ready to bloom.'),
);


if($_REQUEST[$BlogpostID == '0']){
	echo $BlogpostID['0']['Title'];
}
