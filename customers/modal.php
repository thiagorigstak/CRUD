<div class="col-md-2">
  <div class="modal fade" id="deleta-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          Deseja realmente excluir este item?
        </div>
        <div class="modal-footer">
          <a id="confirm" class="btn btn-primary" href="#">Sim</a>
          <button id="cancel" class="btn btn-default" data-bs-dismiss="modal">N&atilde;o</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-md-1">
  <div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="modalLabel">Adicionar Item</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <?php include "addmodal.php"; ?>
        </div>
        <div id="actions" class="modal-footer">
        </div>
      </div>
    </div>
  </div>
</div>