<?php
	
	$w_routes = array(
		// Home page
		['GET', '/', 'Default#home', 'home'],

		// Page Catégorie
		['GET', '/categorie', 'Default#categorie', 'categorie'],

		// Page Detail
		['GET', '/detail', 'Default#detail', 'detail'],

		// Page panier
		['GET', '/panier', 'Login#panier', 'panier'],

		// Page Divers
		['GET', '/conditionsVente', 'Default#conditionsVente', 'conditionsVente'],
	);