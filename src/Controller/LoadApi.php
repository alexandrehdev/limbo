<?php 
namespace MyApp\Controller;

class LoadApi
{
	private $json_content;
	private $result;

	function __construct()
	{
		$this->setjsonContent(file_get_contents("https://www.freetogame.com/api/games"));
		$this->setResult(json_decode($this->getjsonContent(), true));
	}
	public function getjsonContent(){
		return $this->json_content;
	}
	public function setjsonContent($json){
		$this->json_content = $json;
	}
	public function getResult(){
		return $this->result;
	}	
	public function setResult($result){
		$this->result = $result;
	}

}

?>