<?php
include('../conf/conexao.php');
?>

<form method="get">
    <label>ID do quarto</label>
    <input type="number" name="id" value="<?= isset($_GET['id']) ? $_GET['id'] : '' ?>">
    <button type="submit">Pesquisar</button>
</form>
<br>

<?php
if (!isset($_GET['id'])) {
    exit();
}

if (!is_numeric($_GET['id'])) {
    die("Erro: ID do quarto inválido.");
}

$id = $_GET['id'];

$sql = "SELECT * FROM quartos WHERE id = $id";
$result = $conexao->query($sql);

if (!$result || $result->num_rows === 0) {
    die("Erro: Quarto não encontrado.");
}

$quarto = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = $_POST['numero'];
    $tipo = $_POST['tipo'];
    $preco = $_POST['preco'];
    $status = $_POST['status'];
    $descricao = $_POST['descricao'];

    $update = "UPDATE quartos SET 
               numero='$numero', 
               tipo='$tipo', 
               preco='$preco',
               status='$status', 
               descricao='$descricao'
               WHERE id=$id";

    if ($conexao->query($update) === TRUE) {
        echo "Quarto atualizado!";
        
        $quarto = $conexao->query("SELECT * FROM quartos WHERE id = $id")->fetch_assoc();
    } else {
        echo "Erro: " . $conexao->error;
    }
}
?>

<form method="POST">
    <label>Número:</label><br>
    <input type="text" name="numero" value="<?= $quarto['numero'] ?>" required><br><br>

    <label>Tipo:</label><br>
    <input type="text" name="tipo" value="<?= $quarto['tipo'] ?>" required><br><br>

    <label>Preço:</label><br>
    <input type="number" step="0.01" name="preco" value="<?= $quarto['preco'] ?>" required><br><br>

    <label>Status:</label><br>
    <select name="status">
        <option value="disponível" <?= $quarto['status'] == 'disponível' ? 'selected' : '' ?>>Disponível</option>
        <option value="ocupado" <?= $quarto['status'] == 'ocupado' ? 'selected' : '' ?>>Ocupado</option>
        <option value="manutenção" <?= $quarto['status'] == 'manutenção' ? 'selected' : '' ?>>Manutenção</option>
    </select><br><br>

    <label>Descrição:</label><br>
    <textarea name="descricao"><?= $quarto['descricao'] ?></textarea><br><br>

    <button type="submit">Salvar</button>
</form>
