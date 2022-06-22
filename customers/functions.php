<?php
require_once('../config.php');
require_once(DBapi);
$customer = null;
$customers = null;

/* client listing */
function index() {
    global $customers;
    $customers = find_all('customers');
}

function add() {
    if (!empty($_POST['customer'])) {
      $today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  
      $customer = $_POST['customer'];
      $customer['modified'] = $today->format("Y-m-d H:i:s");
      save('customers', $customer);
      header('location: index.php');
    }
}
function view($id = null) {
    global $customer;
    $customer = find('customers', $id);
}

function deleta($id = null){
    global $customer;
    $customer = remove('customers', $id);

    header('location: index.php');
}
?>