<?php $this->layout('layout', ['title' => 'Connetez-vous !']) ?>

<?php $this->start('main_content') ?>
	<section role="section" class="col-md-offset-4 col-md-4">
		
		<form class="form-signin" method="post" action="">

	        <h2 class="form-signin-heading">Please sign in</h2>

			<input type="name" name="myform[username]" class="form-control" placeholder="Votre pseudo" autofocus><br />

	        <input type="password" name="myform[password]" id="inputPassword" class="form-control" placeholder="Mot de passe"><br />

	        <button class="btn btn-lg btn-primary btn-block" type="submit" name="connexion">Se connecter</button>
      	</form>

	</section>
<?php $this->stop('main_content') ?>
