<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
	<section role="section" class="col-md-12">
	
		<?php foreach ($liste_des_articles as $produits): ?>
			<?php //var_dump($produits); ?>
			<article class="col-md-4">
				<div><a href=""><img src="<?= $this->assetUrl('img/beige-cafe-au-lait.jpg') ?>"></a></div>
				<div><h3>beige-cafe-au-lait.jpg</h3></div>
			</article>
		<?php endforeach; ?>
		
	</section>
<?php $this->stop('main_content') ?>
