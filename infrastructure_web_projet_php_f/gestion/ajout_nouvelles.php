
<?php

include_once 'include/config.php';
$messageAjout = '';

// Vérification que l'action d'ajout a été soumise et que tous les champs sont présents
  if(isset($_POST['ajoutSubmit']) && isset($_POST['titre']) && isset($_POST['description_courte']) && isset($_POST['description_longue']) && isset($_POST['date_nouvelle']) && isset($_POST['actif']) && isset($_POST['fk_categorie'])) { 
    $mysqli = new mysqli($host, $username, $password, $database); // Établissement de la connexion à la base de données
    if ($mysqli -> connect_errno) { // Affichage d'une erreur si la connexion échoue
      echo 'Échec de connexion à la base de données MySQL: ' . $mysqli -> connect_error;
    } 
    
    if ($requete = $mysqli->prepare("INSERT INTO nouvelles(titre, description_courte, description_longue, date_nouvelle, actif, fk_categorie) VALUES(?, ?, ?, ?, ?, ?)")) {  // Création d'une requête préparée 
      /************************* ATTENTION **************************/
      /* On ne fait présentement peu de validation des données.     */
      /* On revient sur cette partie dans les prochaines semaines!! */
      /**************************************************************/ 
      $requete->bind_param("ssssii", $_POST['titre'], $_POST['description_courte'], $_POST['description_longue'], $_POST['date_nouvelle'], $_POST['actif'], $_POST['fk_categorie']); // Envoi des paramètres à la requête. 

      if($requete->execute()) { // Exécution de la requête
        $messageAjout = "<div class='alert alert-success text-center'>Nouvelle ajouté!</div>";  // Message ajouté dans la page en cas d'ajout réussi
      } else {
        $messageAjout =  "<div class='alert alert-danger text-center'>Une erreur est survenue lors de l'ajout.</div>";  // Message ajouté dans la page en cas d'ajout en échec
      }

      $requete->close(); // Fermeture du traitement
    } else  {
      echo $mysqli->error;
    }

    $mysqli->close(); // Fermeture de la connexion 
  } 
?>

	
			
            
            
            


    