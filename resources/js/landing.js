
document.addEventListener('DOMContentLoaded', () => {

    const toggle = document.getElementById('menuToggle');
    const navigation = document.getElementById('mobileNav');

    if (!toggle || !navigation) return;

    const closeMenu = () => {
        navigation.hidden = true;

        toggle.setAttribute('aria-expanded', 'false');
        toggle.setAttribute('aria-label', 'Buka menu navigasi');
    };

    toggle.addEventListener('click', () => {

        const willOpen = navigation.hidden;

        navigation.hidden = !willOpen;

        toggle.setAttribute('aria-expanded', String(willOpen));

        toggle.setAttribute(
            'aria-label',
            willOpen ? 'Tutup menu navigasi' : 'Buka menu navigasi'
        );

    });

    navigation.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', closeMenu);
    });

    document.addEventListener('keydown', event => {
        if (event.key === 'Escape') {
            closeMenu();
        }
    });

    window.matchMedia('(min-width: 901px)')
        .addEventListener('change', event => {

            if (event.matches) {
                closeMenu();
            }

        });

});
