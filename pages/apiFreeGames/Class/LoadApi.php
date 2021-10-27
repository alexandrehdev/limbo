<?php 

session_start();

class LoadApi
{
	public $json_content;
	public $result;

	function __construct()
	{
		$this->json_content = $_SESSION['api_link'];
		$this->result = json_decode($this->json_content, true);
	}

	public function getApiImage(){
		echo  $this->result[0]['thumbnail'];
	}

	public function getApiTitle(){
		echo $this->result[0]['title'];
	}

	public function getApishortDescription(){
		echo $this->result[0]['short_description'];
	}

}

?>