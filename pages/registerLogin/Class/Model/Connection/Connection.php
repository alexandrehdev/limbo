<?php
class Connection{
	private $con;
	public function setCon($data){
		$this->con = $data;
	}
	public function getCon(){
		return $this->con;
	}
	public function __construct(){
		try{
			$servidor = "localhost";
			$user = "root";
			$bd = "limbo";
			$pwd = "";
			$this->setCon(new PDO("mysql:host=$servidor;dbname=$bd",$user,$pwd,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")));
			$this->con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);// Erros em exceções
		}catch(PDOException $ex){
			echo "{$ex->getMessage()}";
		}
	}
}
?>