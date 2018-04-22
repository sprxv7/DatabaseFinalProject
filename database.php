<?php
require('db_access.php');

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 
echo "<h1>Connected successfully</h1>";
$search = $_GET['search'];
$option = $_GET['option'];

switch($option){
	case 'lname':
		$sql = "SELECT * FROM studentYr INNER JOIN colleges ON studentYr.major = colleges.major WHERE lastName = '$search'";
		$result = $mysqli->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				echo "<tr>";
        		echo "<td>".$row["ID"]."</td><td>".$row["firstName"]."</td><td>".$row["lastName"]."</td><td>".$row["major"]."</td><td>".$row["college"]."</td><td>".$row["gradYear"]."</td>";
				echo "</tr>";
    		}
		}else{
    		echo "<p>Zero result.</p>";
		}
		break;
		
	case 'fname':
		$sql = "SELECT * FROM studentYr INNER JOIN colleges ON studentYr.major = colleges.major WHERE firstName = '$search'";
		$result = $mysqli->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				echo "<tr>";
        		echo "<td>".$row["ID"]."</td><td>".$row["firstName"]."</td><td>".$row["lastName"]."</td><td>".$row["major"]."</td><td>".$row["college"]."</td><td>".$row["gradYear"]."</td>";
				echo "</tr>";
    		}
		}else{
    		echo "<p>Zero result.</p>";
		}
		break;
		
	case 'college':
		$sql = "SELECT * FROM studentYr INNER JOIN colleges ON studentYr.major = colleges.major WHERE college = '$search'";
		$result = $mysqli->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				echo "<tr>";
        		echo "<td>".$row["ID"]."</td><td>".$row["firstName"]."</td><td>".$row["lastName"]."</td><td>".$row["major"]."</td><td>".$row["college"]."</td><td>".$row["gradYear"]."</td>";
				echo "</tr>";
    		}
		}else{
    		echo "<p>Zero result.</p>";
		}
		break;
		
	case 'major':
		$sql = "SELECT * FROM studentYr INNER JOIN colleges ON studentYr.major = colleges.major WHERE studentYr.major = '$search'";
		$result = $mysqli->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				echo "<tr>";
        		echo "<td>".$row["ID"]."</td><td>".$row["firstName"]."</td><td>".$row["lastName"]."</td><td>".$row["major"]."</td><td>".$row["college"]."</td><td>".$row["gradYear"]."</td>";
				echo "</tr>";
    		}
		}else{
    		echo "<p>Zero result.</p>";
		}
		break;
		
	case 'id':
		$sql = "SELECT * FROM studentYr INNER JOIN colleges ON studentYr.major = colleges.major WHERE id = '$search'";
		$result = $mysqli->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				echo "<tr>";
        		echo "<td>".$row["ID"]."</td><td>".$row["firstName"]."</td><td>".$row["lastName"]."</td><td>".$row["major"]."</td><td>".$row["college"]."</td><td>".$row["gradYear"]."</td>";
				echo "</tr>";
    		}
		}else{
    		echo "<p>Zero result.</p>";
		}
		break;
	
	default:
		$sql = "SELECT * FROM studentYr INNER JOIN colleges ON studentYr.major = colleges.major";
		$result = $mysqli->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				echo "<tr>";
        		echo "<td>".$row["ID"]."</td><td>".$row["firstName"]."</td><td>".$row["lastName"]."</td><td>".$row["major"]."</td><td>".$row["college"]."</td><td>".$row["gradYear"]."</td>";
				echo "</tr>";
    		}
		}else{
    		echo "<p>Zero result.</p>";
		}
		break;

}

$mysqli->close();
?>