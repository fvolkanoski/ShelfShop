<?php
// Set the MySQL database information here.
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'shelf_shop');

// Connect to the MySQL database.
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// If there is an error connecting to the MySQL database, display an error.
if($db === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
