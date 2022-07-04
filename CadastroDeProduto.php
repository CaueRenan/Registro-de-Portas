<?php
if(isset($_POST['submit'])){

    include_once("conexão.php");

    $codigos = $_POST["codigos"];
    $descricao = $_POST["descricao"];
    $categoria =$_POST["categoria"];

    $result = mysqli_query($conexao, "INSERT INTO produtos (codigos,descricao,categoria) VALUES('$codigos','$descricao','$categoria')");

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
    <datalist id="categ">
        <option>MODELO</option>
        <option>ACABAMENTO</option>
        <option>FERRAGENS</option>
        <option>CILINDROS</option>
        <option>OLHO MÁGICO</option>
        <option>FECHADURA ADICIONAL</option>
        <option>FECHADURA ENTR</option>
        <option>LEITOR BIOMETRICO</option>
        <option>TECLADO DIGITAL</option>
        <option>CALÇO</option>
        <option>BARRA ANTIPANICO</option>
        <option>CAPA DA DOBRADIÇA</option>
        <option>BORRACHA</option>
    </datalist>

    <div></div>
    <form action="CadastroDeProduto.php" method="POST">
    CÓDIGO DO PRODUTO <input type="text" name="codigos" id="codigos"><br><br>
    DESCRIÇÃO DO PRODUTO <input type="text" name="descricao" id="descricao"><br><br>
    CATEGORIA DO PRODUTO <input type="text" name="categoria" list="categ" id="categoria"><br><br>

    <button type="submit" name="submit">CADASTRAR</button>
    </form>
</body>
</html>