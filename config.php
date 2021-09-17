<?php 

	session_start();

	$autoload = function($class){
		include('classes/'.$class.'.php');
	};
	spl_autoload_register($autoload);
	//Definir local onde a pasta do projeto está localizada
	define('INCLUDE_PATH','http://localhost/erp2/');
	//Definir local onde a pasta do projeto está localizada e adicionar / Painel
	define('INCLUDE_PATH_PAINEL','http://localhost/erp2/painel/');



	//Banco de dados MySql
	define('HOST', 'localhost');
	define('DATABASE', 'erp');
	define('USER', 'root');
	define('PASSWORD','');



 ?>