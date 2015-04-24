<h1> Mes Annonces </h1>
<?php
	foreach($list as $value) { ?>
<div class="listupload">
	<table class="table table-hover tableall" style="border:2px solid #2751C9; background-color:#E4E4E4; color:#6D6D6D;">
		<tr>
			<th class="thtitre"> Titre </th>
			<th class="thprix"> Prix </th>
			<th> Content </th>
			<th> Categorie </th>
			<th> Region </th>
			<th> Postee par </th>
			<th> Créee le </th>
			<th class="thicons"> </th>
		</tr>
		<tr>
			<td> <?php echo $value->titre; ?> </td>
			<td> <?php echo $value->prix . '€'; ?> </td> 
			<td> <?php echo $value->content; ?> </td>
			<td> <?php echo $value->categorie; ?> </td>
			<td> <?php echo $value->region; ?> </td>
			<td> <?php echo $value->posted_by; ?></td>
			<td> <?php echo $value->created; ?></td>
			<td>
				<a data-toggle="modal" href="#updateannonce<?php echo $value->id; ?>">
					<button type="submit" name="updateannonce" class="btn btn-success btn-xs bouttonupdate">
						<span class="glyphicon glyphicon-refresh trash"></span>					
					</button>
				</a> 
				<a data-toggle="modal" href="#viewannonce">
					<button type="sumbit" name="viewannonce" class="btn btn-primary btn-xs bouttonview">
						<span class="glyphicon glyphicon-eye-open trash"></span>
					</button> 
				</a>
				<a href="<?php echo URL::base(); ?>annonces/delete/<?php echo $value->id; ?>">
					<button type="sumbit" name="deleteannonce" class="btn btn-danger btn-xs bouttontrash">
						<span class="glyphicon glyphicon-trash trash"></span>
					</button> 
				</a>				
			</td>
		</tr> 
	</table>
</div>


<!-- Modal UpdateAnnonce -->
<div class="modal fade" id="updateannonce<?php echo $value->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" style="color:black;"> Mettre a jour votre annonce </h4>
			</div>
			<div class="modal-body">
				<h4 style="color:black;"> Veuillez remplir ce formulaire pour proceder a la modification de votre annonce ! </h4> <br />
				<form method="POST" action="<?php echo URL::base(); ?>annonces/update/<?php echo $value->id; ?>">
					<div class="input-group">
						<span class="input-group-addon"  style="color:black;">Nouveau Titre</span>
						<input type="text" class="form-control" name="titre" value="<?php echo $value->titre; ?>">
					</div> <br />
					<div class="input-group">
						<span class="input-group-addon" style="color:black;"> Nouveau Prix </span>
						<input type="text" class="form-control" name="prix" value="<?php echo $value->prix; ?>">
						<span class="input-group-addon" style="color:black;"> € </span>
					</div> <br />
					<div class="input-group">
						<span class="input-group-addon" style="color:black;"> Nouveau Message de Contenu </span>
						<textarea class="form-control" name="content" maxlength="1000" rows="6" style="resize:none;"> <?php echo $value->content; ?> </textarea>
					</div> <br />
					<div class="input-group">
						<span class="input-group-addon" style="color:black;"> Changer de categorie </span>
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
					</div> <br />
					<div class="input-group">
						<span class="input-group-addon" style="color:black;"> Changer de localisation </span>
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
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Update</button>
					</div>
				</form>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php } ?>