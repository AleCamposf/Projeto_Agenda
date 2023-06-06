<?php
include('conexao.php');

$sql = "SELECT * FROM agenda";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Nome: " . $row['nome'] . " - Telefone: " . $row['telefone'] . "<br>";
    }
} else {
    echo "Nenhum registro encontrado.";
}
$conn->close();
?>
