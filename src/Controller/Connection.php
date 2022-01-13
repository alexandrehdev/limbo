<?php
namespace MyApp\Controller;
use PDO;

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
			$this->setCon(new PDO("mysql:host=$servidor;dbname=$bd",$user,$pwd));
			$this->con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);// Erros em exceções
		}catch(PDOException $ex){
			echo "{$ex->getMessage()}";
		}
	}
}
?>