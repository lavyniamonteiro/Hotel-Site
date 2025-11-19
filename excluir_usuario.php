<?php
include('../conf/conexao.php');

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Erro: ID inválido.");
}

$id = intval($_GET['id']);

$sql = "DELETE FROM usuarios WHERE id = $id";

if ($conexao->query($sql) === TRUE) {
    echo "Usuário excluído com sucesso!";
} else {
    echo "Erro ao excluir usuário: " . $conexao->error;
}
?>

<br><br>
<a href="listar_usuarios.php">Voltar</a>
