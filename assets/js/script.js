const hambIcon = document.querySelector(".hamb");
const navMobile = document.querySelector(".nav");

hambIcon.addEventListener("click", function (){
    hambIcon.classList.toggle("active");
    navMobile.classList.toggle("slide");
});


document.onclick = function (n) {
    if(n.target.id !== "hamb" && n.target.it !== "nav__menu"){
        hambIcon.classList.remove("active");
        navMobile.classList.remove("slide");
    }
};

console.log("Hola mundo")

//Animaciones del header 

const header = document.querySelector("header");

window.addEventListener("scroll", function(){
    header.classList.toggle("sticky", scrollY > 0);
});

const containerEl =document.querySelector(".portfolio__gallery");

var mixer = mixitup(containerEl,{
    animation: {
        enable: false,
    },
});

mixer.filter("*");
