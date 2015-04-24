<h1> Liste des annonces </h1>

<?php
	foreach($query as $value) { ?>
<div class="listupload">

	<table class="table table-hover" style="border:3px solid #2751C9; background-color:#E4E4E4; color:#6D6D6D;">
			<tr>
			 	<th class="thtitre"> Titre </th>
			 	<th class="thprix"> Prix </th>
			 	<th class="thcontent"> Content </th>
			 	<th class="thcategorie"> Categorie </th>
			 	<th> Region </th>
			 	<th> Postee par </th>
			 	<th> Créee le </th>
			</tr>
		<tr>
			<td> <?php echo $value['titre']; ?> </td>
			<td> <?php echo $value['prix'] . '€'; ?> </td> 
			<td> <?php echo $value['content']; ?> </td>
			<td> <?php echo $value['categorie']; ?> </td>
			<td> <?php echo $value['region']; ?> </td>
			<td> <?php echo $value['username']; ?></td>
			<td> <?php echo $value['created']; ?></td>
			<td> <a data-toggle="modal" href="#email<?php echo $value['id']; ?>"> <span class="glyphicon glyphicon-envelope iconenvelop"> </span> </a> </td>
		</tr> 
 	</table>
 </div>

 <!-- Modal Email -->
			  <div class="modal fade" id="email<?php echo $value['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    <div class="modal-dialog">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			          <h4 class="modal-title" style="color:black;">Envoyer un E-Mail a <?php echo $value['username']; ?></h4>
			        </div>
			        <div class="modal-body">
			        	<h4 style="color:black;"> Veuillez remplir les champs pour envoyer un email a votre interlocuteur </h4> <br />
			          <form method="POST" action="<?php echo URL::base(); ?>users/sendMail">
						<div class="input-group">
						  	<span class="input-group-addon" style="color:black;">E-Mail Destinataire</span>
						  	<input type="email" class="form-control" name="email" value="<?php echo $value['email']; ?>">
						</div> <br />
						<div class="input-group">
							<span class="input-group-addon" style="color:black;"> Titre de l'E-Mail </span>
							<input type="text" class="form-control" name="titre">
						</div>
						<label style="color:#2751C9;">Contenu de votre E-Mail</label>
						<textarea class="form-control" maxlength="300" name="content" placeholder="Contenu de votre E-Mail (300 caracteres maximum)" rows="6" style="resize:none;"></textarea>
			        	<div class="modal-footer">
			          		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			          		<button type="submit" class="btn btn-primary">Envoyer</button>
			          	</div>
			          	</form>
			        </div>
			      </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			  </div><!-- /.modal -->
			  <?php } ?>