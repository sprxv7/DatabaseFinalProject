<?php
    
    require('db_access.php');

    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    } 
    
    $id = $_GET['id'];
    $firstName = $_GET['fname'];
    $lastName = $_GET['lname'];
    $major = $_GET['major'];
    $gradYear = $_GET['gradYear'];

    $sql = "UPDATE studentYr SET firstName = '$firstName', lastName = '$lastName', major = '$major', gradYear = '$gradYear' WHERE ID = '$id'";
    $result = $mysqli->query($sql);

$mysqli->close();
    
    header('Location: application.php');
?>