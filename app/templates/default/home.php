<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
			
	<section class="col-md-offset-2 col-md-8">
		<div class="row">
			<?php foreach ($categorie as $article): ?>
				<?php //var_dump($article); ?>
				<span class="col-md-2"><?= $this->e($article['libelle']); ?></span>
			<?php endforeach; ?>
		</div>
	</section>

	<section role="section" class="col-md-12">
	
			<article class="col-md-4">
				<div><a href="#"><img src="<?= $this->assetUrl('img/beige-cafe-au-lait.jpg') ?>"></a></div>
				<div><h3>beige-cafe-au-lait</h3></div>
			</article>
		
	</section>
<?php $this->stop('main_content') ?>
