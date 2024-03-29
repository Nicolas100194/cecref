function detectScroll() {
    let scrollPosition = window.scrollY
    if (scrollPosition > 300) {
        document.getElementsByClassName("redirect-sticky")[0].classList.add("redirect-sticky-display");
    } else {
        document.getElementsByClassName("redirect-sticky")[0].classList.remove("redirect-sticky-display");
    }
}
window.addEventListener('scroll', detectScroll);