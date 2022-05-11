<?php include_once "include/config.php";?>
<?php include_once('include/header.php'); ?>

    <!-- 1er nouvelles -->
    <h1>
          <?php  
            $res = $mysqli->query("SELECT `titre` FROM `nouvelles` WHERE id=3 AND actif");
            while ($row = $res->fetch_assoc()) {
             echo $row["titre"];
            }
            ?>
    </h1>
    <h5>
        <?php  
            $res = $mysqli->query("SELECT `date_nouvelle` FROM `nouvelles` WHERE id=3 AND actif");
            while ($row = $res->fetch_assoc()) {
             echo $row["date_nouvelle"];
            }
            ?>
    </h5>
    <h4>
          <?php  
            $res = $mysqli->query("SELECT `id`,`description_longue` FROM `nouvelles` WHERE actif AND id=3
            ");
            while ($row = $res->fetch_assoc()) {
             echo $row["description_longue"];
            }
            ?>
    </h4>





<!-- 2e nouvelles -->

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
            $res = $mysqli->query("SELECT `id`,`description_longue` FROM `nouvelles` WHERE actif AND id=4
            ");
            while ($row = $res->fetch_assoc()) {
             echo $row["description_longue"];
            }
            ?>
    </h4>

            










  


     




