<?php
include('../conf/conexao.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $cpf = $_POST['cpf'];
    $email    = $_POST['email'];
    $senha    = $_POST['senha'];

    $sql = "INSERT INTO usuarios (cpf,email,senha)
            VALUES ('$cpf', '$email', '$senha')";

    if ($conexao->query($sql) === TRUE) {
       header("Location: ../../dashboard/dashboard.php");
        exit;
    } else {
        echo "Erro: " . $conexao->error;
    }
}

?>

<h2>Cadastrar Usuário</h2>

<form method="POST">

    <label>Nome:</label><br>
    <input type="text" name="cpf"><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br>

    <label>Senha:</label><br>
    <input type="password" name="senha" required><br><br>

    <button type="submit">Cadastrar</button>

</form>

<br>
<a href="">Voltar</a>
