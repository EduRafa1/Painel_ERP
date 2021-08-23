<?php 
	include('../config.php');
	if (Painel::logado() == false) {
		echo 'Pagina protegida. Faça seu Login!';
	}else{
		include('main.php');
	}



 ?>