<?php
require('db_access.php');

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 
echo "<h1>Connected successfully</h1>";

$sql = "SELECT * FROM tasks";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
		echo "<tr>";
        echo "<td>".$row["id"]."</td><td>".$row["firstName"]."</td><td>".$row["lastName"]."</td><td>".$row["year"]."</td>";
		echo "</tr>";
    }
} else {
    echo "<p>Zero result.</p>";
}

$mysqli->close();
?>