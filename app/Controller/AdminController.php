<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\ProduitsManager;
/* Controller */
class AdminController extends Controller {

	 // Création d'un article
	public function produitCreation() {
		/* Cette fonction permet de controler le role d'un utilisateur (admin ou pas ) */
		
		if (isset($_POST['creer'])) {
			$manager = new ProduitsManager();
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
	
		$manager = new ProduitsManager();
		$article = $manager->find($id);

		if (isset($_POST['modifier'])) {
			
			/*$manager->update($_POST['myform'], $id);*/
			$this->redirectToRoute('produit');
		}		
		$this->show('admin/produitEdition', ['article' => $article]);
	}



	public function produitSuppression($id) {
	
		$manager = new ProduitsManager();
		$manager->delete($id);
		$this->redirectToRoute('admin/produit');
	}

	public function produit() {
	
		$this->show('admin/produit');
		
		
	}

	
}