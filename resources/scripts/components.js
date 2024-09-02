class MenuDrawer extends HTMLElement {
    constructor() {
        super();
        self.trigger = document.querySelector('.menu-toggle');
        self.overlay = this.querySelector('.drawer-menu__overlay');
        self.drawer = this.querySelector('.drawer-menu');
        self.closeEl = this.querySelector('.drawer-menu__close');
        self.CloseAnnouncementEl = document.querySelector('#announcement-close');
        self.announcement = document.querySelector('.announcement');
        this.announcementHeader = document.querySelector('.announcement_header');
        this.Popupreview = document.querySelector('.Popup-review');
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
        this.announcementHeader.style.maxHeight = '0px';

        if (window.innerWidth <= 768) { 
            this.Popupreview.style.top = '225px'; 
        }
    }
    
    connectedCallback() {
        self.trigger.addEventListener('click', this.open);
        self.overlay.addEventListener('click', this.close);
        self.closeEl.addEventListener('click', this.close);
        self.CloseAnnouncementEl.addEventListener('click', this.closeAnnouncement.bind(this));
        window.addEventListener('scroll', this.handleScroll.bind(this)); 
    }
}

class Accordion extends HTMLElement {
    constructor() {
        super();
        this.triggers = this.querySelectorAll('.accordion__trigger');
        this.contents = this.querySelectorAll('.accordion__content');
    }

    toggle(index) {
        this.contents.forEach((content, i) => {
            if (i === index) {
                content.classList.toggle('active');
            } else {
                content.classList.remove('active');
            }
        });
    }

    connectedCallback() {
        this.triggers.forEach((trigger, index) => {
            trigger.addEventListener('click', (e) => {
                e.preventDefault();
                this.toggle(index);
            });
        });
    }
}

class PopupNewsletter extends HTMLElement {
    constructor() {
        super();
        this.popupEl = this.querySelector('[data-popup]');
        this.closeEl = this.querySelectorAll('[data-popup-close]');
        this.openEl = this.querySelector('[data-popup-open]');
        this.overlay = this.querySelector('[data-popup-overlay]');
        this.cookieName = 'popupClosed';
        this.autotriggered = false; // To prevent multiple triggers
    }

    open() {
        if (!this.getCookie(this.cookieName) && !this.autotriggered) {
            this.autotriggered = true; // Mark as triggered to prevent multiple opens
            this.popupEl.classList.add('flex');
            this.popupEl.classList.remove('hidden');
            this.overlay.classList.remove('hidden');
            this.overlay.classList.add('flex');
        }
    }

    openImportant() {
        this.popupEl.classList.add('flex');
        this.popupEl.classList.remove('hidden');
        this.overlay.classList.remove('hidden');
        this.overlay.classList.add('flex');
    }

    close() {
        this.popupEl.classList.remove('flex');
        this.popupEl.classList.add('hidden');
        this.overlay.classList.add('hidden');
        this.overlay.classList.remove('flex');
        this.setCookie(this.cookieName, 'true', 1); // Set cookie for 1 day
    }

    setCookie(name, value, days) {
        let expires = "";
        if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    getCookie(name) {
        const nameEQ = name + "=";
        const ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    connectedCallback() {
        if (!this.getCookie(this.cookieName)) {
            // Set a timer for 10 seconds
            setTimeout(() => {
                this.open();
            }, 10000);

            // Listen for scroll events
            window.addEventListener('scroll', () => {
                if (!this.scrollTriggered && window.scrollY > 1000) {
                    this.open();
                }
            });
        }

        this.overlay.addEventListener('click', () => this.close());
        this.closeEl.forEach((el) => {
            el.addEventListener('click', () => this.close());
        });
        this.openEl.addEventListener('click', () => this.openImportant());
    }
}

class Reviews extends HTMLElement {
    constructor() {
        super();
        this.reviews = this.querySelectorAll('[data-review]');
        this.closeEls = this.querySelectorAll('[data-review-close]');
        this.intervalId = null; 
        this.currentIndex = 0; // Track the current review index

        this.startInterval(); 
    }

    startInterval() {
        this.intervalId = setInterval(() => {
            this.toggle(this.currentIndex);
            this.currentIndex = (this.currentIndex + 1) % this.reviews.length; // Loop back to the start
        }, 5000);
    }

    stopInterval() {
        this.reviews.forEach((review) => {
            review.classList.add('hidden-review');
        });
        clearInterval(this.intervalId);
    }

    toggle(index) {
        this.reviews.forEach((review, i) => {
            if (i === index) {
                review.classList.remove('hidden-review'); // Show the current review
            } else {
                review.classList.add('hidden-review'); // Hide other reviews
            }
        });
    }

    connectedCallback() {
        this.closeEls.forEach((el) => {
            el.addEventListener('click', () => {
                this.stopInterval();
            });
        });
    }
}

export const components = () => {
    customElements.define('menu-drawer', MenuDrawer);
    customElements.define('accordion-component', Accordion);
    customElements.define('popup-newsletter', PopupNewsletter);
    customElements.define('reviews-component', Reviews);
}

import.meta.webpackHot?.accept(components);


