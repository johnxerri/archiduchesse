<?php $this->layout('layout', ['title' => 'Creation du produit']); ?>

<?php $this->start('main_content'); ?>

<section class="col-md-offset-3 col-md-6 ">	

	<form method="POST" enctype="multipart/form-data" >

	<article class="form-group">
		<label>Titre</label>
		<input type="text" name="myform[titre]" class="form-control">
	</article>
	
	<article class="form-group">
			<label>description</label>
			<textarea name="myform[desc]"  class="form-control"></textarea>
	</article>

	<article class="form-group">
			<label>Composition</label>
			<textarea name="myform[comp]" class="form-control"></textarea>
	</article>

	<article class="form-group">
			<label>Prix</label>
			<input type="number" name="myform[prix]" class="form-control">
	</article>

	<article class="form-group">
			<label>Categorie</label>
			<input type="text" name="myform[categorie]" class="form-control">
	</article>

	<article class="form-group">
			<label>Couleur</label>
			<input type="text" name="myform[couleur]" class="form-control">
	</article>

	<article class="form-group">
			<label>Photo</label>
			<input type="file" name="myform[photo]" class="form-control">
	</article>

			<input type="submit" name="creer" value="Créer" class="btn btn-default">
	</form>
</section>
<?php $this->stop('main_content'); ?>






<!-- taille -->





