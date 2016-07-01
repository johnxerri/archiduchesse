<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\ArticleManager;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$manager = new ArticleManager();
		$produits = $manager->findAll(); // findAll() permet de tout recuperer
		$this->show('default/home', [ 'liste_des_produits' => $produits ]);
	}

	/**
	 * Page des conditions de ventess
	 */
	public function conditionsVente()
	{
		$this->show('default/conditionsVente');
	}

}