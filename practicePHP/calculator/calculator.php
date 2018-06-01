<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operation = $_POST['functionType'];

if($operation == "Add"){
	$answer_Add = $num1 + $num2;
	echo "The answer to $num1 + $num2 is ";
	echo $answer_Add;
}

if($operation == "Subtract"){
	$answer_Subtract = $num1 - $num2;
	echo "The answer to $num1 - $num2 is ";
	echo $answer_Subtract;
}

if($operation == "Division"){
	$answer_Division = $num1 / $num2;
	echo "The answer to $num1 / $num2 is ";
	echo $answer_Division;
}

if($operation == "Multiply"){
	$answer_Multiply = $num1 * $num2;
	echo "The answer to $num1 * $num2 is ";
	echo $answer_Multiply;
}
?>
