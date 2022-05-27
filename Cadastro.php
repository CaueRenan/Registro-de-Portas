<?php
if(isset($_POST['submit']))
{

    include_once("conexão.php");

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

    $resultado1 = mysqli_query($conexao, "INSERT INTO registros (nome_cliente,talao,microsiga,data_entrada,data_previsao,modelo,largura,altura,
    lado,sentido,acabint,acabext,inputferragens,cilindroP,cilindroS,servico,numero,obsmk,inputolho,altolho,inputfechadurad,inputbarra,coluna,manuall,inputentr,inputcalco,inputbiometria,
    digital,perfil,capadobri,dobradica,borracha,tipoem,lag_bat,tip_bat,obs) VALUES('$nome_cliente','$talao','$microsiga','$data_entrada',
    '$data_previsao','$modelo','$largura','$altura','$lado','$sentido','$acabint','$acabext','$inputferragens','$cilindroP','$cilindroS','$servico',
    '$numero','$obsmk','$inputolho','$altolho','$inputfechadurad','$inputbarra','$coluna','$manuall','$inputentr','$inputcalco','$inputbiometria','$digital','$perfil','$capadobri',
    '$dobradica','$borracha','$tipoem','$lag_bat','$tip_bat','$obs')");

    $resultado2 = mysqli_query($conexao, "INSERT INTO codigos (codferragens,codcilindroP,codcilindroS,codolho,codfechadurad,codbarra,codmanuall,codentr,
    codcalco,codbiometria,coddigital,codcapadobri,coddobradica,codborracha,codtipoem) VALUES('$codferragens','$codcilindroP','$codcilindroS','$codolho',
    '$codfechadurad','$codbarra','$codmanuall','$codentr','$codcalco','$codbiometria','$coddigital','$codcapadobri','$coddobradica','$codborracha','$codtipoem')");


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
            var codtipoem = document.getElementById("codtipoem")

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

        }
    </script>
