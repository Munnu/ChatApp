<?php
/*
PHP configuration file to get database connection details
*/

#------ Database connection details -------------------------------------------#
// Replace the variables with your MySQL connection info.
$dbhost = "localhost"; // Most likely 'localhost'
$dbuser = "root"; // Your MySQL username
$dbpass = ""; // Your MySQL password
$dbname = "chatApp"; // Your MySQL database name


$connection = mysqli_connect("$dbhost" , "$dbuser" , "$dbpass","$dbname");
$db = mysqli_select_db($connection, $dbname);
?>