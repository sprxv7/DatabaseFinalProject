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
    $major = $row['major'];
    $gradYear = $row['gradYear'];

$mysqli->close();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit</title>
        <link rel="stylesheet" type='text/css' href='page.css'>
    </head>
    <body>
        <div class="main">
        <h1>Edit student information</h1>
        <a href="index.php"><img src="homeBtn.jpg" alt="home"></a><p>
        <form id="addform" name="add" action="update.php" method="get">
            First name: <input type="text" name="fname" value="<?php echo $firstName ?>"required> <br> <br>
            Last name: <input type="text" name="lname" value="<?php echo $lastName ?>"required> <br> <br>
            Major: <br>
           <table id='addedit'>
            <tr>
            <td><input name="major" type="radio" value="Biology" <?php if($major === 'Biology') echo 'checked'; ?>>Biology <br></td>
            <td><input name="major" type="radio" value="Chemistry" <?php if($major === 'Chemistry') echo 'checked'; ?>>Chemistry<br></td><td>
            <input name="major" type="radio" value="English" <?php if($major === 'English') echo 'checked'; ?>>English<br></td>
                </tr><tr>
           <td> <input name="major" type="radio" value="French" <?php if($major === 'French') echo 'checked'; ?>>French<br></td><td>
            <input name="major" type="radio" value="German" <?php if($major === 'German') echo 'checked'; ?>>German<br></td><td>
                <input name="major" type="radio" value="Mathematics" <?php if($major === 'Mathematics') echo 'checked'; ?>>Mathematics<br></td>
                </tr><tr><td>
            <input name="major" type="radio" value="Philosophy" <?php if($major === 'Philosophy') echo 'checked'; ?>>Philosophy<br></td><td>
            <input name="major" type="radio" value="Physics" <?php if($major === 'Physics') echo 'checked'; ?>>Physics<br></td><td>
                <input name="major" type="radio" value="Political Science" <?php if($major === 'Political Science') echo 'checked'; ?>>Political Science<br></td>
                </tr><tr><td>
            <input name="major" type="radio" value="Psychology" <?php if($major === 'Psychology') echo 'checked'; ?>>Psychology<br></td><td>
            <input name="major" type="radio" value="Sociology" <?php if($major === 'Sociology') echo 'checked'; ?>>Sociology<br></td><td>
                <input name="major" type="radio" value="Social Work" <?php if($major === 'Social Work') echo 'checked'; ?>>Social Work<br></td>
                </tr><tr><td>
            <input name="major" type="radio" value="Accounting" <?php if($major === 'Accounting') echo 'checked'; ?>>Accounting<br></td><td>
            <input name="major" type="radio" value="Economics" <?php if($major === 'Economics') echo 'checked'; ?>>Economics<br></td><td>
            <input name="major" type="radio" value="Finance" <?php if($major === 'Finance') echo 'checked'; ?>>Finance<br></td>
                </tr><tr><td>
            <input name="major" type="radio" value="General Business" <?php if($major === 'General Business') echo 'checked'; ?>>General Business<br></td><td>
            <input name="major" type="radio" value="Management" <?php if($major === 'Management') echo 'checked'; ?>>Management<br></td><td>
            <input name="major" type="radio" value="Marketing" <?php if($major === 'Marketing') echo 'checked'; ?>>Marketing<br></td>
                </tr><tr><td>
            <input name="major" type="radio" value="Counseling" <?php if($major === 'Counseling') echo 'checked'; ?>>Counseling<br></td><td>
            <input name="major" type="radio" value="Early Childhood Education" <?php if($major === 'Early Childhood Education') echo 'checked'; ?>>Early Childhood Education<br></td><td>
            <input name="major" type="radio" value="Education Administration" <?php if($major === 'Education Administration') echo 'checked'; ?>>Education Administration<br></td>
                </tr><tr><td>
            <input name="major" type="radio" value="Educational Technology" <?php if($major === 'Educational Technology') echo 'checked'; ?>>Educational Technology<br></td><td>
            <input name="major" type="radio" value="Elementary Education" <?php if($major === 'Elementary Education') echo 'checked'; ?>>Elementary Education<br></td><td>
            <input name="major" type="radio" value="Secondary Education" <?php if($major === 'Secondary Education') echo 'checked'; ?>>Secondary Education<br></td>
                </tr><tr><td>
            <input name="major" type="radio" value="Special Education" <?php if($major === 'Special Education') echo 'checked'; ?>>Special Education<br></td><td>
            <input name="major" type="radio" value="Aerospace Engineering" <?php if($major === 'Aerospace Engineering') echo 'checked'; ?>>Aerospace Engineering<br></td><td>
            <input name="major" type="radio" value="Biological Engineering" <?php if($major === 'Biological Engineering') echo 'checked'; ?>>Biological Engineering<br></td>
                </tr><tr><td>
            <input name="major" type="radio" value="Chemical Engineering" <?php if($major === 'Chemical Engineering') echo 'checked'; ?>>Chemical Engineering<br></td><td>
            <input name="major" type="radio" value="Civil Engineering" <?php if($major === 'Civil Engineering') echo 'checked'; ?>>Civil Engineering<br></td><td>
            <input name="major" type="radio" value="Computer Science" <?php if($major === 'Computer Science') echo 'checked'; ?>>Computer Science<br></td>
                </tr><tr><td>
            <input name="major" type="radio" value="Electrical & Computer Engineering" <?php if($major === 'Electrical & Computer Engineering') echo 'checked'; ?>>Electrical & Computer Engineering<br></td><td>
            <input name="major" type="radio" value="Mechanical Engineering" <?php if($major === 'Mechanical Engineering') echo 'checked'; ?>>Mechanical Engineering<br></td><td>
            <input name="major" type="radio" value="Nuclear Engineering" <?php if($major === 'Nuclear Engineering') echo 'checked'; ?>>Nuclear Engineering</td>
                </tr>
                </table>
                <br> <br>
            Graduation Year: <select name="gradYear">
                <option name="gradYear" value="2010" <?php if($gradYear == '2010') echo 'selected'; ?>>2010</option>
                <option name="gradYear" value="2011" <?php if($gradYear == '2011') echo 'selected'; ?>>2011</option>
                <option name="gradYear" value="2012" <?php if($gradYear == '2012') echo 'selected'; ?>>2012</option>
                <option name="gradYear" value="2013" <?php if($gradYear == '2013') echo 'selected'; ?>>2013</option>
                <option name="gradYear" value="2014" <?php if($gradYear == '2014') echo 'selected'; ?>>2014</option>
                <option name="gradYear" value="2015" <?php if($gradYear == '2015') echo 'selected'; ?>>2015</option>
                <option name="gradYear" value="2016" <?php if($gradYear == '2016') echo 'selected'; ?>>2016</option>
                <option name="gradYear" value="2017" <?php if($gradYear == '2017') echo 'selected'; ?>>2017</option>
                <option name="gradYear" value="2018" <?php if($gradYear == '2018') echo 'selected'; ?>>2018</option>
            </select>
            <br> <br>
            <input type="hidden" value="<?php echo $id ?>" name="id">
            <button class='edit' type="submit"></button>
            <button class='clear' type="reset"></button>
        
        </form>
            </div>
    </body>
</html>