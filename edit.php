<?php
    
    require('db_access.php');

$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

$id = $_POST['id'] ? $_POST['id'] : redirect("application.php");


$id = $mysqli->real_escape_string($id);

$sql = "SELECT * FROM studentYr INNER JOIN colleges ON studentYr.major = colleges.major WHERE id = $id";

$result = $mysqli->query($sql);

$row = $result->fetch_assoc();

$firstName = $row['firstName'];
$lastName = $row['lastName'];

    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit</title>
        <script>
        
        
        </script>
    </head>
    <body>
        <h1>Edit student information</h1>
        <a href="application.php">Home</a>
        <form id="addform" name="add" action="database.php" method="get">
            First name: <input type="text" name="fname" value="<?php echo $firstName ?>"required> <br> <br>
            Last name: <input type="text" name="lname" value="<?php echo $lastName ?>"required> <br> <br>
            Major: <br>
            <input type="radio" name="Biology">Biology <br>
            <input type="radio" name="Chemistry">Chemistry<br>
            <input type="radio" name="English">English<br>
            <input type="radio">French<br>
            <input type="radio">German<br>
            <input type="radio">Mathematics<br>
            <input type="radio">Philosophy<br>
            <input type="radio">Physics<br>
            <input type="radio">Political Science<br>
            <input type="radio">Psychology<br>
            <input type="radio">Sociology<br>
            <input type="radio">Social Work<br>
            <input type="radio">Accounting<br>
            <input type="radio">Economics<br>
            <input type="radio">Finance<br>
            <input type="radio" checked>General Business<br>
            <input type="radio">Management<br>
            <input type="radio">Marketing<br>
            <input type="radio">Counseling<br>
            <input type="radio">Early Childhood Education<br>
            <input type="radio">Education Administration<br>
            <input type="radio">Educational Technology<br>
            <input type="radio">Elementary Education<br>
            <input type="radio">Secondary Education<br>
            <input type="radio">Special Education<br>
            <input type="radio">Aerospace Engineering<br>
            <input type="radio">Biological Engineering<br>
            <input type="radio">Chemical Engineering<br>
            <input type="radio">Civil Engineering<br>
            <input type="radio">Computer Science<br>
            <input type="radio">Electrical & Computer Engineering<br>
            <input type="radio">Mechanical Engineering<br>
            <input type="radio">Nuclear Engineering<br> <br>
            Graduation Year: <select form="addform">
                <option id="2010">2010</option>
                <option id="2011">2011</option>
                <option id="2012">2012</option>
                <option id="2013">2013</option>
                <option id="2014">2014</option>
                <option id="2015">2015</option>
                <option id="2016">2016</option>
                <option id="2017">2017</option>
                <option id="2018">2018</option>
            </select>
            <br> <br>
            <input type="submit" value="Add ...">
            <input type="reset" value="Clear ...">
        
        </form>
    </body>
</html>