<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\ProduitManager;
use \Manager\CategorieManager;
/* Controller */
class AdminController extends Controller {

	 // Création d'un article
	public function produitCreation() {
		/* Cette fonction permet de controler le role d'un utilisateur (admin ou pas ) */
		
		if (isset($_POST['creer'])) {
			$manager = new ProduitManager();
			/*$manager->insert($_POST['myform']);*/
			$this->redirectToRoute('admin/produit');
		}		
		$this->show('admin/produitCreation');
	}


	/**
	 * Fonction qui me permet d'editer un article
	 * @param int id à fournir pour selectionner le produit
	 */
	public function produitEdition($id) {
	
		$manager = new ProduitManager();
		$article = $manager->find($id);

		if (isset($_POST['modifier'])) {
			
			/*$manager->update($_POST['myform'], $id);*/
			$this->redirectToRoute('produit');
		}		
		$this->show('admin/produitEdition', ['article' => $article]);
	}



	public function produitSuppression($id) {
	
		$manager = new ProduitManager();
		$manager->delete($id);
		$this->redirectToRoute('admin/produit');
	}

	public function produit() {
	
		$this->show('admin/produit');
		
		
	}

	public function categorieCreation() {
		if (isset($_POST['creerCat'])) {
			$manager = new CategorieManager();
			$manager->insert($_POST['myform']);
			$this->redirectToRoute('categorieCreation');
		}		
		
		$manager = new CategorieManager();
		$categorie = $manager->findAll();
		$this->show('admin/categorieCreation', [ 'categorie' => $categorie ]);
	}

	
}