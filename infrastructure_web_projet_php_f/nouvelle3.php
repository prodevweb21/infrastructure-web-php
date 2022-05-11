<?php include_once "include/config.php";?>
<?php include_once('include/header.php'); ?>
 
    <h1>
          <?php  
            $res = $mysqli->query("SELECT `titre` FROM `nouvelles` WHERE fk_categorie=3 AND actif");
            while ($row = $res->fetch_assoc()) {
             echo $row["titre"];
            }
            ?>
    </h1>

    <h4>
          <?php  
            $res = $mysqli->query("SELECT `date_nouvelle` FROM `nouvelles` WHERE fk_categorie=3 AND actif");
            while ($row = $res->fetch_assoc()) {
             echo $row["date_nouvelle"];
            }
            ?>
    </h4>

    <h4>
          <?php  
            $res = $mysqli->query("SELECT `description_longue` FROM `nouvelles` WHERE id=5 AND actif");
            while ($row = $res->fetch_assoc()) {
             echo $row["description_longue"];
            }
            ?>
    </h4>










     