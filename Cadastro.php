<?php
include_once("conexão.php");

$mod = "SELECT * FROM produtos WHERE categoria = 'MODELO' ";
$acab = "SELECT * FROM produtos WHERE categoria = 'ACABAMENTO' ";
$fer = "SELECT * FROM produtos WHERE categoria = 'FERRAGENS' ";
$cil = "SELECT * FROM produtos WHERE categoria = 'CILINDROS' ";
$om = "SELECT * FROM produtos WHERE categoria = 'OLHO MÁGICO' ";
$fa = "SELECT * FROM produtos WHERE categoria = 'FECHADURA ADICIONAL' ";
$fe = "SELECT * FROM produtos WHERE categoria = 'FECHADURA ENTR' ";
$lb = "SELECT * FROM produtos WHERE categoria = 'LEITOR BIOMETRICO' ";
$tg = "SELECT * FROM produtos WHERE categoria = 'TECLADO DIGITAL' ";
$cal = "SELECT * FROM produtos WHERE categoria = 'CALÇO' ";
$ba = "SELECT * FROM produtos WHERE categoria = 'BARRA ANTIPANICO' ";
$cd = "SELECT * FROM produtos WHERE categoria = 'CAPA DA DOBRADIÇA' ";
$bor = "SELECT * FROM produtos WHERE categoria = 'BORRACHA' ";

$conecmod = $conexao->query($mod);
$conecacab = $conexao->query($acab);
$conecfer = $conexao->query($fer);
$coneccil = $conexao->query($cil);
$conecom = $conexao->query($om);
$conecfa = $conexao->query($fa);
$conecfe = $conexao->query($fe);
$coneclb = $conexao->query($lb);
$conectg = $conexao->query($tg);
$coneccal = $conexao->query($cal);
$conecba = $conexao->query($ba);
$coneccd = $conexao->query($cd);
$conecbor = $conexao->query($bor);


