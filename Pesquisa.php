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
    <script> </script>
</head>
<body>
    <script>

        function clicar(){
            var resgat = prompt("Digite o Talão")
            var talaoft = document.getElementById("talaoft")
            var talaoidi = document.getElementById("enedit")
            var talaoeti = document.getElementById("talaoeti")

            if(talaoft.value == ""){
                talaoft.setAttribute("value", resgat)
            }

            if(talaoidi.value == ""){
                talaoidi.setAttribute("value", resgat)
            }

            if(talaoeti.value == ""){
                talaoeti.setAttribute("value", resgat)
            }
        }
    </script>

    <div id="pp"><h1>PROGRAMAÇÃO DE PORTAS</h1></div><hr>
    <form action="FichaTecnica.php" method="POST">
        <input type="hidden" name="talaoft" id="talaoft" value=""> 
        <button name="imft" onclick="clicar()">FICHA TECNICA</button>
    </form>

    <form action="Etiqueta.php" method="POST">
        <input type="hidden" name="talaoeti" id="talaoeti" value=""> 
        <button name="imeti" onclick="clicar()">ETIQUETA</button>
    </form>

    <form action="Edicao.php" method="POST">
        <input type="hidden" name="enedit" id="enedit" value=""> 
        <button href="Edicao.php" name="edit" onclick="clicar()">EDITAR</button>
    </form>
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
        while($dados = mysqli_fetch_assoc($verificar))
        {
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
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>