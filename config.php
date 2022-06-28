<?php
/* Nome DB */
define('db_name', 'postgres');
/* Nome Usuario */
define('db_user', 'postgres');
/* Senha DB */
define('db_password', 'CBR123'); //root
/* Host DB */
define('db_host', 'localhost');

/* Camino para a pasta do sistema */
if (!defined('Path'))
    define('Path', dirname(__FILE__) . '/');
/* caminho no servidor para o sistema */
if (!defined('BaseURL'))
    define('BaseURL', '/CRUD/');
/* Caminho do arquivo BD */
if (!defined('DBapi'))
    define('DBapi', Path . 'inc/database.php');
/* Template path */
define('HEADER_TEMPLATE', Path . 'inc/header.php');  //topo da pagina
define('FOOTER_TEMPLATE', Path . 'inc/footer.php'); // final da pagina
