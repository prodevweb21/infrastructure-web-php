<?php
    $messageMAJ = '';

    // Vérification que la page a été soumise et que tous les champs sont présents
    if(isset($_POST['titre']) && isset($_POST['description_courte']) && isset($_POST['description_longue']) && isset($_POST['date_nouvelle'])  && isset($_POST['actif']) && isset($_POST['fk_categorie'])) { 
      $mysqli = new mysqli($host, $username, $password, $database); // Établissement de la connexion à la base de données
      if ($mysqli -> connect_errno) { // Affichage d'une erreur si la connexion échoue
        echo 'Échec de connexion à la base de données MySQL: ' . $mysqli -> connect_error;
      } 
      
      if ($requete = $mysqli->prepare("UPDATE nouvelles SET titre=?, description_courte=?, description_longue=?, date_nouvelle=?, actif=?, fk_categorie=? WHERE id=?")) {  // Création d'une requête préparée 
       
      $requete->bind_param("ssssiii", $_POST['titre'], $_POST['description_courte'], $_POST['description_longue'], $_POST['date_nouvelle'], $_POST['actif'], $_POST['fk_categorie'], $_POST['id']); // Envoi des paramètres à la requête. 

        if($requete->execute()) { // Exécution de la requête
          $messageMAJ = "<div class='alert alert-success text-center'>Article mis à jour</div>";  // Message ajouté dans la page en cas d'ajout réussi
        } else {
          $messageMAJ = "<div class='alert alert-danger text-center'>Une erreur est survenue lors de la mise à jour.</div>";  // Message ajouté dans la page en cas d'ajout en échec
        }

        $requete->close(); // Fermeture du traitement
      } else  {
        echo $mysqli->error;
      }
  
      $mysqli->close(); // Fermeture de la connexion 
    } 
?>