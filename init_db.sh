#!/bin/bash
/usr/bin/mysqld_safe --skip-grant-tables &
sleep 5
mysql -u root -e "CREATE DATABASE sitecompras"
mysql -u root mydb < /dump/initdb.sql