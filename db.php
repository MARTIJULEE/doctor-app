<?php
/***
@author:rofi

This file is used to connect MySQL databases
using "mysqli"- mysql improved function of PHP.
further reading: http://php.net/manual/en/book.mysqli.php


Example:
--------

$con = new mysqli("localhost", "user", "password", "database");
if ($con->connect_errno) {
    die ("Failed to connect to MySQL: (" . $con->connect_errno . ") " . $con->connect_error);
}
echo $con->host_info . "\n";
*/
