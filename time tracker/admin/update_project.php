<?php include '../database/dbconnect.php'; ?>
<?php 

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $sql = "SELECT * FROM projects WHERE id=$id";
    $stmt = $pdo->query($sql);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $projectnum = $row['projectnum'];
        $projectname = $row['projectname'];
        $projectdescription = $row['projectdescription'];
        $projectstartdate = $row['projectstartdate'];
        $projectenddate = $row['projectenddate'];
        
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Varela&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/admin/edit.css">
    <title>Time tracker</title>
</head>
<body>

    <div class="content">
        <h1 class="title">Time tracker</h1>
        <hr>
        <div class="wrapper">
            <div class="sidebar">
                <br>
                <h1><a href="admin.php"> ADMIN</a></h1>
                <br>
                <a href="projects.php"><h3>Projects</h3></a><br>                
                <a href="employee_list.php"><h3>Employees</h3></a><br>
                <a href="#" name="Approve"><h3>Approve</h3></a><br>
                <a href="../index.php" name="logout"><h3>Logout</h3></a><br>
            </div>
            <div class="main">
                <div class="main-content">
                    <h3>PROJECT</h3>
                    <form action="update_project.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $id; ?> ">
                            <table>
                                <tr>
                                    <td>
                                        <label for="projectID">Project ID  </label>
                                    </td>
                                    <td>
                                        <input type="text" name="projectnum" value="<?php echo $projectnum; ?> ">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="projectname">Project Name  </label>
                                    </td>
                                    <td>
                                        <input type="text" name="projectname" value="<?php echo $projectname; ?> ">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="projectdescription">Project Description </label>
                                    </td>
                                    <td>
                                        <textarea name="projectdescription" rows="3" cols="15" value="<?php echo $projectdescription; ?>"></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="projectstartdate">Project Start Date  </label>
                                    </td>
                                    <td>
                                        <input type="text" name="projectstartdate" value="<?php echo $projectstartdate; ?> " >
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="projectenddate">Project End Date  </label>
                                    </td>
                                    <td>
                                        <input type="text" name="projectenddate" value="<?php echo $projectenddate; ?> " >
                                    </td>
                                </tr>
                            </table>
                            <div class="action">
                                <a href="projects.php"><button name="back" id="return">Return</button></a>
                                <a href="#"><button type="submit" name="update" id="save">update</button></a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>