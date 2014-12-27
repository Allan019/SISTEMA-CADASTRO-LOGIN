<?php
	class DB{
		public function conectar(){
			$host="localhost";
			$user="root";
			$pass="fernando123";
			$dbname="sistemafv";
			
			$conexao=mysql_connect($host,$user,$pass);
			$selectdb=mysql_select_db($dbname);
			
			return $conexao;
			
		}
		
	}


?>