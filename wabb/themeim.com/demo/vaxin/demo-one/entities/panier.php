<?PHP 
class Panier{
	private $id;
	private $username;
	

	function __construct($username){
		
		$this->username=$username;
		}
	
	function getid(){
		return $this->id;
	}
	function get_username(){
		return $this->username;
	}
	
	
	function set_username(){
	 $this->username=$username;
	}	
	
	}

?>



