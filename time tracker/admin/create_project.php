<?php include '../database/dbconnect.php'; ?>
<?php include '../database/dbinsert.php'; ?>
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
                    <form action="create_project.php" method="post">
                        <table>
                            <tr>
                                <td>
                                    <label for="projectID">Project ID  </label>
                                </td>
                                <td>
                                    <input type="text" name="projectnum">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="projectname">Project Name  </label>
                                </td>
                                <td>
                                    <input type="text" name="projectname">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="projectdescription">Project Description </label>
                                </td>
                                <td>
                                    <textarea name="projectdescription" rows="3" cols="15"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="projectstartdate">Project Start Date  </label>
                                </td>
                                <td>
                                    <input type="text" name="projectstartdate">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="projectenddate">Project End Date  </label>
                                </td>
                                <td>
                                    <input type="text" name="projectenddate">
                                </td>
                            </tr>
                        </table>
                        <div class="action">
                            <a href="projects.php"><button name="back" id="return">Return</button></a>
                            <a href="#"><button type="submit" name="submit" id="save">Save</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>