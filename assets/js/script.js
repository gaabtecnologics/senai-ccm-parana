/* Interações leves. O conteúdo continua acessível sem JavaScript. */
(() => {
    document.documentElement.classList.add('js-enabled');

    const button = document.querySelector('.menu-toggle');
    const menu = document.querySelector('#menu-principal');
    const closeMenu = () => {
        if (!button || !menu) return;
        button.setAttribute('aria-expanded', 'false');
        menu.classList.remove('is-open');
        document.body.classList.remove('menu-open');
    };

    if (button && menu) {
        button.addEventListener('click', () => {
            const open = button.getAttribute('aria-expanded') !== 'true';
            button.setAttribute('aria-expanded', String(open));
            menu.classList.toggle('is-open', open);
            document.body.classList.toggle('menu-open', open);
        });

        menu.querySelectorAll('a').forEach((link) => link.addEventListener('click', closeMenu));
        document.addEventListener('keydown', (event) => event.key === 'Escape' && closeMenu());
        window.addEventListener('resize', () => window.innerWidth > 720 && closeMenu());
    }

    const items = document.querySelectorAll('.reveal');
    if (!('IntersectionObserver' in window)) {
        items.forEach((item) => item.classList.add('is-visible'));
        return;
    }

    const observer = new IntersectionObserver((entries, currentObserver) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            entry.target.classList.add('is-visible');
            currentObserver.unobserve(entry.target);
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -32px' });

    items.forEach((item, index) => {
        item.style.transitionDelay = `${Math.min(index * 30, 180)}ms`;
        observer.observe(item);
    });
})();
