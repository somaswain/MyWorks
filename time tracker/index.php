<?php  include 'server.php'; ?>
<?php include 'database/admin_db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .loginstatus{
            font-size: 15px;
            text-align: center;
            padding: 10px;
            background-color: #d63e3e;
            color: #ffffff;
            border-radius: 10px;
        }               
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Varela&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/admin/index.css">
    <title>Time tracker</title>
</head>
<body>
    <div class="content">
        <h1 class="title">Time tracker</h1>
        <hr>
        <div class="context">

            <?php 


                if(isset($_POST['submit'])){

                    $fetchEmail='';
                    $error = '';

                    $email = $_POST['email'];
                    $pwd = $_POST['password'];

                    $sql = 'SELECT * FROM admin_details WHERE email = :email && password = :password';

                    $stmt = $pdo->prepare($sql);

                    $stmt->execute(['email' => $email, 'password' => $pwd]);

                    $datas = $stmt->fetchAll();

                    foreach ($datas as $data) {

                        $fetchEmail = $data->email;
                        $fetchPwd = $data->password;

                    }

                    if($fetchEmail == $email && $fetchPwd == $pwd){
                        header('Location:admin/admin.php');
                    }else{
                        $error = 'Check your login credentials';
                        echo '<div class="loginstatus">'.$error.'</div>';
                    }


                }

             ?>

            <div id="head">Admin</div>
            <form action="index.php" method= "post">
                <div class="login">
                    <table>
                        <tr>
                            <td>
                                <label for="email">Email</label>                        
                            </td>
                            <td>
                                <input type="email" name="email" required>                        
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="password">Password</label>                        
                            </td>
                            <td>
                                <input type="password" name="password" required>                        
                            </td>
                        </tr>              
                    </table>
                    <center>
                        <div>
                            <button type="submit" name="submit" id="btn">Login</button>
                        </div>                 
                    </center>
                </div>
            </form>
        </div>
    </div>
</body>
</html>