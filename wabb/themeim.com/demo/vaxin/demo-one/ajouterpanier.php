<?php
include "entities/commande.php";
include "core/commandeC.php";
	$timestamp = time();
$date1=date('d/m/Y',$timestamp);
if (isset($_POST['id']) and isset($_POST['hidden_name']) and isset($_POST['quantity']) and isset($_POST['hidden_price']))
{
	$prix=($_POST['hidden_price'] * $_POST['quantity']);
$c= new commande($_POST['id'],$_POST['hidden_name'],$_POST['quantity'],$prix,$date1);
$commande1C= new commandeC();
$commande1C->ajoutercommande($c);
header("Location: panier.php");

}
else{
	echo "vérifier les champs";
}




?>