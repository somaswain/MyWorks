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
			header('Location:admin.php');
		}else{
			$error = 'Check your login credentials';
			// echo '<div class="loginstatus">'.$error.'</div>';
		}


	}

if(isset($_POST['logout'])){
	session_destroy();
}