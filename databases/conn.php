<?php

ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);


$host = "localhost";
$username = "root";
$password = "";
$databse = "db";


function connect($host, $username, $password, $databse)
{
    $conn = mysqli_connect($host, $username, $password, $databse);
    if ($conn->connect_error) {
        die("Connection error " . $conn->connect_error);
    }

    return $conn;

}

function CreateDb($dbname, $conn)
{
    $sql = "Create Database $dbname";

    if (!mysqli_query($conn, $sql)) {
        die("Error creating database: " . mysqli_error($conn));
    }

    return true;

}

function executeQuery($conn, $sql)
{
    if (!mysqli_query($conn, $sql)) {
        die("Error creating database: " . mysqli_error($conn));
    }

    return true;

}



$conn = connect($host, $username, $password, $databse);
