let bar = document.getElementById('bar')
let cmark = document.getElementById('cmark')
let nav = document.getElementById('navbar')

if (bar){
    bar.addEventListener("click",()=>{
        nav.classList.add('active')
    })
}
if (cmark){
    cmark.addEventListener("click",()=>{
        nav.classList.remove('active')
    })
}
