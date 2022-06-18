<?php require_once 'config.php'; ?>
<?php require_once DBapi; ?>

<?php
    $db = opendb();

    if($db){
        echo '<h1>Banco De Dados Conectado!</h1>';
    } else {
        echo '<h1>Não foi possivel conectar ao Banco!</h1>';
    }
    $db = closedb();
?>