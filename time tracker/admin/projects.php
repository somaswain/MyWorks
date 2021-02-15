<?php include '../database/dbconnect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Varela&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/admin/projects.css">
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
            <div class="project-content">
                <a href="create_project.php">
                    <div id="create">
                        <label for="create-project"><i class="fas fa-plus-circle"></i></i></label>
                        <h3 id="create-project">create project</h3>
                    </div>
                </a>
                <h2>Projects</h2>
                <div class="projects">
                    <table class="employee-list" width="100%">
                        <thead>
                            <tr>
                                <th>Project ID</th>
                                <th>Project name</th>
                                <th>Project start date</th>
                                <th>Project end date</th>
                                <th colspan="2">Options</th>

                            </tr>                            
                        </thead>
                        <tbody>

                            <?php 
                                $sql = 'SELECT * FROM projects';

                                $stmt = $pdo->query($sql);

                             ?>
                                <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>

                                    <tr>
                                        <td><?php echo $row['projectnum']; ?></td>
                                        <td><?php echo $row['projectname']; ?></td>
                                        <!-- <td><?php echo $row['projectdescription']; ?></td> -->
                                        <td><?php echo $row['projectstartdate']; ?></td>
                                        <td><?php echo $row['projectenddate']; ?></td>
                                        <td><a href="update_project.php?edit=<?php echo $row['id']; ?> "><button id="table-edit" title="edit" name="edit"><i class="fas fa-edit"></i></button></td></a> 
                                        <td><button id="table-edit1" title="enable/disable"><i class="fas fa-eye-slash"></i></button></td>
                                    </tr>

                                <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>