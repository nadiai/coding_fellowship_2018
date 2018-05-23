<?php
	$name = 'Nadia';
	$age = 29;
	echo "Hello, my name is $name and I am $age.<br>";
	$Variable1 = 5;
	$Variable2 = 9;
	function getSum($num1, $num2){
		$sum = $num1 + $num2;
		Echo "The sum of the two number $num1 + $num2 is : $sum";
	}
	getSum(6425,9);
	echo "<br/>";
 ?>

 <?php
	$weather = array('R' => rain, 'SU' => sunshine, 'C' => clouds, 'H' => hail, 'SL' => sleet, 'SN' => snow, 'W' => wind);
	echo " We've seen all kinds of weather this month. At the beginning of the month, we had $weather[SN] and $weather[W]. Then came $weather[SU] with a few $weather[C] and some $weather[R]. At least we didnt get any $weather[H] or $weather[SL]";
  ?>
