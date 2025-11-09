var hamburguer = document.getElementById("hamburguer");
var menuLista = document.getElementById("menu-aberto");
function toggleMenu(){
    menuLista.classList.toggle("menu-ativo");
}
hamburguer.addEventListener('click', toggleMenu);

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
