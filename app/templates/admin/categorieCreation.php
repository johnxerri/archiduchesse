<?php $this->layout('layout', ['title' => 'Creation du produit']); ?>

<?php $this->start('main_content'); ?>

	<section class="col-md-offset-3 col-md-6 ">

		<article>
			<table class="table">
			<?php foreach ($categorie as $article): ?>
				<?php //var_dump($article); ?>
				<tr>
					<td><?= $this->e($article['id']); ?></td>
					<td><?= $this->e($article['libelle']); ?></td>
				</tr>
			<?php endforeach; ?>
			</table>
		</article>

		<article>
			<form method="POST" >

				<article class="form-group">
					<label for="catname">Categorie name : </label>
					<input type="text" id="catname" name="myform[libelle]" class="form-control">
				</article>

				<input type="submit" name="creerCat" value="Créer" class="btn btn-default">

			</form>
		</article>

	</section>

<?php $this->stop('main_content'); ?>