<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<!-- L'icone du site -->
	<link rel="shortcut icon" href="<?= $this->assetUrl('img/favicon.ico') ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $this->e($title) ?></title>

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!--[if lt IE 8]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!--[if lt IE 7]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap.min.css') ?>">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>
	<div class="container">
		<header class="row">
			
		</header>

		<main class="row">

			<!-- 1ere section pour afficher les titres de la vue -->
			<section class="col-md-12">
				<h1>W :: <?= $this->e($title) ?></h1>
			</section>
			<!-- Affichage du contenu de la vue -->
			<?= $this->section('main_content') ?>

		</main>

		<footer class="row">

			<section class="col-md-12">
				<!-- 6 blocs de Réassurance - Mise en confiance -->
				<article class="col-md-4"><a href="">Fabrication<br />Française</a></article>
				<article class="col-md-4"><a href="">Paiement<br />Sécurisé</a></article>
				<article class="col-md-4"><a href="">Livraison<br />48/72h</a></article>

				<article class="col-md-4"><a href="">38, rue Michelet<br />42000 Saint-Etienne<br />04.27.81.58.70</a></article>
				<article class="col-md-4"><a href="">Facebook<br />601 fans</a></article>
				<article class="col-md-4"><a href="">Twitter<br />4272 followers</a></article>
				<!-- Lien des conditions de vente -->
				<p><a href="<?= $this->url('conditionsVente'); ?>">Nos passionnantes Conditions Générales de Vente</a></p>
			</section>

		</footer>
	</div>
</body>
</html>