# php-demo

## Setup - Linux

1. Install [XAMPP](https://www.apachefriends.org/download.html)

2. Start XAMPP server

```
$ sudo /opt/lampp/lampp start
```
3. Create the database
```
$ mysql -u root -p
mysql> CREATE DATABASE php_demo
```
4. Populate the database
```
$ mysql -u root -p  --socket=/opt/lampp/var/mysql/mysql.sock php_demo < db/schema.sql
```
## Setup - Windows
TODO
