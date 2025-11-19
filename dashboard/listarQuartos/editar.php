<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar quartos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="editar.css">
</head>

<body>  
    <!--BARRA LATERAL-->
    <aside class="sidebar">
        <h2><a href="../../homepage/homepage.html" class="mare">Maré Alta</a></h2>
        <ul>
            <li><a href="../dashboard.php" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
        </ul>
        <hr class="hrr">
        <h3><i class="fas fa-bed"></i> Quartos</h3>
        <ul>
            <li><a href="../listarQuartos/listar_quartos.php"><i class="fas fa-list"></i> Listar Quartos</a></li>
            <li><a href="../cadastrarQuartos/cad-quarto.php"><i class="fas fa-plus-circle"></i> Cadastrar Quarto</a></li>
        </ul>
        <h3><i class="fas fa-book"></i> Reservas</h3>
        <ul><li><a href="../listar_reservas/reservas.php"><i class="fas fa-calendar-alt"></i> Listar Reservas</a></li>
            <li><a href="../NovaReserva/cad_reserva.php"><i class="fas fa-calendar-plus"></i> Fazer Reserva</a></li>
        </ul>

        <hr class="hrr">
        <ul>
            <li><a href="#"><i class="fas fa-sign-out-alt"></i> Sair</a></li>
        </ul>
    </aside>
    <section class="main-content">
        <header class="header">
            <h1>Editar Quartos</h1>
            <span>Bem-vindo, <strong>Funcionário Maré Alta</strong>!</span>
        </header>        
        <div class="editar-form">
        <?php include 'editar_quartos.php'; ?>
        </div>
    </section>
</body>
</html>