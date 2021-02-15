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
  cost DECIMAL,
  details TEXT
);

INSERT INTO item (name, cost, details) VALUES ("waggish robot", 50.32, "Phasellus a interdum libero, non porta mi. Sed et pharetra libero, vel eleifend tellus. Fusce vel nisl in urna aliquam suscipit. Pellentesque in quam felis. Ut id nulla odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus sed ornare lorem, eu mollis lectus. Nunc eget vehicula urna. Duis a ex non mauris dignissim ultricies eget blandit libero. Aenean vel nisl lectus. Integer vehicula mollis nunc, id vestibulum lectus accumsan nec. Nam a iaculis tortor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam rutrum suscipit enim, at egestas lectus ullamcorper gravida. Aenean ac eleifend sem. Vestibulum ultricies in nunc ac elementum.");
INSERT INTO item (name, cost, details) VALUES ("chief robot", 23.4, "Phasellus a interdum libero, non porta mi. Sed et pharetra libero, vel eleifend tellus. Fusce vel nisl in urna aliquam suscipit. Pellentesque in quam felis. Ut id nulla odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus sed ornare lorem, eu mollis lectus. Nunc eget vehicula urna. Duis a ex non mauris dignissim ultricies eget blandit libero. Aenean vel nisl lectus. Integer vehicula mollis nunc, id vestibulum lectus accumsan nec. Nam a iaculis tortor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam rutrum suscipit enim, at egestas lectus ullamcorper gravida. Aenean ac eleifend sem. Vestibulum ultricies in nunc ac elementum.");
INSERT INTO item (name, cost, details) VALUES ("drab robot", 17.82, "Phasellus a interdum libero, non porta mi. Sed et pharetra libero, vel eleifend tellus. Fusce vel nisl in urna aliquam suscipit. Pellentesque in quam felis. Ut id nulla odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus sed ornare lorem, eu mollis lectus. Nunc eget vehicula urna. Duis a ex non mauris dignissim ultricies eget blandit libero. Aenean vel nisl lectus. Integer vehicula mollis nunc, id vestibulum lectus accumsan nec. Nam a iaculis tortor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam rutrum suscipit enim, at egestas lectus ullamcorper gravida. Aenean ac eleifend sem. Vestibulum ultricies in nunc ac elementum.");
INSERT INTO item (name, cost, details) VALUES ("torpid robot", 200.2, "Phasellus a interdum libero, non porta mi. Sed et pharetra libero, vel eleifend tellus. Fusce vel nisl in urna aliquam suscipit. Pellentesque in quam felis. Ut id nulla odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus sed ornare lorem, eu mollis lectus. Nunc eget vehicula urna. Duis a ex non mauris dignissim ultricies eget blandit libero. Aenean vel nisl lectus. Integer vehicula mollis nunc, id vestibulum lectus accumsan nec. Nam a iaculis tortor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam rutrum suscipit enim, at egestas lectus ullamcorper gravida. Aenean ac eleifend sem. Vestibulum ultricies in nunc ac elementum.");
INSERT INTO item (name, cost, details) VALUES ("calm robot", 10.01, "Phasellus a interdum libero, non porta mi. Sed et pharetra libero, vel eleifend tellus. Fusce vel nisl in urna aliquam suscipit. Pellentesque in quam felis. Ut id nulla odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus sed ornare lorem, eu mollis lectus. Nunc eget vehicula urna. Duis a ex non mauris dignissim ultricies eget blandit libero. Aenean vel nisl lectus. Integer vehicula mollis nunc, id vestibulum lectus accumsan nec. Nam a iaculis tortor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam rutrum suscipit enim, at egestas lectus ullamcorper gravida. Aenean ac eleifend sem. Vestibulum ultricies in nunc ac elementum.");
