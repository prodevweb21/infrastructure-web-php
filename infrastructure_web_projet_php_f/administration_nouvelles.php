<?php
  include_once 'include/header.php'; 
  include_once 'include/config.php';

  include_once 'gestion/ajout_nouvelles.php';
  include_once 'gestion/supprime_nouvelles.php';
  include_once 'gestion/maj_nouvelles.php';



?>



  <!-- Page Content -->


  <div class="container">
  
	<h1 class="my-4">Administration - Nouvelles</h1>

</head>
<body>

  <div class="container mt-3">
  <div class="row">
    <div class="col-lg-4">
      <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modalAjout">
        <svg class="bi bi-plus" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
          <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
        </svg>
        Ajouter un article
      </button>
      </div>


      <?php
    
    $res = $mysqli->query("SELECT `id`, `titre`, `description_courte`, `description_longue`, `date_nouvelle`, `actif`, `fk_categorie` FROM `nouvelles` ORDER BY id");
    

        echo '<table class="table">';

    echo '<tr>';
    echo '<th>id</th>';
    echo '<th>Titre</th>';
    echo '<th>Description courte</th>';
    echo '<th>Description longue</th>';
    echo '<th class="text-center">Date nouvelle</th>';
    echo '<th class="text-center">Actif</th>';
    echo '<th class="text-center">Gategorie</th>';

    while ($row = $res->fetch_assoc()) {
      echo '<tr>';
      echo '<td>' . $row["id"] . '</td>';
      echo '<td>' . $row["titre"] . '</td>';
      echo '<td>' . $row["description_courte"] . '</td>';
      echo '<td>' . $row["description_longue"] . '</td>';
      echo '<td class="text-center">' . $row["date_nouvelle"] . ' </td>';
      echo '<td class="text-center">' . $row["actif"] . '</td>';
      echo '<td class="text-center">' . $row["fk_categorie"] . ' </td>';

      echo '<td class="text-center">';



      // bouton modifier
      echo '<button type="button" class="btn btn-default boutonMAJ" data-toggle="modal" data-id="' . $row["id"] . '" data-target="#modalMAJ">';
      echo '<svg class="bi bi-pencil" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">';
      echo '<path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>';
      echo '<path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>';
      echo '</svg>';
      echo '</a>';

      // bouton supprimer
      echo '<button type="button" class="btn btn-default boutonSupprimer" data-toggle="modal" data-id="' . $row["id"] . '" data-target="#modalSuppr">';
      echo '<svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">';
      echo '<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>';
      echo '<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>';
      echo '</svg>';
      echo '</button>';


    echo '</td>';
    echo '</tr>';
    
  }
      echo '</table>';

      echo $messageAjout;
      echo $messageSuppr;
      echo $messageMAJ;

  ?>



    </div>
    <div class="row">
    <a class="dropdown-item" href="nouvelles.php"><h3>Voir toutes les nouvelles</h3></a>
    </div>

<?php 

  include_once 'gestion/ajout_modal.php';
  include_once 'gestion/supprime_modal.php';
  include_once 'gestion/maj_modal.php';

?>



<?php 

include_once 'include/footer.php'; 


?>
  
  
  <script>

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
'use strict';
window.addEventListener('load', function() {
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.getElementsByClassName('needs-validation');
  // Loop over them and prevent submission
  var validation = Array.prototype.filter.call(forms, function(form) {
    form.addEventListener('submit', function(event) {
      if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });
}, false);
})();


$(document).on("click", ".boutonSupprimer", function () {
console.log($(this).data('id'));
$("#idNouvellesASupprimer").val($(this).data('id'));
});



// (function($){
$(document).on("click", ".boutonMAJ", function () {
// var $j = jQuery.noConflict();
console.log($(this).data('id'));
var url = "ajax/get_nouvelles.php?id=" + $(this).data('id');
$.get(url, function( data ) {
  
console.log(data);
$("#id_MAJ").val(data.id);
$("#titre_MAJ").val(data.titre);
$("#desription_courte_MAJ").val(data.desription_courte);
$("#description_longue_MAJ").val(data.desription_longue);
$("#date_nouvelle_MAJ").val(data.date_nouvelle);
$("#actif_MAJ").val(data.actif);
$("#fk_categorie_MAJ").val(data.fk_categorie);
});
});
// })(jQuery);



</script>



  </div>
	</div>
	<!-- Cette section doit permettre de gérer (lister, ajouter, modifier et supprimer) des nouvelles. -->
	<!-- Vous pouvez réaliser cette demande en utilisant plusieurs pages php (une pour l'ajout, une pour l'édition et une pour la suppression) ou utiliser des composants Modals -->
	<!-- Il doit être impossible d'accéder à cette page sans être préalablement connecté. Si un utilisateur non connecté essaie d'accéder à la page, un message d'erreur doit s'afficher -->
	

                



  




</body>
</html>