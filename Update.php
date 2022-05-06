<?php
include_once('conexão.php');

if(isset($_POST['update'])){

    $id = $_POST["id"];
    $nome_cliente = $_POST["nome_cliente"];
    $talao = $_POST["talao"];
    $microsiga = $_POST["microsiga"];
    $data_entrada = $_POST["data_entrada"];
    $data_previsao = $_POST["data_previsao"];

    $modelo = $_POST["modelo"];
    $largura = $_POST["largura"];
    $altura = $_POST["altura"];
    $lado = $_POST["lado"];
    $sentido = $_POST["sentido"];

    $acabint = $_POST["acabint"];
    $acabext = $_POST["acabext"];

    $ferragens = $_POST["ferragens"];
    $cilindroP = $_POST["cilindroP"];
    $cilindroS = $_POST["cilindroS"];

    $servico = $_POST["servico"];
    $numero = $_POST["numero"];
    $obsmk = $_POST["obsmk"];

    $olho = $_POST["olho"];
    $fechadurad = $_POST["fechadurad"];
    $barra = $_POST["barra"];
    $coluna = $_POST["coluna"];
    $manuall = $_POST["manuall"];

    $entr = $_POST["entr"];
    $calco = $_POST["calco"];
    $biometria = $_POST["biometria"];
    $digital = $_POST["digital"];

    $perfil = $_POST["perfil"];
    $capadobri = $_POST["capadobri"];
    $borracha = $_POST["borracha"];

    $tipoem = $_POST["tipoem"];
    $tamem = $_POST["tamem"];

    $lag_bat = $_POST["lag_bat"];

    $obs = $_POST["obs"];

    $up = "UPDATE registros SET nome_cliente='$nome_cliente', talao='$talao', microsiga='$microsiga', data_entrada='$data_entrada',
    data_previsao='$data_previsao', modelo='$modelo', largura='$largura', altura='$altura', lado='$lado', sentido='$sentido', acabint='$acabint',
    acabext='$acabext', ferragens='$ferragens', cilindroP='$cilindroP', cilindroS='$cilindroS', servico='$servico', numero='$numero', obsmk='$obsmk',
    olho='$olho', fechadurad='$fechadurad', barra='$barra', coluna='$coluna', manuall='$manuall', entr='$entr', calco='$calco', biometria='$biometria',
    digital='$digital', perfil='$perfil', capadobri='$capadobri', borracha='$borracha', tipoem='$tipoem', tamem='$tamem', lag_bat='$lag_bat', obs='$obs'
    WHERE talao='$id' ";

    $result = $conexao->query($up);
}
    header('Location:Pesquisa.php');
?>