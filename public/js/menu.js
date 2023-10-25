(() => {
    const openMenu = document.getElementById('openMenu');
    const menu = document.getElementById('menuMobile');
    const closeMenu = document.getElementById('closeMenu');
    const menuItems = document.querySelectorAll('#menuMobile a');

    const toggleMenu = () => {
        menu.classList.toggle("activeMenu")
    }

    openMenu.addEventListener('click', toggleMenu);
    closeMenu.addEventListener('click', toggleMenu);
    menuItems.forEach(item => {
        item.addEventListener('click', toggleMenu);
    });
})();