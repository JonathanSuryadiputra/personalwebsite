<?php
$hostname = 'personalwebsite-db.ckcykcp4vnxg.eu-west-1.rds.amazonaws.com';
$username = 'admin';
$password = 'qFQm8EknSTRxgZi';

$dbname = 'personalwebsite_db';

$connection = mysqli_connect($hostname,$username,$password, $dbname);

if (!$connection)
{
	die ("Failed to connect to MySQL: " . mysqli_connect_error());
}
?>