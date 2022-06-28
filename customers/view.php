<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Cliente <?php echo $customer['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome / Razão Social:</dt>
	<dd><?php echo $customer['nome']; ?></dd>

	<dt>CPF / CNPJ:</dt>
	<dd><?php echo $customer['cpf']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Telefone:</dt>
	<dd><?php echo $customer['telefone']; ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
		<a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#edit-modal" data-json='<?php echo str_replace("/","",json_encode($customer)); ?>'><i class="fa fa-pencil"></i> Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>
<?php include"editmodal.php"; 	?>
<?php include(FOOTER_TEMPLATE); ?>