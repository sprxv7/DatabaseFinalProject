<?php

    require('db_access.php');

    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    } 
    
    $sql = "SELECT * FROM studentYr";
    $result = $mysqli->query($sql);

    $mysqli->close();
    
    header('Location: index.php');

?>