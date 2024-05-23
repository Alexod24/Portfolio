const hambIcon = document.querySelector(".hamb");
const navMobile = document.querySelector(".nav");

hambIcon.addEventListener("click", function (){
    hambIcon.classList.toggle("active");
    navMobile.classList.toggle("slide");
})

console.log("Hola mundo")

//Animaciones del header 

const header = document.querySelector("header");

window.addEventListener("scroll", function(){
    header.classList.toggle("sticky", scrollY > 0);
});