<?php include'../database/dbemployee.php'; ?>
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
                    <h3>EMPLOYEE</h3>
                    <form action="employee_list.php" method="POST">
                        <table>
                        <tr>
                            <td>
                                <label for="employeeID">Employee ID  </label>
                            </td>
                            <td>
                                <input type="text" name="employeeID">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="firstname">Firstname  </label>
                            </td>
                            <td>
                                <input type="text" name="firstname">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="lastname">Lastname </label>
                            </td>
                            <td>
                                <input type="text" name="lastname">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="dob">Date of Birth  </label>
                            </td>
                            <td>
                                <input type="text" name="dob">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="projects">Projects  </label>
                            </td>
                            <td>
                                <select>
                                    <option>project1</option>
                                    <option>project 2</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="email">Email  </label>
                            </td>
                            <td>
                                <input type="text" name="useremail">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="password">Password  </label>
                            </td>
                            <td>
                                <input type="text" name="userpassword">
                            </td>
                        </tr>
                    </table>
                    <div class="action">
                        <a href="employee_list.php"><button id="return">Return</button></a>
                        <a href="#"><button type="submit" name="submit" id="save">Save</button></a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>