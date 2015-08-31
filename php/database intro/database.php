<?php
/*--------------------BEGINNING OF THE CONNECTION PROCESS------------------*/
//define constants for db_host, db_user, db_pass, and db_database
//adjust the values below to match your database settings
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root'); //set DB_PASS as 'root' if you're using mac
define('DB_DATABASE', 'world'); //make sure to set your database
//connect to database host
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);

/*-------------------------END OF CONNECTION PROCESS!---------------------*/

//make sure connection is good or die
if(mysqli_connect_errno())
{
    die("Failed to connect to MySQL: (" . mysqli_connect_errno() . ") " . mysqli_connect_error());
}

$cities = mysqli_query($connection, "SELECT * FROM cities WHERE id = 1");

foreach ($cities as $city) {
	var_dump($city['name']);
}
?>