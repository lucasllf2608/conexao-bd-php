<?php 


$bdServidor = '127.0.0.1';
$username = 'root';
$password = '';
$bdBanco = 'crud';

try {
    $connection = new PDO('mysql:host=localhost;dbname=crud', $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "foi";

} catch (PDOException $e) {
    echo 'ERRO: '.$e->getMessage();
}

?>