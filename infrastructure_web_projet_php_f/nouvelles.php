<?php include_once('include/header.php'); ?>
<?php include_once "include/config.php";?>



  <!-- Page Content -->
  <div class="container">
  
	<h1 class="my-4">Toutes les nouvelles</h1>



  <?php
    
    $res = $mysqli->query("SELECT `id`, `titre`, `description_courte`, `description_longue`, `date_nouvelle`, `actif`, `fk_categorie` FROM `nouvelles` WHERE actif ORDER BY date_nouvelle DESC
    ");

        echo '<table class="table">';

    echo '<tr>';
    echo '<th>Titre</th>';
    echo '<th>Description courte</th>';
    echo '<th>Description longue</th>';
    echo '<th class="text-center">Date nouvelle</th>';
    echo '<th class="text-center">Actif</th>';
    echo '<th class="text-center">Gategorie</th>';

    while ($row = $res->fetch_assoc()) {
      echo '<tr>';

      echo '<td>' . $row["titre"] . '</td>';
      echo '<td>' . $row["description_courte"] . '</td>';
      echo '<td>' . $row["description_longue"] . '</td>';
      echo '<td class="text-center">' . $row["date_nouvelle"] . ' </td>';
      echo '<td class="text-center">' . $row["actif"] . '</td>';
      echo '<td class="text-center">' . $row["fk_categorie"] . ' </td>';

      echo '<tr>';   

    
  }
      echo '</table>';
  ?>

	<!-- Afficher la liste de toutes nouvelles ACTIVES en ordre chronologique (de la plus récente à la plus ancienne) -->
	<!-- L'affichage doit être le même que celui utilisé pour l'affichage des nouvelles par catégorie -->
	
  </div>

<?php include_once('include/footer.php'); ?>

</html>

