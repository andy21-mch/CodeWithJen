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
    $conn = new mysqli($host, $username, $password, $databse);
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


function getUsers($conn)
{
    $users = [];
    $sql = "SELECT * FROM Students";
    $result = $conn->query($sql);



    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $users[] = $row;
        }
    }


    return $users;

}

function addUser($name, $email, $country, $gender, $datetime, $conn){
    $sql = "INSERT INTO Students (`full_names`, `country`, `email`, `Gender`, `reg_date`) VALUES (?,?,?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $email, $country, $gender, $datetime);
    $stmt->execute();

    $name = trim("Andrew");
    $email = "nfon@gmail.com";
    $country = "Camr";
    $datetime = '2006-07-22 06:40:00';
    $gender = 'Male';

    $stmt->execute();

}

function getUser($id, $conn){
    $sql = "SELECT * FROM Students WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $result = $stmt->execute();

    if($result){
        $res = $stmt->get_result(); //getthe result
        $user = $res->fetch_assoc(); // convert the result into associative array
        return $user; // return the result
    }

    return null; // return null if the result was false;
}

$sql = "SELECT COUNT(*) FROM Students";
$sql = "SELECT id, name, email, password FROM Students";


$conn = connect($host, $username, $password, $databse);
// $conn->query($sql);
