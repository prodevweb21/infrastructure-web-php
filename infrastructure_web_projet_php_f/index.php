<?php include_once "include/config.php";?>
<?php include_once('include/header.php'); ?>


  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('http://placehold.it/1900x1080')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Image #1</h3>
            <p>Description de l'image #1.</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Image #2</h3>
            <p>Description de l'image #2.</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Image #2</h3>
            <p>Description de l'image #3.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Précédent</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Suivant</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <h1 class="my-4">Projet final</h1>

    <!-- Marketing Icons Section -->
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">
            <?php  
            $res = $mysqli->query("SELECT `titre` FROM `nouvelles` WHERE id=1 AND actif");
            while ($row = $res->fetch_assoc()) {
             echo $row["titre"];
            }
            ?>
          </h4>

          <div class="card-body">
			    <h6 class="card-title">

          <?php  
            $res = $mysqli->query("SELECT `date_nouvelle` FROM `nouvelles` WHERE id=1 AND actif");
            while ($row = $res->fetch_assoc()) {
             echo $row["date_nouvelle"];
            }
            ?>
          </h6>

            <p class="card-text">
            <?php  
            $res = $mysqli->query("SELECT `description_courte` FROM `nouvelles` WHERE id=1 AND actif");
            while ($row = $res->fetch_assoc()) {
             echo $row["description_courte"];
            }
            ?>
          </h6>
            </p>

          </div>
          <div class="card-footer">
            <a href="nouvelle.php" class="btn btn-primary">Plus d'information</a>
          </div>
        </div>
      </div>


      
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">
          <?php  
            $res = $mysqli->query("SELECT `titre` FROM `nouvelles` WHERE id=3 AND actif");
            while ($row = $res->fetch_assoc()) {
             echo $row["titre"];
            }
            ?>
          </h4>
          <div class="card-body">
			<h6 class="card-title">
      <?php  
            $res = $mysqli->query("SELECT `date_nouvelle` FROM `nouvelles` WHERE id=3 AND actif");
            while ($row = $res->fetch_assoc()) {
             echo $row["date_nouvelle"];
            }
            ?>
      </h6>
            <p class="card-text">
            <?php  
            $res = $mysqli->query("SELECT `description_courte` FROM `nouvelles` WHERE id=3 AND actif");
            while ($row = $res->fetch_assoc()) {
             echo $row["description_courte"];
            }
            ?>
            </p>
          </div>
          <div class="card-footer">
            <a href="nouvelle2.php" class="btn btn-primary">Plus d'information</a>
          </div>
        </div>
      </div>
      







      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">
          <?php  
            $res = $mysqli->query("SELECT `titre` FROM `nouvelles` WHERE id=4 AND actif");
            while ($row = $res->fetch_assoc()) {
             echo $row["titre"];
            }
            ?>
          </h4>
          <div class="card-body">
			<h6 class="card-title">
      <?php  
            $res = $mysqli->query("SELECT `date_nouvelle` FROM `nouvelles` WHERE id=4 AND actif");
            while ($row = $res->fetch_assoc()) {
             echo $row["date_nouvelle"];
            }
            ?>
      </h6>
            <p class="card-text">
            <?php  
            $res = $mysqli->query("SELECT `description_courte` FROM `nouvelles` WHERE id=4 AND actif");
            while ($row = $res->fetch_assoc()) {
             echo $row["description_courte"];
            }
            ?>
            </p>
          </div>
          <div class="card-footer">
            <a href="nouvelle4.php" class="btn btn-primary">Plus d'information</a>
          </div>
        </div>
      </div>
    </div>
	
  </div>

<?php include_once('include/footer.php'); ?>
