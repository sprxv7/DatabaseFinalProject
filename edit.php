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

$mysqli->close();

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
        <a href="index.php">Home</a>
        <form id="addform" name="add" action="update.php" method="get">
            First name: <input type="text" name="fname" value="<?php echo $firstName ?>"required> <br> <br>
            Last name: <input type="text" name="lname" value="<?php echo $lastName ?>"required> <br> <br>
            Major: <br>
            <input name="major" type="radio" value="Biology">Biology <br>
            <input name="major" type="radio" value="Chemistry">Chemistry<br>
            <input name="major" type="radio" value="English">English<br>
            <input name="major" type="radio" value="French">French<br>
            <input name="major" type="radio" value="German">German<br>
            <input name="major" type="radio" value="Mathematics">Mathematics<br>
            <input name="major" type="radio" value="Philosophy">Philosophy<br>
            <input name="major" type="radio" value="Physics">Physics<br>
            <input name="major" type="radio" value="Political Science">Political Science<br>
            <input name="major" type="radio" value="Psychology">Psychology<br>
            <input name="major" type="radio" value="Sociology">Sociology<br>
            <input name="major" type="radio" value="Social Work">Social Work<br>
            <input name="major" type="radio" value="Accounting">Accounting<br>
            <input name="major" type="radio" value="Economics">Economics<br>
            <input name="major" type="radio" value="Finance">Finance<br>
            <input name="major" type="radio" value="General Business" checked>General Business<br>
            <input name="major" type="radio" value="Management">Management<br>
            <input name="major" type="radio" value="Marketing">Marketing<br>
            <input name="major" type="radio" value="Counseling">Counseling<br>
            <input name="major" type="radio" value="Early Childhood Education">Early Childhood Education<br>
            <input name="major" type="radio" value="Education Administration">Education Administration<br>
            <input name="major" type="radio" value="Educational Technology">Educational Technology<br>
            <input name="major" type="radio" value="Elementary Education">Elementary Education<br>
            <input name="major" type="radio" value="Secondary Education">Secondary Education<br>
            <input name="major" type="radio" value="Special Education">Special Education<br>
            <input name="major" type="radio" value="Aerospace Engineering">Aerospace Engineering<br>
            <input name="major" type="radio" value="Biological Engineering">Biological Engineering<br>
            <input name="major" type="radio" value="Chemical Engineering">Chemical Engineering<br>
            <input name="major" type="radio" value="Civil Engineering">Civil Engineering<br>
            <input name="major" type="radio" value="Computer Science">Computer Science<br>
            <input name="major" type="radio" value="Electrical & Computer Engineering">Electrical & Computer Engineering<br>
            <input name="major" type="radio" value="Mechanical Engineering">Mechanical Engineering<br>
            <input name="major" type="radio" value="Nuclear Engineering">Nuclear Engineering<br> <br>
            Graduation Year: <select name="gradYear">
                <option name="gradYear" value="2010">2010</option>
                <option name="gradYear" value="2011">2011</option>
                <option name="gradYear" value="2012">2012</option>
                <option name="gradYear" value="2013">2013</option>
                <option name="gradYear" value="2014">2014</option>
                <option name="gradYear" value="2015">2015</option>
                <option name="gradYear" value="2016">2016</option>
                <option name="gradYear" value="2017">2017</option>
                <option name="gradYear" value="2018">2018</option>
            </select>
            <br> <br>
            <input type="hidden" value="<?php echo $id ?>" name="id">
            <input type="submit" value="Edit ...">
            <input type="reset" value="Clear ...">
        
        </form>
    </body>
</html>