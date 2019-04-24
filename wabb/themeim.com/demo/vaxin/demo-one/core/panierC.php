<?PHP
include "config2.php";
class PanierC {
function affichepanier ($panier){
		echo "id: ".$panier->getid()."<br>";
		echo "username: ".$commande->get_username()."<br>";
	
		
	}
	
	
	function ajouterpanier($panier){
		$sql="insert into panier (id,username) values (:id,:username)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$panier->getid();
        $username=$panier->get_username();
        

		$req->bindValue(':id',$id);
		$req->bindValue(':username',$username);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherpanier(){
		//$sql="SElECT * From commande e inner join formationphp.commande a on e.cin= a.cin";
		$sql="SElECT * From panier";
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
