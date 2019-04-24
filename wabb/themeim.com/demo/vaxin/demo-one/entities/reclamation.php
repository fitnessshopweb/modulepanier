<?PHP
class reclamation{
	private $ref;
	private $nom;
	private $email;
	private $message;
	private $etat;
	private $date_rec;
	
	
	function __construct($ref,$nom,$email,$message,$etat,$date_rec){
		$this->ref=$ref;
		$this->nom=$nom;
		$this->email=$email;
		$this->message=$message;
		$this->etat=$etat;
		$this->date_rec=$date_rec;
		
	}
	
    function getref(){
		return $this->ref;
	}
	
	function getnom(){
		return $this->nom;
	}
	function getemail(){
		return $this->email;
	}
	function getmessage(){
		return $this->message;
	}
	
	 function getetat(){
		return $this->etat;
	}
    
	 function getdate_rec(){
		return $this->date_rec;
	}
	
	
	function setnom($nom){
		$this->nom=$nom;
	}
	function setemail($email){
		$this->email=$email;
	}
	function setmessage($message){
		$this->message=$message;
	}
	
	function setref($ref){
		$this->ref=$ref;
	}
	
	function setetat($etat){
		$this->etat=$etat;
	}
	
	function setdate_rec($date_rec){
		$this->date_rec=$date_rec;
	}
}

?>