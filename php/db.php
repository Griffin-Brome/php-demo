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
 * Creates a new item in the 'item' table
 *
 * @return null
 *
 * @param name - name of item
 * @param cost - cost of item
 * @param details - small description of item
 */
function createItem($name, $cost, $details) {
    $con = getConnection();

    $stmt = $con->prepare("INSERT INTO item(name, cost, details) values (?,?,?)");
    $stmt->bind_param('sds', $name, $cost, $details);

    $stmt->execute();

    $stmt->close();
   
    if ($stmt->errno) {
        die($stmt->error);
    }
    
    $con->close();
}

/**
 * TODO
 */
function updateItem() {}

/**
 * TODO
 */
function getItem() {}

/**
 * TODO
 */
function getAllItems() {}
?>
