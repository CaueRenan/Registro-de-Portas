<?php
include_once("conexão.php");

$consulta = "SELECT * FROM registros";

$verificar = mysqli_query($conexao, $consulta);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa e Filtro</title>
</head>
<body>
    <div id="pp"><h1>PROGRAMAÇÃO DE PORTAS</h1></div><hr>
    <a href="FichaTecnica.html">
        <button>Imprimir Ficha Técnica</button>
    </a>
    <a href="Etiqueta.html">
        <button>Imprimir Etiqueta</button>
    </a>
    <a href="PickList.html">
        <button>Imprimir PickLista</button>
    </a>
   

    <table>
        <thead>
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
        </thead>
        <tbody>
        <?php
            while($dados = mysqli_fetch_assoc($verificar))
            {
                $dados['id'];
                echo "<tr>";
                echo "<td>" .date("m/d/y", strtotime($dados['data_previsao']))."</td>";
                echo "<td>".$dados['talao']."</td>";
                echo "<td>".$dados['microsiga']."</td>";
                echo "<td>".$dados['nome_cliente']."</td>";
                echo "<td>".$dados['largura']."</td>";
                echo "<td>".$dados['altura']."</td>";
                echo "<td>".$dados['lado']."</td>";
                echo "<td>".$dados['modelo']."</td>";
                echo "<td>".$dados['acabint']. " x " .$dados['acabext']."</td>";
                echo "<td>".date("m/d/y", strtotime($dados['data_entrada']))."</td>";
                echo "<td>".$dados['lag_bat']."</td>";
                echo "<td>".$dados['obs']."</td>";
                echo "<td>
                        <a href='Edicao.php?id=$dados[id]'>
                            <button>Editar</button>
                        </a>
                    </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>