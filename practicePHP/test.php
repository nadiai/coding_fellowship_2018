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
	$weather = array('Rain', 'Sunshine', 'Clouds', 'Hail', 'Sleet', 'Snow', 'Wind');
	echo " We've seen all kinds of weather this month. At the beginning of the month, we had $weather[5] and $weather[6]. Then came $weather[1] with a few $weather[2] and some $weather[0]. At least we didnt get any $weather[3] or $weather[4].";
	echo "<br/>"
	?>

<?php
	$x = 2;
	$Cities = array( ' Tokyo', ' Mexico City', ' New York City', ' Mumbai', ' Seoul', ' Shanghai', ' Lagos', ' Buenos Aires', ' Cairo', ' London.');
	do {
		echo "$Cities[0], $Cities[1], $Cities[2], $Cities[3], $Cities[4], $Cities[5], $Cities[6], $Cities[7], $Cities[8], $Cities[9]";
	} while ($x <= 1);

	echo "<br/>";
 ?>

 <html>
 	<body>

<?php
	$Cities = array( ' Tokyo', ' Mexico City', ' New York City', ' Mumbai', ' Seoul', ' Shanghai', ' Lagos', ' Buenos Aires', ' Cairo', ' London.');
	sort ($Cities);

	$clength = count($Cities);
	for ($x=0; $x<$clength;$x++){
		echo "<ul> <li> $Cities[$x] </li> </ul>";
		}
 ?>

	</body>
</html>

<?php
	echo "<br/>";
	$Cities1 = array(' Tokyo', ' Mexico City', ' New York City', ' Mumbai', ' Seoul', ' Shanghai', ' Lagos', ' Buenos Aires', ' Cairo', ' London', 'Osaka', 'Beijing', 'Los Angeles', 'Calcutta');
	sort ($Cities1);

	$clength = count($Cities1);
	for ($x=0; $x<$clength;$x++){
		echo "<ul> <li> $Cities[$x] </li> </ul>";
		}
 ?>

	</body>
</html>
