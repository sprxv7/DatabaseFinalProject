<?php

require('db_access.php');

    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    } 
    
    $firstName = $_GET['fname'];
    $lastName = $_GET['lname'];
    $major = $_GET['major'];
    $gradYear = $_GET['gradYear'];

    $sql = "INSERT INTO studentYr (firstName, lastName, major, gradYear) VALUES ('$firstName', '$lastName', '$major', '$gradYear')";
    $result = $mysqli->query($sql);

$mysqli->close();


    header('Location: index.php');
?>