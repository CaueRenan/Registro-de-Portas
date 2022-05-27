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

    $inputferragens = $_POST["inputferragens"];
    $codferragens = $_POST["codferragens"];
    $cilindroP = $_POST["cilindroP"];
    $codcilindroP = $_POST["codcilindroP"];
    $cilindroS = $_POST["cilindroS"];
    $codcilindroS = $_POST["codcilindroS"];

    $servico = $_POST["servico"];
    $numero = $_POST["numero"];
    $obsmk = $_POST["obsmk"];

    $inputolho = $_POST["inputolho"];
    $altolho = $_POST["altolho"];
    $codolho = $_POST["codolho"];
    $inputfechadurad = $_POST["inputfechadurad"];
    $codfechadurad = $_POST["codfechadurad"];
    $inputbarra = $_POST["inputbarra"];
    $codbarra = $_POST["codbarra"];
    $coluna = $_POST["coluna"];
    $manuall = $_POST["manuall"];
    $codmanuall = $_POST["codmanuall"];

    $inputentr = $_POST["inputentr"];
    $codentr = $_POST["codentr"];
    $inputcalco = $_POST["inputcalco"];
    $codcalco = $_POST["codcalco"];
    $inputbiometria = $_POST["inputbiometria"];
    $codbiometria = $_POST["codbiometria"];
    $digital = $_POST["digital"];
    $coddigital = $_POST["coddigital"];


    $perfil = $_POST["perfil"];
    $capadobri = $_POST["capadobri"];
    $codcapadobri = $_POST["codcapadobri"];
    $dobradica = $_POST["dobradica"];
    $coddobradica = $_POST["coddobradica"];
    $borracha = $_POST["borracha"];
    $codborracha = $_POST["codborracha"];

    $tipoem = $_POST["tipoem"];
    $codtipoem = $_POST["codtipoem"];


    $lag_bat = $_POST["lag_bat"];
    $tip_bat = $_POST["tip_bat"];

    $obs = $_POST["obs"];

    $up1 = "UPDATE registros SET nome_cliente='$nome_cliente', talao='$talao', microsiga='$microsiga', data_entrada='$data_entrada',
    data_previsao='$data_previsao', modelo='$modelo', largura='$largura', altura='$altura', lado='$lado', sentido='$sentido', acabint='$acabint',
    acabext='$acabext', inputferragens='$inputferragens', cilindroP='$cilindroP', cilindroS='$cilindroS', servico='$servico', numero='$numero', obsmk='$obsmk',
    inputolho='$inputolho', inputfechadurad='$inputfechadurad', inputbarra='$inputbarra', coluna='$coluna', manuall='$manuall', inputentr='$inputentr', inputcalco='$inputcalco', inputbiometria='$inputbiometria',
    digital='$digital', perfil='$perfil', capadobri='$capadobri', dobradica='$dobradica', borracha='$borracha', tipoem='$tipoem', lag_bat='$lag_bat', tip_bat='$tip_bat', obs='$obs'
    WHERE talao='$id' ";

    $result1 = $conexao->query($up1);

    
    if($up1 == true){
        $up2 = "UPDATE codigos SET codferragens='$codferragens', codcilindroP='$codcilindroP', codcilindroS='$codcilindroS', codolho='$codolho',
        codfechadurad='$codfechadurad', codbarra='$codbarra', codmanuall='$codmanuall', codentr='$codentr', codcalco='$codcalco', codbiometria='$codbiometria',
        coddigital='$coddigital', codcapadobri='$codcapadobri', coddobradica='$coddobradica', codborracha='$codborracha', codtipoem='$codtipoem' ";

        $result2 = $conexao->query($up2);
    }

}
    header('Location:Pesquisa.php');
?>