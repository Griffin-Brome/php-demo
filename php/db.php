<?php
/*
 * Name: new_item.php
 * Author: Griffin Brome
 * License: MIT
 * Description: Database utility functions for enabling CRUD operations
 */

/**
 * @return reference to a mysqli connection object to the local DB
 *
 * @param uname - mySQL user username
 * @param pword - mySQL user password
 * @param db - DB to connect to
 */
function &getConnection($host = 'localhost', $uname = 'root', $pword = '', $db = 'php_demo') {
    $con = new mysqli($host, $uname, $pword, $db);
    if ($con->connect_errno) {
        die($con->connect_error);
    } else {
        return $con;
    }
}

/**
 * TODO
 */
function createItem($name, $cost, $details) {
  $con = getConnection();

  try {
    $stmt = $con->prepare("INSERT INTO item(name, cost, details) values (?,?,?)");
    $stmt->bind_param('sds', $name, $cost, $details);

    $stmt->execute();

    $stmt->close();
  } catch (exception $e) {
    die($e->getMessage());
  }
  closeConnection($con);
}

/**
 * TODO
 */
function deleteItem() {}

/**
 * TODO
 */
function updateItem() {}

/**
 * TODO
 */
function getItem() {}
?>
