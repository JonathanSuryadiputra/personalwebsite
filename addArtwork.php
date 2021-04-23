<?php
include 'db.inc.php';

// SQL insert statement into database
$sqlString = "INSERT INTO artwork (artworkTitle, artworkMedium, thumbnailLink, deviantartLink) VALUES ('$_POST[artworktitle]', '$_POST[medium]', '$_POST[thumbnaillink]', '$_POST[deviantartlink]')";

// if mysqli query has an error
if (!mysqli_query($connection, $sqlString)) {
	die ("An Error in the SQL Query: " . mysqli_error($connection));
}

// close sql connection
mysqli_close($connection);

// redirect page back to form after submission to database
header( "Location: addArtworkForm.html" );
exit; // exit php file
?>