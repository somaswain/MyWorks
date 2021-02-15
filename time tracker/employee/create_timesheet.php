<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Varela&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/employee/create_timesheet.css">
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
                <div class="main-content">
                    <h3>TIMESHEET</h3>
                    <form action="" method="POST">
                        <table>
                            <tr>
                                <td>
                                    <div class="field">
                                        <label for="employeeID">EmployeeID</label>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" name="employeeID">               
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="field">
                                        <label for="month">Month </label>                 
                                    </div>
                                </td>
                                <td>
                                    <select name="month">
                                        <option>Select</option>
                                        <option value="january">Jan</option>
                                        <option value="february">Feb</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="field">
                                        <label for="year">Year</label>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" name="year">             
                                </td>
                            </tr>     
                        </table>
                    <button id="create" type="submit">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 