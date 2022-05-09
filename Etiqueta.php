<?php
if(isset($_POST["imeti"]) && !empty($_POST["talaoeti"])){

    include_once("conexão.php");

    $talaoeti = $_POST["talaoeti"];

    $verificar = "SELECT * FROM registros WHERE talao = '$talaoeti'";

    $conc = $conexao->query($verificar);

    if(mysqli_num_rows($conc) < 1){
        header("Location:Pesquisa.php");
    };
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etiqueta</title>
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
            while($dados = mysqli_fetch_assoc($conc)){
                
                echo "<tr>";
                echo "<th rowspan='3'>","FICHA TÉCNICA DE PORTA","</th>";
                echo "<th>","Entrada do Pedido","</th>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>".date("d/m/y", strtotime($dados["data_entrada"]))."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>".$dados["microsiga"]."</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td colspan='3'>","CLIENTE: ".$dados["nome_cliente"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>","MODELO: ".$dados["modelo"]."</td>";
                echo "<td>","ALTURA: ".$dados["altura"]."</td>";
                echo "<td>","ACABAMENTO INTERNO: ".$dados["acabint"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>","LADO: ".$dados["lado"]. "/".$dados["sentido"]."</td>";
                echo "<td>","LARGURA: ".$dados["largura"]."</td>";
                echo "<td>","ACABAMENTO EXTERNO: ".$dados["acabext"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td colspan='3'>","BATENTE: ".$dados["lag_bat"]." - ".$dados["tip_bat"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td colspan='3'>".$dados["talao"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td colspan='3'>".$dados["obs"]."</td>";
                echo "</tr>";
            echo "</table>";

            echo "<table>";
                echo "<tr>";
                echo "<th rowspan='3'>","FICHA TÉCNICA DE PORTA","</th>";
                echo "<th>","Entrada do Pedido","</th>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>".date("d/m/y", strtotime($dados["data_entrada"]))."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>".$dados["microsiga"]."</td>";
                echo "</tr>";

                echo "<tr>";
                echo "<td colspan='3'>","CLIENTE: ".$dados["nome_cliente"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>","MODELO: ".$dados["modelo"]."</td>";
                echo "<td>","ALTURA: ".$dados["altura"]."</td>";
                echo "<td>","ACABAMENTO INTERNO: ".$dados["acabint"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>","LADO: ".$dados["lado"]. "/".$dados["sentido"]."</td>";
                echo "<td>","LARGURA: ".$dados["largura"]."</td>";
                echo "<td>","ACABAMENTO EXTERNO: ".$dados["acabext"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td colspan='3'>","BATENTE: ".$dados["lag_bat"]." - ".$dados["tip_bat"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td colspan='3'>".$dados["talao"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td colspan='3'>".$dados["obs"]."</td>";
                echo "</tr>";
            echo "</table>";
        }
    ?>
</body>
</html>