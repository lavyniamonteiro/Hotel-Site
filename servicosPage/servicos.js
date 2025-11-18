// Menu Hamburguer Mobile
        const hamburguer = document.getElementById('hamburguer');
        const menuAberto = document.getElementById('menu-aberto');

        hamburguer.addEventListener('click', () => {
            menuAberto.classList.toggle('menu-ativo');
        });

        // Dropdown Mobile
        const menuItemsWithDropdown = document.querySelectorAll('.menu-item > .menu-letras');
        
        menuItemsWithDropdown.forEach(link => {
            const submenu = link.nextElementSibling;
            
            if (submenu && submenu.classList.contains('dropdown-menu')) {
                link.addEventListener('click', function(e) {
                    if (window.innerWidth < 768) {
                        e.preventDefault();
                        submenu.classList.toggle('submenu-open');
                        const icon = this.querySelector('i');
                        if (icon) {
                            icon.classList.toggle('submenu-open-icon');
                        }
                    }
                });
            }
        });