<!--
Name: shop.php
Author: Griffin Brome
License: MIT
Description: Shop page, shows site inventory
 -->

<?php include "../php/db.php";?>

<!DOCTYPE html>
<html>
  <head>
    <title>Shop</title>
  </head>
  <body>
    <?php include "../php/header.php" ?>
    <h2>Shop</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Cost</th>
            <th>Details</th>
        </tr>
    <?php
        $rows = getAllItems();
        foreach($rows as $row)
            echo "<tr>
                    <td>$row[0]</td>
                    <td>$row[1]</td>
                    <td>$row[2]</td>
                  </tr>";
    ?>
    </table>
  </body>
</html>
