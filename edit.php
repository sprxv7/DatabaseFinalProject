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
            <input name="major" type="radio">Biology <br>
            <input name="major" type="radio">Chemistry<br>
            <input name="major" type="radio">English<br>
            <input name="major" type="radio">French<br>
            <input name="major" type="radio">German<br>
            <input name="major" type="radio">Mathematics<br>
            <input name="major" type="radio">Philosophy<br>
            <input name="major" type="radio">Physics<br>
            <input name="major" type="radio">Political Science<br>
            <input name="major" type="radio">Psychology<br>
            <input name="major" type="radio">Sociology<br>
            <input name="major" type="radio">Social Work<br>
            <input name="major" type="radio">Accounting<br>
            <input name="major" type="radio">Economics<br>
            <input name="major" type="radio">Finance<br>
            <input name="major" type="radio" checked>General Business<br>
            <input name="major" type="radio">Management<br>
            <input name="major" type="radio">Marketing<br>
            <input name="major" type="radio">Counseling<br>
            <input name="major" type="radio">Early Childhood Education<br>
            <input name="major" type="radio">Education Administration<br>
            <input name="major" type="radio">Educational Technology<br>
            <input name="major" type="radio">Elementary Education<br>
            <input name="major" type="radio">Secondary Education<br>
            <input name="major" type="radio">Special Education<br>
            <input name="major" type="radio">Aerospace Engineering<br>
            <input name="major" type="radio">Biological Engineering<br>
            <input name="major" type="radio">Chemical Engineering<br>
            <input name="major" type="radio">Civil Engineering<br>
            <input name="major" type="radio">Computer Science<br>
            <input name="major" type="radio">Electrical & Computer Engineering<br>
            <input name="major" type="radio">Mechanical Engineering<br>
            <input name="major" type="radio">Nuclear Engineering<br> <br>
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