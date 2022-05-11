<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div id="modalSuppr" class="modal" tabindex="-1" role="dialog" data-backdrop="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Suppression d'un article</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Voulez-vous vraiment supprimer cet article?</p>
      </div>
      <div class="modal-footer">
        <form method="POST">
          <input type="hidden" id="idNouvellesASupprimer" name="id">
          <button class="btn btn-danger" name="supprSubmit" type="submit">Oui</button>            
        </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
    
      </div>
    </div>
  </div>
</div>



</body>
</html>


