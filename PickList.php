<?php
if(isset($_POST["impl"]) && !empty($_POST["talaopl"])){

    include_once("conexão.php");

    $talaopl = $_POST["talaopl"];

    $verificar = "SELECT * FROM registros WHERE talao = '$talaopl' ";
    
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
            while($dados = mysqli_fetch_assoc($conec)){
                echo "<tr>";
                echo "<th rowspan='3'>","Lista de Material - Porta","</th>";
                echo "<th colspan='2'>","TALÃO","</th>";
                echo "<th colspan='2'>","MICROSIGA","</th>";
                echo "</tr>";

                echo "<tr>";
                echo "<td colspan='2'>".$dados["talao"]."</td>";
                echo "<td colspan='2'>".$dados["microsiga"]."</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>","<b>ENTRADA</b>","</td>";
                echo "<td>".$dados["data_entrada"]."</td>";
                echo "<td>","<b>PREVISÃO</b>","</td>";
                echo "<td>".$dados["data_previsao"]."</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td colspan='6'>","<b>","CLIENTE:","</b>".$dados["nome_cliente"]."</td>";
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
                echo "<td>","</td>";
                echo "<td>".$dados["olho"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>","Fechadura Adicional","</td>";
                echo "<td>","</td>";
                echo "<td>".$dados["fechadurad"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>","Ferragens","</td>";
                echo "<td>","</td>";
                echo "<td>".$dados["ferragens"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>","Capa de Dobradiça","</td>";
                echo "<td>","</td>";
                echo "<td>".$dados["capadobri"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>","Dobradiça","</td>";
                echo "<td>","</td>";
                echo "<td>","</td>";//arruma ai
                echo "</tr>";
                echo "<tr>";
                echo "<td>","Borracha","</td>";
                echo "<td>","</td>";
                echo "<td>".$dados["borracha"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>","Cilindro Principal","</td>";
                echo "<td>","</td>";
                echo "<td>".$dados["cilindroP"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>","Cilindro Secundario","</td>";
                echo "<td>","</td>";
                echo "<td>".$dados["cilindroS"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>","Fechadura Entr","</td>";
                echo "<td>","</td>";
                echo "<td>".$dados["entr"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>","Calço","</td>";
                echo "<td>","</td>";
                echo "<td>".$dados["calco"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>","Leitor Biometrico","</td>";
                echo "<td>","</td>";
                echo "<td>".$dados["biometria"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>","Leitor Digital","</td>";
                echo "<td>","</td>";
                echo "<td>".$dados["digital"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>","Caixa de Madeira","</td>";
                echo "<td>","</td>";
                echo "<td>".$dados["tipoem"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>","Bucha de Piso","</td>";
                echo "<td>","</td>";
                echo "<td>","</td>";//arruma ai
                echo "</tr>";
                echo "<tr>";
                echo "<td>","Certificado de Garantia","</td>";
                echo "<td>","</td>";
                echo "<td>","</td>";//arruma ai
                echo "</tr>";
                echo "<tr>";
                echo "<td>","Manual de Instalação","</td>";
                echo "<td>","</td>";
                echo "<td>".$dados["manuall"]."</td>";
                echo "</tr>";
            echo "</table>";
        }
    ?>
</body>
</html>