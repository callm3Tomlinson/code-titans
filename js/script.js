const currentLocation = window.location.pathname;
const navLinks = document.querySelectorAll('.menu a').
forEach(link=>{
    if(link.href.includes(`${currentLocation}`)){
        link.classList.add('active');
    }
})
