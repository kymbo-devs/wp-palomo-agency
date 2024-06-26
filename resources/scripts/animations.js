export const animations = () => {
    gsap.fromTo('.hero__content h1, .hero__content h2, .hero__content h3, .hero__content h4, .hero__content h5, .hero__content h6', 
        {
        opacity: 0,
        x: -100
        }, 
        {
        opacity: 1,
        x: 0,
        duration: 1.5,
        ease: 'power2.out'
        }
    );
    gsap.fromTo('.hero__content p', 
        {
        opacity: 0,
        }, 
        {
        opacity: 1,
        duration: 0.5,
        ease: 'power2.out'
        }
    ).delay(1.5);
    gsap.fromTo('.bounce-animated', 
        {
            opacity: 0,
            scale: 0.5,
            y: 50
        }, 
        {
            opacity: 1,
            scale: 1,
            y: 0,
            duration: 0.8,
            ease: 'bounce.out'
        }
    ).delay(2);
    gsap.fromTo('.fade-in-animated', 
        {
            opacity: 0,
        }, 
        {
            opacity: 1,
            duration: 1.5,
            ease: 'power2.out'
        }
    ).delay(2);
}

import.meta.webpackHot?.accept(animations);