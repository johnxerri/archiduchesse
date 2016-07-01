<?php
	
	$w_routes = array(

		# Home¨Page et conditions de vente 
		['GET', '/', 'Default#home', 'home'],	

		# Page categories
		['GET', '/categorie', 'Default#categorie', 'categorie'],

		# Page detail 
		['GET', '/detail', 'Default#detail', 'detail'],

		# Page panier 
		['GET', '/panier', 'Default#panier', 'panier'],

		# Conditions de vente 
		['GET', '/conditionsVente', 'Default#conditionsVente', 'conditionsVente'],
		
	);