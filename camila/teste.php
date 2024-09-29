<?php
include('conexao.php');
if($conexao){
    echo("conexao com sucesso");
}else{
    echo("nao foi possivel conectar");
}
?>