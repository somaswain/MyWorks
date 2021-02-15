<?php 
	$employeeID = '';
	$month = '';
	$year = '';
	$status = '';

	$host = "localhost";
	$user = "root";
	$password = "";
	$dbname = "january";

	if(isset($_POST['create'])){
		$employeeID = $_POST['employeeID'];
		$month = $_POST['month'];
		$year = $_POST['year'];
	}

	if($month == $dbname){


		$dsn = "mysql:host=".$host.";dbname=".$dbname;

		$pdo = new PDO($dsn, $user, $password);

		if(!$pdo){
			echo "connection error";
		}else{
			echo "connected"."<br>";
		}

		$sql = "SELECT * FROM january WHERE id=1";

		$stmt = $pdo->query($sql);
		$row = $stmt->fetch(PDO::FETCH_ASSOC);


	}