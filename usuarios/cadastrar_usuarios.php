<?php
include('../conf/conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome     = $_POST['nome'];
    $email    = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha    = $_POST['senha'];

    $sql = "INSERT INTO usuarios (nome, email, telefone, senha)
            VALUES ('$nome', '$email', '$telefone', '$senha')";

    if ($conexao->query($sql) === TRUE) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro: " . $conexao->error;
    }
}

?>

<h2>Cadastrar Usuário</h2>

<form method="POST">

    <label>Nome:</label><br>
    <input type="text" name="nome" required><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br>

    <label>Telefone:</label><br>
    <input type="text" name="telefone"><br>

    <label>Senha:</label><br>
    <input type="password" name="senha" required><br><br>

    <button type="submit">Cadastrar</button>

</form>

<br>
<a href="listar_usuarios.php">Voltar</a>
