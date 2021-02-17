<?php 
include "../php/db.php";
$rows = getAllItems();

$payload = json_encode($rows, JSON_FORCE_OBJECT);

echo $payload;
?>
