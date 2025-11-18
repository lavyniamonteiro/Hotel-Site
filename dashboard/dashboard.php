<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Funcionários</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="dash.css">
</head>

<body>
    <!--BARRA LATERAL-->
    <aside class="sidebar">
        <h2>Maré Alta</h2>
        <ul>
            <li><a href="dashboard.html" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        </ul>
        <hr class="hrr">
        <h3><i class="fas fa-bed"></i> Quartos</h3>
        <ul>
            <li><a href="./listarQuartos/listar_quartos.php"><i class="fas fa-list"></i> Listar Quartos</a></li>
            <li><a href="cadastrar_quarto.html"><i class="fas fa-plus-circle"></i> Cadastrar Quarto</a></li>
        </ul>
        <h3><i class="fas fa-book"></i> Reservas</h3>
        <ul><li><a href="lista_reservas.html"><i class="fas fa-calendar-alt"></i> Listar Reservas</a></li>
            <li><a href="cadastrar_reserva.html"><i class="fas fa-calendar-plus"></i> Fazer Reserva</a></li>
        </ul>

        <hr class="hrr">
        <ul>
            <li><a href="#"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
        </ul>
    </aside>
    <!--main-->

    <section class="main-content">
        <header class="header">
            <h1>Dashboard</h1>
            <span>Bem-vindo, <strong>Funcionário Maré Alta</strong>!</span>
        </header>

        <div class="card">
            <h2>Visão geral</h2>
            <p>Use o menu lateral para gerenciar Quartos e Reservas do Maré Alta Resort.</p>
        </div>

        <div class="dash-grid">
            <div class="dashboard-card">
                <h3><i class="fas fa-bed"></i> Quartos</h3>
                <p>Gerencie o cadastro, edição e status dos quartos do hotel.</p>
                <a href="./listarQuartos/listar_quartos.html">Gerenciar Quartos</a>
            </div>
            <div class="dashboard-card">
                <h3><i class="fas fa-book"></i> Reservas</h3>
                <p>Acompanhe, crie e cancele reservas de hóspedes.</p>
                <a href="lista_reservas.html">Gerenciar Reservas</a>
            </div>

            <div class="dashboard-card">
                <h3><i class="fas fa-plus-circle"></i> Novo Quarto</h3>
                <p>Cadastre um novo quarto no sistema.</p>
                <a href="cadastrar_quarto.html">Cadastrar</a>
            </div>

            <div class="dashboard-card">
                <h3><i class="fas fa-calendar-plus"></i> Nova Reserva</h3>
                <p>Registre uma nova reserva de hóspede.</p>
                <a href="cadastrar_reserva.html">Reservar</a>
            </div>
        </div>
    </section>

</body>
</html>