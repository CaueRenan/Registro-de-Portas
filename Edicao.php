<?php
include_once("conexão.php");

if(isset($_POST["edit"]) && !empty($_POST["enedit"]))
{
    include_once("conexão.php");

    $id = $_POST["enedit"];
    
    
    $consulta = "SELECT * FROM registros WHERE talao = '$id' ";

    $result = $conexao->query($consulta);

        if($result->num_rows > 0){

            while($dado = mysqli_fetch_assoc($result)){
                
                $talao = $dado["talao"];
                $nome_cliente = $dado["nome_cliente"];
                $microsiga = $dado["microsiga"];
                $data_entrada = $dado["data_entrada"];
                $data_previsao = $dado["data_previsao"];
            
                $modelo = $dado["modelo"];
                $largura = $dado["largura"];
                $altura = $dado["altura"];
                $lado = $dado["lado"];
                $sentido = $dado["sentido"];
            
                $codacabint = $dado["codacabint"];
                $acabint = $dado["acabint"];
                $codacabext = $dado["codacabext"];
                $acabext = $dado["acabext"];
            
                $codferragens = $dado["codferragens"];
                $inputferragens = $dado["inputferragens"];
                $codcilindroP = $dado["codcilindroP"];
                $cilindroP = $dado["cilindroP"];
                $codcilindroS = $dado["codcilindroS"];
                $cilindroS = $dado["cilindroS"];
            
                $servico = $dado["servico"];
                $numero = $dado["numero"];
                $obsmk = $dado["obsmk"];
            
                $codolho = $dado["codolho"];
                $inputolho = $dado["inputolho"];
                $altolho = $dado["altolho"];
                $codfechadurad = $dado["codfechadurad"];
                $inputfechadurad = $dado["inputfechadurad"];
                $codbarra = $dado["codbarra"];
                $inputbarra = $dado["inputbarra"];
                $coluna = $dado["coluna"];
                $codmanuall = $dado["codmanuall"];
                $manuall = $dado["manuall"];
            
                $codentr = $dado["codentr"];
                $inputentr = $dado["inputentr"];
                $codcalco = $dado["codcalco"];
                $inputcalco = $dado["inputcalco"];
                $codbiometria = $dado["codbiometria"];
                $inputbiometria = $dado["inputbiometria"];
                $coddigital = $dado["coddigital"];
                $digital = $dado["digital"];
            
            
                $perfil = $dado["perfil"];
                $codcapadobri = $dado["codcapadobri"];
                $capadobri = $dado["capadobri"];
                $coddobradica = $dado["coddobradica"];
                $dobradica = $dado["dobradica"];
                $codborracha = $dado["codborracha"];
                $borracha = $dado["borracha"];
            
                $tipoem = $dado["tipoem"];
                $codcamad = $dado["codcamad"];
                $camad = $dado["camad"];
            
            
                $lag_bat = $dado["lag_bat"];
                $tip_bat = $dado["tip_bat"];
                $corbat = $dado["corbat"];
            
                $obs = $dado["obs"];

            }

        }else {
            header('Location:Cadastro.php'); }

    } 

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
                cilindroP.setAttribute("value", "CIL 76 P.236E COM 5 CHAVES")
            
            } else if((modelo.value == "Telefonia" || modelo.value == "TelAlvenaria" || modelo.value == "463" || modelo.value == "465") &&
            (acabint.value == "MDF CRÚ" || acabint.value == "PREPARADO P/PINTURA" ||
            acabint.value == "FORMICA TX NOGAL" || acabint.value == "CURROPIXÁ") && (acabext.value == "MDF CRÚ" || 
            acabext.value == "PREPARADO P/PINTURA" || acabext.value == "FORMICA TX NOGAL" || acabext.value == "CURROPIXÁ")){
                cilindroP.setAttribute("value", "CIL 76 P.236E COM 5 CHAVES")

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

        function clicar(){
            var resgat = prompt("Digite o Talão")
            var talaoft = document.getElementById("talaoft")
            var talaoidi = document.getElementById("enedit")
            var talaoeti = document.getElementById("talaoeti")
            var talaopl = document.getElementById("talaopl")


            if(talaoft.value == ""){
                talaoft.setAttribute("value", resgat)
            }

            if(talaoidi.value == ""){
                talaoidi.setAttribute("value", resgat)
            }

            if(talaoeti.value == ""){
                talaoeti.setAttribute("value", resgat)
            }

            if(talaopl.value == ""){
                talaopl.setAttribute("value", resgat)
            }

        }

        function comparar(){
            var presgat = prompt("Digite a Data Inicial")
            var dataini = document.getElementById("dataini")
            

            if(dataini.value == ""){
                var convert1 = presgat.split('/').reverse().join('-')
                dataini.setAttribute("value", convert1)

            }

            if(dataini != ""){
                var sresgat = prompt("Digite a Data Final");
                var convert2 = sresgat.split('/').reverse().join('-')
                datafin.setAttribute("value", convert2)
            }

        }

        function produto(){
            var codprod = prompt("Digite o Código do Produto")
            var codigo = document.getElementById("codigo")

            if(codigo.value == ""){
                codigo.setAttribute("value", codprod)
            }
        }
    </script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap');

        *{
            margin: 0;
            padding: 0;
            font-family: 'Roboto Mono'
        }

        body{
            background-color: #BDB76B;
        }

        #carddados{
            display:flex;
            justify-content:space-between;
        }

        #carddados input{
            display:inline-block;
            border:0;
            border-bottom: 2px solid #D2691E;
            background-color:transparent;
            outline: none;
        }

        #nome{
            display:flex;
            justify-content:end;
            align-items:end

        }

        #cc{
            width: 530px;
        }

        #dados{
            display:flex;
            justify-content:space-between;
        }

        #talao{
            width:207px;
        }

        #linha1{
            display:flex;
            justify-content:space-between;
        }

        #linha2{
            display:flex;
            justify-content:space-between;
        }

        #linha3{
            display:flex;
            justify-content:space-around;
        }

        h3{
            text-align:center;
            margin-bottom:20px;
            color:#D2691E

        }
        

        .inputcadastro{
            width: 100%;
            display:inline-block;
            border:0;
            border-bottom: 2px solid #D2691E;
            background-color: transparent;
            outline: none;
            min-width: 180px;
            font-size: 16px;
            transition: all .3s ease-out;
            border-radius: 0;
            margin-top:20px
        }

        h4{
            text-align:center;
            margin-bottom:20px;
            color:#D2691E
        }

        .cads{
            background-color:#ffffff80;
            margin-top:20px;
            padding-bottom:30px;
            margin-bottom:20px;
            border-radius: 6%
        }

        #obs{
            background-color:#ffffff80;
            padding-bottom:30px;
            border-radius: 6%
        }

        #butfish{
            display:flex;
            justify-content:center;
        }

        #butfish button{
            background:transparent;
            background-color:#ffffff80;
            border-color:#D2691E;
            padding:15px;
            width: 200px;
            color:#D2691E;
            font-size:10pt;
            font-weight:bold;
        }

        #butfish button:hover{
            background-color:#BDB76B;
            color:#fff;
        }

    </style>
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

    <form action="Update.php" method="POST">
    <div id="carddados">
            <div id="nome">
            Nome Do Cliente: <input type="text" autocomplete="off" onchange="script()" width="20px" name="nome_cliente" id="cc" value="<?php echo $nome_cliente ?>">
            </div>

        
            <div id="dados">
                <div id="tami">
                    Talão <input type="text"autocomplete="off" name="talao" id="talao" class="inputtm" value="<?php echo $talao ?>"><br>
                    Microsiga <input type="text" autocomplete="off" class="inputtm" name="microsiga" value="<?php echo $microsiga ?>"><br>
                </div>
                <div id="datas">
                    Data de Entrada <input type="date" name="data_entrada" value="<?php echo $data_entrada ?>"><br>
                    Data de Previsão <input type="date" name="data_previsao" value="<?php echo $data_previsao ?>">
                </div>
            </div>
        </div><hr>

        <div id="linha1">
            <div class="cads">
                <h3>Medidas</h3><br>
                <b><u>Modelo</u></b><br><input type="text" autocomplete="off" list="mod" onchange="script()" name="modelo" class="inputcadastro" id="modelo"value="<?php echo $modelo ?>"><br>
                <b><u>Largura</u></b><input type="text" autocomplete="off" list="lag"  class="inputcadastro" name="largura"value="<?php echo $largura ?>"><br>
                <b><u>Altura</u></b><br><input type="text" autocomplete="off" onchange="script()" id="altura" class="inputcadastro" name="altura" value="2085"value="<?php echo $altura ?>">><br>
                <b><u>Lado de abertura</u></b><input type="text" autocomplete="off" onchange="script()" list="lad" class="inputcadastro" id="lado" name="lado"value="<?php echo $lado ?>"><br>
                <b><u>Sentido de abertur</u></b><input type="text" autocomplete="off" list="sent" class="inputcadastro" name="sentido"value="<?php echo $sentido ?>">
            </div>

            <div class="cads">
                <h3>Acabamento</h3><br>
                <b><u>Acabamento Interno</u></b><input type="text" autocomplete="off" onchange="script()" list="acabamento" class="inputcadastro" id="acabint" name="acabint"  value="<?php echo $acabint ?>"><br>
                <input type="hidden" name="codacabint" id="codacabint" value="<?php echo $codacabint ?>">
                <b><u>Acabamento Externo</u></b><input type="text" autocomplete="off" onchange="script()" list="acabamento" class="inputcadastro" id="acabext" name="acabext"  value="<?php echo $acabext ?>"><br>
                <input type="hidden" name="codacabext" id="codacabext" value="<?php echo $codacabext ?>">
            </div>

            <div class="cads">
                <h3>Kits</h3><br>
                <b><u>Ferragens</u></b><input type="text" autocomplete="off" list="ferragens" class="inputcadastro" onchange="script()" id="inputferragens" name="inputferragens" value="<?php echo $inputferragens ?>"><br>
                <input type="hidden" name="codferragens" id="codferragens" value="<?php echo $codferragens ?>">
                <b><u>Cilindro Principal</u></b><input type="text" autocomplete="off" list="cilindro" class="inputcadastro" onchange="script()" id="cilindroP" name="cilindroP" value="<?php echo $cilindroP ?>"><br>
                <input type="hidden" name="codcilindroP" id="codcilindroP" value="<?php echo $codcilindroP ?>">
                <b><u>Cilindro Secundário</u></b><input type="text" autocomplete="off" list="cilindro" class="inputcadastro" onchange="script()" id="cilindroS" name="cilindroS" value="<?php echo $cilindroS ?>"><br>
                <input type="hidden" name="codcilindroS" id="codcilindroS" value="<?php echo $codcilindroS ?>">
            </div>
        </div>

        <div id="linha2">
            <div class="cads">
                <h3>Master Key</h3><br>
                <b><u>Tipo de Serviço</u></b><input type="text" autocomplete="off" list="mkserv" class="inputcadastro" id="servico" name="servico"  value="<?php echo $servico ?>"><br>
                <b><u>Quantidade de Chaves</u></b><input type="text" autocomplete="off" class="inputcadastro" id="qtdk" name="numero" value="<?php echo $numero ?>"><br>
                <b><u>Observação</u></b><input type="text" id="obsmk" autocomplete="off" class="inputcadastro" name="obsmk"  value="<?php echo $obsmk ?>"><br>
            </div>

            <div class="cads">
                <h3>Complementos</h3><br>
                <b><u>Olho Mágico</u></b><input type="text" autocomplete="off" list="olho" class="inputcadastro" onchange="script()" id="inputolho" name="inputolho" value="<?php echo $inputolho ?>"><br>
                <b><u>Altura do Olho</u></b><input type="text" autocomplete="off" class="inputcadastro" id="altolho" name="altolho" value="<?php echo $altolho ?>"><br>
                <input type="hidden" name="codolho" id="codolho" value="<?php echo $codolho ?>">
                <b><u>Fechadura Adicional</u></b><input type="text" autocomplete="off" list="fechadurad" class="inputcadastro" onchange="script()" id="inputfechadurad" name="inputfechadurad" value="<?php echo $inputfechadurad ?>"><br>
                <input type="hidden" name="codfechadurad" id="codfechadurad" value="<?php echo $codfechadurad ?>">
                <b><u>Barra Antipanico</u></b><input type="text" autocomplete="off" list="barra" class="inputcadastro" onchange="script()" id="inputbarra" name="inputbarra" value="<?php echo $inputbarra ?>"><br>
                <input type="hidden" name="codbarra" id="codbarra" value="<?php echo $codbarra ?>">
                <b><u>Coluna Central</u></b><input type="text" autocomplete="off" list="esch" class="inputcadastro" name="coluna"value="<?php echo $coluna ?>"><br>
                <input type="hidden" name="manuall" id="manuall"value="<?php echo $manuall ?>">
                <input type="hidden" id="codmanuall" name="codmanuall" value="<?php echo $codmanuall ?>">
                
                
                <h4>Sistema Entr</h4><br>
                <b><u>Fechadura Entr</u></b><input type="text" autocomplete="off" list="entr" class="inputcadastro" onchange="script()" id="inputentr" name="inputentr" value="<?php echo $inputentr ?>"><br>
                <input type="hidden" name="codentr" id="codentr" value="<?php echo $codentr ?>">
                <b><u>Calço</u></b><input type="text" list="calco" class="inputcadastro" autocomplete="off" onchange="script()" id="inputcalco" name="inputcalco" value="<?php echo $inputcalco ?>"><br>
                <input type="hidden" name="codcalco" id="codcalco" value="<?php echo $codcalco ?>">
                <b><u>Biometria</u></b><input type="text" autocomplete="off" list="biometria" class="inputcadastro" onchange="script()" id="inputbiometria" name="inputbiometria" value="<?php echo $inputbiometria ?>"><br>
                <input type="hidden" name="codbiometria" id="codbiometria" value="<?php echo $inputbiometria ?>">
                <b><u>Teclado</u></b><input type="text" list="teclado" class="inputcadastro" autocomplete="off" onchange="script()" id="digital" name="digital" value="<?php echo $digital ?>"><br>
                <input type="hidden" name="coddigital" id="coddigital" value="<?php echo $coddigital ?>">
            </div>

            <div class="cads">
                <h3>Plasticos</h3><br>
                <b><u>Perfil</u></b><input type="text" autocomplete="off" list="perfil" class="inputcadastro" name="perfil" value="<?php echo $perfil ?>"><br>
                <b><u>Kit de Capa da Dobradiça</u></b><input type="text" autocomplete="off" list="capadobr" class="inputcadastro" onchange="script()" id="capadobri" name="capadobri"  value="<?php echo $capadobri ?>"><br>
                <input type="hidden" name="codcapadobri" id="codcapadobri"  value="<?php echo $codcapadobri ?>">
                <input type="hidden" name="dobradica" id="dobradica"  value="<?php echo $dobradica ?>">
                <input type="hidden" name="coddobradica" id="coddobradica"  value="<?php echo $coddobradica ?>">
                <b><u>Borracha de Vedação</u></b><input type="text" autocomplete="off" list="borracha" class="inputcadastro" onchange="script()" id="borracha" name="borracha"  value="<?php echo $borracha ?>"><br>
                <input type="hidden" name="codborracha" id="codborracha"  value="<?php echo $codborracha ?>">
            </div>
        </div>

        <div id="linha3">
            <div class="cads">
                <h3>Embalagens</h3><br>
                <b><u>Embalagem</u></b><input type="text" autocomplete="off" list="tipo" class="inputcadastro" onchange="script()" id="tipoem"  name="tipoem"  value="<?php echo $tipoem ?>"><br>
                <b><u>Caixa De Madeira</u></b><input type="text" autocomplete="off" class="inputcadastro" onchange="script()" name="camad" id="camad" value="<?php echo $camad ?>">
                <input type="hidden" name="codcamad" id="codcamad" value="<?php echo $codcamad ?>">
            </div>

            <div class="cads">
                <h3>Batente</h3><br>
                <b><u>Laterais</u></b><input type="text" autocomplete="off" class="inputcadastro" id="laterais" name="laterais"  value="<?php echo $altura ?>"><br>
                <b><u>Lado</u></b><input type="text" autocomplete="off" class="inputcadastro" id="batlad" name="batlad"  value="<?php echo $lado ?>"><br>
                <b><u>Largura do Batente</u></b><input type="text" autocomplete="off" class="inputcadastro" list="lb" name="lag_bat" value="<?php echo $lag_bat ?>"><br>
                <b><u>Cor do Batente</u></b><input type="text" autocomplete="off" class="inputcadastro" name="corbat" id="corbat" value="<?php echo $corbat ?>"><br>
                <b><u>Tipo</u></b><input type="text" autocomplete="off" class="inputcadastro" name="tip_bat" id="tip_bat"  value="<?php echo $tip_bat ?>"><br>
            </div>
        </div>

        <div id="obs">
            <h3>Observação</h3> <input type="text" autocomplete="off" class="inputcadastro" name="obs" id="obss" value="<?php echo $obs ?>">
        </div><br>

        <input type="hidden" name="id" value="<?php echo $id ?>">
        
        <div id="butfish">
            <button type="submit" name="update" id="update" >Editar</button>
        <div>
    </form>
</body>
</html>