if(isset($_POST['submit']))
{

    include_once("conexão.php");

    $talao = $_POST["talao"];
    $nome_cliente = $_POST["nome_cliente"];
    $microsiga = $_POST["microsiga"];
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

    $resultado = mysqli_query($conexao, "INSERT INTO registros (talao,microsiga,nome_cliente,data_entrada,data_previsao,modelo,largura,altura,
    lado,sentido,codacabint,acabint,codacabext,acabext,codferragens,inputferragens,codcilindroP,cilindroP,codcilindroS,cilindroS,servico,numero,
    obsmk,codolho,inputolho,altolho,codfechadurad,inputfechadurad,codbarra,inputbarra,coluna,codmanuall,manuall,codentr,inputentr,codcalco,
    inputcalco,codbiometria,inputbiometria,coddigital,digital,perfil,codcapadobri,capadobri,coddobradica,dobradica,codborracha,borracha,
    tipoem,codcamad,camad,lag_bat,tip_bat,corbat,obs) VALUES('$talao','$microsiga','$nome_cliente','$data_entrada','$data_previsao','$modelo',
    '$largura','$altura','$lado','$sentido','$codacabint','$acabint','$codacabext','$acabext','$codferragens','$inputferragens','$codcilindroP',
    '$cilindroP','$codcilindroS','$cilindroS','$servico','$numero','$obsmk','$codolho','$inputolho','$altolho','$codfechadurad',
    '$inputfechadurad','$codbarra','$inputbarra','$coluna','$codmanuall','$manuall','$codentr','$inputentr','$codcalco','$inputcalco',
    '$codbiometria','$inputbiometria','$coddigital','$digital','$perfil','$codcapadobri','$capadobri','$coddobradica','$dobradica',
    '$codborracha','$borracha','$tipoem','$codcamad','$camad','$lag_bat','$tip_bat','$corbat','$obs')");

}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <script>
        function script(){
            var modelo = document.getElementById("modelo")
            var dobradica = document.getElementById("dobradica")
            var coddobradica = document.getElementById("coddobradica")
            var manuall = document.getElementById("manuall")
            var codmanuall = document.getElementById("codmanuall")

            var inputferragens = document.getElementById("inputferragens")
            var codferragens = document.getElementById("codferragens")

            var cilindroP = document.getElementById("cilindroP")
            var codcilindroP = document.getElementById("codcilindroP")

            var cilindroS = document.getElementById("cilindroS")
            var codcilindroS = document.getElementById("codcilindroS")

            var inputolho = document.getElementById("inputolho")
            var codolho = document.getElementById("codolho")
            var altolho = document.getElementById("altolho")

            var inputfechadurad = document.getElementById("inputfechadurad")
            var codfechadurad = document.getElementById("codfechadurad")

            var inputbarra = document.getElementById("inputbarra")
            var codbarra = document.getElementById("codbarra")

            var inputentr = document.getElementById("inputentr")
            var codentr = document.getElementById("codentr")
            var inputcalco = document.getElementById("inputcalco")
            var codcalco = document.getElementById("codcalco")
            var inputbiometria = document.getElementById("inputbiometria")
            var codbiometria = document.getElementById("codbiometria")
            var digital = document.getElementById("digital")
            var coddigital = document.getElementById("coddigital")

            var capadobri = document.getElementById("capadobri")
            var codcapadobri = document.getElementById("codcapadobri")

            var borracha = document.getElementById("borracha")
            var codborracha = document.getElementById("codborracha")

            var tipoem = document.getElementById("tipoem")
            var camad = document.getElementById("camad")

            var altura = document.getElementById("altura")
            var lado = document.getElementById("lado")
            var acabint = document.getElementById("acabint")
            var acabext = document.getElementById("acabext")
            var laterais = document.getElementById("laterais")
            var batlad = document.getElementById("batlad")
            var tip_bat = document.getElementById("tip_bat")

            var servico = document.getElementById("servico")
            var qtdk = document.getElementById("qtdk")
            var obsmk = document.getElementById("obsmk")




            if(modelo.value == "463"){
                dobradica.setAttribute("value","KIT DOBRADIÇA COM BOLT CR P/463 CN")
                coddobradica.setAttribute("value", "050406")
                manuall.setAttribute("value", "MANUAL DE INSTALAÇÃO DA PORTA 463 E-COMMERCE")
                codmanuall.setAttribute("value", "021562")

            }else if(modelo.value == ""){
                dobradica.setAttribute("value","")
                coddobradica.setAttribute("value", "")
                manuall.setAttribute("value", "")
                codmanuall.setAttribute("value", "")

            }else if(modelo.value != "463") {
                dobradica.setAttribute("value","KIT DOBRADICA  ABERTURA P/ FORA CN")
                coddobradica.setAttribute("value", "050433")
                manuall.setAttribute("value", "MANUAL DE INSTALAÇÃO DA PORTA")
                codmanuall.setAttribute("value", "021597")

            }

            if(inputferragens.value == "PUXADOR" || inputferragens.value == ""){
                codferragens.setAttribute("value", "")

            } else if (inputferragens.value == "FECHADURA PLASTICA"){
                codferragens.setAttribute("value", "021590")

            }  else if (inputferragens.value == "KIT FERRAGENS CR MxF"){
                codferragens.setAttribute("value", "021435")
                
            }  else if (inputferragens.value == "KIT FERRAGENS CR MxM"){
                codferragens.setAttribute("value", "021434")
                
            }  else if (inputferragens.value == "KIT ESPELHO TELEFONIA"){
                codferragens.setAttribute("value", "021370")
                
            }

            if(cilindroP.value == ""){
                codcilindroP.setAttribute("value", "")
                servico.setAttribute("value", "")
                qtdk.setAttribute("value", "")

            } else if (cilindroP.value == "CIL 76 P.113"){
                codcilindroP.setAttribute("value", "051145")
                servico.setAttribute("value", "MESTRAGEM")
                qtdk.setAttribute("value", "")


            }  else if (cilindroP.value == "CIL 76 P.586E COM 3 CHAVES"){
                codcilindroP.setAttribute("value", "051876")
                servico.setAttribute("value", "CARTÃO")
                qtdk.setAttribute("value", "3")
                
            }  else if (cilindroP.value == "CIL 76 P.236S COM 5 CHAVES"){
                codcilindroP.setAttribute("value", "050196")
                servico.setAttribute("value", "CARTÃO")
                qtdk.setAttribute("value", "5")
                
            }  else if (cilindroP.value == "CIL 81 P.236S COM 5 CHAVES"){
                codcilindroP.setAttribute("value", "050232")
                servico.setAttribute("value", "CARTÃO")
                qtdk.setAttribute("value", "5")
                
            }  else if (cilindroP.value == "CIL ENTR 70 P.236S COM 1 CHAVE"){
                codcilindroP.setAttribute("value", "051262")
                servico.setAttribute("value", "CARTÃO")
                qtdk.setAttribute("value", "1")
                
            }  else if (cilindroP.value == "CIL ENTR 73 P.236S COM 1 CHAVE"){
                codcilindroP.setAttribute("value", "051263")
                servico.setAttribute("value", "CARTÃO")
                qtdk.setAttribute("value", "1")
                
            }

            if(cilindroS.value == ""){
                codcilindroS.setAttribute("value", "")

            } else if (cilindroS.value == "CIL 76 P.113"){
                codcilindroS.setAttribute("value", "051145")

            }  else if (cilindroS.value == "CIL 76 P.586E COM 3 CHAVES"){
                codcilindroS.setAttribute("value", "051876")
                
            }  else if (cilindroS.value == "CIL 76 P.236S COM 5 CHAVES"){
                codcilindroS.setAttribute("value", "050196")
                
            }  else if (cilindroS.value == "CIL 81 P.236S COM 5 CHAVES"){
                codcilindroS.setAttribute("value", "050232")
                
            }  else if (cilindroS.value == "CIL ENTR 70 P.236S COM 1 CHAVE"){
                codcilindroS.setAttribute("value", "051262")
                
            }  else if (cilindroS.value == "CIL ENTR 73 P.236S COM 1 CHAVE"){
                codcilindroS.setAttribute("value", "051263")
                
            }

            if(inputolho.value == ""){
                codolho.setAttribute("value", "")
                altolho.setAttribute("value","")

            } else if (inputolho.value == "OLHO MAGICO CR"){
                codolho.setAttribute("value", "021392")
                altolho.setAttribute("value","1500mm")


            }  else if (inputolho.value == "OLHO MAGICO LP"){
                codolho.setAttribute("value", "021390")
                altolho.setAttribute("value","1500mm")
                
            }

            if(inputfechadurad.value == ""){
                codfechadurad.setAttribute("value", "")

            } else if (inputfechadurad.value == "FECHADURA TRI-LOCK S/CILINDRO"){
                codfechadurad.setAttribute("value", "FE0388")

            }  else if (inputfechadurad.value == "FECHADURA M70"){
                codfechadurad.setAttribute("value", "FE0564")
                
            }

            if(inputbarra.value == ""){
                codbarra.setAttribute("value", "")

            } else if (inputbarra.value == "BARRA ANTIPANICO DORMA"){
                codbarra.setAttribute("value", "026259")

            }  else if (inputbarra.value == "BARRA ANTIPANICO TEKIN"){
                codbarra.setAttribute("value", "025782")
                
            }

            if(inputentr.value == ""){
                codentr.setAttribute("value", "")

            } else if (inputentr.value == "BRANCO"){
                codentr.setAttribute("value", "FE0758")

            }  else if (inputentr.value == "PRETA"){
                codentr.setAttribute("value", "FE0969")
                
            }

            if(inputcalco.value == ""){
                codcalco.setAttribute("value", "")

            } else if (inputcalco.value == "CALÇO DE 01 a 03mm"){
                codcalco.setAttribute("value", "FE0823")

            }  else if (inputcalco.value == "CALÇO DE 04 a 08mm"){
                codcalco.setAttribute("value", "FE0824")
                
            }  else if (inputcalco.value == "CALÇO DE 09 a 12mm"){
                codcalco.setAttribute("value", "FE0825")
                
            }

            if(inputbiometria.value == ""){
                codbiometria.setAttribute("value", "")

            } else if (inputbiometria.value == "LEITOR BIOMETRICO"){
                codbiometria.setAttribute("value", "FE0759")

            }

            if(digital.value == ""){
                coddigital.setAttribute("value", "")

            } else if (digital.value == "LEITOR DIGITAL"){
                coddigital.setAttribute("value", "FE0760")

            }

            if(capadobri.value == ""){
                codcapadobri.setAttribute("value", "")

            } else if (capadobri.value == "BRANCO"){
                codcapadobri.setAttribute("value", "021424")

            }  else if (capadobri.value == "MARROM"){
                codcapadobri.setAttribute("value", "021425")
                
            }

            if(borracha.value == ""){
                codborracha.setAttribute("value", "")

            } else if (borracha.value == "BRANCO"){
                codborracha.setAttribute("value", "021360")

            }  else if (borracha.value == "CINZA"){
                codborracha.setAttribute("value", "021362")
                
            }  else if (borracha.value == "MARROM"){
                codborracha.setAttribute("value", "021361")
                
            }

            if(tipoem.value == "" || tipoem.value == "MANTA"){
                codtipoem.setAttribute("value", "")

            } else if (tipoem.value == "CAIXA DE MADEIRA 250x1230X2250"){
                codtipoem.setAttribute("value", "030085")

            }  else if (tipoem.value == "CAIXA DE MADEIRA 250x1550X2250"){
                codtipoem.setAttribute("value", "030086")
                
            }

            if(laterais.value !== null){
                laterais.setAttribute("value", altura.value)

            } else {
                laterais.setAttribute("value", "")
            }

            if(lado.value == "DIREITA"){
                batlad.setAttribute("value", "DIREITA")

            }else if(lado.value == "ESQUERDA"){
                batlad.setAttribute("value", "ESQUERDA")

            }else {
                batlad.setAttribute("value", "")
            }

            if((acabint.value == "AÇO" || acabint.value == "PVC BRANCO" || acabint.value == "PVC CINZA") && (acabext.value == "AÇO" ||
            acabext.value == "PVC BRANCO" || acabext.value == "PVC CINZA")){
                tip_bat.setAttribute("value", "NORMAL")

            }else if((acabint.value == "MDF CRÚ" || acabint.value == "PREPARADO P/PINTURA" || acabint.value == "FORMICA TX NOGAL" ||
            acabint.value == "CURROPIXÁ") && (acabext.value == "MDF CRÚ" || acabext.value == "PREPARADO P/PINTURA" || 
            acabext.value == "FORMICA TX NOGAL" || acabext.value == "CURROPIXÁ")){
                tip_bat.setAttribute("value", "PROFUNDO")

            }else if(acabint.value == null && acabext.value == null){
                tip_bat.setAttribute("value", "")

            } else {
                tip_bat.setAttribute("value", "")
                
            }

            if((modelo.value == "Telefonia" || modelo.value == "TelAlvenaria" || modelo.value == "463" || modelo.value == "465" ||
            modelo.value == "467" || modelo.value == "468") && (acabint.value == "AÇO" || acabint.value == "PVC BRANCO" ||
            acabint.value == "PVC CINZA") && (acabext.value == "AÇO" || acabext.value == "PVC BRANCO" ||acabext.value == "PVC CINZA") && 
            (inputentr.value == "BRANCO" || inputentr.value == "PRETA")){
                cilindroP.setAttribute("value", "CIL ENTR 70 P.236S COM 1 CHAVE")

            } else if((modelo.value == "467" || modelo.value == "468" || modelo.value == "469" || modelo.value == "470" ||
            modelo.value == "470" || modelo.value == "471" || modelo.value == "472") && (acabint.value == "MDF CRÚ" || acabint.value == "PREPARADO P/PINTURA" ||
            acabint.value == "FORMICA TX NOGAL" || acabint.value == "CURROPIXÁ") && (acabext.value == "MDF CRÚ" || 
            acabext.value == "PREPARADO P/PINTURA" || acabext.value == "FORMICA TX NOGAL" || acabext.value == "CURROPIXÁ") &&
            (inputentr.value == "BRANCO" || inputentr.value == "PRETA")){
                cilindroP.setAttribute("value", "CIL ENTR 73 P.236S COM 1 CHAVE")

            } else if((modelo.value == "Telefonia" || modelo.value == "TelAlvenaria" || modelo.value == "463" || modelo.value == "465" ||
            modelo.value == "467" || modelo.value == "468") && (acabint.value == "AÇO" || acabint.value == "PVC BRANCO" ||
            acabint.value == "PVC CINZA") && (acabext.value == "AÇO" || acabext.value == "PVC BRANCO" || acabext.value == "PVC CINZA")){
                cilindroP.setAttribute("value", "CIL 76 P.586E COM 3 CHAVES")
            
            } else if((modelo.value == "Telefonia" || modelo.value == "TelAlvenaria" || modelo.value == "463" || modelo.value == "465") &&
            (acabint.value == "MDF CRÚ" || acabint.value == "PREPARADO P/PINTURA" ||
            acabint.value == "FORMICA TX NOGAL" || acabint.value == "CURROPIXÁ") && (acabext.value == "MDF CRÚ" || 
            acabext.value == "PREPARADO P/PINTURA" || acabext.value == "FORMICA TX NOGAL" || acabext.value == "CURROPIXÁ")){
                cilindroP.setAttribute("value", "CIL 76 P.586E COM 3 CHAVES")

            } else if((modelo.value == "467" || modelo.value == "468" || modelo.value == "469" || modelo.value == "470" ||
            modelo.value == "470" || modelo.value == "471" || modelo.value == "472") && (acabint.value == "MDF CRÚ" || acabint.value == "PREPARADO P/PINTURA" ||
            acabint.value == "FORMICA TX NOGAL" || acabint.value == "CURROPIXÁ") && (acabext.value == "MDF CRÚ" || 
            acabext.value == "PREPARADO P/PINTURA" || acabext.value == "FORMICA TX NOGAL" || acabext.value == "CURROPIXÁ")){
                cilindroP.setAttribute("value", "CIL 81 P.236S COM 5 CHAVES")

            } else {
                cilindroP.setAttribute("value", "")

            }

            if((modelo.value == "465" || modelo.value == "467" || modelo.value == "468") && (acabint.value == "PVC BRANCO" ||
            acabint.value == "PVC CINZA") && (acabint.value == "PVC BRANCO" || acabint.value == "PVC CINZA")){
                inputcalco.setAttribute("value", "CALÇO DE 01 a 03mm")

            }else if((modelo.value == "465" || modelo.value == "467" || modelo.value == "468" || modelo.value == "470" || modelo.value == "471" ||
            modelo.value == "472") && (acabint.value == "MDF CRÚ" || acabint.value == "PREPARADO P/PINTURA" ||
            acabint.value == "FORMICA TX NOGAL" || acabint.value == "CURROPIXÁ") && (acabext.value == "MDF CRÚ" || 
            acabext.value == "PREPARADO P/PINTURA" || acabext.value == "FORMICA TX NOGAL" || acabext.value == "CURROPIXÁ")){
                inputcalco.setAttribute("value", "CALÇO DE 04 a 08mm")

            }else if((modelo.value == "463") && (acabint.value == "MDF CRÚ" || acabint.value == "PREPARADO P/PINTURA" ||
            acabint.value == "FORMICA TX NOGAL" || acabint.value == "CURROPIXÁ") && (acabext.value == "MDF CRÚ" || 
            acabext.value == "PREPARADO P/PINTURA" || acabext.value == "FORMICA TX NOGAL" || acabext.value == "CURROPIXÁ")){
                inputcalco.setAttribute("value", "CALÇO DE 09 a 12mm")

            } else {
                inputcalco.setAttribute("value", "")

            }

            if(tipoem.value == "CAIXA DE MADEIRA"){
                camad.disabled = false

            } else {
                camad.disabled = true
            }

        }
    </script>
