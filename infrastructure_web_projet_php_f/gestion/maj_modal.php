<div id="modalMAJ" class="modal" tabindex="-1" role="dialog" data-backdrop="false">
  <form class="needs-validation" novalidate method="POST">
    <div class="modal-dialog mw-100 w-30" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Mise à jour d'un article</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="titre">Titre</label>
              <input type="hidden" id="id_MAJ" name="id" value="<?= $titre["id"] ?>">
              <input type="text" class="form-control" id="titre_MAJ" name="titre" value="<?= $nouvelle["titre"] ?>" required maxlength="25">
              <div class="invalid-feedback">
              </div>
            </div>
            <div class="col-md-8 mb-3">
              <label for="description_courte">Description courte</label>
              <input type="text" class="form-control" id="description_courte_MAJ" name="description_courte" value="<?= $nouvelle["description_courte"] ?>" maxlength="125">
              <div class="invalid-feedback">
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="description_longue">Description_longue</label>
              <input type="text" step=".01" class="form-control" id="description_longue_MAJ" name="description_longue" value="<?= $nouvelle["description_longue"] ?>" >
              <div class="invalid-feedback">
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="date_nouvelle">Date nouvelle</label>
              <input type="date" step=".01" class="form-control" id="date_nouvelle_MAJ" name="date_nouvelle" value="<?= $nouvelle["date_nouvelle"] ?>" required>
              <div class="invalid-feedback">
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="actif">Actif</label>
              <input type="number" class="form-control" id="actif_MAJ" name="actif" value="<?= $nouvelle["actif"] ?>" required min="0" max="2">
              <div class="invalid-feedback">
              </div>
            </div>


            <div class="col-md-4 mb-3">
              <label for="fk_categorie">Categorie</label>
              <input type="number" class="form-control" id="fk_categorie_MAJ" name="fk_categorie" value="<?= $nouvelle["fk_categorie"] ?>">
              <div class="invalid-feedback">
              </div>
            </div>
		      </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-danger" name="majSubmit" type="submit">Mettre à jour le produit</button>  
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        </div>
      </div>
    </div>
  </form>
</div>


