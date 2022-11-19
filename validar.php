<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

//echo "$usuario - $senha";

if($senha == 123 && $usuario == 'emerson'){
    header('location: painel.php');
}
else{
    header('location: usuario-invalido.php');
}
?>