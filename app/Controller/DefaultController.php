<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}

	/**
	 * Page des conditions de ventess
	 */
	public function conditionsVente()
	{
		$this->show('default/conditionsVente');
	}

}