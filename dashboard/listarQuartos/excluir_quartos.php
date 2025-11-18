<?php
include('../../phpScripts/conf/conexao.php');


if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Erro: ID do quarto inválido.");
}

$id = intval($_GET['id']);


$sqlVerifica = "SELECT id FROM reservas WHERE id_quarto = $id";

$result = $conexao->query($sqlVerifica);

if ($result->num_rows > 0) {
    die("Não é possível excluir este quarto, pois existe(m) reserva(s) associada(s) a ele.");
}


$sqlDelete = "DELETE FROM quartos WHERE id = $id";

if ($conexao->query($sqlDelete) === TRUE) {
    echo "Quarto excluído com sucesso!";
} else {
    echo "Erro ao excluir quarto: " . $conexao->error;
}
?>

<br><br>
<a href="listar_quartos.php">Voltar</a>
