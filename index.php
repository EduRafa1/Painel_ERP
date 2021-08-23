<?php 

	include ('config.php');
	if (Painel::logado() == false) {
	 	include('login.php');
	 }else{
	 	Painel::redirect(INCLUDE_PATH_PAINEL);
	 }
	

 ?>