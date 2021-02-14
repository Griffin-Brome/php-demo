<?php
/*
 * Name: new_item.php
 * Author: Griffin Brome
 * License: MIT
 * Description: Database utility functions for enabling CRUD operations
 */

/**
 * @return a mysqli connection object to the local DB
 *
 * @param uname - mySQL user username
 * @param pword - mySQL user password
 * @param db - DB to connect to
 */
function &getConnection($host = 'localhost', $uname = 'root', $pword = '', $db = 'php_demo') {
  try {
    $con = new mysqli($host, $uname, $pword, $db);
  } catch (exception $e) {
    die($e->getMessage());
  }
    return $con;
}

/**
 * @return true or false, depending on closure success
 *
 * @param con - mysqli connection object
 */
function closeConnection($con) {
  try {
    return $con->close();
  } catch (exception $e) {
    die($e->getMessage());
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
