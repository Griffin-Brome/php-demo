<!--
Name: admin.php
Author: Griffin Brome
License: MIT
Description: Administrator portal.
 -->

<!DOCTYPE html>
<html>
  <head>
    <title>Admin Portal</title>
  </head>

  <body>
    <?php include "../php/header.php"?>

    <h2>Administrator</h2>

    <h3>Add Item</h3>
    <form action="../php/new_item.php" method="GET">
      <fieldset>
        <legend>New Item</legend>

        <label for="new-name">Item name:</label>
        <input type="text" id="new-name" name="new-name">

        <label for="new-cost">Item cost:</label>
        <input type="number" id="new-cost" name="new-cost" min="0" step="0.01">

        <label for="new-details">Item details:</label>
        <textarea id="new-details" name="new-details"></textarea>

        <input type="submit" name="submit">

      </fieldset>
    </form>

    <h3>Edit Item</h3>
    <form action="TODO" method="GET">
      <fieldset>
        <legend>Item to be Edited</legend>
      </fieldset>
    </form>

    <h3>Delete Item</h3>
    <form action="TODO" method="GET">
      <fieldset>
        <legend>Item to be Deleted</legend>
      </fieldset>
    </form>

  </body>
</html>
