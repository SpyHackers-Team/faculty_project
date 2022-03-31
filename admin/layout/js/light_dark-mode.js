'use strict';
/*========== Dark/Light Modes ==========*/

//let modeBttuon2 = document.querySelector('.fa-moon');
//modeBttuon2.addEventListener('click',function(){
//    document.querySelector('.mbtn').classList.remove('fa-moon');
//    document.querySelector('.mbtn').classList.add('fa-sun');
//});
let icon = document.querySelector(".mbtn");

icon.onclick = function(){
    document.body.classList.toggle("dark-mode");
    if(document.body.classList.contains("dark-mode")){
        icon.classList.remove('fa-moon');
        icon.classList.add('fa-sun');
    }else{
            icon.classList.remove('fa-sun');
            icon.classList.add('fa-moon'); 
        }
}