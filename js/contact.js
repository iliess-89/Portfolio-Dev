let btn = document.querySelector(".burger>div>span");
let open = document.querySelector(".burger>div");

btn.addEventListener("click", ()=>{
    open.classList.toggle("open");

})

let content = document.querySelector(".burger>.content");

btn.addEventListener("click", ()=>{
    content.classList.toggle("active");

})



let formI = document.querySelector("button");

formI.addEventListener('click', function (e) {

    let email = document.querySelector("#email");
    let myValid = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (myValid.test(email.value) == false) {
        let erreur = document.querySelector("#message");
        email.value = innerHTML = "";
        erreur.innerHTML = "Le format de votre Email n'est pas valide";
        erreur.style.color = "red";
        e.preventDefault();
    }
  
});

formI.addEventListener('click', function (e){
    
    let name = document.querySelector("#name");
    if (name.value.trim() == "") {
        
        let erreur = document.querySelector("#messageN");
        erreur.innerHTML = "Le champs Nom est requis.";
        erreur.style.color = "red";
        e.preventDefault();
    }
    
})

formI.addEventListener('click', function (e){
    
    let name = document.querySelector("#prenom");
    if (name.value.trim() == "") {
        
        let erreur = document.querySelector("#messageP");
        erreur.innerHTML = "Le champs Prenom est requis.";
        erreur.style.color = "red";
        e.preventDefault();
    }
    
})

formI.addEventListener('click', function (e){

    let sujet = document.querySelector("#sujet");
    console.log(sujet);
    if (sujet.value.trim() == "") {
    
        let erreur = document.querySelector("#messageS");
        erreur.innerHTML = "Le champs Sujet est requis.";
        erreur.style.color = "red";
        e.preventDefault();
    }
        
})

formI.addEventListener('click', function (e){

    let text = document.querySelector("#textarea");
    console.log(text);
    if (text.value.trim() == "") {
    
        let erreur = document.querySelector("#messageM");
        erreur.innerHTML = "Le champs Message est requis.";
        erreur.style.color = "red";
        e.preventDefault();
    }
        
})

