<?php
try{
    $host = "192.168.0.3";
    $bdname = "loginSystem";
    $user = "root";
    $password = "root";
    
    $conn = new PDO('mysql:host='.$host.';bdname='.$bdname, $user, $password);
    
}catch(PDOException $e){
    echo "<strong>ERRO no PDO</strong>" . $e;
}
?>
