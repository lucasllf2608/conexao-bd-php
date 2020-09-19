<?php 

$URI = mysqli_connect("127.0.0.1","root","","crud");

if(!$URI){
    echo "falhou";
    exit;
}

echo "Conectado com sucesso !";

?>