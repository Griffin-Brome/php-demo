<?php
/*
 * Name: get_all_items.php
 * Author: Griffin Brome
 * License: MIT
 * Description: Retrieves all items in the item table, encodes then as a JSON object, for AJAX requests
 */
include "db.php";
$rows = getAllItems();

$payload = json_encode($rows, JSON_FORCE_OBJECT);

echo $payload;
?>
