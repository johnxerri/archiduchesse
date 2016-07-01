<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\ProduitManager;
use \Manager\CategorieManager;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$manager = new CategorieManager();
		$categorie = $manager->findAll();
		$this->show('default/home', [ 'categorie' => $categorie ]);
	}

	/**
	 * Page des conditions de ventess
	 */
	public function conditionsVente()
	{
		$this->show('default/conditionsVente');
	}

}