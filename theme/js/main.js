let menuBtn = document.querySelector(".mobile-menu-btn");
let iconMenu = document.querySelector(".icon-hamburger");
let iconClose = document.querySelector(".icon-close");
let header = document.querySelector(".site-header");

let menu = document.querySelector(".global-nav");

menuBtn.addEventListener("click", function () {
    iconMenu.classList.toggle("-rotate-12");
    iconMenu.classList.toggle("opacity-0");
    iconMenu.classList.toggle("invisible");
    iconClose.classList.toggle("invisible");
    iconClose.classList.toggle("-rotate-45");
    iconClose.classList.toggle("opacity-0");
    header.classList.toggle("bg-white");
    header.classList.toggle("bg-opacity-80");

    menu.classList.toggle("hidden");
});

// animations
gsap.registerPlugin(ScrollTrigger);

gsap.from(".nova-branding--logo", {
    opacity: 0,
    y: -20,
    duration: 1,
    ease: "power3.out",
});

gsap.from(".site-header", {
    opacity: 0,
    duration: 1,
    delay: 0.25,
    ease: "power3.in",
});

gsap.to(".logo-mark ", {
    scrollTrigger: {
        trigger: ".sectionOne",
        start: 50,
        toggleActions: "restart none none reset",
    },
    y: 0,
    opacity: 1,
    duration: 1,
    ease: "power3.out",
});

gsap.to(".photo-card-1 ", {
    scrollTrigger: {
        trigger: ".sectionOne",
        start: 50,
        scrub: false,
        toggleActions: "restart none none reset",
    },
    x: -24,
    rotate: -12,
    duration: 1.5,
    ease: "power3.out",
});

//experiences section
gsap.to(".photo-card-2 ", {
    scrollTrigger: {
        trigger: ".sectionExperiences",
        start: 50,
        scrub: false,
        toggleActions: "restart none none reset",
    },
    x: 8,
    rotate: 12,
    duration: 1.5,
    ease: "power3.out",
});

gsap.to(".photo-card-3 ", {
    scrollTrigger: {
        trigger: ".sectionExperiences",
        start: 50,
        scrub: false,
        toggleActions: "restart none none reset",
    },
    //x: 0,
    rotate: -12,
    duration: 1.75,
    ease: "power3.out",
});

gsap.to(".logo-mark-visuals ", {
    scrollTrigger: {
        trigger: "section",
        start: 20,
        toggleActions: "restart none none reset",
    },
    scale: 0.9,
    y: -50,
    duration: 3,
    ease: "power3.out",
});

// page
gsap.from(".page-title", {
    opacity: 0,
    duration: 0.5,
    delay: 0.1,
    y: 16,
    ease: "power2.in",
});

gsap.from(".page-headline", {
    opacity: 0,
    duration: 0.5,
    delay: 0.3,
    y: 24,
    ease: "power2.in",
});

gsap.from(".page-entry", {
    opacity: 0,
    duration: 0.25,
    delay: 0.75,
    y: 16,
    ease: "power2.in",
});

gsap.from(".page-action", {
    opacity: 0,
    duration: 0.25,
    delay: 0.95,
    y: 8,
    ease: "power2.in",
});

gsap.from(".page-listings", {
    opacity: 0,
    duration: 0.25,
    delay: 1.25,
    y: 8,
    ease: "power2.in",
});
