<?PHP
include "config2.php";
class CommandeC {
function affichercommande ($commande){
		echo "id: ".$commande->getid()."<br>";
		echo "id_prod: ".$commande->getid_prod()."<br>";
	
		echo "quantite: ".$commande->getquantite()."<br>";
		echo "Date: ".$commande->getdate()."<br>";
		echo "prix: ".$commande->getprix()."<br>";
	}
	
	
	function ajoutercommande($commande){
		$sql="insert into commande (id,id_prod,nom_prod,quantite,date,prix) values (:id,:id_prod,:nom_prod,:quantite,:date,:prix)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$commande->getid();
        $id_prod=$commande->getid_prod();
        $nom_prod=$commande->getnom_prod();
        $quantite=$commande->getquantite();
        $date=$commande->getdate();
        $prix=$commande->getprix();

		$req->bindValue(':id',$id);
		$req->bindValue(':id_prod',$id_prod);
		$req->bindValue(':nom_prod',$nom_prod);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':date',$date);
		$req->bindValue(':prix',$prix);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function affichercommandes(){
		//$sql="SElECT * From commande e inner join formationphp.commande a on e.cin= a.cin";
		$sql="SElECT * From commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercommande($id){
		$sql="DELETE FROM commande where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercommande($commande,$id,$quantite){
		$prix2=$commande->getprix() * $quantite;
		$sql="UPDATE commande SET quantite=:quantite , prix=:prix2 WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
     
        $quantite=$commande->getquantite();
        $prix=$commande->getprix();

		$datas = array(':ide'=>$ide, ':id'=>$id, ':id_prod'=>$id_prod,':quantite'=>$quantite,':date'=>$date,':prix'=>$prix);
		

		
	
		$req->bindValue(':quantite',$quantite);
		
		$req->bindValue(':prix',$prix);

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperercommande($id){
		$sql="SELECT * from commande where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListecommandes($tarif){
		$sql="SELECT * from commande where tarifHoraire=$tarif";
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

function calculer_somme()
{
	$sql="SELECT sum(prix) from commande ";
	$db = config::getConnexion();
	try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
}

?>