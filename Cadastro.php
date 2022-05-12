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
    $dobradica = $_POST["dobradica"];
    $borracha = $_POST["borracha"];

    $tipoem = $_POST["tipoem"];

    $lag_bat = $_POST["lag_bat"];
    $tip_bat = $_POST["tip_bat"];

    $obs = $_POST["obs"];

    $resultado1 = mysqli_query($conexao, "INSERT INTO registros (nome_cliente,talao,microsiga,data_entrada,data_previsao,modelo,largura,altura,
    lado,sentido,acabint,acabext,ferragens,cilindroP,cilindroS,servico,numero,obsmk,olho,fechadurad,barra,coluna,manuall,entr,calco,biometria,
    digital,perfil,capadobri,dobradica,borracha,tipoem,lag_bat,tip_bat,obs) VALUES('$nome_cliente','$talao','$microsiga','$data_entrada',
    '$data_previsao','$modelo','$largura','$altura','$lado','$sentido','$acabint','$acabext','$ferragens','$cilindroP','$cilindroS','$servico',
    '$numero','$obsmk','$olho','$fechadurad','$barra','$coluna','$manuall','$entr','$calco','$biometria','$digital','$perfil','$capadobri',
    '$dobradica','$borracha','$tipoem','$lag_bat','$tip_bat','$obs')");


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

            if(modelo.value == "463"){
                dobradica.setAttribute("value","KIT DOBRADIÇA COM BOLT CR P/463 CN")

            }else if(modelo.value == ""){
                dobradica.setAttribute("value"," ")

            }else if(modelo.value == "Telefonia" | "TelAlvenaria" | "465" | "467" | "469" | "470" | "471" | "472") {
                dobradica.setAttribute("value","KIT DOBRADICA  ABERTURA P/ FORA CN")
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
        <option>PVC BRANCO</option>
        <option>PVC CINZA</option>
        <option>MDF CRÚ</option>
        <option>PREPARADO P/PINTURA</option>
        <option>FORMICA TX NOGAL</option>
        <option>CURROPIXÁ</option>
    </datalist>

    <datalist id="ladex">
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


    <datalist id="servico">
        <option>CARTÃO</option>
        <option>UNIFICAÇÃO</option>
        <option>MESTRAGEM</option>
    </datalist>


    <datalist id="esch">
        <option>Sim</option>
        <option>Não</option>
    </datalist>

    <datalist id="oalt">
        <option>1500mm</option>
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

    <datalist id="manual">
        <option>MANUAL DE INSTALAÇÃO DA PORTA</option>
        <option>MANUAL DE INSTALAÇÃO DA PORTA 463</option>
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
            <input type="text" placeholder="NOME DO CLIENTE" name="nome_cliente">
        </div>

        <div id="dados">
            <input type="text" placeholder="TALÃO" name="talao">
            Data de Entrada <input type="date" name="data_entrada"><br>
            <input type="text" placeholder="MICROSIGA" name="microsiga">
            Data de Previsão <input type="date" name="data_previsao">
        </div><hr>

        <div id="medida">
            <u><h3>Medidas</h3></u>
            Modelo <input type="text" list="mod" onkeyup="script()" name="modelo" id="modelo" value=""><br>
            Largura <input type="text" list="lag" name="largura"><br>
            Altura <input type="text" name="altura" value="2085"><br>
            Lado de abertura <input type="text" list="lad" name="lado"><br>
            Sentido de abertura<input type="text" list="sent" name="sentido">
        </div><hr>

        <div id="acabamento">
            <u><h3>Acabamento</h3></u>
            Acabamento Interno <input type="text" list="ladin" name="acabint"><br>
            Acabamento Externo <input type="text" list="ladex" name="acabext"><br>
        </div><hr>

        <div id="kits">
            <u><h3>Kits</h3></u>
            Ferragens <input type="text" list="ferragens" id="ferragens" name="ferragens" value=""><br>
            <input type="text" name="codferragens" id="codferragens" value="">
            Cilindro Principal <input type="text" list="cilindro" id="cilindroP" name="cilindroP" value=""><br>
            <input type="text" name="codcilindroP" id="codcilindroP" value="">
            Cilindro Secundário <input type="text" list="cilindro" id="cilindroS" name="cilindroS" value=""><br>
            <input type="text" name="codcilindroS" id="codcilindroS" value="">
        </div><hr><hr>

        <div id="master">
            <u><h3>Master Key</h3></u>
            Tipo de Serviço <input type="text" list="servico" name="servico"><br>
            Quantidade de Chaves <input type="text" name="numero"><br>
            Observação <input type="text" name="obsmk"><br>
        </div><hr>

        <div id="complementos">
            <u><h3>Complementos</h3></u>
            Olho Mágico <input type="text" list="oalt" id="olho" name="olho" value=""><br>
            <input type="text" name="codolho" id="codolho" value="">
            Fechadura Adicional <input type="text" list="fechadura" id="fechadurad" name="fechadurad" value=""><br>
            <input type="text" name="codfechadurad" id="codfechadurad" value="">
            Barra Antipanico <input type="text" list="barra" id="barra" name="barra" value=""><br>
            <input type="text" name="codbarra" id="codbarra" value="">
            Coluna Central <input type="text" list="esch" name="coluna"><br>
            Manual da Porta <input type="text" list="manual" name="manuall">
            
            
            <u><h4>Sistema Entr</h4></u>
            Fechadura Entr <input type="text" list="entr" id="entr" name="entr" value=""><br>
            <input type="text" name="codentr" id="codentr" value="">
            Calço <input type="text" list="calco" id="calco" name="calco" value=""><br>
            <input type="text" name="codcalco" id="codcalco" value="">
            Biometria <input type="text" list="biometria" id="biometria" name="biometria" value=""><br>
            <input type="text" name="codbiometria"  id="" id="codbiometria" value="">
            Teclado <input type="text" list="teclado" id="digital" name="digital" value=""><br>
            <input type="text" name="coddigital" id="coddigital" value="">
        </div><hr>

        <div id="plasticos">
            <u><h3>Plasticos</h3></u>
            Perfil <input type="text" list="plasticos" name="perfil"><br>
            Kit de Capa da Dobradiça <input type="text" list="plasticosC" id="capadobri" name="capadobri" value=""><br>
            <input type="text" name="codcapadobri" id="codcapadobri" value="">
            <input type="text" name="dobradica" id="dobradica" value="">
            <input type="text" name="coddobradica" id="coddobradica" value="">
            Borracha de Vedação <input type="text" list="plasticos" id="borracha" name="borracha" value=""><br>
            <input type="text" name="codborracha" id="codborracha" value="">
        </div><hr><hr>

        <div id="embalagem">
            <u><h3>Embalagens</h3></u>
            Embalagem <input type="text" list="tipo" id="tipoem" name="tipoem" value=""><br>
            <input type="text" name="codtipoem" id="codtipoem" value="">
        </div><hr>

        <div id="bat">
            <u><h3>Batente</h3></u>
            Laterais<br>
            Lado <br>
            Largura do Batente <input type="text" list="lb" name="lag_bat"><br>
            Tipo <input type="text" name="tip_bat" value=""><br>
        </div>

        <div id="obs">
            Observação <input type="text" name="obs">
        </div><br>
        
        <button type="submit"  name="submit" id="botoes" >Cadastrar</button>
    </form>
</body>
</html>