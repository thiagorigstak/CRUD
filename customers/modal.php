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
  <div id="add-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Adicionar Cliente </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal">
          </button>
        </div>
        <div class="alert alert-warning d-none" id="validationcpf">preencha o CPF corretamente</div>
        <form id="add" action="" method="POST">

          <div class="modal-body">
            <div class="form-group">
              <label> Nome </label>
              <input required type="text" name="nome" id="nome" maxlength="50" class="form-control">
            </div>

            <div class="form-group">
              <label> CPF </label>
              <input required type="text" name="cpf" id="cpf" maxlength="11" minlength="11" class="form-control">
            </div>

            <div class="form-group">
              <label> telefone </label>
              <input type="text" name="telefone" id="telefone" maxlength="11" minlength="11" class="form-control">
            </div>
            <input type="hidden" class="form-control" name="modified" id="modified">
          </div>
          </input>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            <button type="submit" name="create" id="createdata" class="btn btn-primary">criar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  window.jQuery || document.write('<script src="<?php echo BaseURL; ?>js/jquery-3.6.0.min.js"><\/script>')
</script>
<script src="../js/jquery-3.6.0.js"></script>
<script>
  $("#add-modal").on("submit", "#add", function(evento) {
    evento.preventDefault();
    var cpf = $("#cpf").val();
    var nome = $("#nome").val();
    var telefone = $("#telefone").val();
    var jsondata = {
      "data": {
        nome,
        telefone,
        cpf,
        modified: ''
      }
    };


    console.log(JSON.stringify(jsondata));

    //alert(cpf);
    if (!isNaN(cpf)) {
      $.ajax({
        data: jsondata,
        type: "POST",
        url: "addmodal.php",
        success: function(dataResult) {
          console.log(dataResult);
          var dataResult = JSON.parse(dataResult);
          if (dataResult.statusCode == 200) {
            $('#add-modal').modal('hide');
            alert('Data added successfully !');
            location.reload();
          } else {
            alert("erro", dataResult);
          }
        },
        error: function(erro) {
          console.log(erro);
        }
      });
    } else {
      evento.preventDefault();
      $("#validationcpf").removeClass("d-none")
    }

    //evento.preventDefault();
    //alert("data update succesfully!");
  });
</script>