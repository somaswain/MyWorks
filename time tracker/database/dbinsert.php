<?php 

include 'dbconnect.php';

	if(isset($_POST['submit'])){
		$projectId = $_POST['projectnum'];
		$projectname = $_POST['projectname'];
		$projectDescription = $_POST['projectdescription'];
		$projectStartDate = $_POST['projectstartdate'];
		$projectEndDate = $_POST['projectenddate'];

		// echo $projectId.'<br>'.$projectname.'<br>'.$projectDescription.'<br>'.$projectStartDate.'<br>'.$projectEndDate;

		$sql = 'INSERT INTO projects(projectnum, projectname, projectdescription, projectstartdate, projectenddate) 
				VALUES(:projectId, :projectname, :projectdescription, :projectstartdate, :projectenddate)';

		$stmt = $pdo->prepare($sql);

		$stmt->execute(['projectId' => $projectId, 'projectname' => $projectname, 'projectdescription' => $projectDescription, 'projectstartdate' => $projectStartDate, 'projectenddate' => $projectEndDate]);

		// echo 'project added';

		header('Location:projects.php');

	}


	if(isset($_POST['back'])){
		header('Location:projects.php');
	}

if(isset($_POST['logout'])){
	session_destroy();
}