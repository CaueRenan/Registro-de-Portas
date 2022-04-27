<?php
if(isset($_POST['submit'])){

    include_once("conexão.php");

    $nome_cliente = $_POST["nome_cliente"];
    $talao = $_POST["talao"];
    $data_entrada = $_POST["data_entrada"];
    $data_previsao = $_POST["data_previsao"];

    $modelo = $_POST["modelo"];
    $largura = $_POST["largura"];
    $altura = $_POST["altura"];
    $lado = $_POST["lado"];

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
    $manual = $_POST["manuall"];

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

    $resultado = mysqli_query($conexao, "INSERT INTO registro (nome_cliente,talao,data_entrada,data_previsao,modelo,largura,altura,lado,acabint,
    acabext,ferragens,cilindroP,cilindroS,servico,numero,obsmk,olho,fechadurad,barra,coluna,manuall,entr,calco,biometria,digital,perfil,
    capadobri,borracha,tipoem,tamem,lag_bat,obs) VALUES('$nome_cliente','$talao$data_entrada','$data_previsao','$modelo','$largura$altura',
    '$lado$acabint','$acabext$ferragen','$cilindroP','$cilindroS','$servico','$numero','$obsmk','$olho','$fechadurad','$barra$coluna',
    '$manual','$entr','$calco','$biometria','$digital','$perfil','$capadobri','$borracha','$tipoem','$tamem','$lag_bat$obs') ");
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <div id="nome">
        <input type="text" placeholder="NOME DO CLIENTE" name="nome_cliente">
    </div>
    <div id="dados">
        <form action="" method="POST">
            <input type="text" placeholder="TALÃO" name="talao">
            Data de Entrada <input type="date" name="data_entrada"><br>
            <input type="text" placeholder="MICROSIGA">
            Data de Previsão <input type="date" name="data_previsao">
        </form>
    </div><hr>


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

    <datalist id="alt">
        <option>2085</option>
    </datalist>

    <datalist id="lad">
        <option>DIREITA P/DENTRO</option>
        <option>ESQUERDA P/DENTRO</option>
        <option>DIREITA P/FORA</option>
        <option>ESQUERDA P/FORA</option>
    </datalist>

    <div id="medida">
        <form action="" method="POST">
            <u><h3>Medidas</h3></u>
            Modelo <input type="text" list="mod" name="modelo"><br>
            Largura <input type="text" list="lag" name="largura"><br>
            Altura <input type="text" list="alt" name="altura"><br>
            Lado e Sentido d/abertura<input type="text" list="lad" name="lado"><br>
        </form>
    </div><hr>


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

    <div id="acabamento">
        <form action="" method="POST">
            <u><h3>Acabamento</h3></u>
            Acabamento Interno <input type="text" list="ladin" name="acabint"><br>
            Acabamento Externo<input type="text" list="ladex" name="acabext"><br>
        </form>
    </div><hr>


    <datalist id="ferragens">
        <option>KIT FERRAGENS CR MxF</option>
        <option>KIT FERRAGENS CR MxM</option>
        <option>KIT FERRAGENS CRA MxF</option>
        <option>KIT FERRAGENS CRA MxM</option>
        <option>KIT ESPELHO TELEFONIA</option>
    </datalist>

    <datalist id="cilindro">
        <option>CIL 76 P.113</option>
        <option>CIL 76 P.236S COM 5 CHAVES</option>
        <option>CIL 81 P.236S COM 5 CHAVES</option>
        <option>CIL ENTR 70 P.236S COM 1 CHAVE</option>
        <option>CIL ENTR 73 P.236S COM 1 CHAVE</option>
    </datalist>

    <div id="kits">
        <form action="" method="POST">
            <u><h3>Kits</h3></u>
            Ferragens <input type="text" list="ferragens" name="ferragens"><br>
            Cilindro Principal <input type="text" list="cilindro" name="cilindroP"><br>
            Cilindro Secundário <input type="text" list="cilindro" name="cilindroS"><br>
        </form>
    </div><hr><hr>


    <datalist id="servico">
        <option>CARTÃO</option>
        <option>UNIFICAÇÃO</option>
        <option>MESTRAGEM</option>
    </datalist>

    <div id="master">
        <form action="" method="POST">
            <u><h3>Master Key</h3></u>
            Tipo de Serviço <input type="text" list="servico" name="servico"><br>
            Quantidade de Chaves <input type="text" name="numero"><br>
            Observação <input type="text" name="obsmk"><br>
        </form>
    </div><hr>


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

    <div id="complementos">
        <form action="" method="POST">
            <u><h3>Complementos</h3></u>
            Olho Mágico <input type="text" list="oalt" name="olho"><br>
            Fechadura Adicional <input type="text" list="fechadura" name="fechadurad"><br>
            Barra Antipanico <input type="text" list="barra" name="barra"><br>
            Coluna Central <input type="text" list="esch" name="coluna"><br>
            Manual da Porta <input type="text" list="manual" name="manuall">
        </form>
        <form action="" method="POST">
            <u><h4>Sistema Entr</h4></u>
            Fechadura Entr <input type="text" list="esch" name="entr"><br>
            Calço <input type="text" list="calco" name="calco"><br>
            Biometria <input type="text" list="esch" name="biometria"><br>
            Teclado <input type="text" list="esch" name="digital"><br>
        </form>
    </div><hr>


    <datalist id="plasticos">
        <option>BRANCO</option>
        <option>CINZA</option>
        <option>MARROM</option>
    </datalist>

    <div id="plasticos">
        <form action="" method="POST">
            <u><h3>Plasticos</h3></u>
            Perfil <input type="text" list="plasticos" name="perfil"><br>
            Kit de Capa da Dobradiça <input type="text" list="plasticos" name="capadobri"><br>
            Borracha de Vedação <input type="text" list="plasticos" nama="borracha"><br>
        </form>
    </div><hr><hr>


    <datalist id="tipo">
        <option>MANTA</option>
        <option>CAIXA DE MADEIRA</option>
    </datalist>

    <datalist id="caixa">
        <option>CAIXA DE MADEIRA 250x1230X2250</option>
        <option>CAIXA DE MADEIRA 250x1550X2250</option>
    </datalist>

    <div id="embalagem">
        <form action="" method="POST">
            <u><h3>Embalagens</h3></u>
            Embalagem <input type="text" list="tipo" name="tipoem"><br>
            Caixa de Madeira<input type="text" disabled list="caixa" name="tamem"><br>
        </form>
    </div><hr>


    <datalist id="lb">
        <option>120</option>
        <option>150</option>
    </datalist>

    <div id="bat">
        <form action="" method="POST">
            <u><h3>Batente</h3></u>
            Laterais <br>
            Superior <br>
            Lado <br>
            Largura do Batente <input type="text" list="lb" name="lag_bat">
        </form>
    </div>


    <div id="obs">
        <form action="" method="POST">
            Observação <input type="text" name="obs">
        </form>
    </div><br>

    <a href="Pesquisa.html">
        <button type="submit" >Cadastra</button>
    </a>
</body>
</html>