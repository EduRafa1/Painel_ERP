<?php 


	class Login{

		public static function verifyLogin($table,$index,$value,$index2,$value2){
			$sql = MySql::connect()->prepare("SELECT * FROM `$table` WHERE $index = ? AND $index2 = ?");
			$sql->execute(array($value,$value2));
			return $sql;
			
		}


	}

 ?>