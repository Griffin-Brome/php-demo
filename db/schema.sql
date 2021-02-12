/*
 * Title:
 * Author:
 * License:
 * Description:
 */

DROP TABLE IF EXISTS admin
DROP TABLE IF EXISTS user
DROP TABLE IF EXISTS cart
DROP TABLE IF EXISTS item
DROP TABLE IF EXISTS in_cart

CREATE TABLE admin (
  uname VARCHAR NOT NULL,
  pword CHAR(32) NOT NULL, --MD5 password hash
  PRIMARY KEY(uname)
)

CREATE TABLE item (
  name VARCHAR NOT NULL,
  cost INT,
  details VARCHAR
)
