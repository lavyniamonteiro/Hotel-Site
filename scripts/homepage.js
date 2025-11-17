var hamburguer = document.getElementById("hamburguer");
var menuLista = document.getElementById("menu-aberto");
function toggleMenu(){
    menuLista.classList.toggle("menu-ativo");
}
hamburguer.addEventListener('click', toggleMenu);
/* */
//abrir e fechar
hamburguer.addEventListener("click", () => {
    menuAberto = !menuAberto;
    menu.style.display = menuAberto ? "flex" : "none";
});

//aparece barra fixa
let lastScroll = 0;
const topBar = document.querySelector(".top-bar");

window.addEventListener("scroll", () => {
    const current = window.scrollY;
    const maxScroll = document.body.scrollHeight - window.innerHeight;

    if (current > lastScroll && current > 50) {
        // Descendo → mostra a barra
        topBar.classList.add("show");
    } else if (current < lastScroll && current > 0) {
        // Subindo → mostra a barra, exceto se estiver no topo
        topBar.classList.add("show");
    }

    if (current === 0) {
        // No topo → esconde a barra
        topBar.classList.remove("show");
    }

    lastScroll = current;
});



//ANIMAÇÃO DOS NUMEROS 
const spans = document.querySelectorAll('.animacao span[data-count]'); //seleciona todos os spans dentro de .animacao com data-count
// função que anima de 0 até o numero que ta no data count 
function animacao(span, duration = 2000){ // defino que a animação vai pegar os valores do span e vai ter x duração
    const target = Number(span.getAttribute('data-count')); //target é  alvo, nosso alvo é o valor dentro de data count do span
    let current = 0; //começa do zero
    const stepTime = 30; //a cada 30 milissegundos (ou 0,03 s), o número vai atualizar
    const increment = Math.ceil(target/(duration/stepTime)); // quanto o número vai subir de cada vez.
/*duração total da animação: 1400 e step time é 30. para sabermos a exata pace que o numero sobre
precisamos dividir a dura. pelo .time, e pega target(ou seja, valor numerico do span) e dividir pelo resultado da divisao anterior. assim
teremos o valor em que o numero vai subir. 15000 subiria de 326 em 326 até chegar lá*/


    const interval = setInterval(() =>{ //"execute esse bloco de código de tempos em tempos (30ms)"
        current += increment; // soma o incremento dentro de current que ta zerada
        if (current >= target) { //Se o número atual já chegou (ou passou) do alvo
            current = target; //garante o valor exato
            clearInterval(interval); // para a animação imediatamente
        }   
    //atualiza o texto invisivel no span
    span.textContent = current.toLocaleString('pt-BR');
 }, stepTime);   

}

function startAnimacao(){
    spans.forEach(span =>{ //percorre cada span da lista spans. span representa o numero atual que esta sendo verificado
        const medidas = span.getBoundingClientRect(); //getBoundingClientRect() retorna um objeto com a posição do elemento na tela (topo, base, largura, altura).
        const inView = medidas.top < window.innerHeight && medidas.bottom > 0;
//window.innerHeight é a altura da tela visível.
/*medidas.top < window.innerHeight → o topo do span está abaixo do topo da
tela, ou seja, entrou na tela.
medidas.bottom > 0 → a base do span ainda não passou completamente para cima da tela.*/
        if (inView && !span.dataset.animated){ //inView → o span está visível na tela e !span.dataset.animated → o span ainda não foi animado
            animacao(span);
            span.dataset.animated = 'true'; //marca como animado
            console.log("já foi animado");
        }
    });
}
window.addEventListener("scroll", startAnimacao);
window.addEventListener('load', startAnimacao);



// CARROSSEL DE FOTOS
// CARROSSEL DE FOTOS
const slides = document.querySelector('.slides');
const slideElements = document.querySelectorAll('.slide');
const prevBtn = document.querySelector('.carousel-btn-prev');
const nextBtn = document.querySelector('.carousel-btn-next');
const indicators = document.querySelectorAll('.indicator');

let currentSlide = 0;
const totalSlides = slideElements.length;

function goToSlide(n) {
    currentSlide = n;
    slides.style.transform = `translateX(-${currentSlide * 100}%)`;
    
    indicators.forEach((indicator, index) => {
        indicator.classList.toggle('active', index === currentSlide);
    });
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    goToSlide(currentSlide);
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    goToSlide(currentSlide);
}

nextBtn.addEventListener('click', nextSlide);
prevBtn.addEventListener('click', prevSlide);

indicators.forEach((indicator, index) => {
    indicator.addEventListener('click', () => goToSlide(index));
});

// Auto-play
setInterval(nextSlide, 5000);

/* DROPDOWN MOBILE */
// Seleciona todos os itens do menu que têm submenu (li com ul)
const menuItems = document.querySelectorAll('#menu-aberto > li');

menuItems.forEach(item => {
    const submenu = item.querySelector('ul');
    
    // Se o item tem um submenu, adiciona funcionalidade de dropdown
    if (submenu) {
        const link = item.querySelector('a');
        
        link.addEventListener('click', (e) => {
            // Apenas em telas pequenas (mobile), prevenir o comportamento padrão
            if (window.innerWidth < 768) {
                e.preventDefault();
                
                // Toggle da classe de dropdown ativo
                item.classList.toggle('menu-dropdown-active');
                
                // Fecha outros dropdowns
                menuItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        otherItem.classList.remove('menu-dropdown-active');
                    }
                });
            }
        });
    }
});

// Fecha dropdown ao clicar em um link do submenu (mobile)
document.querySelectorAll('#menu-aberto li ul li a').forEach(link => {
    link.addEventListener('click', () => {
        if (window.innerWidth < 768) {
            const parentLi = link.closest('li').parentElement.closest('li');
            parentLi.classList.remove('menu-dropdown-active');
        }
    });
});