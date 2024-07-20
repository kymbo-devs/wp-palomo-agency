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

    gsap.fromTo('.hero .bounce-animated', 
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

    gsap.fromTo('.size-partner_image', 
        {
            opacity: 0,
        }, 
        {
            opacity: 1,
            duration: 1.5,
            ease: 'power2.out'
        }
    ).delay(2);

    gsap.from('.text-icons .text-icons__blocks h1, .text-icons .text-icons__blocks h2, .text-icons .text-icons__blocks h3, .text-icons .text-icons__blocks h4, .text-icons .text-icons__blocks h5, .text-icons .text-icons__blocks h6', 
        {
            duration: 4,
            text: " ",
            ease: "none",
            scrollTrigger: {
                trigger: '.text-icons',
                start: 'top center+=200',
                end: 'bottom bottom-=400',
                scrub: true
            }
        }
    );

    gsap.fromTo('.text-icons .text-icons__blocks p',
    {
        opacity: 0,
    },
    {
        opacity: 1,
        duration: 1.5,
        ease: 'power2.out',
        scrollTrigger: {
            trigger: '.text-icons',
            start: 'bottom center+=200',
            end: 'bottom bottom-=400',
            scrub: true
        }
    }
    );
    
    gsap.fromTo('.text-icons .bounce-animated',
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
        ease: 'bounce.out',
        scrollTrigger: {
            trigger: '.text-icons',
            start: 'bottom center+=200',
            end: 'bottom bottom-=400',
            scrub: true
        }
    }
    );

    gsap.fromTo('.text-icons .size-text-icons__icon:first-child',
        {
        opacity: 0,
        x: -100
        }, 
        {
        opacity: 1,
        x: 0,
        duration: 1.5,
        ease: 'power2.out',
        scrollTrigger: {
            trigger: '.text-icons',
            start: 'top center',
            end: 'bottom+=400 bottom',
            scrub: true
        }
        }
    );
    
    gsap.fromTo('.text-icons .size-text-icons__icon:last-child',
        {
        opacity: 0,
        x: 100
        }, 
        {
        opacity: 1,
        x: 0,
        duration: 1.5,
        ease: 'power2.out',
        scrollTrigger: {
            trigger: '.text-icons',
            start: 'top center',
            end: 'bottom+=400 bottom',
            scrub: true
        }
        }
    );
}

import.meta.webpackHot?.accept(animations);