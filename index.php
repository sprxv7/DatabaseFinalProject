<!DOCTYPE html>
<html>
    <head>
        <title>Final Project</title>
        <link rel="stylesheet" type='text/css' href='page.css'>
        <script>
        </script>
    </head>
    <body>
        <div class="main">
        <img id="dbu" src="DBU.png" alt="Database University"><br><br>

        <a href="search.html"><img src="sBtn.jpg" alt="search"></a>
        <a href="add.html"><img src="addBtn.jpg" alt="add"></a>
        <a href="reset.php"><img src="homeBtn.jpg" alt="home"></a><br><br><br>
        <table>
			<tr>
				<th>Student ID</th>
				<th>First Name</th>
				<th>Last Name</th>
                <th>Major</th>
                <th>College</th>
                <th>Graduation Year</th>
                <th>Edit ... </th>
                <th>Delete ... </th>
			</tr>
        <?php
			require("database.php");
        ?>
        </table>
        </div>
    </body>
</html>