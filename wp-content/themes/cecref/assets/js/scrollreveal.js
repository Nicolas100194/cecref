ScrollReveal()
    let animleft = {
        origin: 'left',
        distance: '50px',
        duration: 2000,

    }
    let animright = {
        origin: 'right',
        distance: '50px',
        duration: 2000,

    }

    let animbottom = {
        origin: 'bottom',
        distance: '50px',
        duration: 2000
    }

    let animcardleft = {
        origin: 'left',
        delay: 300,
        interval: 200,
        distance: '30px',
        opacity: 0,
        easing: "ease-in-out"
    }

    let animcardmiddle = {
        delay: 300,
        origin: 'top',
        distance: '30px',
        opacity: 0,
        easing: 'ease-in-out',
    }

    let animcardright = {
        delay: 300,
        origin: 'right',
        distance: '30px',
        opacity: 0,
        easing: 'ease-in-out',
    }

function ScrollRevealDiv(){
    ScrollReveal().reveal('.group-content-info-primary', animleft)
    ScrollReveal().reveal('.group-img-palo-alto', animleft)
    ScrollReveal().reveal('.group-left-row-50', animleft)
    ScrollReveal().reveal('.group-right-row-50', animright)
    ScrollReveal().reveal('.group-right-row', animright)
    ScrollReveal().reveal('.group-content-palo-alto', animright)
    ScrollReveal().reveal('.group-img-info-primary', animright)
    ScrollReveal().reveal('.section-inner-banner', animbottom)
    if (window.innerWidth > 725){
        ScrollReveal().reveal('.card-space-homepage', animcardleft)
        ScrollReveal().reveal('.card-space-consultation', animcardmiddle)
        ScrollReveal().reveal('.card-space-search', animcardright)
    }
}



window.addEventListener('DOMContentLoaded', function (){
    ScrollRevealDiv()
})

