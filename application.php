<!DOCTYPE html>
<html>
    <head>
        <title>Final Project</title>
        <script>
        </script>
    </head>
    <body>
        <h1>University of ______</h1><br><br>

        <a href="search.html">Search ...</a>
        <a href="add.html"><img src="addBtn.jpg" alt="add"></a>
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
    </body>
</html>