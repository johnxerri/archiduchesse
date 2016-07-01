<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
//use Manager\MyAuthentificationManager;
use \W\Security\AuthentificationManager;

class LoginController extends Controller
{

	/**
	 * Page du panier
	 */
	public function panier()
	{
		// affiche la page templates/login/panier.php
		$this->show('login/panier');
	}

	/**
	 * Page d'accueil Administration
	 */
	// public function inscription()
	// {
	// 	if(isset($_POST['inscrire'])) 
	// 	{
	// 		// On instancie un objet pour gérer l'acces à la table "wusers"
	// 		$manager = new UserManager();
	// 		$_POST['myform']['role'] = 'user';
	// 		$_POST['myform']['password'] = password_hash($_POST['myform']['password'], PASSWORD_DEFAULT);
	// 		$manager->insert($_POST['myform']);
	// 		$this->redirectToRoute('liste');
	// 	} 
	// 	// affiche la page templates/login/inscription.php
	// 	$this->show('login/inscription');
	// }

	// public function connexion() {
	// 	// traitement de la connexion
	// 	if (isset($_POST['connexion'])) {

	// 		// pour réaliser la connexion d'un utiisateur, nous avons besoin
	// 		// de deux "managers" : un pour l'authentification et l'autre pour récupérer les infos
	// 		// de l'utilisateur (role, username, email, id)
	// 		$authManager = new AuthentificationManager();
	// 		$userManager = new UserManager();

	// 		// On test via le manager de l'authentification si les informations entrées par l'utilisateur sont validé
	// 		if ($authManager->isValidLoginInfo($_POST['myform']['username'], $_POST['myform']['password']) && $_POST['role'] == 'user') {

	// 			// Je récupere les infos de l'utilisateur
	// 			$user = $userManager->getUserByUsernameOrEmail($_POST['myform']['username']);

	// 			// On logue l'utilisateur
	// 			$authManager->logUserIn($user);

	// 			// On redirige vers l'accueil
	// 			$this->redirectToRoute('home');
	// 		} else {
	// 			// Je récupere les infos de l'utilisateur
	// 			$user = $userManager->getUserByUsernameOrEmail($_POST['myform']['username']);

	// 			// On logue l'utilisateur
	// 			$authManager->logUserIn($user);

	// 			// On redirige vers l'accueil
	// 			$this->redirectToRoute('admin');
	// 		}
	// 	} 
	// 	$this->show('login/connexion');
	// }

	// public function deconnexion() {
	// 	MyAuthentificationManager::deconnexion(); // alternative a l'instanciation
	// 	$this->redirectToRoute('liste');
	// 	// pour déconnecter un utilisateur
	// 	// $authManager = new AuthentificationManager();
	// 	// $authManager->logUserOut();
	// }

	// public function profil() {
	// 	$this->show('login/profil');
	// }

}