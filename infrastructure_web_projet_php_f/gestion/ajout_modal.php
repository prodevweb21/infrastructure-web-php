<div id="modalAjout" class="modal" tabindex="-1" role="dialog" data-backdrop="false">
  <form class="needs-validation" novalidate method="POST">
    <div class="modal-dialog mw-100 w-30" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Ajout de nouvelle</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="titre">Titre</label>
              <input type="text" id="titre" name="titre" required maxlength="50"/>
              <div class="invalid-feedback">
              </div>
              </div>

            
            <div class="col-md-10 mb-3">
              <label for="description_courte">Description courte</label>
              <textarea id="description_courte" name="description_courte" maxlength="125"></textarea>
              <div class="invalid-feedback"></div>
            </div>
         

          
            <div class="col-md-10 mb-3">
              <label for="description_longue">Description_longue</label>
              <textarea id="description_longue" name="description_longue" maxlength="500"></textarea>
              <div class="invalid-feedback"></div>
            </div>
         

            
            <div class="col-md-10 mb-3">
              <label for="date_nouvelle">Date nouvelle</label>
              <input type="date" class="form-control" id="date_nouvelle" name="date_nouvelle"
              value="2021-01-01" placeholder="AAAA-MM-JJ" size="10" />
            <div class="invalid-feedback"></div>
            </div>
            
            <div class="col-md-4 mb-3">
              <label for="actif">Actif</label>
              <input type="number" class="form-control" id="actif" name="actif" min="0" max="1" />
              <div class="invalid-feedback"></div>
            </div>


            <div class="col-md-4 mb-3">
              <label for="fk_categorie">Categorie</label>
              <input type="number" class="form-control" id="fk_categorie" name="fk_categorie" />
              <div class="invalid-feedback"></div>
            </div>
		      </div>
        

        <div class="modal-footer">
          <button class="btn btn-primary" type="submit" name="ajoutSubmit">Ajouter l'article</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        </div>

      </div>
    </div>
  </form>
</div>
</div>

