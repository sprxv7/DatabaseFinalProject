<!DOCTYPE html>
<html>
    <head>
        <title>Final Project</title>
        <script>
        </script>
    </head>
    <body>
        <h1>University of ______</h1><br><br>
        <form action="search.html">
            <input type="button" value="Search">
        </form>
        <form action="add.html">
            <input type="button" value="Add">
        </form>
        <table>
			<tr>
				<th>Student ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Graduation Year</th>
			</tr>
        <?php
            // query the database, print out table html of default records:
            // firstName,lastName, major, graduationYear of all records
			require("database.php");
        ?>
        </table>
    </body>
</html>