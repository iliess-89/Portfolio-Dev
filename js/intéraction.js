let btn = document.querySelector(".burger>div>span");
let open = document.querySelector(".burger>div");

btn.addEventListener("click", ()=>{
    open.classList.toggle("open");

})

let content = document.querySelector(".burger>.content");

btn.addEventListener("click", ()=>{
    content.classList.toggle("active");

})