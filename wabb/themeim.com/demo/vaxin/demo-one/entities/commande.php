<?PHP
class Commande{
	private $id;
	private $id_prod;
	private $nom_prod;
	private $date;
	private $quantite;
	private $prix;


	function __construct($id_prod,$nom_prod,$quantite,$prix,$date){
		$timestamp = time();
		$this->id_prod=$id_prod;
		$this->nom_prod=$nom_prod;
		$this->quantite=$quantite;
		$this->prix=$prix;
		$this->date=date('d/m/Y',$timestamp); 
	}
	
	function getid(){
		return $this->id;
	}
	function getid_prod(){
		return $this->id_prod;
	}
	function getnom_prod(){
		return $this->nom_prod;
	}
	
	function getquantite(){
		return $this->quantite;
	}
	function getdate(){
		return $this->date;
	}
	function getprix(){
		return $this->prix;
	}

	function setid_prod($id_prod){
		$this->id_prod=$id_prod;
	}
	function setnom_prod(){
	 $this->nom_prod=$nom_prod;
	}	
	
	function setquantite($quantite){
		$this->quantite=$quantite;
	}
	function setprix($prix){
		$this->prix=$prix;
	}
	function setid($id){
		$this->id=$id;
	}
	function setdate($date){
		$this->date=$date;
	}
	
}

?>