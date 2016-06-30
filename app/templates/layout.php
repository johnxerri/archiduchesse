<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<!-- L'icone du site -->
	<link rel="shortcut icon" href="<?= $this->assetUrl('img/favicon.ico') ?>">
	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>
	<div class="container">
		<header>
			
		</header>

		<main>

			<!-- 1ere section pour afficher les titres de la vue -->
			<section>
				<h1>W :: <?= $this->e($title) ?></h1>
			</section>
			<!-- Affichage du contenu de la vue -->
			<?= $this->section('main_content') ?>

		</main>

		<footer>

			<section>
				<!-- 6 blocs de Réassurance - Mise en confiance -->
				<article><a href="">Fabrication<br />Française</a></article>
				<article><a href="">Paiement<br />Sécurisé</a></article>
				<article><a href="">Livraison<br />48/72h</a></article>

				<article><a href="">38, rue Michelet<br />42000 Saint-Etienne<br />04.27.81.58.70</a></article>
				<article><a href="">Facebook<br />601 fans</a></article>
				<article><a href="">Twitter<br />4272 followers</a></article>
				<!-- Lien des conditions de vente -->
				<p><a href="<?= $this->url('conditionsVente'); ?>">Nos passionnantes Conditions Générales de Vente</a></p>
			</section>

		</footer>
	</div>
</body>
</html>