</head>
<body>
    <datalist id="mod">
    <?php while($dadomod = mysqli_fetch_assoc($conecmod)){ ?>
        <option> <?php echo $dadomod['descricao']?> </option>

    <?php } ?>
    </datalist>

    <datalist id="lag">
        <option>700</option>
        <option>800</option>
        <option>900</option>
        <option>1000</option>
        <option>1080</option>
    </datalist>

    <datalist id="lad">
        <option>DIREITA</option>
        <option>ESQUERDA</option>
    </datalist>

    <datalist id="sent">
        <option>FORA</option>
        <option>DENTRO</option>
    </datalist>


    <datalist id="acabamento">
    <?php while($dadoacab = mysqli_fetch_assoc($conecacab)){ ?>
        <option> <?php echo $dadoacab['descricao']?> </option>

    <?php } ?>
    </datalist>


    <datalist id="ferragens">
    <?php while($dadoferr = mysqli_fetch_assoc($conecfer)){ ?>
        <option> <?php echo $dadoferr['descricao']?> </option>

    <?php } ?>
    </datalist>

    <datalist id="cilindro">
    <?php while($dadocil = mysqli_fetch_assoc($coneccil)){ ?>
        <option> <?php echo $dadocil['descricao']?> </option>

    <?php } ?>
    </datalist>


    <datalist id="mkserv">
        <option>UNIFICAÇÃO</option>
        <option>MESTRAGEM</option>
    </datalist>


    <datalist id="esch">
        <option>Sim</option>
        <option>Não</option>
    </datalist>


    <datalist id="olho">
    <?php while($dadoolho = mysqli_fetch_assoc($conecom)){ ?>
        <option> <?php echo $dadoolho['descricao']?> </option>

    <?php } ?>
    </datalist>


    <datalist id="fechadurad">
    <?php while($dadofech = mysqli_fetch_assoc($conecfa)){ ?>
        <option> <?php echo $dadofech['descricao']?> </option>

    <?php } ?>
    </datalist>

    <datalist id="entr">
    <?php while($dadoentr = mysqli_fetch_assoc($conecfe)){ ?>
        <option> <?php echo $dadoentr['descricao']?> </option>

    <?php } ?>
    </datalist>

    <datalist id="biometria">
    <?php while($dadobio = mysqli_fetch_assoc($coneclb)){ ?>
        <option> <?php echo $dadobio['descricao']?> </option>

    <?php } ?>
    </datalist>

    <datalist id="teclado">
    <?php while($dadotec = mysqli_fetch_assoc($conectg)){ ?>
        <option> <?php echo $dadotec['descricao']?> </option>

    <?php } ?>
    </datalist>

    <datalist id="calco">
    <?php while($dadocal = mysqli_fetch_assoc($coneccal)){ ?>
        <option> <?php echo $dadocal['descricao']?> </option>

    <?php } ?>
    </datalist>

    <datalist id="barra">
    <?php while($dadobar = mysqli_fetch_assoc($conecba)){ ?>
        <option> <?php echo $dadobar['descricao']?> </option>

    <?php } ?>
    </datalist>

    <datalist id="perfil">
        <option>BRANCO</option>
        <option>MARROM</option>
    </datalist>

    <datalist id="capadobr">
    <?php while($dadocapadobr = mysqli_fetch_assoc($coneccd)){ ?>
        <option> <?php echo $dadocapadobr['descricao']?> </option>

    <?php } ?>
    </datalist>

    <datalist id="borracha">
    <?php while($dadoborr = mysqli_fetch_assoc($conecbor)){ ?>
        <option> <?php echo $dadoborr['descricao']?> </option>

    <?php } ?>
    </datalist>

    <datalist id="tipo">
        <option>MANTA</option>
        <option>CAIXA DE MADEIRA</option>
    </datalist>

    <datalist id="lb">
        <option>120</option>
        <option>150</option>
    </datalist>

    <datalist id="hhh">
    <?php while($conftalao = mysqli_fetch_assoc($conecseg)){ ?>
        <option id="tt"><?php echo $conftalao["talao"] ?></option>

    <?php } ?>
    </datalist>


    <form action="Cadastro.php" method="POST">
        <div id="nome">
            <input type="text" placeholder="NOME DO CLIENTE" onchange="script()" name="nome_cliente">
        </div>

        <div id="dados">
            <input type="text" placeholder="TALÃO" name="talao">
            Data de Entrada <input type="date" name="data_entrada"><br>
            <input type="text" placeholder="MICROSIGA" name="microsiga">
            Data de Previsão <input type="date" name="data_previsao">
        </div><hr>

        <div id="medida">
            <u><h3>Medidas</h3></u>
            Modelo <input type="text" autocomplete="off" list="mod" onchange="script()" name="modelo" id="modelo"><br>
            Largura <input type="text" autocomplete="off" list="lag" name="largura"><br>
            Altura <input type="text" autocomplete="off" onchange="script()" id="altura" name="altura" value="2085"><br>
            Lado de abertura <input type="text" autocomplete="off" onchange="script()" list="lad" id="lado" name="lado"><br>
            Sentido de abertura<input type="text" autocomplete="off" list="sent" name="sentido">
        </div><hr>

        <div id="acabamento">
            <u><h3>Acabamento</h3></u>
            Acabamento Interno <input type="text" autocomplete="off" onchange="script()" list="acabamento" id="acabint" name="acabint" ><br>
            <input type="text" name="codacabint" id="codacabint">
            Acabamento Externo <input type="text" autocomplete="off" onchange="script()" list="acabamento" id="acabext" name="acabext" ><br>
            <input type="text" name="codacabext" id="codacabext">
        </div><hr>

        <div id="kits">
            <u><h3>Kits</h3></u>
            Ferragens <input type="text" autocomplete="off" list="ferragens" onchange="script()" id="inputferragens" name="inputferragens" ><br>
            <input type="text" name="codferragens" id="codferragens" >
            Cilindro Principal <input type="text" autocomplete="off" list="cilindro" onchange="script()" id="cilindroP" name="cilindroP" ><br>
            <input type="text" name="codcilindroP" id="codcilindroP" >
            Cilindro Secundário <input type="text" autocomplete="off" list="cilindro" onchange="script()" id="cilindroS" name="cilindroS" ><br>
            <input type="text" name="codcilindroS" id="codcilindroS" >
        </div><hr><hr>

        <div id="master">
            <u><h3>Master Key</h3></u>
            Tipo de Serviço <input type="text" autocomplete="off" list="mkserv" id="servico" name="servico" ><br>
            Quantidade de Chaves <input type="text" autocomplete="off" id="qtdk" name="numero"><br>
            Observação <input type="text" id="obsmk" autocomplete="off" name="obsmk" ><br>
        </div><hr>

        <div id="complementos">
            <u><h3>Complementos</h3></u>
            Olho Mágico <input type="text" autocomplete="off" list="olho" onchange="script()" id="inputolho" name="inputolho" >
            Altura do Olho <input type="text" autocomplete="off" id="altolho" name="altolho" ><br>
            <input type="text" name="codolho" id="codolho" >
            Fechadura Adicional <input type="text" autocomplete="off" list="fechadurad" onchange="script()" id="inputfechadurad" name="inputfechadurad" ><br>
            <input type="text" name="codfechadurad" id="codfechadurad" >
            Barra Antipanico <input type="text" autocomplete="off" list="barra" onchange="script()" id="inputbarra" name="inputbarra" ><br>
            <input type="text" name="codbarra" id="codbarra" >
            Coluna Central <input type="text" autocomplete="off" list="esch" name="coluna"><br>
            <input type="text" name="manuall" id="manuall">
            <input type="text" id="codmanuall" name="codmanuall" >
            
            
            <u><h4>Sistema Entr</h4></u>
            Fechadura Entr <input type="text" autocomplete="off" list="entr" onchange="script()" id="inputentr" name="inputentr" ><br>
            <input type="text" name="codentr" id="codentr" >
            Calço <input type="text" list="calco" autocomplete="off" onchange="script()" id="inputcalco" name="inputcalco" ><br>
            <input type="text" name="codcalco" id="codcalco" >
            Biometria <input type="text" autocomplete="off" list="biometria" onchange="script()" id="inputbiometria" name="inputbiometria" ><br>
            <input type="text" name="codbiometria" id="codbiometria" >
            Teclado <input type="text" list="teclado" autocomplete="off" onchange="script()" id="digital" name="digital" ><br>
            <input type="text" name="coddigital" id="coddigital" >
        </div><hr>

        <div id="plasticos">
            <u><h3>Plasticos</h3></u>
            Perfil <input type="text" autocomplete="off" list="perfil" name="perfil"><br>
            Kit de Capa da Dobradiça <input type="text" autocomplete="off" list="capadobr" onchange="script()" id="capadobri" name="capadobri" ><br>
            <input type="text" name="codcapadobri" id="codcapadobri" >
            <input type="text" name="dobradica" id="dobradica" >
            <input type="text" name="coddobradica" id="coddobradica" >
            Borracha de Vedação <input type="text" autocomplete="off" list="borracha" onchange="script()" id="borracha" name="borracha" ><br>
            <input type="text" name="codborracha" id="codborracha" >
        </div><hr><hr>

        <div id="embalagem">
            <u><h3>Embalagens</h3></u>
            Embalagem <input type="text" autocomplete="off" list="tipo" onchange="script()" id="tipoem"  name="tipoem" ><br>
            Caixa De Madeira <input type="text" autocomplete="off" disabled onchange="script()" name="camad" id="camad">
            <input type=text name="codcamad" id="codcamad">

        </div><hr>

        <div id="bat">
            <u><h3>Batente</h3></u>
            Laterais <input type="text" autocomplete="off" id="laterais" name="laterais" ><br>
            Lado <input type="text" autocomplete="off" id="batlad" name="batlad" ><br>
            Largura do Batente <input type="text" autocomplete="off" list="lb" name="lag_bat"><br>
            Cor do Batente<input type="text" autocomplete="off" name="corbat" id="corbat"><br>
            Tipo <input type="text" autocomplete="off" name="tip_bat" id="tip_bat" ><br>
        </div>

        <div id="obs">
            Observação <input type="text" autocomplete="off" name="obs">
        </div><br>
        
        <button type="submit"  name="submit" id="botoes" >Cadastrar</button>
    </form>
</body>
</html>