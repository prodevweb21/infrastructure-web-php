<?php include_once "include/config.php";?>
<?php include_once('include/header.php'); ?>
   
          <div class="col-lg-6 p-5">
            <h4>
            <?php  
              $res = $mysqli->query("SELECT `id`, `titre`, `description_longue`, `date_nouvelle`, `actif` FROM `nouvelles` WHERE id=1
              ");
              while ($row = $res->fetch_assoc()) {
              echo '<br>';
              echo $row["titre"];
              echo '<br>';
              echo $row["date_nouvelle"];
              echo '<br>';
              echo $row["description_longue"];
              }
              ?>
            </h4>
          </div>
        

              



       


     


