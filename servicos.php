<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/homepage.css">
    <link rel="stylesheet" href="styles/servicos.css">
    <!--FONTE-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <!--FONTE-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <!--FONTE-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" 
rel="stylesheet">   
    <!--FONTE-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Londrina+Solid:wght@100;300;400;900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" 
rel="stylesheet">
    <!--BIBLIOTECA DE ICONES FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Maré Alta Resort</title>
</head>

<body>
     <!-- MENU DE NAVEGAÇÃO (AGORA FORA DO HEADER) -->
    <nav id="menu">
        <div class="top-bar"></div>
        <div id="hamburguer">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul id="menu-aberto">
         <!-- Adicione a classe "menu-dropdown" aqui -->
        <li class="menu-dropdown">
            <a href="#" class="menu-letras">Hotel <i class="fa-solid fa-angle-down"></i></a>
            <ul>
                <li><a href="#" class="dropstyle">Serviços</a></li>
                <li><a href="#" class="dropstyle">Pré-Check In</a></li>
            </ul>
        </li>
         <!-- Adicione a classe "menu-dropdown" aqui também -->
        <li class="menu-dropdown">
            <a href="#" class="menu-letras">Acomodações <i class="fa-solid fa-angle-down"></i></a>
            <ul>
                <li><a href="#" class="dropstyle">Quarto Comum</a></li>
                <li><a href="#" class="dropstyle">Quarto Triplo</a></li>
                <li><a href="#" class="dropstyle">Quarto Premium</a></li>
            </ul>
        </li>

        <li><a href="#" class="menu-letras">Sobre</a></li>
        <li><button class="menu-letras">Reservar</button></li> 
    </ul>
    </nav>

    <!-- HEADER (AGORA SÓ COM A IMAGEM E TEXTOS) -->
    <header id="meu-header">
        <div class="bg-header">
            <img src="./images/DESKFOTO.png" alt="Foto do hotel" class="img-header">
            <h1 id="texto-header">Maré Alta</h1>
            <h2 id="resort-header">R E S O R T</h2>
            <a href=""><button id="botao-header">Reserve Agora | ➔ </button></a>
        </div>
    </header>
    <!--ANIMAÇÃO -->
    <section class="secao">
        <div class="title-div">
            <h1 class="title">Por que escolher a Maré Alta?</h1>
            <h2 class="subtitle">Números que falam por si só</h2>
        </div>
    <div class="animacao-container">
        <div class="animacao">
            <img src="./images/estrela .png" alt="Estrela Azul" class="estrela">
            <h1><span data-count="4.9">0</span>/5</h1>
            <h2 class="animacao-2">Avaliação Média</h2>
            <h3 class="h3-animacao">Dos nossos hóspedes</h3>
        </div>
        <div class="animacao">
            <img src="./images/coracao.png" alt="coração azul" class="coracao" >
            <h1><span data-count="15000">0</span>+</h1>
            <h2 class="animacao-2">Clientes Felizes</h2>
            <h3 class="h3-animacao">Desde de nosssa abertura</h3>
        </div>
        <div class="animacao">
            <img src="./images/medalha.png" alt="coração azul" class="medalha" >
            <h1><span data-count="15">0</span>+</h1>
            <h2 class="animacao-2">Anos de experiência</h2>
            <h3 class="h3-animacao">Servindo com qualidade</h3>
        </div>
        <div class="animacao">
            <img src="./images/onda.png" alt="coração azul" class="onda" >
            <h1><span data-count="25">0</span>+</h1>
            <h2 class="animacao-2">Prêmios Internacionais</h2>
            <h3 class="h3-animacao">Reconhecimento Mundial</h3>
    </div>
    </div>
    </section>

<!--  SEÇÃO DE RESERVA -->
<section class="reserva-rapida">
    <div class="reserva-container">
        <button class="reserva-botao">
            <i class="fa-solid fa-calendar-days"></i>
            <span>Calendário</span>
        </button>
        <button class="reserva-botao">
            <i class="fa-solid fa-user-group"></i>
            <span>Hóspedes</span>
        </button>
        <button class="reserva-botao">
            <i class="fa-solid fa-ticket"></i>
            <span>Cupom</span>
        </button>
    </div>
</section>

<div class="container">
    <?php
        echo '<div class="bloco bloco-imagem">';
        echo 'IMAGEM';
        echo '</div>';

        echo '<div class="bloco bloco-texto">';
        echo 'Piscina (e Área de Lazer Aquática)';

        echo '</div>';

        echo '<div class="bloco bloco-texto">';
        echo 'DESCRIÇÃO';
        echo '</div>';

        echo '<div class="bloco bloco-imagem">';
        echo 'IMAGEM';
        echo '</div>';
    ?>
</div>


<section id="gradiente">
            <h1>Pronto para sua Experiência Inesquecível?</h1>
            <h3>Entre em contato conosco hoje e reserve sua estadia no Maré Alta Hotel</h3>
            <div class="botoes">
            <button class="botaoReservar">Reservar</button>
            <button class="botaofale">Fale Conosco</button>
        </div>
        </section>

       <footer>
    <div class="footer-container">
        <!-- Coluna 1 -->
        <div class="footer-col">
            <h3 class="footer-title-main">Maré Alta Resort</h3>
            <p class="footer-des">Seu refúgio de luxo à beira-mar</p>
        </div>

        <!-- Coluna 2: Navegação -->
        <div class="footer-col">
            <h4 class="footer-title">Navegação</h4>
            <ul class="footer-links">
                <li><a href="#quartos">Quartos</a></li>
                <li><a href="#quartos">Serviços</a></li>
                <li><a href="#quartos">Pré-Check In</a></li>
                <li><a href="#servicos">Sobre</a></li>
            </ul>
        </div>

        <!-- Coluna 3: Contato -->
        <div class="footer-col">
            <h4 class="footer-title">Contato</h4>
            <ul class="footer-contact">
                <li><a href="tel:+558333333333">+55 (83 ) 3333-3333</a></li>
                <li><a href="mailto:infomarealta@gmail.com">infomarealta@gmail.com</a></li>
            </ul>
        </div>

        <!-- Coluna 4: Redes Sociais -->
        <div class="footer-col">
            <h4 class="footer-title">Redes Sociais</h4>
            <ul class="footer-socials">
                <li>
                    <a href="https://instagram.com" target="_blank">
                        <i class="fab fa-instagram"></i>
                        <span>Instagram</span>
                    </a>
                </li>
                <li>
                    <a href="https://facebook.com" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                        <span>Facebook</span>
                    </a>
                </li>
            </ul>
        </div>
         <div class="footer-bottom">
        <p>&copy; 2024 Maré Alta Resort. Todos os direitos reservados.</p>
    </div>
    </div>
</footer>

<script src="./scripts/homepage.js"></script>
</body> 
</html>