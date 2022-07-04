<?php
if(isset($_POST['bcodi']) && !empty($_POST['codigo'])){

    include_once("conexão.php");

    $codigo = $_POST['codigo'];

    $consulta = "SELECT * FROM produtos WHERE codigos = '$codigo'";

    $result = $conexao->query($consulta);

    if($result->num_rows > 0){
        while($dados = mysqli_fetch_assoc($result)){

            $codigos = $dados["codigos"];
            $descricao = $dados["descricao"];
        }

    }else {
        header('Locattion:Página-Principal.html');
    };
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle De Produtos</title>
</head>
<body>
    <div></div>
    <form action="UpdateProduto.php" method="POST">
    CÓDIGO DO PRODUTO <input type="text" name="codigos" id="codigos" value="<?php echo $codigos ?>"><br><br>
    DESCRIÇÃO DO PRODUTO <input type="text" name="descricao" id="descricao" value="<?php echo $descricao ?>"><br><br>

    <input type="hidden" name="cod" value="<?php echo $codigos ?>">
    <button type="submit" name="update">ALTERAR</button>
    </form>
</body>
</html>