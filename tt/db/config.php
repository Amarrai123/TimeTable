<?php
// Host Name
$dbhost = 'localhost';

// Database Name
$dbname = 'timetable';

// Database Username
$dbuser = 'komedeUser';

// Database Password
$dbpass = 'komedePassword1@';

try {
	$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $exception ) {
	echo "Connection error :" . $exception->getMessage();
}