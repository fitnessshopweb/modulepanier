<?PHP
include "config.php";

class events {


function afficherEvents(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From events ";
		$db = config::getConnexion();
		try {
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage()); }
        }	}