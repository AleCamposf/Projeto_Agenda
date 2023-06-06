<?php
include('conexao.php');

$id = $_GET['id'];

$sql = "DELETE FROM agenda WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Registro excluído com sucesso!";
} else {
    echo "Erro ao excluir registro: " . $conn->error;
}
$conn->close();
?>
