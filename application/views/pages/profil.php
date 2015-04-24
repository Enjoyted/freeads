<h1> Mon profil </h1>
<a href="<?php echo URL::base(); ?>annonces/list"> <span class="glyphicon glyphicon-arrow-left"> <span> </a> <span class="inline-block"> <i>Revenir a l'acceuil </i> </span>
<br />
<h2 class="h2profiluser"> <a href="<?php echo URL::base();?>users/updateprofil"> Mes informations </a> </h2>
<h2 class="h2profilannonce"> <a href="<?php echo URL::base(); ?>annonces/ownannonces/<?php echo Session::instance()->get("id"); ?>"> Mes annonces </a> </h2>
<hr />
	<p class="pdescription-user"> Informations concernant votre profil </p>
	<p class="pdescription-annonce"> Informations concernant vos annonces </p>
<?php  ?>