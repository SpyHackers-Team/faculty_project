'use strict';

const modals = document.querySelector('.modals');
const overlay = document.querySelector('.overlay');
const btnCloseModal = document.querySelector('.close-modal');
const btnsOpenModal = document.querySelector('.popup-btn');

const openModal = function() {
    modals.classList.remove('hidden');
    overlay.classList.remove('hidden');
};

const closeModal = function() {
    modals.classList.add('hidden');
    overlay.classList.add('hidden');
};

btnsOpenModal.addEventListener("click", openModal);

btnCloseModal.addEventListener('click', closeModal);
overlay.addEventListener("click", closeModal);

document.addEventListener('keydown', function(e) {

    if (e.key === 'Escape') {
        closeModal();
    }
});