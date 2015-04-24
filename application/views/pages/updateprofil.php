<h1> Mettre a jour votre profil ici </h1>

<a href="<?php echo URL::base(); ?>users/profil"> <span class="glyphicon glyphicon-arrow-left lol"> <span> </a> <span class="inline-block"> <i>Revenir au menu du profil </i> </span>


<span class="center"><p style="color:red;"> <?php if(isset($message)) { echo $message; } ?> </p></span>
<div class="postprofil">
		<h4> <span class= "well"> <?php echo "Votre pseudo actuel : " . $users->username; ?> 
			 	<a data-toggle="modal" href="#username"> 
			 		<span class="glyphicon glyphicon-refresh move"> </span>
			 	</a>
			 </span> </h4>
		<h4> <span class="well"> <?php echo "Votre email actuel : " . $users->email; ?> 
				<a data-toggle="modal" href="#email">
					<span class=" glyphicon glyphicon-refresh move"> </span>
				</a>
		</span> </h4>
		<h4> <span class="well"> Changer votre mot de passe 
				<a data-toggle="modal" href="#password"> 
					<span class="glyphicon glyphicon-refresh move glyph"> </span>
				</a>
		</span> </h4>
		<br />
</div>


			 <!-- Modal Username -->
			  <div class="modal fade" id="username" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    <div class="modal-dialog">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			          <h4 class="modal-title" style="color:black;">Changer votre username</h4>
			        </div>
			        <div class="modal-body">
			        	<h4 style="color:black;"> Veuillez remplir ce formulaire pour proceder au changement d'username ! </h4> <br />
			          <form method="POST" action="<?php echo URL::base(); ?>users/updateprofil">
						<div class="input-group">
						  	<span class="input-group-addon"  style="color:black;">Nouvel Username</span>
						  	<input type="text" class="form-control" name="username" placeholder="Ex : Simon1995">
						</div> <br />
			        	<div class="modal-footer">
			          		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			          		<button type="submit" class="btn btn-primary">Update</button>
			          	</div>
			          	</form>
			        </div>
			      </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			  </div><!-- /.modal -->

			   <!-- Modal Email -->
			  <div class="modal fade" id="email" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    <div class="modal-dialog">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			          <h4 class="modal-title" style="color:black;">Changer votre e-mail</h4>
			        </div>
			        <div class="modal-body">
			        	<h4 style="color:black;"> Veuillez remplir ce formulaire pour proceder au changement d'e-mail! </h4> <br />
			          <form method="POST" action="<?php echo URL::base(); ?>users/updateprofil">
						<div class="input-group">
						  	<span class="input-group-addon" style="color:black;">Nouvel E-Mail</span>
						  	<input type="email" class="form-control" name="email" placeholder="Ex : momo@momo.com">
						</div> <br />
			        	<div class="modal-footer">
			          		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			          		<button type="submit" class="btn btn-primary">Update</button>
			          	</div>
			          	</form>
			        </div>
			      </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			  </div><!-- /.modal -->

			   <!-- Modal Password -->
			  <div class="modal fade" id="password" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    <div class="modal-dialog">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			          <h4 class="modal-title" style="color:black;">Changer votre mot de passe</h4>
			        </div>
			        <div class="modal-body">
			        	<h4 style="color:black;"> Veuillez remplir ce formulaire pour proceder au changement de mot de passe! </h4> <br />
			          <form method="POST" action="<?php echo URL::base(); ?>users/updateprofil">
						<div class="input-group">
						  	<span class="input-group-addon" style="color:black;">Nouveau Password</span>
						  	<input type="password" class="form-control" name="password">
						</div> <br />
			        	<div class="modal-footer">
			          		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			          		<button type="submit" class="btn btn-primary">Update</button>
			          	</div>
			          	</form>
			        </div>
			      </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			  </div><!-- /.modal -->