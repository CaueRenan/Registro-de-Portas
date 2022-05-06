<?php
if(isset($_POST['imft']) && !empty($_POST['talaoft'])){

    include_once("conexão.php");

    $talaoft = $_POST["talaoft"];

    $verificar = "SELECT * FROM registros WHERE talao = '$talaoft' ";
    
    $conec = $conexao->query($verificar);

    if(mysqli_num_rows($conec) < 1){
        header('Location:Pesquisa.php');
    }
    
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha Técnica</title>
</head>
<style>
    table{
        border-collapse: collapse;
        
    }

    th,td{
        border: 1px solid;
    }
</style>
<body>
    <table>
        <tr>
            <th rowspan="3">FICHA TÉCNICA DE PORTA</th>
            <th colspan="2">TALÃO</th>
            <th colspan="2">MICROSIGA</th>
        </tr>

        <tr>
            <td colspan="2">conteudo</td>
            <td colspan="2">conteudo</td>
        </tr>

        <tr>
            <td><b>ENTRADA</b></td>
            <td>conteudo</td>
            <td><b>PREVISÃO</b></td>
            <td>conteudo</td>
        </tr>

        <tr>
            <td colspan="6"><b>CLIENTE:</b></td>
        </tr>

        <tr>
            <th colspan="6">ESPECIFICAÇÕES</th>
        </tr>
    </table>

    <table>
        <tr><th rowspan="5">MEDIDAS</th></tr>
        <tr>
            <td>Modelo</td>
            <td>conteudo</td>
        </tr>
        <tr>
            <td>Largura</td>
            <td>conteudo</td>
        </tr>
        <tr>
            <td>Altura</td>
            <td>conteudo</td>
        </tr>
        <tr>
            <td>Sentido de Abertura</td>
            <td>conteudo</td>
        </tr>

        <tr><th rowspan="3">ACABAMENTO</th></tr>
        <tr>
            <td>Lado interno</td>
            <td>conteudo</td>
        </tr>
        <tr>
            <td>Lado externo</td>
            <td>conteudo</td>
        </tr>
        
        <tr><th rowspan="9">COMPLEMENTOS</th></tr>
        <tr>
            <td>Olho Mágico</td>
            <td>conteudo</td>
        </tr>
        <tr>
            <td>Fechadura Adicional</td>
            <td>conteudo</td>
        </tr>
        <tr>
            <td>Fechadura Entr</td>
            <td>conteudo</td>
        </tr>
        <tr>
            <td>Calço</td>
            <td>conteudo</td>
        </tr>
        <tr>
            <td>Biometria</td>
            <td>conteudo</td>
        </tr>
        <tr>
            <td>Teclado</td>
            <td>conteudo</td>
        </tr>
        <tr>
            <td>Barra Antipanico</td>
            <td>conteudo</td>
        </tr>
        <tr>
            <td>Coluna Central</td>
            <td>conteudo</td>
        </tr>

        <tr><th rowspan="4">KITS</th></tr>
        <tr>
            <td>Ferragens</td>
            <td>conteudo</td>
        </tr>
        <tr>
            <td>Cilindro Principal</td>
            <td>conteudo</td>
        </tr>
        <tr>
            <td>Cilindro Secundario</td>
            <td>conteudo</td>
        </tr>

        <tr><th rowspan="4">MASTER KEY</th></tr>
        <tr>
            <td>Tipo De Serviço</td>
            <td>conteudo</td>
        </tr>
        <tr>
            <td>Quantidades de Chaves</td>
            <td>conteudo</td>
        </tr>
        <tr>
            <td>Observações</td>
            <td>conteudo</td>
        </tr>

        <tr><th rowspan="4">PLASTICOS</th></tr>
        <tr>
            <td>Perfil</td>
            <td>conteudo</td>
        </tr>
        <tr>
            <td>Capa de Dobradiça</td>
            <td>conteudo</td>
        </tr>
        <tr>
            <td>Borracha</td>
            <td>conteudo</td>
        </tr>

        <tr><th rowspan="2">EMBALAGEM</th></tr>
        <tr>
            <td>Tipo de Embalagem</td>
            <td>conteudo</td>
        </tr>

        <tr><th rowspan="6">BATENTE</th></tr>
        <tr>
            <td>Superior</td>
            <td>conteudo</td>
        </tr>
        <tr>
            <td>Laterais</td>
            <td>conteudo</td>
        </tr>
        <tr>
            <td>Largura</td>
            <td>conteudo</td>
        </tr>
        <tr>
            <td>Lado</td>
            <td>conteudo</td>
        </tr>
        <tr>
            <td>Tipo</td>
            <td>conteudo</td>

        <tr><th colspan="3">OBSERVAÇÕES</th></tr>
        <tr>
            <td colspan="3">conteudo</td>
        </tr>
    </table>
</body>
</html>