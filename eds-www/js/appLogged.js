const titreSpans = document.querySelectorAll('h1 span');
const btns = document.querySelectorAll('.btn-first');
const logo = document.querySelector('.logo');
const medias = document.querySelectorAll('.bulle');
const menuButton = document.querySelector(".nav-toggler")
const navigation = document.querySelector("nav")
const menu = document.querySelectorAll(".line")
const start = document.querySelector(".img-first")
const text = document.querySelector(".container-first")

menuButton.addEventListener("click", toggleNav)

function toggleNav(){
    menuButton.classList.toggle("active")
    navigation.classList.toggle("active")
    text.classList.toggle("activer")
}

window.addEventListener('load', () => {

    const TL = gsap.timeline({paused: true});

    TL
    .to(start, 3, {transform: "scale(5)",ease: "power2.in"})
    .to(start, 1.5, {opacity:0, ease: "power2.in"}, 0.5)
    .to(start, 0, {transform: "scale(0)",ease: "power2.out"})
    .staggerFrom(titreSpans, 1, {top: -50, opacity: 0, ease: "power2.out"}, 0.3,)
    .staggerFrom(btns, 1, {opacity: 0, ease: "power2.out"},0.3)
    .staggerFrom(medias, 1, {right: -200, ease: "power2.out"}, 0.3, '-=1')
    .staggerFrom(menu, 0.8, {right: -100, ease: "power2.out"}, 0.3)
    .from(logo, 0.4, {transform: "scale(0)", ease: "power2.out"} );
    TL.play();
})

