<?PHP
include "config.php";
class UserC {


	function supprimerUser($id){
		$sql="DELETE FROM user where id= :id";
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
	function modifierUser($username,$email,$password,$address,$phone,$id){
		$sql="UPDATE users SET username=:username,email=:email, password=:password, address=:address,phone=:phone WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
		$req->bindValue(':id',$id);
		$req->bindValue(':username',$username);
		$req->bindValue(':email',$email);
		$req->bindValue(':password',md5($password));
		$req->bindValue(':address',$address);
		$req->bindValue(':phone',$phone);
		
            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
	}
	function recupererUser($id){
		$sql="SELECT * from user where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeUsers($tarif){
		$sql="SELECT * from user where tarifHoraire=$tarif";
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