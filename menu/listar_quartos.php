<?php
include('../conf/conexao.php');

$sql = "SELECT * FROM quartos ORDER BY id DESC";
$resultado = $conexao->query($sql);

if (!$resultado) {
    die("Erro ao consultar quartos: " . $conexao->error);
}
?>

<h2>Lista de Quartos</h2>

<a href="cadastrar_quarto.php">+ Novo Quarto</a>
<br><br>

<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Número</th>
        <th>Tipo</th>
        <th>Preço</th>
        <th>Status</th>
        <th>Descrição</th>
        <th>Ações</th>
    </tr>

    <?php while ($row = $resultado->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['numero'] ?></td>
            <td><?= $row['tipo'] ?></td>
            <td>R$ <?= number_format($row['preco'], 2, ',', '.') ?></td>
            <td><?= $row['status'] ?></td>
            <td><?= $row['descricao'] ?></td>
            <td>
                <a href="editar_quartos.php?id=<?= $row['id'] ?>">Editar</a> |
                <a href="excluir_quartos.php?id=<?= $row['id'] ?>" onclick="return confirm('Deseja excluir este quarto?')">Excluir</a>
            </td>
        </tr>
    <?php } ?>
</table>
