<h1> resultat de votre recherche </h1>
<?php if (empty($search) === false): ?>
	
<?php foreach($search as $results)
{ ?>
	
<div class="listupload">

	<table class="table table-hover" style="border:3px solid #2751C9; background-color:#E4E4E4; color:#6D6D6D;">
			<tr>
			 	<th class="thtitre"> Titre </th>
			 	<th class="thprix"> Prix </th>
			 	<th class="thcontent"> Content </th>
			 	<th class="thcategorie"> Categorie </th>
			 	<th> Region </th>
			 	<th> Créee le </th>
			</tr>
		<tr>
			<td> <?php echo $results->titre; ?> </td>
			<td> <?php echo $results->prix. '€'; ?> </td> 
			<td> <?php echo $results->content ; ?> </td>
			<td> <?php echo $results->categorie ; ?> </td>
			<td> <?php echo $results->region ; ?> </td>
			<td> <?php echo $results->created ; ?></td>
		</tr> 
 	</table>
 </div>

<?php } ?> 

<?php else: ?>
	<p>vide</p>
<?php endif ?>

