const btnMenuMobile = document.getElementsByClassName('btn-menu-mobile')
const menuMobile = document.getElementsByClassName('menu-mobile')
const site = document.getElementsByClassName('site-container')




function DisplayMenuMobile(){
    Array.from(btnMenuMobile).forEach(btn =>{
        btn.addEventListener('click', (e)=>{
            menuMobile[0].classList.toggle('menu-mobile-display')
            site[0].classList.toggle('site-container-move')
        })
    })
}

DisplayMenuMobile()