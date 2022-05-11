<?php include_once('include/header.php'); ?>
<?php include_once "include/config.php";
echo $_GET['id'];
?>



  <!-- Page Content -->
  <div class="container">

        <h1>
            <?php  
              $res = $mysqli->query("SELECT `id`, `categorie` FROM `categories` WHERE id=1");
              while ($row = $res->fetch_assoc()) {
              echo $row["categorie"];
              }
              ?>
        </h1>



  <?php
    
    $res = $mysqli->query("SELECT `id`, `titre`, `description_courte`, `date_nouvelle`, `actif`, `fk_categorie` FROM `nouvelles` WHERE id=1");

        echo '<table class="table">';

    echo '<tr>';
    echo '<th>Titre</th>';
    echo '<th>Description courte</th>';
    echo '<th class="text-center">Date nouvelle</th>';
    echo '<th class="text-center">Actif</th>';
    echo '<th class="text-center">Gategorie</th>';

    while ($row = $res->fetch_assoc()) {
      echo '<tr>';

      echo '<td>' . $row["titre"] . '</td>';
      echo '<td>' . $row["description_courte"] . '</td>';
      echo '<td class="text-center">' . $row["date_nouvelle"] . ' </td>';
      echo '<td class="text-center">' . $row["actif"] . '</td>';
      echo '<td class="text-center">' . $row["fk_categorie"] . ' </td>';

    echo '</table>';
  }
    
  ?>

        <div class="card-footer">
            <a href="nouvelle.php" class="btn btn-primary">Plus d'information</a>
          </div>
        </div>



  </div>
	<!-- Afficher la liste de toutes nouvelles ACTIVES appartenant à la catégorie sélectionnée en ordre chronologique (de la plus récente à la plus ancienne) -->
	<!-- L'affichage est à votre discrétion -->
	
  

<?php include_once('include/footer.php'); ?>
  

