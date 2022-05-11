<?php include_once('include/header.php'); ?>
<?php include_once "include/config.php";?>



  <!-- Page Content -->
  <div class="container">
  
	<h1 class="my-4">Module personnel ici</h1>	

  <p>(J'ai réuni les informations de deux tables, celle du Fabricant et celle de la Voiture. Le but étant 
     de donner les détails  pertinentes sur la voiture et son fabricant.)</p>


  <?php
    
    $res = $mysqli->query("SELECT fabricant.nom_entreprise,voiture.marque,voiture.model,voiture.annee,voiture.couleur,fabricant.telephone,fabricant.pays FROM fabricant INNER JOIN voiture ON fabricant.id = voiture.fk_fabricant");

        echo '<table class="table">';

    echo '<tr>';
    echo '<th>nom_entreprise</th>';
    echo '<th>marque</th>';
    echo '<th class="text-center">model</th>';
    echo '<th class="text-center">année</th>';
    echo '<th class="text-center">couleur</th>';
    echo '<th class="text-center">Téléphone</th>';
    echo '<th class="text-center">Pays</th>';


    while ($row = $res->fetch_assoc()) {
      echo '<tr>';

      echo '<td>' . $row["nom_entreprise"] . '</td>';
      echo '<td>' . $row["marque"] . '</td>';
      echo '<td class="text-center">' . $row["model"] . ' </td>';
      echo '<td class="text-center">' . $row["annee"] . '</td>';
      echo '<td class="text-center">' . $row["couleur"] . ' </td>';
      echo '<td class="text-center">' . $row["telephone"] . ' </td>';
      echo '<td class="text-center">' . $row["pays"] . ' </td>';

      echo '<tr>';    
    }
  
    echo '</table>';
  
    
  ?>


  
	
	
  </div>

<?php include_once('include/footer.php'); ?>
