<?php
/*
 * Name: delete_item.php
 * Author: Griffin Brome
 * License: MIT
 * Description:
 */

include("db.php");

// Get contents of POST request
if (! $_POST) {
    die("Error: no data in POST request.");
} else {
    $name = $_POST['delete_name'];
    deleteItem($name);
    header('Location: ../public/admin.php'); // Redirect back to admin page
}
?>
