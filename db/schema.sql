/*
 * Title: schema.sql
 * Author: Griffin Brome
 * License: MIT
 * Description: SQL script to setup database
 */

DROP TABLE IF EXISTS item;

CREATE TABLE item (
  name VARCHAR(255) NOT NULL PRIMARY KEY,
  cost INTEGER,
  details TEXT
);

INSERT INTO item (name, cost, details) VALUES ("waggish robot", 50, "A silly robot (clown nose not included)");
INSERT INTO item (name, cost, details) VALUES ("chief robot", 23, "The leader of all robots");
INSERT INTO item (name, cost, details) VALUES ("drab robot", 17, "Nothing special here...");
INSERT INTO item (name, cost, details) VALUES ("torpid robot", 200, "A slow fella");
INSERT INTO item (name, cost, details) VALUES ("calm robot", 10, "Doesn't get too upset, good for kids and pets");
