<?php 

	/**
	 * 
	 */
	class MySql
	{
		
		private static $pdo;
		public static function connect(){
			if (self::$pdo == null) {
				try {
					self::$pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE,USER,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
					self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				} catch (Exception $e) {
					// mostra o erro gerado na tela
				 	// echo $e->getMessage();  //
				 	echo '<h4> ERRO NO BANCO DE DADOS</h4>';
				}
			}
			return self::$pdo;
		}
	}
	//]cxtkR(SxS@~
 ?>