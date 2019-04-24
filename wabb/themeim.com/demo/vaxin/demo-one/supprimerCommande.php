<?PHP
include "core/commandeC.php";

$commandeC=new CommandeC();
if (isset($_POST["id4"])){
	$commandeC->supprimercommande($_POST["id4"]);
	header('Location: panier.php');
}

?>

