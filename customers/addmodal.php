<h2>Novo Cliente</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="col">
    <div class="form-group col-md-12">
      <label for="name">Nome / Razão Social</label>
      <input type="text" class="form-control" minlength="3" maxlength="50" name="customer['nome']">
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">CNPJ / CPF</label>
      <input type="text" class="form-control" minlength="11" maxlength="11" name="customer['cpf']">
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">Telefone</label>
      <input type="text" class="form-control" maxlength="11" name="customer['telefone']">
    </div>

    <div id="actions" class="row">
      <div class='float-end'>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <button type="reset" class="btn btn-default" data-bs-dismiss="modal">Cancelar</button>
      </div>
    </div>
</form>
<?php add(); // colocar acima do form faz com que os dados não sejam enviados
?>