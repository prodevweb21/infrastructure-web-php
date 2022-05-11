<?php include_once "include/config.php";?>
<?php include_once('include/header.php'); ?>


<div class="col-lg-4 mb-4">
    <h1>
          <?php  
            $res = $mysqli->query("SELECT `titre` FROM `nouvelles` WHERE id=4 AND actif");
            while ($row = $res->fetch_assoc()) {
             echo $row["titre"];
            }
            ?>
    </h1>
    <h4>
            <?php  
            $res = $mysqli->query("SELECT `date_nouvelle` FROM `nouvelles` WHERE id=4 AND actif");
            while ($row = $res->fetch_assoc()) {
             echo $row["date_nouvelle"];
            }
            ?>
    </h4> 
    <h4>
            <?php  
            $res = $mysqli->query("SELECT `description_longue` FROM `nouvelles` WHERE id=4 AND actif");
            while ($row = $res->fetch_assoc()) {
             echo $row["description_longue"];
            }
            ?>
          </div>
        
    </h4>    