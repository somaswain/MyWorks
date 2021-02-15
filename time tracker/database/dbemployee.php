<?php 
include 'server.php';

$employee_num = '';
$firstname = '';
$lastname = '';
$dob = '';
$useremail = '';
$userpassword = '';

// ===============
// Create Employee
// ===============

if(isset($_POST['submit'])){
	$employeeId = $_POST['employeeID'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$dob = $_POST['dob'];
	$userEmail = $_POST['useremail'];
	$userPassword = $_POST['userpassword'];

	$sql = 'INSERT INTO employee_list(employee_num,firstname,lastname,dob,email,password) VALUES(:employeeID,:firstname,:lastname,:dob,:email,:password)';

	$stmt = $pdo->prepare($sql);

	$stmt->execute(['employeeID' => $employeeId, 'firstname' => $firstname, 'lastname' => $lastname, 'dob' => $dob, 'email' => $userEmail, 'password' => $userPassword]);

	header('Location:employee_list.php');
}

if(isset($_POST['return'])){
	header('Location:employee_list');
}

// =================
// update employees
// =================

if(isset($_POST['update'])){
	$id = $_POST['id'];
	$employeeId = $_POST['employeeID'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$dob = $_POST['dob'];
	$userEmail = $_POST['useremail'];
	$userPassword = $_POST['userpassword'];

	$pdo->query("UPDATE employee_list SET employee_num='$employeeId', firstname='$firstname', lastname='$lastname', dob='$dob', email='$userEmail', password='$userPassword' WHERE id=$id");

	header('Location:employee_list.php');

}

if(isset($_POST['logout'])){
	session_destroy();
}