</head>
<body>
    <datalist id="mod">
        <option>Telefonia</option>
        <option>TelAlvenaria</option>
        <option>463</option>
        <option>465</option>
        <option>467</option>
        <option>468</option>
        <option>469</option>
        <option>470</option>
        <option>471</option>
        <option>472</option>
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


    <datalist id="ladin">
        <option>AÇO</option>
        <option>PVC BRANCO</option>
        <option>PVC CINZA</option>
        <option>MDF CRÚ</option>
        <option>PREPARADO P/PINTURA</option>
        <option>FORMICA TX NOGAL</option>
        <option>CURROPIXÁ</option>
    </datalist>

    <datalist id="ladex">
        <option>AÇO</option>
        <option>PVC BRANCO</option>
        <option>PVC CINZA</option>
        <option>MDF CRÚ</option>
        <option>PREPARADO P/PINTURA</option>
        <option>FORMICA TX NOGAL</option>
        <option>CURROPIXÁ</option>
    </datalist>


    <datalist id="ferragens">
        <option>FECHADURA PLASTICA</option>
        <option>KIT FERRAGENS CR MxF</option>
        <option>KIT FERRAGENS CR MxM</option>
        <option>KIT ESPELHO TELEFONIA</option>
        <option>PUXADOR</option>
    </datalist>

    <datalist id="cilindro">
        <option>CIL 76 P.113</option>
        <option>CIL 76 P.586E COM 3 CHAVES</option>
        <option>CIL 76 P.236S COM 5 CHAVES</option>
        <option>CIL 81 P.236S COM 5 CHAVES</option>
        <option>CIL ENTR 70 P.236S COM 1 CHAVE</option>
        <option>CIL ENTR 73 P.236S COM 1 CHAVE</option>
    </datalist>


    <datalist id="mkserv">
        <option>UNIFICAÇÃO</option>
    </datalist>


    <datalist id="esch">
        <option>Sim</option>
        <option>Não</option>
    </datalist>


    <datalist id="olho">
        <option>OLHO MAGICO CR</option>
        <option>OLHO MAGICO LP</option>
    </datalist>


    <datalist id="fechadura">
        <option>FECHADURA TRI-LOCK S/CILINDRO</option>
        <option>FECHADURA M70</option>
    </datalist>

    <datalist id="entr">
        <option>BRANCO</option>
        <option>PRETA</option>
    </datalist>

    <datalist id="biometria">
        <option>LEITOR BIOMETRICO</option>
    </datalist>

    <datalist id="teclado">
        <option>LEITOR DIGITAL</option>
    </datalist>

    <datalist id="calco">
        <option>CALÇO DE 01 a 03mm</option>
        <option>CALÇO DE 04 a 08mm</option>
        <option>CALÇO DE 09 a 12mm</option>
    </datalist>

    <datalist id="barra">
        <option>BARRA ANTIPANICO DORMA</option>
        <option>BARRA ANTIPANICO TEKIN</option>
    </datalist>


    <datalist id="plasticos">
        <option>BRANCO</option>
        <option>CINZA</option>
        <option>MARROM</option>
    </datalist>

    <datalist id="plasticosC">
        <option>BRANCO</option>
        <option>MARROM</option>
    </datalist>


    <datalist id="tipo">
        <option>MANTA</option>
        <option>CAIXA DE MADEIRA 250x1230X2250</option>
        <option>CAIXA DE MADEIRA 250x1550X2250</option>
    </datalist>

    <datalist id="lb">
        <option>120</option>
        <option>150</option>
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
            Modelo <input type="text" list="mod" onchange="script()" name="modelo" id="modelo"><br>
            Largura <input type="text" list="lag" name="largura"><br>
            Altura <input type="text" onchange="script()" id="altura" name="altura" value="2085"><br>
            Lado de abertura <input type="text" onchange="script()" list="lad" id="lado" name="lado"><br>
            Sentido de abertura<input type="text" list="sent" name="sentido">
        </div><hr>

        <div id="acabamento">
            <u><h3>Acabamento</h3></u>
            Acabamento Interno <input type="text" onchange="script()" list="ladin" id="acabint" name="acabint" ><br>
            Acabamento Externo <input type="text" onchange="script()" list="ladex" id="acabext" name="acabext" ><br>
        </div><hr>

        <div id="kits">
            <u><h3>Kits</h3></u>
            Ferragens <input type="text" list="ferragens" onchange="script()" id="inputferragens" name="inputferragens" ><br>
            <input type="text" name="codferragens" id="codferragens" >
            Cilindro Principal <input type="text" list="cilindro" onchange="script()" id="cilindroP" name="cilindroP" ><br>
            <input type="text" name="codcilindroP" id="codcilindroP" >
            Cilindro Secundário <input type="text" list="cilindro" onchange="script()" id="cilindroS" name="cilindroS" ><br>
            <input type="text" name="codcilindroS" id="codcilindroS" >
        </div><hr><hr>

        <div id="master">
            <u><h3>Master Key</h3></u>
            Tipo de Serviço <input type="text" list="mkserv" id="servico" name="servico" ><br>
            Quantidade de Chaves <input type="text" id="qtdk" name="numero"><br>
            Observação <input type="text" id="obsmk" name="obsmk" ><br>
        </div><hr>

        <div id="complementos">
            <u><h3>Complementos</h3></u>
            Olho Mágico <input type="text" list="olho" onchange="script()" id="inputolho" name="inputolho" >
            Altura do Olho <input type="text" id="altolho" name="altolho" ><br>
            <input type="text" name="codolho" id="codolho" >
            Fechadura Adicional <input type="text" list="fechadura" onchange="script()" id="inputfechadurad" name="inputfechadurad" ><br>
            <input type="text" name="codfechadurad" id="codfechadurad" >
            Barra Antipanico <input type="text" list="barra" onchange="script()" id="inputbarra" name="inputbarra" ><br>
            <input type="text" name="codbarra" id="codbarra" >
            Coluna Central <input type="text" list="esch" name="coluna"><br>
            <input type="text" name="manuall" id="manuall">
            <input type="text" id="codmanuall" name="codmanuall" >
            
            
            <u><h4>Sistema Entr</h4></u>
            Fechadura Entr <input type="text" list="entr" onchange="script()" id="inputentr" name="inputentr" ><br>
            <input type="text" name="codentr" id="codentr" >
            Calço <input type="text" list="calco" onchange="script()" id="inputcalco" name="inputcalco" ><br>
            <input type="text" name="codcalco" id="codcalco" >
            Biometria <input type="text" list="biometria" onchange="script()" id="inputbiometria" name="inputbiometria" ><br>
            <input type="text" name="codbiometria" id="codbiometria" >
            Teclado <input type="text" list="teclado" onchange="script()" id="digital" name="digital" ><br>
            <input type="text" name="coddigital" id="coddigital" >
        </div><hr>

        <div id="plasticos">
            <u><h3>Plasticos</h3></u>
            Perfil <input type="text" list="plasticos" name="perfil"><br>
            Kit de Capa da Dobradiça <input type="text" list="plasticosC" onchange="script()" id="capadobri" name="capadobri" ><br>
            <input type="text" name="codcapadobri" id="codcapadobri" >
            <input type="text" name="dobradica" id="dobradica" >
            <input type="text" name="coddobradica" id="coddobradica" >
            Borracha de Vedação <input type="text" list="plasticos" onchange="script()" id="borracha" name="borracha" ><br>
            <input type="text" name="codborracha" id="codborracha" >
        </div><hr><hr>

        <div id="embalagem">
            <u><h3>Embalagens</h3></u>
            Embalagem <input type="text" list="tipo" onchange="script()" id="tipoem"  name="tipoem" ><br>
            <input type="text" name="codtipoem" id="codtipoem" >
        </div><hr>

        <div id="bat">
            <u><h3>Batente</h3></u>
            Laterais <input type="text" id="laterais" name="laterais" ><br>
            Lado <input type="text" id="batlad" name="batlad" ><br>
            Largura do Batente <input type="text" list="lb" name="lag_bat"><br>
            Tipo <input type="text" name="tip_bat" id="tip_bat" ><br>
        </div>

        <div id="obs">
            Observação <input type="text" name="obs">
        </div><br>
        
        <button type="submit"  name="submit" id="botoes" >Cadastrar</button>
    </form>
</body>
</html>