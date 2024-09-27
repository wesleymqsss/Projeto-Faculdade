<?php require_once "conexao.php"?>
<?php require_once "Pet.php"?>
<?php require_once "bd.php"?>

<?php
$pet = new Pet();

$pet-> nomePet = $_GET['nomepet'];
$pet-> cpfUsuario = $_GET['cpf_usuario'];
$pet-> telefone = $_GET['telefone'];
$pet-> motivo = $_GET['motivo'];
$pet-> especie = $_GET['especie'];

if(agendarConsulta($conexao, $pet)){
    echo "Agendamento de consulta realizado com sucesso!";
}else {
    echo $error=mysqli_error($conexao);
}

?>