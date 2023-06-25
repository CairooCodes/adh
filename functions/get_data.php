<?php 

function getCursos(){
    global $DB_con;
    $stmt = $DB_con->prepare("SELECT * FROM products");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>