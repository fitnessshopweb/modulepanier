<?php
include "core/ProduitC.php";
require ('db.php');


ob_start();
?>
<page backtop="20mm">
	 <h1> Toutes les commandes </h1>
		<table style="width:100%;border: 1px dashed">
		<tr>
			<th style="width: 20%">Id </th>
			<th style="width: 15%"> Image</th>

			<th style="width: 15%"> Reference </th>
			<th style="width: 15%"> Nom</th>
			<th style="width: 15%"> Prix</th>
			<th style="width: 15%"> Description</th>
			<th style="width: 15%"> Quantité</th>
			<th style="width: 15%"> Categorie</th>
		</tr>
		<?php
		$Produit1C=new ProduitC();
		$listeproduit=$Produit1C->getProduit();
		foreach($listeproduit as $row) {
			?>
			<tr>
				<td> <?php echo $row['id'];?> </td>
			<td> <?php echo $row['image'];?> </td>

			<td> <?php echo $row['reference'];?> </td>
			<td> <?php echo $row['nom'];?> </td>
			<td> <?php echo $row['prix'];?> </td>
			<td> <?php echo $row['description'];?> </td>
			<td> <?php echo $row['quantite'];?> </td>
			<td> <?php echo $row['categorie'];?> </td>
		</tr>
			<?php  
		}

?>
	</table>


</page>

<?php
$content= ob_get_clean();
require('html2pdf/html2pdf.class.php');
try{
$pdf=new html2pdf('p','A4','fr','true','UTF-8');
$pdf->pdf->SetDisplayMode('fullpage');

$pdf->writeHTML($content);
//$pdf->pdf->IncludeJS('print(true)');
$pdf->Output('test.pdf');
}
catch(HTML2PDF_exception $e)
{
	die($e);
}

?>