'use strict';
/*========== Add Pop-Up ==========*/
/*========== Modal variables ==========*/

const modal1 = document.querySelector('.modal1');
const modal2 = document.querySelector('.modal2');
const modal3 = document.querySelector('.modal3');
const modal4 = document.querySelector('.modal4');
const modal5 = document.querySelector('.modal5');
const modal6 = document.querySelector('.modal6');
const modal7 = document.querySelector('.modal7');
const modal8 = document.querySelector('.modal8');

/*========== overlayer variable ==========*/

const overlay = document.querySelector('.overlay');

/*========== CloseModal button variables ==========*/

const btnCloseModal1 = document.querySelector('.close-modal1');
const btnCloseModal2 = document.querySelector('.close-modal2');
const btnCloseModal3 = document.querySelector('.close-modal3');
const btnCloseModal4 = document.querySelector('.close-modal4');
const btnCloseModal5 = document.querySelector('.close-modal5');
const btnCloseModal6 = document.querySelector('.close-modal6');
const btnCloseModal7 = document.querySelector('.close-modal7');
const btnCloseModal8 = document.querySelector('.close-modal8');

/*========== OpenModal button variables ==========*/

const btnsOpenModal1 = document.querySelector('.one');
const btnsOpenModal2 = document.querySelector('.two');
const btnsOpenModal3 = document.querySelector('.three');
const btnsOpenModal4 = document.querySelector('.four');
const btnsOpenModal5 = document.querySelector('.five');
const btnsOpenModal6 = document.querySelector('.six');
const btnsOpenModal7 = document.querySelector('.seven');
const btnsOpenModal8 = document.querySelector('.eight');

/*========== openModal function ==========*/

const openModal1 = function() {
    modal1.classList.remove('hidden');
    overlay.classList.remove('hidden');
};
const openModal2 = function() {
    modal2.classList.remove('hidden');
    overlay.classList.remove('hidden');
};
const openModal3 = function() {
    modal3.classList.remove('hidden');
    overlay.classList.remove('hidden');
};
const openModal4 = function() {
    modal4.classList.remove('hidden');
    overlay.classList.remove('hidden');
};
const openModal5 = function() {
    modal5.classList.remove('hidden');
    overlay.classList.remove('hidden');
};
const openModal6 = function() {
    modal6.classList.remove('hidden');
    overlay.classList.remove('hidden');
};
const openModal7 = function() {
    modal7.classList.remove('hidden');
    overlay.classList.remove('hidden');
};
const openModal8 = function() {
    modal8.classList.remove('hidden');
    overlay.classList.remove('hidden');
};

/*========== closeModal function ==========*/

const closeModal1 = function() {
    modal1.classList.add('hidden');
    overlay.classList.add('hidden');
};
const closeModal2 = function() {
    modal2.classList.add('hidden');
    overlay.classList.add('hidden');
};
const closeModal3 = function() {
    modal3.classList.add('hidden');
    overlay.classList.add('hidden');
};
const closeModal4 = function() {
    modal4.classList.add('hidden');
    overlay.classList.add('hidden');
};
const closeModal5 = function() {
    modal5.classList.add('hidden');
    overlay.classList.add('hidden');
};
const closeModal6 = function() {
    modal6.classList.add('hidden');
    overlay.classList.add('hidden');
};
const closeModal7 = function() {
    modal7.classList.add('hidden');
    overlay.classList.add('hidden');
};
const closeModal8 = function() {
    modal8.classList.add('hidden');
    overlay.classList.add('hidden');
};

/*========== OpenModal button onclick ==========*/

btnsOpenModal1.addEventListener('click', openModal1);
btnsOpenModal2.addEventListener('click', openModal2);
btnsOpenModal3.addEventListener('click', openModal3);
btnsOpenModal4.addEventListener('click', openModal4);
btnsOpenModal5.addEventListener('click', openModal5);
btnsOpenModal6.addEventListener('click', openModal6);
btnsOpenModal7.addEventListener('click', openModal7);
btnsOpenModal8.addEventListener('click', openModal8);

/*========== closeModal button onclick ==========*/

btnCloseModal1.addEventListener('click', closeModal1);
btnCloseModal2.addEventListener('click', closeModal2);
btnCloseModal3.addEventListener('click', closeModal3);
btnCloseModal4.addEventListener('click', closeModal4);
btnCloseModal5.addEventListener('click', closeModal5);
btnCloseModal6.addEventListener('click', closeModal6);
btnCloseModal7.addEventListener('click', closeModal7);
btnCloseModal8.addEventListener('click', closeModal8);

/*========== overlayer onclick ==========*/

overlay.addEventListener('click', closeModal1);
overlay.addEventListener('click', closeModal2);
overlay.addEventListener('click', closeModal3);
overlay.addEventListener('click', closeModal4);
overlay.addEventListener('click', closeModal5);
overlay.addEventListener('click', closeModal6);
overlay.addEventListener('click', closeModal7);
overlay.addEventListener('click', closeModal8);

/*========== keydown function ==========*/

document.addEventListener('keydown', function(e) {

    if (e.key === 'Escape') {
        closeModal1();
        closeModal2();
        closeModal3();
        closeModal4();
        closeModal5();
        closeModal6();
        closeModal7();
        closeModal8();
    }
});