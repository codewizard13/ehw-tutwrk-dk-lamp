<?php
/**
 * dbh = database handler
 * .inc = this is an includes file
 */

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

// #GOTCHA: The parameter order is important in the $conn definition
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

