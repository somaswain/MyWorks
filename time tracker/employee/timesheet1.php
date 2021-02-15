<?php 
    $employeeID = '';
    $month = '';
    $year = '';
    $status = '';

    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "january";

    if(isset($_POST['create'])){
        $employeeID = $_POST['employeeID'];
        $month = $_POST['month'];
        $year = $_POST['year'];
    }

    // if($month == $dbname){


        $dsn = "mysql:host=".$host.";dbname=".$dbname;

        $pdo = new PDO($dsn, $user, $password);

        if(!$pdo){
            echo "connection error";
        }

        if(isset($_POST['submi'])){
            $dsn = "mysql:host=".$host.";dbname=".$dbname;

            $pdo = new PDO($dsn, $user, $password);
            $status = $_POST['status'];
            $status1 = $_POST['status1'];
            $status2 = $_POST['status2'];
            $status3 = $_POST['status3'];
            $status4 = $_POST['status4'];
            $status5 = $_POST['status5'];
            $status6 = $_POST['status6'];
            $status7 = $_POST['status7'];
            $status8 = $_POST['status8'];
            $status9 = $_POST['status9'];
            $status10 = $_POST['status10'];
            $status11 = $_POST['status11'];
            $status12 = $_POST['status12'];
            $status13 = $_POST['status13'];
            $status14 = $_POST['status14'];
            $status15 = $_POST['status15'];
            $status16 = $_POST['status16'];
            $status17 = $_POST['status17'];
            $status18 = $_POST['status18'];
            $status19 = $_POST['status19'];
            $status20 = $_POST['status20'];

            $sql = "INSERT INTO january(day_1, day_2, day_3, day_4, day_5, day_6, day_7, day_8, day_9, day_10, day_11, day_12, day_13, day_14, day_15, day_16, day_17, day_18, day_19, day_20, day_21) VALUES(:status, :status1, :status2, :status3, :status4, :status5, :status6, :status7, :status8, :status9, :status10, :status11, :status12, :status13, :status14, :status15, :status16, :status17, :status18, :status19, :status20)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['status' => $status, 'status1' => $status1, 'status2'=> $status2, 'status3'=> $status3, 'status4'=> $status4, 'status5'=>$status5, 'status6'=> $status6, 'status7'=> $status7, 'status8'=>$status8, 'status9'=>$status9, 'status10'=>$status10, 'status11' => $status11, 'status12'=> $status12, 'status13'=>$status13, 'status14'=>$status14, 'status15'=>$status15, 'status16'=>$status16, 'status17'=>$status17, 'status18'=>$status18, 'status19'=>$status19, 'status20'=> $status20]);
            // echo "added succesfully";
            // // echo $status;
            // echo $status."<br>";
            // echo $status1;
        }

        
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Varela&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/employee/timesheet1.css">
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
                <a href="#"><h3>Timesheet</h3></a><br>
                <a href="#"><h3>Reports</h3></a>
            </div>
            <div class="main">
                <div class="main-title">
                    <a href="create_timesheet.php">
                        <div id="create">
                            <label for="create-timesheet"><i class="fas fa-plus-circle"></i></i></label>
                            <h3 id="create-timesheet">create timesheet</h3>
                        </div> 
                    </a>
                    <h2>Timesheet</h2>
                    <div class="main-body">
                        <div class="short-main" id="short-main">
                            <div id="btn">
                                <button type="submit" name="edit" id="edit">edit</button>
                                <button type="submit" name="submit" id="submit">submit</button>
                            </div>
                            <h3>NOV 2020</h3>                                    
                        </div>
                        <div id="form">
                            <form action="#" method="POST">
                                <table>  
                                    <?php 
                                        $sql = "SELECT * FROM january WHERE id=1"; 
                                        $stmt = $pdo->query($sql);
                                    ?>
                                    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                                        <center>
                                            <tr>
                                                <th><?php echo $row['day_1']; ?> </th>
                                                <th><?php echo $row['day_2']; ?> </th>
                                                <th><?php echo $row['day_3']; ?> </th>
                                                <th><?php echo $row['day_4']; ?> </th>
                                                <th><?php echo $row['day_5']; ?> </th>
                                                <th><?php echo $row['day_6']; ?> </th>
                                                <th><?php echo $row['day_7']; ?> </th>
                                                <th><?php echo $row['day_8']; ?> </th>
                                                <th><?php echo $row['day_9']; ?> </th>
                                                <th><?php echo $row['day_10']; ?> </th>
                                                <th><?php echo $row['day_11']; ?> </th>
                                                <th><?php echo $row['day_12']; ?> </th>
                                                <th><?php echo $row['day_13']; ?> </th>
                                                <th><?php echo $row['day_14']; ?> </th>
                                                <th><?php echo $row['day_15']; ?> </th>
                                                <th><?php echo $row['day_16']; ?> </th>
                                                <th><?php echo $row['day_17']; ?> </th>
                                                <th><?php echo $row['day_18']; ?> </th>
                                                <th><?php echo $row['day_19']; ?> </th>
                                                <th><?php echo $row['day_20']; ?> </th>
                                                <th><?php echo $row['day_21']; ?> </th>
                                            </tr>
                                        </center>  
                                    <?php endwhile; ?>                
                                            <tr>
                                                <td>
                                                    <select name="status" class="option-disable">
                                                        <option value="present">Present</option>
                                                        <option value="absent">Absent</option>
                                                        <option value="approved leave">Approved Leave</option>
                                                        <option value="public holiday">Public holiday</option>
                                                        <option value="extra work day">Extra work day</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="status1" class="option-disable">
                                                        <option value="present">Present</option>
                                                        <option value="absent">Absent</option>
                                                        <option value="approved leave">Approved Leave</option>
                                                        <option value="public holiday">Public holiday</option>
                                                        <option value="extra work day">Extra work day</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="status2" class="option-disable">
                                                        <option value="present">Present</option>
                                                        <option value="absent">Absent</option>
                                                        <option value="approved leave">Approved Leave</option>
                                                        <option value="public holiday">Public holiday</option>
                                                        <option value="extra work day">Extra work day</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="status3" class="option-disable">
                                                        <option value="present">Present</option>
                                                        <option value="absent">Absent</option>
                                                        <option value="approved leave">Approved Leave</option>
                                                        <option value="public holiday">Public holiday</option>
                                                        <option value="extra work day">Extra work day</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="status4" class="option-disable">
                                                        <option value="present">Present</option>
                                                        <option value="absent">Absent</option>
                                                        <option value="approved leave">Approved Leave</option>
                                                        <option value="public holiday">Public holiday</option>
                                                        <option value="extra work day">Extra work day</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="status5" class="option-disable">
                                                        <option value="present">Present</option>
                                                        <option value="absent">Absent</option>
                                                        <option value="approved leave">Approved Leave</option>
                                                        <option value="public holiday">Public holiday</option>
                                                        <option value="extra work day">Extra work day</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="status6" class="option-disable">
                                                        <option value="present">Present</option>
                                                        <option value="absent">Absent</option>
                                                        <option value="approved leave">Approved Leave</option>
                                                        <option value="public holiday">Public holiday</option>
                                                        <option value="extra work day">Extra work day</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="status7" class="option-disable">
                                                        <option value="present">Present</option>
                                                        <option value="absent">Absent</option>
                                                        <option value="approved leave">Approved Leave</option>
                                                        <option value="public holiday">Public holiday</option>
                                                        <option value="extra work day">Extra work day</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="status8" class="option-disable">
                                                        <option value="present">Present</option>
                                                        <option value="absent">Absent</option>
                                                        <option value="approved leave">Approved Leave</option>
                                                        <option value="public holiday">Public holiday</option>
                                                        <option value="extra work day">Extra work day</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="status9" class="option-disable">
                                                        <option value="present">Present</option>
                                                        <option value="absent">Absent</option>
                                                        <option value="approved leave">Approved Leave</option>
                                                        <option value="public holiday">Public holiday</option>
                                                        <option value="extra work day">Extra work day</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="status10" class="option-disable">
                                                        <option value="present">Present</option>
                                                        <option value="absent">Absent</option>
                                                        <option value="approved leave">Approved Leave</option>
                                                        <option value="public holiday">Public holiday</option>
                                                        <option value="extra work day">Extra work day</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="status11" class="option-disable">
                                                        <option value="present">Present</option>
                                                        <option value="absent">Absent</option>
                                                        <option value="approved leave">Approved Leave</option>
                                                        <option value="public holiday">Public holiday</option>
                                                        <option value="extra work day">Extra work day</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="status12" class="option-disable">
                                                        <option value="present">Present</option>
                                                        <option value="absent">Absent</option>
                                                        <option value="approved leave">Approved Leave</option>
                                                        <option value="public holiday">Public holiday</option>
                                                        <option value="extra work day">Extra work day</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="status13" class="option-disable">
                                                        <option value="present">Present</option>
                                                        <option value="absent">Absent</option>
                                                        <option value="approved leave">Approved Leave</option>
                                                        <option value="public holiday">Public holiday</option>
                                                        <option value="extra work day">Extra work day</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="status14" class="option-disable">
                                                        <option value="present">Present</option>
                                                        <option value="absent">Absent</option>
                                                        <option value="approved leave">Approved Leave</option>
                                                        <option value="public holiday">Public holiday</option>
                                                        <option value="extra work day">Extra work day</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="status15" class="option-disable">
                                                        <option value="present">Present</option>
                                                        <option value="absent">Absent</option>
                                                        <option value="approved leave">Approved Leave</option>
                                                        <option value="public holiday">Public holiday</option>
                                                        <option value="extra work day">Extra work day</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="status16" class="option-disable">
                                                        <option value="present">Present</option>
                                                        <option value="absent">Absent</option>
                                                        <option value="approved leave">Approved Leave</option>
                                                        <option value="public holiday">Public holiday</option>
                                                        <option value="extra work day">Extra work day</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="status17" class="option-disable">
                                                        <option value="present">Present</option>
                                                        <option value="absent">Absent</option>
                                                        <option value="approved leave">Approved Leave</option>
                                                        <option value="public holiday">Public holiday</option>
                                                        <option value="extra work day">Extra work day</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="status18" class="option-disable">
                                                        <option value="present">Present</option>
                                                        <option value="absent">Absent</option>
                                                        <option value="approved leave">Approved Leave</option>
                                                        <option value="public holiday">Public holiday</option>
                                                        <option value="extra work day">Extra work day</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="status19" class="option-disable">
                                                        <option value="present">Present</option>
                                                        <option value="absent">Absent</option>
                                                        <option value="approved leave">Approved Leave</option>
                                                        <option value="public holiday">Public holiday</option>
                                                        <option value="extra work day">Extra work day</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select name="status20" class="option-disable">
                                                        <option value="present">Present</option>
                                                        <option value="absent">Absent</option>
                                                        <option value="approved leave">Approved Leave</option>
                                                        <option value="public holiday">Public holiday</option>
                                                        <option value="extra work day">Extra work day</option>
                                                    </select>
                                                </td>
                                            </tr>           
                                        </table>
                                </form>
                            </div>
                        </div>    
                    </div> 
                </div>
            </div>
        </div>
    </div>
</body>
    <script>
        var shortMain = document.getElementById('short-main');
        shortMain.addEventListener('click',function(e){
            var form = document.getElementById('form');
            var edit = document.getElementById('edit');
            var submit = document.getElementById('submit');
            if(e.target != edit && e.target != submit){
                if(form.style.display == 'block'){
                    form.style.display = 'none';
                }else{
                    form.style.display = 'block';
                };
            };
            
        });

        
        // var submit = document.getElementById('submit');
        // submit.addEventListener('click', function(e){
        //     var edit = document.getElementById('edit').disabled = true;
        // })

        var submit = document.getElementById('submit');
        submit.addEventListener('click', function(e){
            var edit = document.getElementById('edit');
            var disable = document.getElementsByClassName('option-disable');
            edit.style.display = 'none';
            for(i=0;i<disable.length;i++){
                disable[i].disabled = true;
            }
        });
    </script>

</html>