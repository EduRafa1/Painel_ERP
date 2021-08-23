<?php 
	if (isset($_COOKIE['lembrar'])) {
		$email = $_COOKIE['email'];
		$password = $_COOKIE['password'];
		$sql = Login::verifyLogin('usuarios','email',$email,'password',$password);
			if ($sql->rowCount() == 1) {
				$_SESSION['logado'] = true;
				$value = $sql->fetch();

				//Logamos com Sucesso
				$_SESSION['email'] = $email;
				$_SESSION['password'] = $password;
				Painel::redirect(INCLUDE_PATH_PAINEL);
			}else{
				//Painel::alert('erro','E-mail ou senha está incorreto')
			}
	}

 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">

	<title>|| ERP ||</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.min.css">
</head>
<body class="w100">
	<main class="w100">
		<form class="login" method="post" class="w50" autocomplete="off">
			<?php 
				if (isset($_POST['acao'])) {
					$email = $_POST['email'];
					$password = $_POST['password'];
					$sql = Login::verifyLogin('usuarios','email',$email,'password',$password);
					if ($sql->rowCount() == 1) {
						$_SESSION['logado'] = true;
						$value = $sql->fetch();
						$_SESSION['email'] = $email;
						$_SESSION['password'] = $password;
						if (isset($_POST['lembrar'])) {
							setcookie('lembrar',true,time()+(60*60*24),'/');
							setcookie('email',$email,time()+(60*60*24),'/');
							setcookie('password',$password,time()+(60*60*24),'/');
						}
						Painel::redirect(INCLUDE_PATH_PAINEL);
					}else{
						//Painel::alert('erro','E-mail ou senha está incorreto')
					}
				}

			 ?>
			<h5>Log In</h5>
			<div class="line"></div>
			<div class="form-container">
				<input type="text" name="email" placeholder="Email Address" >
				<input type="password" name="password" placeholder="Password" style="border-top: 0">
				<div class="container-checkbox">
						<input id="lembrar" type="checkbox" name="lembrar">
						<label for="lembrar"> Remember Me</label>
				</div><!--container-checkbox-->
				<div class="clear"></div>
				<input type="submit" name="acao" value="LOG IN">
				<div class="box-form">
					<li>
						<a href="#">Create Account</a>
						<a href="#">Can't log in?</a>
					</li>
				</div><!--box-form-->
			</div><!--form-container-->
			

		</form><!--form method Post-->
	</main><!--login-->
</body>
</html>