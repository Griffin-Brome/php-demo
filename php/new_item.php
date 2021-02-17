<?php
/*
 * Name: new_item.php
 * Author: Griffin Brome
 * License: MIT
 * Description: Receives a POST request containing the fields of an item to insert into the 'item' database table
 */

include "db.php";

// Get contents of POST request
if (!$_POST) {
    die("Error: no data in POST request.");
} else {
    $name = $_POST["new_name"];
    $cost = $_POST["new_cost"];
    $details = $_POST["new_details"];
    createItem($name, $cost, $details);
    header("Location: ../admin.php"); // Redirect back to admin page
}
?>
