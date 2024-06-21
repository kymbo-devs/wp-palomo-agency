class MenuDrawer extends HTMLElement {
    constructor() {
        super();
        self.trigger = document.querySelector('.menu-toggle');
        self.overlay = this.querySelector('.drawer-menu__overlay');
        self.drawer = this.querySelector('.drawer-menu');
        self.close = this.querySelector('.drawer-menu__close');
    }

    open() {
        self.overlay.classList.add('active');
        self.drawer.classList.add('active');
    }

    close() {
        self.overlay.classList.remove('active');
        self.drawer.classList.remove('active');
    }

    connectedCallback() {
        self.trigger.addEventListener('click', this.open);
        self.overlay.addEventListener('click', this.close);
        self.close.addEventListener('click', this.close);
    }
    }

export const components = () => {
    customElements.define('menu-drawer', MenuDrawer);
}

import.meta.webpackHot?.accept(components);