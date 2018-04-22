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
        <a href="add.html">Add ...</a>
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
            // query the database, print out table html of default records:
            // firstName,lastName, major, graduationYear of all records
			require("database.php");
        ?>
        </table>
    </body>
</html>