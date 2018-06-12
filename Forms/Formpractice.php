<?php

function SubmitApplication($Name, $Phone, $Position){
	die("
		<h1>
			$Name just applied
		</h1>
		<p>
			They applied for $Position position you can reach them at $Phone
		</p>
	");
}

$Errors = array();
if(isset($_REQUEST['JobApplication'])){

	if($_REQUEST['Name'] == ''){
		$Errors['Name'] = "required";

	}
	//create function "ValidateformField('Name');"
	if($_REQUEST['Phone'] == ''){
		$Errors['Phone'] = "required";

	}

	if (sizeof($Errors) == 0) {

		SubmitApplication(
			$_REQUEST['Name'],
			$_REQUEST['Phone'],
			$_REQUEST['Position']
		);
	}
}
var_dump($Errors);

echo "
<h1>
        Job Application Form
</h1>";

if (sizeof($Errors) > 0) {
	echo "
		There were Errors!
	";
}
//potential challenge printformfield
echo "
<form action='' method='post'>
        Name:
        <input type='text' name='Name' value='".$_REQUEST['Name']."' /><br />

        Phone:
        <input type='text' name='Phone' /><br />

        Position:
        <select name='Position'>
                <option value='Fellow'>Coding fellow</option>
                <option value='DevIntern'>Developer intern</option>
                <option value='CrmcIntern'>CRM coach intern</option>
                <option value='Dev'>Full-time developer</option>
                <option value='Crmc'>Full-time CRM coach</option>
        </select>

        <br/><br/>
        <input type='submit' name='JobApplication' value='Submit your application' />
</form>
";

	//".Textfield("Name")." was originally 51
