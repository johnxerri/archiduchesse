<?php
	
	$w_routes = array(

		/* ============ DEFAULT ============ */
		// Home page
		['GET', '/', 'Default#home', 'home'],

		// Page Catégorie
		['GET', '/categorie/[:categorie]', 'Default#categorie', 'categorie'],

		// Page Detail
		['GET', '/detail/[i:id]', 'Default#detail', 'detail'],

		// Page Divers
		['GET', '/conditionsVente', 'Default#conditionsVente', 'conditionsVente'],


		/* ============ LOGIN ============ */
		// Page panier
		['GET', '/panier', 'Login#panier', 'panier'],

		// Page Connexion
		// ['GET|POST', '/connexion', 'Login#connexion', 'connexion'],

		// // Page Inscription
		// ['GET|POST', '/inscription', 'Login#inscription', 'inscription'],

		// // Page Profil
		// ['GET', '/profil', 'Login#profil', 'profil'],


		/* ============ ADMIN ============ */
		// Page Admin Produit
		['GET', '/admin/produit', 'Admin#produit', 'produit'],

		// Page Admin Produit Creation
		['GET|POST', '/admin/produitCreation', 'Admin#produitCreation', 'produitCreation'],

		// Page Admin Produit Edition
		['GET|POST', '/admin/produitEdition/[i:id]', 'Admin#produitEdition', 'produitEdition'],

		// Page Admin Produit Suppression
		['GET|POST', '/admin/produitSuppression/[i:id]', 'Admin#produitSuppression', 'produitSuppression'],

		// Page Admin membre
		['GET', '/admin/membre', 'Admin#membre', 'membre'],
		
	);