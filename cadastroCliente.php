<?php require_once "conexao.php"?>
<?php require_once "Cliente.php"?>
<?php require_once "bd.php"?>

<?php
$cliente = new Cliente();

$cliente -> nome= $_GET["nome"];
$cliente -> cpf= $_GET["cpf"];
$cliente -> email= $_GET["email"];
$cliente -> senha = $_GET["senha"];;
        
if(insereCliente($conexao, $cliente)){
    echo "cadastrado com sucesso!<br/>";
} else {
    echo $error=mysqli_error($conexao);
}






?>
