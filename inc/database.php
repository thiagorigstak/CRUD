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

function closedb(){
    try{
        $dbh = null;
    }catch(Exception $e){
        echo $e->getMessage();
    }
}

?>