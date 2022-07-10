<?php
include_once('conexão.php');

if(isset($_POST["update"])){

    $id = $_POST["id"];

    $talao = $_POST["talao"];
    $microsiga = $_POST["microsiga"];
    $nome_cliente = $_POST["nome_cliente"];
    $data_entrada = $_POST["data_entrada"];
    $data_previsao = $_POST["data_previsao"];

    $modelo = $_POST["modelo"];
    $largura = $_POST["largura"];
    $altura = $_POST["altura"];
    $lado = $_POST["lado"];
    $sentido = $_POST["sentido"];

    $codacabint = $_POST["codacabint"];
    $acabint = $_POST["acabint"];
    $codacabext = $_POST["codacabext"];
    $acabext = $_POST["acabext"];

    $codferragens = $_POST["codferragens"];
    $inputferragens = $_POST["inputferragens"];
    $codcilindroP = $_POST["codcilindroP"];
    $cilindroP = $_POST["cilindroP"];
    $codcilindroS = $_POST["codcilindroS"];
    $cilindroS = $_POST["cilindroS"];

    $servico = $_POST["servico"];
    $numero = $_POST["numero"];
    $obsmk = $_POST["obsmk"];

    $codolho = $_POST["codolho"];
    $inputolho = $_POST["inputolho"];
    $altolho = $_POST["altolho"];
    $codfechadurad = $_POST["codfechadurad"];
    $inputfechadurad = $_POST["inputfechadurad"];
    $codbarra = $_POST["codbarra"];
    $inputbarra = $_POST["inputbarra"];
    $coluna = $_POST["coluna"];
    $codmanuall = $_POST["codmanuall"];
    $manuall = $_POST["manuall"];

    $codentr = $_POST["codentr"];
    $inputentr = $_POST["inputentr"];
    $codcalco = $_POST["codcalco"];
    $inputcalco = $_POST["inputcalco"];
    $codbiometria = $_POST["codbiometria"];
    $inputbiometria = $_POST["inputbiometria"];
    $coddigital = $_POST["coddigital"];
    $digital = $_POST["digital"];


    $perfil = $_POST["perfil"];
    $codcapadobri = $_POST["codcapadobri"];
    $capadobri = $_POST["capadobri"];
    $coddobradica = $_POST["coddobradica"];
    $dobradica = $_POST["dobradica"];
    $codborracha = $_POST["codborracha"];
    $borracha = $_POST["borracha"];

    $tipoem = $_POST["tipoem"];
    $codcamad = $_POST["codcamad"];
    $camad = $_POST["camad"];


    $lag_bat = $_POST["lag_bat"];
    $tip_bat = $_POST["tip_bat"];
    $corbat = $_POST["corbat"];

    $obs = $_POST["obs"];
    
    $resultado = "UPDATE registros SET talao='$talao', microsiga='$microsiga', nome_cliente='$nome_cliente',
    data_entrada='$data_entrada', data_previsao='$data_previsao', modelo='$modelo', largura='$largura', altura='$altura', lado='$lado',
    sentido='$sentido', codacabint='$codacabint', acabint='$acabint', codacabext='$codacabext', acabext='$acabext',
    codferragens='$codferragens', inputferragens='$inputferragens', codcilindroP='$codcilindroP', cilindroP='$cilindroP',
    codcilindroS='$codcilindroS', cilindroS='$cilindroS', servico='$servico', numero='$numero',
    obsmk='$obsmk', codolho='$codolho', inputolho='$inputolho', altolho='$altolho', codfechadurad='$codfechadurad',
    inputfechadurad='$inputfechadurad', codbarra='$codbarra', inputbarra='$inputbarra', coluna='$coluna', codmanuall='$codmanuall',
    manuall='$manuall',codentr='$codentr',inputentr='$inputentr',codcalco='$codcalco',
    inputcalco='$inputcalco', codbiometria='$codbiometria', inputbiometria='$inputbiometria', coddigital='$coddigital',
    digital='$digital', perfil='$perfil', codcapadobri='$codcapadobri', capadobri='$capadobri', coddobradica='$coddobradica',
    dobradica='$dobradica', codborracha='$codborracha', borracha='$borracha', tipoem='$tipoem', codcamad='$codcamad',
    camad='$camad', lag_bat='$lag_bat', tip_bat='$tip_bat', corbat='$corbat', obs='$obs' WHERE talao='$id' ";

    $conc = $conexao->query($resultado);
    
}
    header('Location:Cadastro.php');
?>