<?PHP
include_once "config2.php";
class guidesanteC {
public function   afficherguides()
	{
		try{
			$c = new Config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('SELECT * FROM guidesante');
			$stmt->execute();
			$produits=$stmt->fetchAll();
			//var_dump($produits);
			return $produits;
		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}
	}
	}

?>