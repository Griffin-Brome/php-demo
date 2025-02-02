<!--
  Name: shop.php
  Author: Griffin Brome
  License: MIT
  Description: Shop page, shows site inventory
-->

<!DOCTYPE html>
<html>
  <head>
    <?php include "php/head.php"; ?>
    <script src="../static/js/shop.js"></script>
    <title>Shop</title>
  </head>
  <body>
    <?php include "php/header.php" ?>
    <main class="container-lg">
      <h2 class="text-center">Shop</h2>
      <table id="all_items" class="table table-striped">
        <tr>
          <th>Name</th>
          <th>Cost</th>
          <th>Details</th>
        </tr>
      </table>
    </main>
  </body>
</html>
