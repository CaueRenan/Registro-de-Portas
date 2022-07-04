<?php 
include_once("conexão.php");

if(isset($_POST['update'])){

    $codigos = $_POST["codigos"];
    $descricao = $_POST["descricao"];

    $result = "UPDATE produtos SET codigos='$codigos', descricao='$descricao' WHERE codigos='$codigos'";

    $conc = $conexao->query($result);
}
header('Location:Página-Principal.html')
?>