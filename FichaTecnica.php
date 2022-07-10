<?php
if(isset($_POST['imft']) && !empty($_POST['talaoft'])){

    include_once("conexão.php");

    $talaoft = $_POST["talaoft"];

    $verificar = "SELECT * FROM registros WHERE talao = '$talaoft' ";
    
    $conec = $conexao->query($verificar);

    if(mysqli_num_rows($conec) < 1){
        header('Location:Cadastro.php');
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
    <a href="Cadastro.php">
        <button id="bvolta">VOLTAR</button>
    </a>
    <table>
        <?php
            while($dados = mysqli_fetch_assoc($conec)){
                echo "<tr>";
                echo "<th rowspan='3'>","FICHA TÉCNICA DE PORTA","</th>";
                echo "<th colspan='2'>","TALÃO","</th>";
                echo "<th colspan='2'>","MICROSIGA","</th>";
                echo "</tr>";

                echo "<tr>";
                echo "<td colspan='2'>".$dados['talao']."</td>";
                echo "<td colspan='2'>".$dados['microsiga']."</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td>","<b>ENTRADA</b>","</td>";
                echo "<td>".date("d/m/y", strtotime($dados['data_entrada']))."</td>";
                echo "<td>","<b>PREVISÃO</b>","</td>";
                echo "<td>".date("d/m/y", strtotime($dados['data_previsao']))."</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td colspan='6'>","<b>CLIENTE: </b>".$dados['nome_cliente']."</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<th colspan='6'>","ESPECIFICAÇÕES","</th>";
                echo "</tr>";
            
        
    echo "</table>";

    echo "<table>";
            echo "<tr>","<th rowspan='5'>","MEDIDAS","</th>","</tr>";
            echo "<tr>";
            echo "<td>","Modelo","</td>";
            echo "<td>".$dados['modelo']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>","Largura","</td>";
            echo "<td>".$dados['largura']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>","Altura","</td>";
            echo "<td>".$dados['altura']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>","Sentido de Abertura","</td>";
            echo "<td>".$dados['lado']."/".$dados['sentido']."</td>";
            echo "</tr>";

            echo "<tr>","<th rowspan='3'>","ACABAMENTO","</th>","</tr>";
            echo "<tr>";
            echo "<td>","Lado interno","</td>";
            echo "<td>".$dados['acabint']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>","Lado externo","</td>";
            echo "<td>".$dados['acabext']."</td>";
            echo "</tr>";
            
            echo "<tr>","<th rowspan='9'>","COMPLEMENTOS","</th>","</tr>";
            echo "<tr>";
            echo "<td>","Olho Mágico","</td>";
            echo "<td>".$dados['inputolho']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>","Fechadura Adicional","</td>";
            echo "<td>".$dados['inputfechadurad']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>","Fechadura Entr","</td>";
            echo "<td>".$dados['inputentr']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>","Calço","</td>";
            echo "<td>".$dados['inputcalco']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>","Biometria","</td>";
            echo "<td>".$dados['inputbiometria']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>","Teclado","</td>";
            echo "<td>".$dados['digital']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>","Barra Antipanico","</td>";
            echo "<td>".$dados['inputbarra']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>","Coluna Central","</td>";
            echo "<td>".$dados['coluna']."</td>";
            echo "</tr>";

            echo "<tr>","<th rowspan='4'>","KITS","</th>","</tr>";
            echo "<tr>";
            echo "<td>","Ferragens","</td>";
            echo "<td>".$dados['inputferragens']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>","Cilindro Principal","</td>";
            echo "<td>".$dados['cilindroP']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>","Cilindro Secundario","</td>";
            echo "<td>".$dados['cilindroS']."</td>";
            echo "</tr>";

            echo "<tr>","<th rowspan='4'>","MASTER KEY","</th>","</tr>";
            echo "<tr>";
            echo "<td>","Tipo De Serviço","</td>";
            echo "<td>".$dados['servico']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>","Quantidades de Chaves","</td>";
            echo "<td>".$dados['numero']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>","Observações","</td>";
            echo "<td>".$dados['obsmk']."</td>";
            echo "</tr>";

            echo "<tr>","<th rowspan='4'>","PLASTICOS","</th>","</tr>";
            echo "<tr>";
            echo "<td>","Perfil","</td>";
            echo "<td>".$dados['perfil']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>","Capa de Dobradiça","</td>";
            echo "<td>".$dados['capadobri']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo " <td>","Borracha","</td>";
            echo "<td>".$dados['borracha']."</td>";
            echo "</tr>";

            echo "<tr>","<th rowspan='2'>","EMBALAGEM","</th>","</tr>";
            echo "<tr>";
            echo "<td>","Tipo de Embalagem","</td>";
            echo "<td>".$dados['tipoem']."</td>";
            echo "</tr>";

            echo "<tr>","<th rowspan='6'>","BATENTE","</th>","</tr>";
            echo "<tr>";
            echo "<td>","Superior","</td>";
            echo "<td>".$dados['lag_bat']. "x" .$dados['largura']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>","Laterais","</td>";
            echo "<td>".$dados['altura']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>","Lado","</td>";
            echo "<td>".$dados['lado']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>","Tipo","</td>";
            echo "<td>".$dados['tip_bat']."</td>";

            echo "<tr>","<th colspan='3'>","OBSERVAÇÕES","</th>","</tr>";
            echo "<tr>";
            echo "<td colspan='3'>".$dados['obs']."</td>";
            echo "</tr>";
        
    echo "</table>";
    }
    ?>
</body>
</html>