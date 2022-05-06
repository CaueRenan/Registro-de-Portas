<?php
if(isset($_POST["edit"]) && !empty($_POST["enedit"]))
{
    include_once("conexão.php");

    $id = $_POST["enedit"];
    
    
    $consulta = "SELECT * FROM registros WHERE talao = '$id' ";

    $result = $conexao->query($consulta);
    

        if($result->num_rows > 0){

            while($dado = mysqli_fetch_assoc($result)){

                $nome_cliente = $dado["nome_cliente"];
                $talao = $dado["talao"];
                $microsiga = $dado["microsiga"];
                $data_entrada = $dado["data_entrada"];
                $data_previsao = $dado["data_previsao"];

                $modelo = $dado["modelo"];
                $largura = $dado["largura"];
                $altura = $dado["altura"];
                $lado = $dado["lado"];
                $sentido = $dado["sentido"];

                $acabint = $dado["acabint"];
                $acabext = $dado["acabext"];

                $ferragens = $dado["ferragens"];
                $cilindroP = $dado["cilindroP"];
                $cilindroS = $dado["cilindroS"];

                $servico = $dado["servico"];
                $numero = $dado["numero"];
                $obsmk = $dado["obsmk"];

                $olho = $dado["olho"];
                $fechadurad = $dado["fechadurad"];
                $barra = $dado["barra"];
                $coluna = $dado["coluna"];
                $manuall = $dado["manuall"];

                $entr = $dado["entr"];
                $calco = $dado["calco"];
                $biometria = $dado["biometria"];
                $digital = $dado["digital"];

                $perfil = $dado["perfil"];
                $capadobri = $dado["capadobri"];
                $borracha = $dado["borracha"];

                $tipoem = $dado["tipoem"];
                $tamem = $dado["tamem"];

                $lag_bat = $dado["lag_bat"];

                $obs = $dado["obs"];

            }

        }else {
            header('Location:Pesquisa.php'); }

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


    <datalist id="tipo">
        <option>MANTA</option>
        <option>CAIXA DE MADEIRA</option>
    </datalist>

    <datalist id="caixa">
        <option>CAIXA DE MADEIRA 250x1230X2250</option>
        <option>CAIXA DE MADEIRA 250x1550X2250</option>
    </datalist>


    <datalist id="lb">
        <option>120</option>
        <option>150</option>
    </datalist>


    <form action="Update.php" method="POST">
        <div id="nome">
            <input type="text" placeholder="NOME DO CLIENTE" name="nome_cliente" value="<?php echo $nome_cliente ?>">
        </div>

        <div id="dados">
            <input type="text" placeholder="TALÃO" name="talao" value="<?php echo $talao ?>" >
            Data de Entrada <input type="date" name="data_entrada" value="<?php echo $data_entrada ?>"><br>
            <input type="text" placeholder="MICROSIGA" name="microsiga" value="<?php echo $microsiga ?>">
            Data de Previsão <input type="date" name="data_previsao" value="<?php echo $data_previsao ?>">
        </div><hr>

        <div id="medida">
            <u><h3>Medidas</h3></u>
            Modelo <input type="text" list="mod" name="modelo" value="<?php echo $modelo ?>"><br>
            Largura <input type="text" list="lag" name="largura" value="<?php echo $largura ?>"><br>
            Altura <input type="text" list="alt" name="altura" value="<?php echo $altura ?>"><br>
            Lado de abertura <input type="text" list="lad" name="lado" value="<?php echo $lado ?>"><br>
            Sentido de abertura<input type="text" list="sent" name="sentido" value="<?php echo $sentido ?>">
        </div><hr>

        <div id="acabamento">
            <u><h3>Acabamento</h3></u>
            Acabamento Interno <input type="text" list="ladin" name="acabint" value="<?php echo $acabint ?>"><br>
            Acabamento Externo <input type="text" list="ladex" name="acabext" value="<?php echo $acabext ?>"><br>
        </div><hr>

        <div id="kits">
            <u><h3>Kits</h3></u>
            Ferragens <input type="text" list="ferragens" name="ferragens" value="<?php echo $ferragens ?>"><br>
            Cilindro Principal <input type="text" list="cilindro" name="cilindroP" value="<?php echo $cilindroP ?>"><br>
            Cilindro Secundário <input type="text" list="cilindro" name="cilindroS" value="<?php echo $cilindroS ?>"><br>
        </div><hr><hr>

        <div id="master">
            <u><h3>Master Key</h3></u>
            Tipo de Serviço <input type="text" list="servico" name="servico" value="<?php echo $servico ?>"><br>
            Quantidade de Chaves <input type="text" name="numero" value="<?php echo $numero ?>"><br>
            Observação <input type="text" name="obsmk" value="<?php echo $obsmk ?>"><br>
        </div><hr>

        <div id="complementos">
            <u><h3>Complementos</h3></u>
            Olho Mágico <input type="text" list="oalt" name="olho" value="<?php echo $olho ?>"><br>
            Fechadura Adicional <input type="text" list="fechadura" name="fechadurad" value="<?php echo $fechadurad ?>"><br>
            Barra Antipanico <input type="text" list="barra" name="barra" value="<?php echo $barra ?>"><br>
            Coluna Central <input type="text" list="esch" name="coluna" value="<?php echo $coluna ?>"><br>
            Manual da Porta <input type="text" list="manual" name="manuall" value="<?php echo $manuall ?>">
            
            
            <u><h4>Sistema Entr</h4></u>
            Fechadura Entr <input type="text" list="esch" name="entr" value="<?php echo $entr ?>"><br>
            Calço <input type="text" list="calco" name="calco" value="<?php echo $calco ?>"><br>
            Biometria <input type="text" list="esch" name="biometria" value="<?php echo $biometria ?>"><br>
            Teclado <input type="text" list="esch" name="digital" value="<?php echo $digital ?>"><br>
        </div><hr>

        <div id="plasticos">
            <u><h3>Plasticos</h3></u>
            Perfil <input type="text" list="plasticos" name="perfil" value="<?php echo $perfil ?>"><br>
            Kit de Capa da Dobradiça <input type="text" list="plasticos" name="capadobri" value="<?php echo $capadobri ?>"><br>
            Borracha de Vedação <input type="text" list="plasticos" name="borracha" value="<?php echo $borracha ?>"><br>
        </div><hr><hr>

        <div id="embalagem">
            <u><h3>Embalagens</h3></u>
            Embalagem <input type="text" list="tipo" name="tipoem" value="<?php echo $tipoem ?>"><br>
            Caixa de Madeira<input type="text" list="caixa" name="tamem" value="<?php echo $tamem ?>"><br>
        </div><hr>

        <div id="bat">
            <u><h3>Batente</h3></u>
            Laterais <br>
            Superior <br>
            Lado <br>
            Largura do Batente <input type="text" list="lb" name="lag_bat" value="<?php echo $lag_bat ?>">
        </div>

        <div id="obs">
            Observação <input type="text" name="obs" value="<?php echo $obs ?>">
        </div><br>

        <input type="hidden" name="id" value="<?php echo $id ?>">
        <button type="submit" name="update" id="update">Cadastrar</button>
    </form>
</body>
</html>