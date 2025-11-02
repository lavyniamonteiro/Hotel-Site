var hamburguer = document.getElementById("hamburguer");
var menuLista = document.getElementById("menu-aberto");
function toggleMenu(){
    menuLista.classList.toggle("menu-ativo");
}
hamburguer.addEventListener('click', toggleMenu);
console.log("hey")