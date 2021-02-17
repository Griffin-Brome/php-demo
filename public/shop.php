<!--
Name: shop.php
Author: Griffin Brome
License: MIT
Description: Shop page, shows site inventory
 -->

<!DOCTYPE html>
<html>
  <head>
    <!-- Load jQuery from CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="../static/js/shop.js"></script>
    <title>Shop</title>
  </head>
  <body>
    <?php include "../php/header.php" ?>
    <h2>Shop</h2>
    <table id="all_items">
        <tr>
            <th>Name</th>
            <th>Cost</th>
            <th>Details</th>
        </tr>
    </table>
  </body>
</html>
