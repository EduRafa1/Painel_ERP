<?php 

	class Painel{

		public static function logado(){
			return isset($_SESSION['logado']) ? true : false;
		}
		public static function logout(){
			setcookie('lembrar',true,time()-1,'/');
			session_destroy();
			Painel::redirect(INCLUDE_PATH);
		}

		public static function redirect($url){
			echo '<script>location.href="'.$url.'"</script>';
			die();
		}

	}


 ?>