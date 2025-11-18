<?php

include('../../phpScripts/conf/conexao.php');

$resultado = $conexao->query("SELECT r.*, q.numero AS numero_quartos, q.tipo AS tipo_quartos FROM reservas r JOIN quartos q ON r.id_quarto = q.id ORDER BY r.id DESC" );



?>
<h2>Reservas</h2>
<a href="../NovaReserva/cad_reserva.php" class="new">+ Nova Reserva</a>
<br><br>

<table>
    <tr>
        <th>ID</th>
        <th>Cliente</th>
        <th>Quarto</th>
        <th>Check-in</th>
        <th>Check-out</th>
        <th>Status</th>
        <th>Ações</th>
    </tr>

    <?php while ($row = $resultado->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nome'] ?></td>
            <td>#<?= $row['numero_quartos'] ?> - <?= $row['tipo_quartos'] ?></td>
            <td><?= $row['checkin'] ?></td>
            <td><?= $row['checkout'] ?></td>
            <td><?= $row['status'] ?></td>
            <td>
                <a href="editar_reserva.php?id=<?= $row['id'] ?>" class="editarbtn">Editar</a> |
                <a href="excluir_reserva.php?id=<?= $row['id'] ?>" onclick="return confirm('Cancelar esta reserva?')" class="excluirbtn">Excluir</a>
            </td>
        </tr>
    <?php } ?>
</table>