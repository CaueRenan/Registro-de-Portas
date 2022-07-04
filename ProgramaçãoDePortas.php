<?php
if(isset($_POST["busca"]) && !empty($_POST["dataini"]) && !empty($_POST["datafin"]))

include_once("conexão.php");

$dataini = $_POST["dataini"];
$datafin = $_POST["datafin"];


$verificar = "SELECT * FROM registros WHERE data_entrada BETWEEN '$dataini' AND '$datafin'";

$conc = $conexao->query($verificar);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programção de Portas</title>
</head>
<body>
    <table>
        <tr>
            <th>PREVISÃO</th>
            <th>TALÃO</th>
            <th>MICROSIGA</th>
            <th>CLIENTE</th>
            <th>LARGURA</th>
            <th>ALTURA</th>
            <th>LADO</th>
            <th>MODELO</th>
            <th>ACABAMENTO</th>
            <th>ENTRADA</th>
            <th>BATENTE</th>
            <th>OBSERVAÇÃO</th>
        </tr>
    <?php
        while($dados = mysqli_fetch_assoc($conc))
        {
            echo "<tr>";
            echo "<td>".date('d/m/y', strtotime($dados['data_previsao']))."</td>";
            echo "<td>".$dados['talao']."</td>";
            echo "<td>".$dados['microsiga']."</td>";
            echo "<td>".utf8_encode($dados['nome_cliente'])."</td>";
            echo "<td>".$dados['largura']."</td>";
            echo "<td>".$dados['altura']."</td>";
            echo "<td>".$dados['lado']."</td>";
            echo "<td>".$dados['modelo']."</td>";
            echo "<td>".utf8_encode($dados['acabint']. " x " .$dados['acabext'])."</td>";
            echo "<td>".date('d/m/y', strtotime($dados['data_entrada']))."</td>";
            echo "<td>".$dados['lag_bat']."</td>";
            echo  "<td>".utf8_encode($dados['obs'])."</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>