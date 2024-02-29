const menuHasChildren = document.getElementsByClassName('menu-item-has-children')
let lastEltClick = null

function DisplaySubmenu(menuCurrent){
    if(menuCurrent.childNodes[2].className === "sub-menu"){
        menuCurrent.childNodes[2].className = "sub-menu-display"
    } else if (menuCurrent.childNodes[2].className === "sub-menu-display"){
        menuCurrent.childNodes[2].className = "sub-menu"

    }
}

function VerifyDisplay(){
    Array.from(menuHasChildren).forEach(menu =>{
        if(menu.childNodes[2].className === "sub-menu-display"){
            menu.childNodes[2].className = "sub-menu"
            RemoveClassActive(menu)
        }
    })
}

function RemoveClassActive(menuCurrent){
    menuCurrent.classList.remove('li-active')
}

function MenuCurrent(){
    Array.from(menuHasChildren).forEach(menu =>{
        menu.addEventListener('click', (e)=>{
            let menuCurrent = menu
            menuCurrent.classList.add('li-active')
            if(menuCurrent !== lastEltClick)
                VerifyDisplay()
            if(menuCurrent === lastEltClick)
                RemoveClassActive(menuCurrent)
            lastEltClick = menuCurrent
            DisplaySubmenu(menuCurrent)
        })
    })
}
MenuCurrent()

