<!DOCTYPE html>
<html lang="en">

	<head>
		<title> FreeAds  </title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), PHP_EOL ?>
		<?php foreach ($scripts as $file) echo HTML::script($file), PHP_EOL ?>
 	</head>

	<body>
		<!-- Header -->
		<header> 
			<nav class="navbar navbar-inverse" role="navigation">
	  			<a class="navbar-brand" href="<?php echo URL::base();?>">FreeAds</a>
	  			  <div class="collapse navbar-collapse navbar-ex1-collapse">
					<a href="<?php echo URL::base(); ?>searchs/index">
						<button type="submit" class="btn btn-primary search"> <span class="glyphicon glyphicon-search"></span> Rechercher une offre  </button>
					</a>
				    	<?php if($user = Auth::instance()->get_user()) { ?>
			    			<a href="<?php echo URL::base(); ?>annonces/add/<?php echo Session::instance()->get("id"); ?>">
			    				<button type="submit" class="btn btn-primary addannonce"> <span class="glyphicon glyphicon-pencil"></span> Poster une annonce </button>
			    			</a>
			    		<?php } ?>
			    		<?php if($user = Auth::instance()->get_user()) { ?>
			    			<a href="<?php echo URL::base(); ?>annonces/ownannonces/<?php echo Session::instance()->get('id'); ?>">
			    				<button type="submit" class="btn btn-primary myannonces"> <span class="glyphicon glyphicon-envelope"></span> Mes annonces </button>
			    			</a>
			    		<?php } ?>
					<ul class="nav navbar-nav navbar-right loginregister">
				    	<li style="font-style:italic; text-decoration:underline;">
				    		<?php if($user = Auth::instance()->get_user()) { 
				    			echo '<a href="'.URL::base().'users/profil">Bonjour '. '<span class="glyphicon glyphicon-user"> </span>' . Session::instance()->get("login"). '</a>'; 
				    		} ?>	 
				    	</li> 
			    		<?php if (!$user = Auth::instance()->get_user()) { ?>
			    		<li><a data-toggle="modal" href="#login">Login</a></li>
			    		<?php } else { ?>
			    		<li><a data-toggle="modal" href="<?php echo URL::base(); ?>users/logout"> <span class="glyphicon glyphicon-log-out"> </span> Logout</a></li>
				      	<?php } ?>
				      	<?php if (!$user = Auth::instance()->get_user()) { ?>
				      	<li><a data-toggle="modal" href="#register">Register</a></li>
						<?php } ?>
				      	<li class="dropdown">
				       	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Infos <b class="caret"></b></a>
			     	   	<ul class="dropdown-menu">
		          			<li><a href="#"><span class="glyphicon glyphicon-wrench"></span> Support</a></li>
	         					<li><a href="#"><span class="glyphicon glyphicon-user"></span> Developers</a></li>
						  	<li><a href="#"><span class="glyphicon glyphicon-book"></span> About Us</a></li>
			     		    	<li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Contact Us</a></li>
			        		</ul>
				     	</li>
				    </ul>
			  	</div>
			</nav>
			 <!-- Modal Register -->
			  <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    <div class="modal-dialog">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			          <h4 class="modal-title">Register</h4>
			        </div>
			        <div class="modal-body">
			        	<h4> Veuillez remplir ce formulaire pour proceder a l'inscription ! </h4> <br />
			          <form method="POST" action="<?php echo URL::base(); ?>users/register">
						<div class="input-group">
						  	<span class="input-group-addon">Username*</span>
						  	<input type="text" class="form-control" name="username" placeholder="Ex : Simon1995">
						</div> <br />
						<div class="input-group">
							<span class="input-group-addon">E-Mail*</span>
							<input type="text" class="form-control" name="email" placeholder="Ex : votremail@domaine.com">
			          	</div>  <br />
			          	<div class="input-group">
							<span class="input-group-addon">Password*</span>
							<input type="password" class="form-control" name="password">
			          	</div> <br />
			          	<div class="input-group">
							<span class="input-group-addon">Confirm Password*</span>
							<input type="password" class="form-control" name="password_confirm">
			          	</div> <br />
			          	<p style="color:blue;"> * = Those fields are required. </p>
			        	<div class="modal-footer">
			          		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			          		<button type="submit" class="btn btn-primary">Register</button>
			          	</div>
			          	</form>
			          <!-- <button type="submit" class="btn btn-primary">Register</button> -->
			        </div>
			      </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			  </div><!-- /.modal -->

			  <!-- Modal Login -->
			  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    <div class="modal-dialog">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			          <h4 class="modal-title">Log In</h4>
			        </div>
			        <div class="modal-body">
			        	<h4> Veuillez remplir ce formulaire pour vous connecter ! </h4> <br />
			          <form method="POST" action="<?php echo URL::base(); ?>users/login">
						<div class="input-group">
							<span class="input-group-addon">Username*</span>
							<input type="text" class="form-control" name="inputLogin" placeholder="Ex : Simon1995">
			          	</div> <br />
			          	<div class="input-group">
							<span class="input-group-addon">Password*</span>
							<input type="password" class="form-control" name="inputPassword">
			          	</div> <br />
			          	<div class="checkbox">
			          		<label>
			          			<input type="checkbox"> Remember me
			          		</label>
			          	</div>
			          	<p style="color:blue;"> * = Those fields are required. </p>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			          <button type="submit" class="btn btn-primary">Log In</button>
			        </div>
			        </form>
			      </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			  </div><!-- /.modal -->
		</header>
		<!-- Contenu -->
		<div class="container">

			<?php if(isset($message)) { var_dump($message); } ?>
			<?php if(isset($errors)) { var_dump($errors); } ?>

			<?php echo $content; ?>	
		</div>

		<!-- Footer -->
		<script src="media/js/jquery.js"></script>
	 	<!-- // <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script> -->
		<script language="javascript" src="media/js/bootstrap.js"></script>
	</body>
</html>