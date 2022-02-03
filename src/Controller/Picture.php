<?php 
namespace MyApp\Controller;

class Picture
{
	private $picture;

	function __construct()
	{
		$this->setProfilePicture($_FILES['userprofile']);
	}

	public function getProfilePicture(){
		return $this->picture;
	}

	public function setProfilePicture($picture){
		$this->picture = $picture;
	}
}
?>