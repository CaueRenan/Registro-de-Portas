<?php
if(isset($_POST["impl"]) && !empty($_POST["talaopl"])){

    include_once("conexão.php");

    $talaopl = $_POST["talaopl"];

    $verificar1 = "SELECT * FROM registros WHERE talao = '$talaopl' ";
    
    $conec1 = $conexao->query($verificar1);

    if($verificar1 == true){
        $verificar2 = "SELECT * FROM codigos";
        $conec2 = $conexao->query($verificar2);
    }


    if(mysqli_num_rows($conec1) < 1){
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
    <title>Pick List</title>
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
        <?php
            while($dado1 = mysqli_fetch_assoc($conec1)){
                while($dado2 = mysqli_fetch_assoc($conec2)){
                echo "<tr>";
                echo "<th rowspan='3'>","Lista de Material - Porta","</th>";
                echo "<th colspan='2'>","TALÃO","</th>";
                echo "<th colspan='2'>","MICROSIGA","</th>";
                echo "</tr>";

                echo "<tr>";
                echo "<td colspan='2'>".$dado1["talao"]."</td>";
                echo "<td colspan='2'>".$dado1["microsiga"]."</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>","<b>ENTRADA</b>","</td>";
                echo "<td>".date("d/m/y", strtotime($dado1["data_entrada"]))."</td>";
                echo "<td>","<b>PREVISÃO</b>","</td>";
                echo "<td>".date("d/m/y", strtotime($dado1["data_previsao"]))."</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td colspan='6'>","<b>","CLIENTE:","</b>".$dado1["nome_cliente"]."</td>";
                echo "</tr>";
            echo "</table>";

            echo "<table>";
                echo "<tr>";
                echo "<th>","ESPECIFICAÇÕES","</th>";
                echo "<th>","CÓDIGO","</th>";
                echo "<th>","DESCRIÇÃO","</th>";
                echo "</tr>";
                
                echo "<tr>";
                echo "<td>","Olho Mágico","</td>";
                echo "<td>".$dado2["codolho"]."</td>";
                echo "<td>".$dado1["inputolho"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>","Fechadura Adicional","</td>";
                echo "<td>".$dado2["codfechadurad"]."</td>";
                echo "<td>".$dado1["inputfechadurad"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>","Ferragens","</td>";
                echo "<td>".$dado2["codferragens"]."</td>";
                echo "<td>".$dado1["inputferragens"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>","Capa de Dobradiça","</td>";
                echo "<td>".$dado2["codcapadobri"]."</td>";
                echo "<td>".$dado1["capadobri"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>","Dobradiça","</td>";
                echo "<td>".$dado2["coddobradica"]."</td>";
                echo "<td>".$dado1["dobradica"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>","Borracha","</td>";
                echo "<td>".$dado2["codborracha"]."</td>";
                echo "<td>".$dado1["borracha"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>","Cilindro Principal","</td>";
                echo "<td>".$dado2["codcilindroP"]."</td>";
                echo "<td>".$dado1["cilindroP"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>","Cilindro Secundario","</td>";
                echo "<td>".$dado2["codcilindroS"]."</td>";
                echo "<td>".$dado1["cilindroS"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>","Fechadura Entr","</td>";
                echo "<td>".$dado2["codentr"]."</td>";
                echo "<td>".$dado1["inputentr"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>","Calço","</td>";
                echo "<td>".$dado2["codcalco"]."</td>";
                echo "<td>".$dado1["inputcalco"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>","Leitor Biometrico","</td>";
                echo "<td>".$dado2["codbiometria"]."</td>";
                echo "<td>".$dado1["inputbiometria"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>","Leitor Digital","</td>";
                echo "<td>".$dado2["coddigital"]."</td>";
                echo "<td>".$dado1["digital"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>","Embalagem","</td>";
                echo "<td>".$dado2["codtipoem"]."</td>";
                echo "<td>".$dado1["tipoem"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>","Bucha de Piso","</td>";
                echo "<td>","021366","</td>";
                echo "<td>","BUCHA DE PISO - CROMADA","</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>","Certificado de Garantia","</td>";
                echo "<td>","025772","</td>";
                echo "<td>","CERTIFICADO DE GARANTIA - 1 ANO","</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>","Manual de Instalação","</td>";
                echo "<td>".$dado2["codmanuall"]."</td>";
                echo "<td>".$dado1["manuall"]."</td>";
                echo "</tr>";
            echo "</table>";
            }
        }
    ?>
</body>
</html>