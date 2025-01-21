<div class="modal fade" id="addEquip" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-simple">
    <div class="modal-content p-0 p-md-2 p-xl-5">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter un produit</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
        <form class="mb-3" method="POST" action="{{ route('produit.store') }}" enctype="multipart/form-data">
          
          <div class="mb-3">
            <label for="id_cat" class="form-label">Categorie equuipements</label>
            <select class="form-select" id="id_cat" name="id_cat" aria-label="Categorie du produit" required>
              <option selected>Choisir categorie</option>
                <option value="">Scanner</option>
                <option value="">Echographe</option>
                <option value="">Sterilisateur</option>
                <option value="">Instruments chirurgicaux</option>
                <option value="">Microscopes</option>
                <option value="">Lits hospitalisation</option>
            </select>
            
          </div>
          <div class="mb-3">
            <label for="code_prod" class="form-label">Code produit</label>
            <input type="text" class="form-control "
                  id="code_prod" name="code_prod" placeholder="Code du produit" autofocus required />
            
          </div>
          <div class="mb-3">
            <label for="name_prod" class="form-label">Nom produit</label>
            <input type="text" class="form-control "
                  id="name_prod" name="name_prod" placeholder="Nom du produit" required />
            
          </div>
          <div class="mb-3">
            <label for="desc_prod" class="form-label">Description produit</label>
            <input type="text" class="form-control "
                  id="desc_prod" name="desc_prod" placeholder="Description du produit" required />
            
          </div>
          <div class="mb-3">
            <label for="price_prod" class="form-label">Prix du produit</label>
            <input type="text" class="form-control "
                  id="price_prod" name="price_prod" placeholder="Prix du produit" required />
            
          </div>
          <div class="mb-3">
            <label for="qty_prod" class="form-label">Qte du produit</label>
            <input type="text" class="form-control "
                  id="qty_prod" name="qty_prod" placeholder="Quantite du produit" required />
            
          </div>
          <div class="mb-3">
            <label for="color_prod" class="form-label">Couleur du produit</label>
            <input type="text"  />
                  <input type="color" value="#666EE8" class="form-control "
                  id="color_prod" name="color_prod" placeholder="Couleur du produit" required>
            
          </div>
          <div class="mb-3">
            <label for="size_prod" class="form-label">Dimension du produit</label>
            <input type="text" class="form-control "
                  id="size_prod" name="size_prod" placeholder="en cm..." required />
            
          </div>
          <div class="mb-3">
            <label for="detail" class="form-label">Detaillable</label>
            <input type="radio" class="form-check-input"
                  id="detail" name="detail" required value="on"/>
            <label for="detail" class="form-check-label">oui</label>
            <input type="radio" class="form-check-input "
                  id="detail" name="detail" required value="off"/>
            <label for="detail" class="form-check-label">non</label>
            
          </div>
          <div class="mb-3">
            <label for="neuf" class="form-label">Neuf</label>
            <input type="radio" class="form-check-input"
                  id="neuf" name="neuf" required value="on"/>
            <label for="neuf" class="form-check-label">oui</label>
            <input type="radio" class="form-check-input"
                  id="neuf" name="neuf" required value="off"/>
            <label for="neuf" class="form-check-label">non</label>
            
          </div>
          <div class="mb-3">
            <label for="volume" class="form-label">Volume</label>
            <input type="text" class="form-control "
                  id="volume" name="volume" placeholder="en cm3" required />
            
          </div>
          <div class="mb-3">
            <label for="poids" class="form-label">Poids</label>
            <input type="text" class="form-control "
                  id="poids" name="poids" placeholder="Poids du produit" required />
            
          </div>
          <div class="mb-3">
            <label for="img" class="form-label">Image</label>
            <input type="file" class="form-control " name="img" id="img">
            
          </div>
          <div class="mb-3">
            <label for="is_stock" class="form-label">Produit stockable</label>
            <select class="form-select" id="is_stock" name="is_stock">
              <option value="N" selected>NON</option>
              <option value="Y" selected>YES</option>
            </select>
            
          </div>
          <button type="submit" class="btn btn-primary d-grid w-100">Ajouter </button>
        </form>
      </div>
    </div>
  </div>
</div>
