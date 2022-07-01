<?php
require_once('functions.php');
$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
$customer = $_POST['data'];
$customer['modified'] = $today->format("Y-m-d H:i:s");
save('customers', $customer);
