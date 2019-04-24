<?PHP
include_once "/../config.php";

class reclamationC {

		function ajouterRec($reclamation){
		$sql="insert into reclamations (nom,email,message,date_rec) values (:nom, :email,:message,:date_rec)";
			
			$c = new Config();
			$driver = $c->getConnexion();
		try{
        $req=$driver->prepare($sql);
		
        $nom=$reclamation->getnom();
        $email=$reclamation->getemail();
		$message=$reclamation->getmessage();
		$date_rec=$reclamation->getdate_rec();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':email',$email);
		$req->bindValue(':message',$message);
		$req->bindValue(':date_rec',$date_rec);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		//mysqli_query($query) or die(mysqli_error());
		
	}
	
					
	
	function afficherRec(){
			


		$sql="SElECT * From reclamations ";
			
			$c = new Config();
			$driver = $c->getConnexion();
		try{
		$liste=$driver->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerRec($nom){
		$sql="DELETE FROM employe where nom= :nom";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nom',$nom);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierRec($reclamation,$ref){
		$sql="UPDATE reclamations SET ref=:reff, nom=:nom,email=:email,message=:message,etat=:etat WHERE ref=:ref";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$reff=$reclamation->getref();
		
		$nom=$reclamation->getnom();
       	$email=$reclamation->getemail();
		$message=$reclamation->getmessage();
		$etat=$reclamation->getetat();
		$datas = array(':reff'=>$reff,':ref'=>$ref, ':nom'=>$nom,  ':email'=>$email, ':message'=>$message, ':etat'=>$etat);
		$req->bindValue(':reff',$reff);
		$req->bindValue(':ref',$ref);
		
		$req->bindValue(':nom',$nom);
		$req->bindValue(':email',$email);
		$req->bindValue(':message',$message);
		$req->bindValue(':etat',$etat);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
	}
			
	function recupererRec($ref){
		$sql="SELECT * from reclamations where ref=$ref";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeRec($ref){
		$sql="SELECT * from reclamations where ref=$ref";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	

}

?>