<?php
    require('db_access.php');

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

$id = $_POST['id'] ? $_POST['id'] : header('Location: index.php');


$id = $mysqli->real_escape_string($id);

$sql = "DELETE FROM studentYr WHERE id = $id";

$result = $mysqli->query($sql);
$mysqli->close();
header('Location: index.php');
?>