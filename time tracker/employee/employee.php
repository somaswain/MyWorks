<?php 
    if(isset($_GET['submit'])){
        $email = $_GET['email'];
        $sql = "SELECT * FROM employee_list WHERE email=$email";
        $stmt = $pdo->query($sql);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $email = $row['email'];
        echo $email;
    }
    
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Varela&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/employee/employee.css">
    <title>Time tracker</title>
</head>
<body>
    <div class="content">
        <h1 class="title">Time tracker</h1>
        <hr>
        <div class="wrapper">
            <div class="sidebar">
                <br>
                <h1><a href="employee.php">EMPLOYEE</a></h1>
                <br>
                <a href="timesheet.php"><h3>Timesheet</h3></a><br>
                <a href="#"><h3>Reports</h3></a>
            </div>
            <div class="main">
                <div id="intro">
                    <h2>Welcome to time tracker!</h2>
                </div>
            </div>
        </div>
    </div>
</body>
</html>