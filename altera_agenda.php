<?php
include('conexao.php');

$id = $_GET['id'];

$sql = "SELECT * FROM agenda WHERE id = $id";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    $row = $result-> fetch_assoc();
    $nome = $row['nome'];
    $telefone = $row['telefone'];

    echo '
    <form action="Altera_agenda_exe.php" method="post">
        <input type="hidden" name="id" value="' . $id . '">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="' . $nome . '" required><br><br>
        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" value="' . $telefone . '" required><br><br>
        <input type="submit" value="Salvar">
    </form>';
} 

else {
    echo "Registro não encontrado.";
}

$conn->close();

?>
