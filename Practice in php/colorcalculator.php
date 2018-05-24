<html>

		<form action= "">
			<select name='ColorSelector1' class='ColorSelector1'>
					<option value=''> Select</option>
					<option value='Red'> Red </option>
					<option value='Blue'> Blue </option>
					<option value='Yellow'> Yellow </option>
			</select>
			<select name='ColorSelector2'>
					<option value=''> Select</option>
					<option value='Red'> Red </option>
					<option value='Blue'> Blue </option>
					<option value='Yellow'> Yellow </option>
			</select>
			<input type='submit' Value='Result'/>

</html>

<?php


if(isset($_REQUEST['ColorSelector1']) && $_REQUEST['ColorSelector1']=='Red' || isset($_REQUEST['ColorSelector2']) && $_REQUEST['ColorSelector2']=='Red'){
		echo '
		<body style="background-color:#af2323">';
		}
if(isset($_REQUEST['ColorSelector1']) && $_REQUEST['ColorSelector1']=='Blue' || isset($_REQUEST['ColorSelector2']) && $_REQUEST['ColorSelector2']=='Blue'){
		echo '
		<body style="background-color:#1a33af">';
		}
if(isset($_REQUEST['ColorSelector1']) && $_REQUEST['ColorSelector1']=='Yellow' || isset($_REQUEST['ColorSelector2']) && $_REQUEST['ColorSelector2']=='Yellow'){
		//if($operation == 'Red'){
		echo '
		<body style="background-color:#f4ff2d">';
	}
/*if(isset($_REQUEST['ColorSelector1']) && $_REQUEST['ColorSelector1']=='Red' && isset($_REQUEST['ColorSelector2']) && $_REQUEST['ColorSelector2']=='Blue'){
		echo '
		<body style="background-color:#710b7a">';
	}*/


 ?>
