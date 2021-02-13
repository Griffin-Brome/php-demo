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
private function &getConnection($uname = 'root', $pword = '', $db = 'php_demo') {
  try {
    $con = new mysqli($uname, $pword, $db);
  } catch (exception e) {
    die($e->getMessage());
  }
    return $con;
}

/**
 * @return true or false, depending on closure success
 *
 * @param con - mysqli connection object
 */
private function closeConnection($con) {
  try {
    return $con->close();
  } catch (exception e) {
    die($e->getMessage());
  }
}

/**
 * TODO
 */
public function createItem($name, $cost, $details) {
  $con = getConnection();

  try {
    $stmt = $con->prepare("INSERT INTO item(name, cost, details) values (?,?,?)");
    $stmt->bind_param('sds', $name, $cost, $details);

    $stmt->execute();

    $stmt->close();
  } catch (exception e) {
    die($e->getMessage());
  }
  closeConnection($con);
}

/**
 * TODO
 */
public function deleteItem() {}

/**
 * TODO
 */
public function updateItem() {}

/**
 * TODO
 */
public function getItem() {}
?>
