<?php
include('../conf/conexao.php');


$quartosDisponiveis = [];
if (isset($_POST['tipo'])) {
    $tipoEscolhido = $_POST['tipo'];

    $sqlQuartos = "SELECT * FROM quartos WHERE tipo = '$tipoEscolhido' AND status = 'disponível'";
    $quartosDisponiveis = $conexao->query($sqlQuartos);
}


if (isset($_POST['reservar'])) {

    $id_quarto = $_POST['id_quarto'];
    $nome      = $_POST['nome'];
    $email     = $_POST['email'];
    $telefone  = $_POST['telefone'];
    $checkin   = $_POST['checkin'];
    $checkout  = $_POST['checkout'];

   
    $sqlReserva = "INSERT INTO reservas (id_quarto, nome, email, telefone, checkin, checkout)
                   VALUES ('$id_quarto', '$nome', '$email', '$telefone', '$checkin', '$checkout')";

    if ($conexao->query($sqlReserva) === TRUE) {
      
        $conexao->query("UPDATE quartos SET status = 'ocupado' WHERE id = '$id_quarto'");
        echo "Reserva concluída com sucesso!";
    } else {
        echo "Erro ao reservar: " . $conexao->error;
    }
}
?>

<h2>Nova Reserva</h2>


<form method="POST">
    <label>Selecione o tipo de quarto:</label><br>

    <select name="tipo" required>
        <option value="">-- Escolha --</option>

        <?php
        $tipos = $conexao->query("SELECT DISTINCT tipo FROM quartos");
        while ($t = $tipos->fetch_assoc()) {
            echo "<option value='{$t['tipo']}'>$t[tipo]</option>";
        }
        ?>
    </select>
    
    <button type="submit">Buscar Quartos</button>
</form>

<br>


<?php if (!empty($quartosDisponiveis) && $quartosDisponiveis->num_rows > 0): ?>

<form method="POST">
    <h3>Quartos disponíveis do tipo: <?= $tipoEscolhido ?></h3>

    <label>Selecione o quarto:</label>
    <select name="id_quarto" required>
        <?php while ($q = $quartosDisponiveis->fetch_assoc()) { ?>
            <option value="<?= $q['id'] ?>">
                <?= $q['numero'] ?> - <?= $q['descricao'] ?>
            </option>
        <?php } ?>
    </select>

    <br><br>

    <label>Nome do Cliente:</label><br>
    <input type="text" name="nome" required><br>

    <label>Email:</label><br>
    <input type="email" name="email"><br>

    <label>Telefone:</label><br>
    <input type="text" name="telefone"><br>

    <label>Check-in:</label><br>
    <input type="date" name="checkin" required><br>

    <label>Check-out:</label><br>
    <input type="date" name="checkout" required><br><br>

    
    <input type="hidden" name="tipo" value="<?= $tipoEscolhido ?>">

    <button type="submit" name="reservar">Concluir Reserva</button>
</form>

<?php elseif (isset($_POST['tipo'])): ?>

<p style="color: red;">Nenhum quarto disponível para este tipo.</p>

<?php endif; ?>
