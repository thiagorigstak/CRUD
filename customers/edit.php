<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Cliente</h2>

<form action="edit.php?id=<?php echo $customer['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome / Razão Social</label>
      <input type="text" class="form-control" name="customer['nome']" value="<?php echo $customer['nome']; ?>">
    </div>
    <div class="form-group col-md-3">
      <label for="campo2">CNPJ / CPF</label>
      <input type="text" class="form-control" name="customer['cpf']" value="<?php echo $customer['cpf']; ?>">
    </div>
    <div class="form-group col-md-2">
      <label for="campo2">Telefone</label>
      <input type="text" class="form-control" name="customer['telefone']" value="<?php echo $customer['telefone']; ?>">
    </div>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>