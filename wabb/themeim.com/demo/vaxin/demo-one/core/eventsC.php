<?PHP
include_once "../config.php";
include_once "../entities/events.php";




 /*class eventsC {

	function ajouterEvents($events){
		$sql="insert into events (nom,description,location,date) values (:nom, :description,:location,:date)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$events->getnom();
        $description=$events->getdescription();
		$location=$events->getlocation();
		$date=$events->getdate();

		$req->bindValue(':nom',$nom);
		$req->bindValue(':email',$email);
		$req->bindValue(':description',$description);
		$req->bindValue(':date',$date);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherEvents(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From events";
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


 */ 



class eventsC {

	function afficherEmployer ($employe){
		 
		echo "nom: ".$events->getnom()."<br>";
		echo "description: ".$events->getdescription()."<br>";
		echo "location: ".$events->getlocation()."<br>";
		echo "date: ".$events->getdate()."<br>";
	}

	function ajouterEvents($events){
		$sql="insert into events (nom,description,location,date) values (:nom,:description,:location,:date)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$events->getnom();
        $description=$events->getdescription();
		$location=$events->getlocation();
		$date=$events->getdate();

		$req->bindValue(':nom',$nom);
		$req->bindValue(':description',$description);
		$req->bindValue(':location',$location);
		$req->bindValue(':date',$date);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	

function afficherEvents(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From events";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage()); }
        }	
function supprimerEvent($nom){
		$sql="DELETE FROM events where nom= :nom";
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


function modifierEvent($events,$nom){
		$sql="UPDATE events SET nom=:nomm,description=:description,location=:location, date=:date WHERE nom=:nom";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$nomm=$events->getnom();
       	$description=$events->getdescription();
		$location=$events->getlocation();
		$date=$events->getdate();
		$datas = array(':nomm'=>$nomm, ':nom'=>$nom,  ':description'=>$description, ':location'=>$location , 'date'=>$date);
		$req->bindValue(':nomm',$nomm);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':description',$description);
		$req->bindValue(':location',$location);
		$req->bindValue(':date',$date);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
	}
		function recupererEvent($nom){
		$sql="SELECT * from events where nom=nom";
		
		$db = config::getConnexion();
		
		try{
		$liste=$db->query($sql);
		
		return $liste;
		}
		
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function rechercherEvent($date_1,$date_2){
		$sql="SELECT * from events where  location='france'   AND date  between '$date_1' AND '$date_2'";
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


