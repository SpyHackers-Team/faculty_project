'use strict';
/*========== Face Page (Header) ==========*/

const faceText = document.querySelector(".face-ani");
for(let i = 0; i<= 100; i++){
    const blocks = document.createElement('div');
    blocks.classList.add('block');
    faceText.appendChild(blocks);
};
function ainmateBlocks(){
    anime({
        targets: '.block',
        translateX: function(){
            return anime.random(-700, 700);
        },
        translateY: function(){
            return anime.random(-500, 500);
        },
        scale: function(){
            return anime.random(1,5);
        },
             
        easing: 'linear',
        duration: 3000,
        delay: anime.stagger(10),
        complete: ainmateBlocks
    });
};
ainmateBlocks();