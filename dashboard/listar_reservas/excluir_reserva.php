<?php
include('../../phpScripts/conf/conexao.php');


if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
   
    die("Erro: ID da reserva não fornecido ou inválido. Certifique-se de que está clicando no link 'Excluir' na lista.");
}

$id = $_GET['id']; 

$resultado = $conexao->query("SELECT id_quarto FROM reservas WHERE id=$id");

if (!$resultado || $resultado->num_rows === 0) {
    die("Erro: Reserva com ID $id não encontrada.");
}

$reserva = $resultado->fetch_assoc();
$id_quarto = $reserva['id_quarto'];


$conexao->query("DELETE FROM reservas WHERE id=$id");


$conexao->query("UPDATE quartos SET status='disponível' WHERE id='$id_quarto'");

echo "Reserva cancelada e quarto liberado!";
?>

<a href="../listar_reservas/reservas.php">Voltar</a>