class MenuDrawer extends HTMLElement {
    constructor() {
        super();
        self.trigger = document.querySelector('.menu-toggle');
        self.overlay = this.querySelector('.drawer-menu__overlay');
        self.drawer = this.querySelector('.drawer-menu');
        self.closeEl = this.querySelector('.drawer-menu__close');
        self.CloseAnnouncementEl = document.querySelector('#announcement-close');
        self.announcement = document.querySelector('.announcement');
    }

    open() {
        self.overlay.classList.add('active');
        self.drawer.classList.add('active');
    }

    close() {
        self.overlay.classList.remove('active');
        self.drawer.classList.remove('active');
    }

    closeAnnouncement() {
        self.announcement.classList.add('max-h-0');
        self.announcement.classList.add('py-0');
    }

    connectedCallback() {
        self.trigger.addEventListener('click', this.open);
        self.overlay.addEventListener('click', this.close);
        self.closeEl.addEventListener('click', this.close);
        self.CloseAnnouncementEl.addEventListener('click', this.closeAnnouncement);
    }
}

export const components = () => {
    customElements.define('menu-drawer', MenuDrawer);
}

import.meta.webpackHot?.accept(components);