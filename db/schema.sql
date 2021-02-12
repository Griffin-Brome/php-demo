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

CREATE TABLE user (
  uname VARCHAR NOT NULL,
  pword CHAR(32) NOT NULL, --MD5 password hash
  PRIMARY KEY(uname)
)

CREATE TABLE cart (
  id INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY(id)
)

CREATE TABLE item (
  name VARCHAR NOT NULL,
  cost INT,
  details VARCHAR
)

CREATE TABLE in_cart (
  cart_id INT NOT NULL REFERENCES cart(id),
  item_name VARCHAR NOT NULL REFERENCES item(name),
  qty INT
)
