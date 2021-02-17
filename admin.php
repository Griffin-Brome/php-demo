<!--
  Name: admin.php
  Author: Griffin Brome
  License: MIT
  Description: Administrator portal.
-->

<!DOCTYPE html>
<?php include "php/db.php"; ?>

<html>
  <head>
    <?php include "php/head.php"; ?>
    <script src="static/js/admin.js"></script>
    <title>Admin Portal</title>
  </head>

  <body>
    <?php include "php/header.php"; ?>
    <main class="container-lg">
      <h1 class="text-center">Administrator</h2>
      <form id="new_item" action="php/new_item.php" method="POST">
        <fieldset class="mb-3">
          <legend>New Item</legend>

          <div class="row">
            <div class="col-lg-10">
              <label for="new_name" class="form-label">Item name:</label>
              <input type="text" id="new_name" name="new_name" class="form-control" required>
            </div>

            <div class="col-lg-2">
              <label for="new_cost" class="form-label">Item cost:</label>
              <input type="number" id="new_cost" name="new_cost" min="0" class="form-control" required>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <label for="new_details" class="form-label">Item details:</label>
              <textarea id="new_details" name="new_details" class="form-control" required></textarea>
            </div>
          </div>
        </fieldset>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>

      <form id="delete_item" action="php/delete_item.php" method="POST">
        <fieldset class="mb-3">
          <legend>Delete Item</legend>

          <label for="delete_name" class="form-label">Select an item to delete:</label>
          <select name="delete_name" id="delete_name" class="form-select">
          </select>
        </fieldset>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>

    </main>
  </body>
</html>
