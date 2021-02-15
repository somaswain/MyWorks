<?php 

session_start();

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'timetracker';

// DSN(data server name)
$dsn = "mysql:host=".$host.";dbname=".$dbname;

// connect to database using PDO method
$pdo = new PDO($dsn, $user, $password);

// set default fetch mode
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

// If connection unsuccesfull.
if(!$dsn){
	echo 'connection_aborted';
}

?>