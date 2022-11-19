<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

//echo "$usuario - $senha";

if($senha == 123){
    echo "Senha correta";
}
else{
    echo "Senha incorreta";
}
?>