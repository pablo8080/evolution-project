<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "L*v59M!8TN";
$dbName = "evolution";
$conn = mysqli_connect("$dbServername","$dbUsername","$dbPassword","$dbName");
    if(! $conn )
    {
    die('Could not connect: ' . mysql_error());
    }
?>