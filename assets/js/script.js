/*
 * SENAI + CCM-PR | Interações progressivas
 * O conteúdo permanece acessível sem JavaScript.
 */

(() => {
    document.documentElement.classList.add('js-enabled');

    const menuButton = document.querySelector('.menu-toggle');
    const menu = document.querySelector('#menu-principal');

    const closeMenu = () => {
        if (!menuButton || !menu) return;
        menuButton.setAttribute('aria-expanded', 'false');
        menu.classList.remove('is-open');
        document.body.classList.remove('menu-open');
    };

    if (menuButton && menu) {
        menuButton.addEventListener('click', () => {
            const isOpen = menuButton.getAttribute('aria-expanded') === 'true';
            menuButton.setAttribute('aria-expanded', String(!isOpen));
            menu.classList.toggle('is-open', !isOpen);
            document.body.classList.toggle('menu-open', !isOpen);
        });

        menu.querySelectorAll('a').forEach((link) => link.addEventListener('click', closeMenu));
        window.addEventListener('resize', () => {
            if (window.innerWidth > 720) closeMenu();
        });
    }

    const revealItems = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window && revealItems.length) {
        const observer = new IntersectionObserver((entries, currentObserver) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                entry.target.classList.add('is-visible');
                currentObserver.unobserve(entry.target);
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px' });

        revealItems.forEach((item, index) => {
            item.style.transitionDelay = `${Math.min(index * 35, 210)}ms`;
            observer.observe(item);
        });
    } else {
        revealItems.forEach((item) => item.classList.add('is-visible'));
    }
})();
