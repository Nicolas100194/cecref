const sticky = document.getElementsByClassName('sticky')
const asideRight = document.getElementsByClassName('aside-right')
const btnCloseAside = document.getElementsByClassName('btn-close-aside')

function DisplayAside(){
    Array.from(sticky).forEach(sticky =>{
        sticky.addEventListener('click', (e)=>{
            asideRight[0].classList.toggle('aside-right-display')

        })
    })
}

function CloseAside(){
    Array.from(btnCloseAside).forEach(btnCloseAside =>{
        btnCloseAside.addEventListener('click', (e)=>{
            asideRight[0].classList.remove('aside-right-display')
        })
    })
}

DisplayAside()
CloseAside()