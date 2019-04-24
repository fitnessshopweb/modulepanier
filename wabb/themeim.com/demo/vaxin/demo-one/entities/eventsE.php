<?PHP
class evenements{
	private $nom;
	private $description;
	
	
	function __construct($nom,$description){
		$this->nom=$nom;
		$this->email=$email;
		
		
	}
	

	function getnom(){
		return $this->nom;
	}
	function getemail(){
		return $this->description;
	}
	
	

	function setnom($nom){
		$this->nom=$nom;
	}
	function setemail($email){
		$this->email=$description;
	}
	
	
}

?>