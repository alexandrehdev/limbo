<?php 
session_start();

class GetGeekContent
{
	public $contentNews;
	public $jsonNews;


	function __construct(){
		$this->contentNews = file_get_contents("Class/data.json");
		$this->jsonNews = json_decode($this->contentNews, true);
	}
					// Numero de 1 a 10
	public function getName($i){
		echo $this->jsonNews[$i]["name"];
	}	

	public function getDesc($i){
		echo $this->jsonNews[$i]["desc"];
	}

	public function getImg($i){
		echo $this->jsonNews[$i]["img"];
	}
}

?>