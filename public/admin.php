<!--
Name: admin.php
Author: Griffin Brome
License: MIT
Description: Administrator portal.
-->

<!DOCTYPE html>
<?php 
    include "../php/header.php"
?>

<html>
  <head>
    <title>Admin Portal</title>
  </head>

  <body>

    <h2>Administrator</h2>
    <h3>Add Item</h3>
    <form action="../php/new_item.php" method="POST">
      <fieldset>
        <legend>New Item</legend>

        <label for="new_name">Item name:</label>
        <input type="text" id="new_name" name="new_name">

        <label for="new_cost">Item cost:</label>
        <input type="number" id="new_cost" name="new_cost" min="0" step="0.01">

        <label for="new_details">Item details:</label>
        <textarea id="new_details" name="new_details"></textarea>

        <input type="submit" name="submit">

      </fieldset>
    </form>

    <h3>Delete Item</h3>
    <form action="../php/delete_item.php" method="POST">
      <fieldset>
        <legend>Item to be Deleted</legend>
        
        <label for="items">Select an item to delete:</label>
        <select name="items" id="items">
            <?php ?>
        </select>
      </fieldset>
    </form>

  </body>
</html>
