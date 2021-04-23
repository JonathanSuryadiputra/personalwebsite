<?php
include 'db.inc.php';

// SQL insert statement into database
$sqlString = "INSERT INTO project (projectTitle, affiliation, toolsUsed, projectDesc, githubLink) VALUES ('$_POST[projecttitle]', '$_POST[affiliation]', '$_POST[toolsused]', '$_POST[description]', '$_POST[githublink]')";

// if mysqli query has an error
if (!mysqli_query($connection, $sqlString)) {
	die ("An Error in the SQL Query: " . mysqli_error($connection));
}

// close sql connection
mysqli_close($connection);

// redirect page back to form after submission to database
header( "Location: addProjectForm.html" );
exit; // exit php file
?>