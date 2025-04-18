<?php
$host = 'localhost';
$user = 'sa';
$pass = 'password';
$dbname = 'logistics';

$conn = mssql_connect($host, $user, $pass);
mssql_select_db($dbname, $conn);
?>