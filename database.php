<?php
$servername = "sql101.epizy.com";  // server is listed with database in control panel
$username = "epiz_21498721"; // user name is provided with Account Information on hosting page
$password = "HQdN3ORTJdu0";  // password is the one provided with Account Information. It is not login password.
$dbname = "epiz_21498721_finalproject";  // database name is listed with database in control panel

$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 
echo "<h1>Connected successfully</h1>";

$sql = "SELECT * FROM tasks";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<p>id: " . $row["id"]. " - Title: " . $row["title"]. " -Description: " . $row["description"]. "</p>";
    }
} else {
    echo "<p>0 results</p>";
}
$mysqli->close();
?>