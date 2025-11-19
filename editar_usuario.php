<?php
include('../conf/conexao.php');

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Erro: ID inválido.");
}

$id = intval($_GET['id']);

$resultado = $conexao->query("SELECT * FROM usuarios WHERE id = $id");

if ($resultado->num_rows == 0) {
    die("Erro: Usuário não encontrado.");
}

$usuario = $resultado->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome     = $_POST['nome'];
    $email    = $_POST['email'];
    $telefone = $_POST['telefone'];

    $sql = "UPDATE usuarios SET 
                nome='$nome',
                email='$email',
                telefone='$telefone'
            WHERE id=$id";

    if ($conexao->query($sql) === TRUE) {
        echo "Usuário atualizado com sucesso!";
    } else {
        echo "Erro: " . $conexao->error;
    }
}

?>

<h2>Editar Usuário</h2>

<form method="POST">

    <label>Nome:</label><br>
    <input type="text" name="nome" value="<?= $usuario['nome'] ?>" required><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?= $usuario['email'] ?>" required><br>

    <label>Telefone:</label><br>
    <input type="text" name="telefone" value="<?= $usuario['telefone'] ?>"><br><br>

    <button type="submit">Salvar Alterações</button>

</form>

<br>
<a href="listar_usuarios.php">Voltar</a>
