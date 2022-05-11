

<?php
 include_once 'include/config.php'; 
 include_once 'include/login.php';
 
            $mysqli = new mysqli($host, $username, $password, $database);
        
            // Vérifier la connexion
            if ($mysqli -> connect_errno) {
                echo 'Échec de connexion à la base de données MySQL: ' . $mysqli -> connect_error;
                exit();
            } 

            
        ?>
              

<!DOCTYPE html>
<html lang="fr-CA">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Modern Business - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="enonce.php">Énoncé</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Nouvelles
            </a>
        </select>
        
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
            <a class="dropdown-item" href="nouvelles_categorie.php">
            <select id="categorie_id" name="categorie_id">
            
            <?php
              $res = $mysqli->query("SELECT `id`, `categorie` FROM `categories` WHERE id=1");
              while ($row = $res->fetch_assoc()) {
                  
            ?>
                <option value='<?= $row["id"] ?>' ><?= $row["categorie"] ?></option>
            <?php
                } 
                    
            ?>
            </select> 
            </a>


            <a class="dropdown-item" href="nouvelles_categorie2.php">
            <select id="categorie_id" name="categorie_id">
            <?php
              $res = $mysqli->query("SELECT `id`, `categorie` FROM `categories` WHERE id=2");
              while ($row = $res->fetch_assoc()) {
                  
            ?>
                <option value='<?= $row["id"] ?>' ><?= $row["categorie"] ?></option>
            <?php
                } 
                   
            ?>
            </select>
            </a>

            <a class="dropdown-item" href="nouvelles_categorie3.php">
            <select id="categorie_id" name="categorie_id">
            <?php
              $res = $mysqli->query("SELECT `id`, `categorie` FROM `categories` WHERE id=3");
              while ($row = $res->fetch_assoc()) {
                  
            ?>
                <option value='<?= $row["id"] ?>' ><?= $row["categorie"] ?></option>
            <?php
                } 
                   
            ?>
            </select>
            </a>


			      <a class="dropdown-item" href="nouvelles.php">Toutes les nouvelles</a>

          </li>


		  <li class="nav-item">
            <a class="nav-link" href="module_personnel.php">Module personnel</a>
          </li>
          
          

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPages">
              <a class="dropdown-item" href="administration_nouvelles.php">Nouvelles</a>
            </div>
          </li>

          <?php
            if(!isset($_SESSION["utilisateur"])) {
              echo $messageErreurLogin;
          ?>
		     <li class="nav-item">
            <button class="btn btn-outline-info my-2 my-sm-0" data-toggle="modal" data-target="#modalConnexion">Connexion</button>					
          </li>
          <?php
            } else {
          ?>
            <li class="nav-item mr-2"> 
              <span class="navbar-text">
              <li class="nav-item <?php if($page=='Utilisateurs') echo 'active'; ?>">
            <a class="nav-link" href="utilisateurs.php">Utilisateurs</a>
            </li>
              <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Administration
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPages">
              <a class="dropdown-item" href="administration_nouvelles.php">Nouvelles</a>
            </div>
            <?php echo $_SESSION["utilisateur"]; ?>!!!</span>   
            
            </li>
            <li class="nav-item">  
              <form method="POST">
                <button type="submit" name="deconnexionSubmit" class="btn btn-sm btn-outline-primary">
                  Déconnexion
                </button>
              </form>
            </li>
          <?php
            }
          ?>
        </ul>
      </div>
    </div>
  </nav>
  
  




<?php
  include_once 'include/login_modal.php';

?>