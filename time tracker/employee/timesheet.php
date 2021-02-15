<?php include '../database/server.php'; ?>
    <?php 
        if(isset($_POST['submit'])){
            var_dump($_POST);
            exit;
            $status  = $_POST['status'];
            echo $status;
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Varela&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/employee/timesheet.css">
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
                            
                            <h3>NOV 2020</h3>                                    
                        </div>
                        <div id="form">
                            <form action="timesheet.php" method="POST">
                                
                                <table width="100%">                                   
                                    <tr>
                                        <?php for($i=1;$i<=20;$i++) : ?>
                                            <th><?php echo ($i); ?></th>
                                        <?php endfor; ?>
                                    </tr>
                                    <tr>
                                        <?php 
                                            $td =   "<td>
                                                        <select class='option-disable' name='status'>
                                                            <option value='absent'>A</option>
                                                            <option value='present'>P</option>
                                                            <option value='approved leave'>AL</option>
                                                            <option value='public holiday'>PHD</option>
                                                            <option value='extra work day'>EWD</option>
                                                        </select>
                                                    </td>"
                                        ?>
                                        <?php 
                                            echo str_repeat($td, 20);
                                         ?>    
                                    </tr>
                                    <div id="btn">
                                        <button type="submit" name="edit" id="edit">edit</button>
                                        <button type="submit" name="submit" id="submit">submit</button>
                                    </div>                                    
                                </table>

                            </form>
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