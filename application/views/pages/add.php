<h1> Ajouter une annonce </h1>


	<p style="color:red;"> <?php if(isset($errors0)) echo $errors0; ?> </p>
	<p style="color:red"> <?php if(isset($errors1)) echo $errors1; ?> </p>
	<p style="color:red"> <?php if(isset($errors2)) echo $errors2; ?> </p>
	<p style="color:red"> <?php if(isset($errors3)) echo $errors3; ?> </p>
	<p style="color:green"> <?php if(isset($success)) echo $success; ?> </p>

<div class="well well-sm">
	<form method="POST" role="form" action="<?php echo URL::base(); ?>annonces/add/<?php echo Session::instance()->get("id"); ?>">
		<div class="form-group">
			<label style="color:#2751C9;"><i>Titre de votre annonce</i></label>
			<input type="text" class="form-control" name="titre" placeholder="Titre">
		</div>
		<div class="form-group">
			<label style="color:#2751C9;"><i>Contenu de votre annonce</i></label>
			<textarea class="form-control" maxlength="250" name="content" placeholder="Contenu de votre annonce (250 caracteres maximum)" rows="6" style="resize:none;"></textarea>
		</div>
		<div class="form-group">
			<label style="color:#2751C9;"><i>Prix</i> <b>(€)</b> </label>
			<input type="text" class="form-control" name="prix" placeholder="Prix de votre produit">
		</div>
		<div class="form-group">
			<label style="color:#2751C9;"> Localisation </label>
			<select id="departements" name="departements">
			<?php foreach($departements as $departement) 
				{ ?>
				<option>
				<?php  
					echo $departement->name;
				?>
				</option>
				<?php } ?>
			</select>
		</div>	
		<div class="form-group">
			<label style="color:#2751C9;"> Categories </label>
			<select id="categories" name="categories">
				<?php foreach($categories as $categorie)
				{ ?>
				<option>
					<?php 
						echo $categorie->name;
					?>
				</option>
				<?php } ?>
			</select>
		</div>
		<br />
		<button type="submit" class="btn btn-primary btn-block">Submit</button>
	</form>
</div>



<?php ?>