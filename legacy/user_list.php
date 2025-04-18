<?php
include 'db_connect.php';
$result = mssql_query("SELECT * FROM users");
while ($row = mssql_fetch_assoc($result)) {
    echo $row['name'] . "<br>";
}
?>