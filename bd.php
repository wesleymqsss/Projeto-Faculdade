<?php require_once "Cliente.php"?>
<?php require_once "Pet.php"?>
<?php require_once "conexao.php"?>

<?php
    function  insereCliente ($conexao, $cliente){

     //  $sql = "insert into produtos(nome,modelo,ano) values('$produto->nome','$produto->modelo', $produto->ano)";
        
		$sql = "INSERT INTO usuarios(nome,cpf,email,senha) VALUES ('$cliente->nome','$cliente->cpf','$cliente->email','$cliente->senha')";
		$resultado=mysqli_query($conexao, $sql);
        return $resultado;
    }

    function agendarConsulta($conexao, $pet){
        $sql = "INSERT INTO consultas(cpf_usuario, telefone, nomepet, especie, motivo, id_usuario)
                VALUES 
                ( '$pet->cpfUsuario','$pet->telefone','$pet->nomePet','$pet->especie', '$pet->motivo', null)";
        $resultado =  mysqli_query($conexao, $sql);
        return $resultado;
    }
?>