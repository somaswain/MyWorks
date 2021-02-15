<?php include'../database/dbemployee.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Varela&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/admin/employee_list.css">
    <title>Time tracker</title>
</head>
<body>
    <div class="content">
        <h1 class="title">Time tracker</h1>
        <hr>
        <div class="wrapper">
            <div class="sidebar">
                <br>
                <h1><a href="admin.php">ADMIN</a></h1>
                <br>
                <a href="projects.php"><h3>Projects</h3></a><br>                
                <a href="employee_list.php"><h3>Employees</h3></a><br>
                <a href="#" name="Approve"><h3>Approve</h3></a><br>
                <a href="../index.php" name="logout"><h3>Logout</h3></a><br>
            </div>
            <div class="project-content">
                <a href="create_employees.php">
                    <div id="create">
                        <label for="create-employee"><i class="fas fa-user-plus"></i></label>
                        <h3 id="create-employee">create employee</h3>
                    </div>
                </a>
                <h2>Employees</h2>
                
                <div class="projects">
                    <div class="matter">
                        <table class="employee-list" width="100%">
                            <tr>
                                <th>Employee ID</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Date of birth</th>
                                <th>Projects</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th colspan="2">Options</th>

                            </tr>
                            <?php 
                                $sql = "SELECT * FROM employee_list";

                                $stmt = $pdo->query($sql);

                             ?>

                             <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) :  ?>
                            
                            <tr>
                                <td><?php echo $row['employee_num']; ?> </td>
                                <td><?php echo $row['firstname']; ?></td>
                                <td><?php echo $row['lastname']; ?></td>
                                <td><?php echo $row['dob']; ?></td>
                                <td>
                                    <ol>
                                        <li>project x</li>
                                        <li>project y</li>
                                    </ol>
                                </td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['password']; ?></td>
                                <td><a href="update_employee.php?edit=<?php echo $row['id']; ?> "><div><button id="table-edit" title="edit" name="edit"><i class="fas fa-edit"></i></button></div></td></a>
                                <td><div><a href="#"><button id="table-edit1" title="enable/disable"><i class="fas fa-eye-slash"></i></button></div></td></a>
                            </tr>
                            <?php endwhile; ?>
                        </table>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>