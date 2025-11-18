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