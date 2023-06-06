<?php
include('conexao.php');

if ($_SERVER ['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST ['nome'];

    $telefone = $_POST ['telefone'];


    $sql = "INSERT INTO agenda (nome, telefone) VALUES ('$nome', '$telefone')";

    if ($conn->query($sql) === TRUE) {
        echo "Cadastro realizado com sucesso!";
    }

    else {
        echo "Erro ao cadastrar: " . $conn -> error;
    }
}

$conn->close();

?>
