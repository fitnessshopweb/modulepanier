
	<?PHP
include "entities/commande.php";
include "core/commandeC.php";
$timestamp = time();
$date1=date('d/m/Y',$timestamp);
$commandeC=new CommandeC();

if (isset($_POST["id7"])  ){

    $result=$commandeC->recuperercommande($_POST['id7']);
	
	foreach($result as $row){
		$id=$row['id'];
		$nom_prod=$row['nom_prod'];
		$prix=$row['prix'];
		$quantity2=$_POST['quantite2'];

		
}


} 
else 
{
	echo("123");
}


if (isset($_POST['modifier'])){
	$commande=new commande($id,$nom_prod,$quantity2,$prix,$date1);
	$commandeC->modifiercommande($commande,$_POST['id'],$_POST['quantite2']);
	echo $_POST['id7'];
	
} 
	
?>


