<h1> La recherche </h1>


<div class="well well-sm">
	<form method="POST" role="form" class="form-inline" action="<?php echo URL::base(); ?>searchs/search">
		<div class="form-group">
			<label> Titre : </label>
			<input type="text" name="titre" size="15">
		</div>
		<div class="form-group">
			<label style="color:#2751C9;"> Localisation </label>
			<select id="departements" name="region">
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
			<select id="categories" name="categorie">
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
		<button type="submit" class="btn btn-primary btn-block">Rechercher <span class="glyphicon glyphicon-search"> </span></button>
	</form>
</div>