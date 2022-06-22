<?php 
function opendb(){
    $host = db_host;
    $name = db_name;
    try{
        $dbh = new PDO("pgsql:host=$host;dbname=$name", db_user, db_password);
        return $dbh;
    }catch(PDOException $e){
        print "Erro!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function closedb($dbh){
    try{
        $dbh = null;
    }catch(Exception $e){
        echo $e->getMessage();
    }
}

function find($table = "customers", $id = null){
    $db = opendb();
    $found = null;
    try{
        if($id){
            $sql = 'SELECT * FROM ' . $table . ' WHERE id = ' . $id; // testar sql inject
            $result = $db->prepare($sql);
            $result->execute();
            if($result->rowCount() > 0){
                $found = $result->fetch();
            } 
        } else {
            $sql = "SELECT * FROM " . $table;
	          $result = $db->prepare($sql);
            $result->execute();
	    
	        if ($result->rowCount() > 0) {
	            $found = $result->fetchAll();
            }
        }
        // print_r($found);
    } catch(Exception $e){
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }
    closedb($db);
    return $found;
}

function find_all($table){
    return find($table);
}
        /* Metodo alternativo
        $found = array();
        while ($row = $result->fetch_assoc()) {
          array_push($found, $row);
        } */

function save($table = null, $data = null){
    $database = opendb();
    $coluna = null;
    $values = null;
    //print_r($data);
    foreach($data as $key => $value){
        $coluna .= trim($key,"'") . ",";
        $values .= "'$value',";
    }
    // remove a ultima virgula
    $coluna = rtrim($coluna, ',');
    $values = rtrim($values, ',');
    $sql = "INSERT INTO " . $table ." ($coluna)" . " VALUES" . "($values);";
    try {
        $database->query($sql);
    } catch (Exception $e) { 
      closedb($database);  
      echo $e;
    } 

    closedb($database);
}

function edit(){
    $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

  if (isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);

    if (isset($_POST['customer'])) {

      $customer = $_POST['customer'];
      $customer['modified'] = $now->format("Y-m-d H:i:s");

      update('customers', $id, $customer);
      header('location: index.php');
    } else {

      global $customer;
      $customer = find('customers', $id);
    } 
  } else {
    header('location: index.php');
  }
}
  /**
   *  Atualiza um registro em uma tabela, por ID
   */
  function update($table = null, $id = 0, $data = null) {
  
    $database = opendb();
  
    $items = null;
  
    foreach ($data as $key => $value) {
      $items .= trim($key, "'") . "='$value',";
    }
  
    // remove a ultima virgula
    $items = rtrim($items, ',');
  
    $sql  = "UPDATE " . $table;
    $sql .= " SET $items";
    $sql .= " WHERE id=" . $id . ";";
  
    try {
      $database->query($sql);
    } catch (Exception $e) { 
      echo $e;
    } 
  
    closedb($database);
  }

  function remove( $table = null, $id = null ) {

    $database = opendb();
    
    try {
      if ($id) {
  
        $sql = "DELETE FROM " . $table . " WHERE id = " . $id;
        $result = $database->query($sql);
  
        if ($result = $database->query($sql)) {   	
          $_SESSION['message'] = "Registro Removido com Sucesso.";
          $_SESSION['type'] = 'success';
        }
      }
    } catch (Exception $e) { 
  
      $_SESSION['message'] = $e->GetMessage();
      $_SESSION['type'] = 'danger';
    }
  
    closedb($database);
  }
  
?>