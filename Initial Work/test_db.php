<?php

include('config/config.php');
include('include/db_query.php');

InsertInventoryItem('Grapefruit', 'I like the red kind', 'Produce');
InsertInventoryItem('Okra', 'I like like it fried', 'Produce');
InsertInventoryItem('Oreos', 'I take the cream out', 'Snacks');

function InsertInventoryItem($name, $description, $category){
	$result = dbQuery("
		INSERT INTO inventory(name, description, category)
		VALUES ('$name', '$description', '$category')
	")->fetch();
}

function GetAllInventoryItems(){
	//make me a function called GetAllInventoryItems
	$result = dbQuery("
		SELECT *
		FROM inventory
		")->fetchAll();
//* = all
//from tells us which table to look at
		return $result;
//like your getAllBlogPosts function
}

//$allInventoryItems = GetAllInventoryItems();

echo "<pre>";
//var_dump($allInventoryItems);
echo "<pre>";


function GetInventoryItem($Inventory_id){
//make me a function called GetInventoryItem and expect the argument $Inventory_id
	$result = dbQuery("
		SELECT *
		FROM inventory
	 	WHERE Inventory_id = $Inventory_id
	")->fetch();
//WHERE allows you to be more specific about which item you want
	return $result;


}

$InventoryItem = GetInventoryItem(5);

echo "<pre>";
var_dump($InventoryItem);
echo "<pre>";


//$result = dbQuery("
	SELECT *
 	FROM inventory
	WHERE Inventory_id =
")->fetchAll();

echo "<pre>";
//var_dump($result);
echo "<pre>";

 ?>
