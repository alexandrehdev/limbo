<?php 

session_start();

class LoadApi
{
	public $json_content;
	public $result;

	function __construct()
	{
		$this->json_content = file_get_contents("https://www.freetogame.com/api/games");
		$this->result = json_decode($this->json_content, true);
	}

	public function getApiImage($num){
		echo $this->result[$num]['thumbnail'];
	}

	public function getApiTitle($num){
		echo $this->result[$num]['title'];
	}

	public function getApishortDescription($num){
		echo $this->result[$num]['short_description'];
	}

}

?>