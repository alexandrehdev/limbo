<?php 
namespace MyApp\Controller;

class GeekContent
{
	private $json;
	private $response;

	function __construct(){
		$this->setJson(file_get_contents("../../../../data.json"));
		$this->setResponse(json_decode($this->getJson(), true));
	}

	public function getJson(){
		return $this->json;
	}	
	public function setJson($json){
		$this->json = $json;
	}
	public function getResponse(){
		return $this->response;
	}
	public function setResponse($response){
		$this->response = $response;
	}

	
					
	
}

?>