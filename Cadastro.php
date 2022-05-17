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
    $altolho = $_POST["altolho"];
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
    lado,sentido,acabint,acabext,ferragens,cilindroP,cilindroS,servico,numero,obsmk,olho,altolho,fechadurad,barra,coluna,manuall,entr,calco,biometria,
    digital,perfil,capadobri,dobradica,borracha,tipoem,lag_bat,tip_bat,obs) VALUES('$nome_cliente','$talao','$microsiga','$data_entrada',
    '$data_previsao','$modelo','$largura','$altura','$lado','$sentido','$acabint','$acabext','$ferragens','$cilindroP','$cilindroS','$servico',
    '$numero','$obsmk','$olho','$altolho','$fechadurad','$barra','$coluna','$manuall','$entr','$calco','$biometria','$digital','$perfil','$capadobri',
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

            var altura = document.getElementById("altura").value
            var lado = document.getElementById("lado").value
            var acabint = document.getElementById("acabint").value
            var acabext = document.getElementById("acabext").value
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
                codmanuall.setAttribute("value", "025772")

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

            if(inputferragens.value == "" && "PUXADOR"){
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

            } else if (inputolho.value == "OLHO MAGICO CR"){
                codolho.setAttribute("value", "021392")

            }  else if (inputolho.value == "OLHO MAGICO LP"){
                codolho.setAttribute("value", "021390")
                
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

            if(tipoem.value == "" && "MANTA"){
                codtipoem.setAttribute("value", "")

            } else if (tipoem.value == "CAIXA DE MADEIRA 250x1230X2250"){
                codtipoem.setAttribute("value", "030085")

            }  else if (tipoem.value == "CAIXA DE MADEIRA 250x1550X2250"){
                codtipoem.setAttribute("value", "030086")
                
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

    <datalist id="oalt">
        <option>1500mm</option>
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
            Altura <input type="text" onkeyup="script()" id="altura" name="altura" value="2085"><br>
            Lado de abertura <input type="text" onkeyup="script()" list="lad" id="lado" name="lado" value=""><br>
            Sentido de abertura<input type="text" list="sent" name="sentido">
        </div><hr>

        <div id="acabamento">
            <u><h3>Acabamento</h3></u>
            Acabamento Interno <input type="text" onkeyup="script()" list="ladin" id="acabint" name="acabint" value=""><br>
            Acabamento Externo <input type="text" onkeyup="script()" list="ladex" id="acabext" name="acabext" value=""><br>
        </div><hr>

        <div id="kits">
            <u><h3>Kits</h3></u>
            Ferragens <input type="text" list="ferragens" onkeyup="script()" id="inputferragens" name="inputferragens" value=""><br>
            <input type="text" name="codferragens" id="codferragens" value="">
            Cilindro Principal <input type="text" list="cilindro" onkeyup="script()" id="cilindroP" name="cilindroP" value=""><br>
            <input type="text" name="codcilindroP" id="codcilindroP" value="">
            Cilindro Secundário <input type="text" list="cilindro" onkeyup="script()" id="cilindroS" name="cilindroS" value=""><br>
            <input type="text" name="codcilindroS" id="codcilindroS" value="">
        </div><hr><hr>

        <div id="master">
            <u><h3>Master Key</h3></u>
            Tipo de Serviço <input type="text" list="mkserv" id="servico" name="servico" value=""><br>
            Quantidade de Chaves <input type="text" id="qtdk" name="numero"><br>
            Observação <input type="text" id="obsmk" name="obsmk" value=""><br>
        </div><hr>

        <div id="complementos">
            <u><h3>Complementos</h3></u>
            Olho Mágico <input type="text" list="olho" onkeyup="script()" id="inputolho" name="inputolho" value="">
            Altura do Olho <input type="text" list="oalt" id="altolho" name="altolho" value=""><br>
            <input type="text" name="codolho" id="codolho" value="">
            Fechadura Adicional <input type="text" list="fechadura" onkeyup="script()" id="inputfechadurad" name="inputfechadurad" value=""><br>
            <input type="text" name="codfechadurad" id="codfechadurad" value="">
            Barra Antipanico <input type="text" list="barra" onkeyup="script()" id="inputbarra" name="inputbarra" value=""><br>
            <input type="text" name="codbarra" id="codbarra" value="">
            Coluna Central <input type="text" list="esch" name="coluna"><br>
            <input type="text" name="manuall" id="manuall">
            <input type="text" id="codmanuall" name="manuall" value="">
            
            
            <u><h4>Sistema Entr</h4></u>
            Fechadura Entr <input type="text" list="entr" onkeyup="script()" id="inputentr" name="inputentr" value=""><br>
            <input type="text" name="codentr" id="codentr" value="">
            Calço <input type="text" list="calco" onkeyup="script()" id="inputcalco" name="inputcalco" value=""><br>
            <input type="text" name="codcalco" id="codcalco" value="">
            Biometria <input type="text" list="biometria" onkeyup="script()" id="inputbiometria" name="inputbiometria" value=""><br>
            <input type="text" name="codbiometria" id="codbiometria" value="">
            Teclado <input type="text" list="teclado" onkeyup="script()" id="digital" name="digital" value=""><br>
            <input type="text" name="coddigital" id="coddigital" value="">
        </div><hr>

        <div id="plasticos">
            <u><h3>Plasticos</h3></u>
            Perfil <input type="text" list="plasticos" name="perfil"><br>
            Kit de Capa da Dobradiça <input type="text" list="plasticosC" onkeyup="script()" id="capadobri" name="capadobri" value=""><br>
            <input type="text" name="codcapadobri" id="codcapadobri" value="">
            <input type="text" name="dobradica" id="dobradica" value="">
            <input type="text" name="coddobradica" id="coddobradica" value="">
            Borracha de Vedação <input type="text" list="plasticos" onkeyup="script()" id="borracha" name="borracha" value=""><br>
            <input type="text" name="codborracha" id="codborracha" value="">
        </div><hr><hr>

        <div id="embalagem">
            <u><h3>Embalagens</h3></u>
            Embalagem <input type="text" list="tipo" onkeyup="script()" id="tipoem"  name="tipoem" value=""><br>
            <input type="text" name="codtipoem" id="codtipoem" value="">
        </div><hr>

        <div id="bat">
            <u><h3>Batente</h3></u>
            Laterais <input type="text" id="laterais" name="laterais" value=""><br>
            Lado <input type="text" id="batlad" name="batlad" value=""><br>
            Largura do Batente <input type="text" list="lb" name="lag_bat"><br>
            Tipo <input type="text" name="tip_bat" id="tip_bat" value=""><br>
        </div>

        <div id="obs">
            Observação <input type="text" name="obs">
        </div><br>
        
        <button type="submit"  name="submit" id="botoes" >Cadastrar</button>
    </form>
</body>
</html>