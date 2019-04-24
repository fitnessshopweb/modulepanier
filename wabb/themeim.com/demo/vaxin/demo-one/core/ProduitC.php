<?php 
include_once 'config.php';
class ProduitC{
public function ajouterProduit($produit)
	{
		try{
			$it = $produit->getImageTmp();
			$i = $produit->getImage();
			//move the uploaded pictures
			move_uploaded_file($it,"../uploads/$i");
			
			$c = new Config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('INSERT INTO produit(nom, prix, description, image, quantite,reference) 
									  VALUES (:n,:p,:d,:i,:q,:r)');
			$n = $produit->getNom();
			$p = $produit->getPrix();
			$d = $produit->getDescription();
			$i = $produit->getImage();
			$q = $produit->getQuantite();
			$r = $produit->getReference();
			$stmt->bindparam(':n', $n);
			$stmt->bindparam(':p', $p);
			$stmt->bindparam(':d', $d);
			$stmt->bindparam(':i', $i);
	/*		$stmt->bindparam(':c',$this->categorie);
			$stmt->bindparam(':sc',$this->sous_cat);*/
			$stmt->bindparam(':q', $q);
			$stmt->bindparam(':r', $r);

			$stmt->execute();

		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}
	}
	public function ajouterfavorite($id_prod,$id_user)
	{
		try{

			$c = new Config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('INSERT into `favorite` (id_prod,id_user) VALUES (:id_prod, :id_user)');

			$stmt->bindparam(':id_prod', $id_prod);
			$stmt->bindparam(':id_user', $id_user);


			$stmt->execute();

		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}
	}

	
public function   afficherProduit()
	{
		try{

			$c = new Config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('SELECT * FROM produit ');
			$stmt->execute();
			$produits=$stmt->fetchAll();
			//var_dump($produits);
			return $produits;

		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}

	}


	public function afficherfavorite($id_user)
	{
		try{

			$c = new Config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('
						SELECT 
						    A.nom,
						    A.prix,
						    A.description,
						    A.reference,
						    A.categorie,
						    A.image

						FROM produit AS A
						LEFT JOIN favorite AS B ON B.id_prod = A.id
						where B.id_user = :id_user');

			$stmt->bindparam(':id_user', $id_user);
			$stmt->execute();
			$favorite=$stmt->fetchAll();
			return $favorite;

		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}

	}
	public function afficherProduitParId($id){
		try{

			$c = new Config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('SELECT * FROM produit WHERE id = :id');
			$stmt->bindparam(":id",$id);
			$stmt->execute();
		 	return $stmt->fetch(PDO::FETCH_ASSOC);

		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}
	}
	public function supprimerProduit($id){
		try{

			$c = new Config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('DELETE FROM produit WHERE id = :id');
			$stmt->bindparam(":id",$id);
			if($stmt->execute())
				header('location: afficherproduit.php');

		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}
	}

	public function ModifierProduit($produit){
		try{
			$n = $produit->getNom();
			$p = $produit->getPrix();
			$d = $produit->getDescription();
			$i = $produit->getId();
			$q = $produit->getQuantite();
			$r = $produit->getReference();

			$c = new Config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('UPDATE produit SET nom = :n, prix = :p, description = :d, quantite = :q ,reference = :r WHERE id = :id');
			
			$stmt->bindparam(':n', $n);
			$stmt->bindparam(':p', $p);
			$stmt->bindparam(':d', $d);
			$stmt->bindparam(':q', $q);
			$stmt->bindparam(':r', $r);
			$stmt->bindparam(':id', $i);
			if($stmt->execute())
				header('location: afficherproduit.php');

		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}
	}

	public function afficherProduitParNom($nom){
		try{

			$c = new Config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('SELECT * FROM produit WHERE nom = :nom');
			$stmt->bindparam(":nom",$nom);
			$stmt->execute();
		 	return $stmt->fetch(PDO::FETCH_ASSOC);

		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}
	}


		function recherchestock($produit)
	{
		$stock="SELECT * FROM commande where ref_prod=:idprod";
		$c = new Config();
			$driver = $c->getConnexion();
			try
{			
			$stmt = $driver->prepare($stock);
			$stmt->bindvalue(':idprod',$produit);
			$liste=$stmt->execute(); 
			return $liste;

			}
			catch(exception $ex)
			{
				echo $ex->getMessage();
			}
	}


	function setstock($produit,$quantite)
	{
		$c = new Config();
			$driver = $c->getConnexion();
			$query="UPDATE produit SET stock = :q WHERE designation = :id" ;
			try
{			
			$stmt = $driver->prepare($query);
			$stmt->bindvalue(':q',$quantite);
			$stmt->bindvalue(':id',$produit);

			return $stmt->execute();

			}
			catch(exception $ex)
			{
				echo $ex->getMessage();
			}
	}

		public function afficherCategorie()
	{
		try{

			$c = new Config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('SELECT * FROM categorie ');
			$stmt->execute();
			$categorie=$stmt->fetchAll();
			//var_dump($produits);
			return $categorie;

		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}

	}
	public function afficherProduitParId_Categorie($id){
		try{
			$c = new Config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('SELECT * FROM produit WHERE categorie = :id');
			$stmt->bindparam(":id",$id);
			$stmt->execute();
		 	$l=$stmt->fetchAll(PDO::FETCH_ASSOC);
		 	return $l;
		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}
	}

	public function afficherAllProducts(){
		try{
			$c = new Config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('SELECT * FROM produit ');
			$stmt->execute();
		 	$l=$stmt->fetchAll(PDO::FETCH_ASSOC);
		 	return $l;
		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}
	}
	public function trierProduit($id){
		try{
			$c =new Config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('SELECT product_id as id,(SUM(vote)/COUNT(vote)) as moyenne FROM rating WHERE product_id=:id');
			$stmt->bindparam(":id",$id);
			$stmt->execute();
		 	$l=$stmt->fetchAll(PDO::FETCH_ASSOC);
		 	return $l;
		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();


	}

}





public function ajouterTrie($product_id,$moyenne)
	{
		try{
			

			
			$c = new Config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('INSERT INTO trie(product_id, moyenne ) 
									  VALUES (:p,:m)');
			
		
			$stmt->bindparam(':p', $product_id);
			$stmt->bindparam(':m', $moyenne);
		

			$stmt->execute();

		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}
	}



	public function afficherTrie()
	{
		try{

			$c = new Config();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('SELECT * FROM categorie ');
			$stmt->execute();
			$trie=$stmt->fetchAll();
			//var_dump($produits);
			return $trie;

		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}

	}

	function affichPiecetripopulaire(){
			$sql="SElECT p.* from produit  p inner join  trie t on t.product_id=p.id  order by t.moyenne desc";
			$db = config::getConnexion();
			try{
			$liste=$db->query($sql);
			return $liste;
			}
	        catch (Exception $e){
	            die('Erreur: '.$e->getMessage());
	        }}	
	         function count($id){
			try{
				$c =new Config();
				$driver = $c->getConnexion();
				$stmt = $driver->prepare('SELECT COUNT(vote) as count FROM rating WHERE product_id=:id');
				$stmt->bindparam(":id",$id);
				$stmt->execute();
			 	$l=$stmt->fetchAll(PDO::FETCH_ASSOC);
			 	return $l;
			}catch(PDOException $ex){
				echo "Erreur: ".$ex->getMessage();

		}}	
		 function countstat($id,$inf,$sup){
			try{
				$c =new Config();
				$driver = $c->getConnexion();
				$stmt = $driver->prepare('SELECT COUNT(vote) as count FROM rating WHERE product_id=:id and ( vote<=:sup and vote>:inf)');
				$stmt->bindparam(":id",$id);
					$stmt->bindparam(":inf",$inf);
						$stmt->bindparam(":sup",$sup);
				$stmt->execute();
			 	$l=$stmt->fetchAll(PDO::FETCH_ASSOC);
			 	return $l;
			}catch(PDOException $ex){
				echo "Erreur: ".$ex->getMessage();

		}}

		public function  getProduit()
	{
		try{
			$c = new Config2();
			$driver = $c->getConnexion();
			$stmt = $driver->prepare('SELECT * FROM produit');
			$stmt->execute();
			//$produits=$stmt->fetchAll();
			//var_dump($produits);
			return $stmt;
		}catch(PDOException $ex){
			echo "Erreur: ".$ex->getMessage();
		}
	}

}

 ?>