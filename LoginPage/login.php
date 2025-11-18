<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login / Cadastro</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>

<div class="container">

    <div class="form-box login">
        <h2>Fazer Login</h2>
        <p>Use seu CPF e Senha</p>

        <form action="../dashboard/dashboard.php" method="POST">
            <input type="text" name="cpf" placeholder="CPF" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit" class="btn">Entrar</button>
        </form>
    </div>

    <div class="form-box register">
        <h2>Criar Conta</h2>
        <p>Use o CPF para criar sua conta</p>

        <form action="cadastro.php" method="POST">
            <input type="text" name="cpf" placeholder="CPF" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <input type="text" name="chave" placeholder="Chave" required>
            <button type="submit" class="btn">Cadastrar-se</button>
        </form>
    </div>

    <div class="toggle-box">
        <div class="toggle">
            <div class="toggle-left">
                <h2>Olá, funcionário!</h2>
                <p>Registre-se com seus dados pessoais para<br> poder ter acesso à página exclusiva.</p>
                <button class="btn ghost" id="btn-cadastrar">Cadastrar-se</button>
            </div>

            <div class="toggle-right">
                <h2>Bem-vindo de volta!</h2>
                <p>Entre na sua conta com seus dados pessoais.</p>
                <button class="btn ghost" id="btn-login">Entrar</button>
            </div>
        </div>
    </div>

</div>

<script src="script.js"></script>

</body>
</html>
