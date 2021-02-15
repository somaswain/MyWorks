<?php 
require 'server.php';

$id = 0;
$projectnum = '';
$projectname = '';
$projectdescription = '';
$projectstartdate = '';
$projectenddate = '';


if(isset($_POST['back'])){
	header('Location:projects.php');
}

// UPDATE

if(isset($_POST['update'])){
	$id = $_POST['id'];
	$projectId = $_POST['projectnum'];
	$projectname = $_POST['projectname'];
	$projectDescription = $_POST['projectdescription'];
	$projectStartDate = $_POST['projectstartdate'];
	$projectEndDate = $_POST['projectenddate'];

	$pdo->query("UPDATE projects SET projectnum='$projectId', projectname='$projectname', projectdescription='$projectDescription', projectstartdate='$projectStartDate', projectenddate='$projectEndDate' WHERE id=$id");

	header('Location:projects.php');

}

if(isset($_POST['logout'])){
	session_destroy();
}

