/*
 * Title:
 * Author:
 * License:
 * Description:
 */

DROP TABLE IF EXISTS admin;
DROP TABLE IF EXISTS item;

CREATE TABLE admin (
  uname VARCHAR(255) NOT NULL PRIMARY KEY,
  pword VARCHAR(255) NOT NULL
);

CREATE TABLE item (
  name VARCHAR(255) NOT NULL PRIMARY KEY,
  cost INT,
  details VARCHAR(255)
);
