// script/script.js

const menuButton = document.querySelector('#menu-button');
const mobileMenu = document.querySelector('#mobile-menu')

menuButton.addEventListener('click', function () {

    mobileMenu.classList.toggle("ativo");

    if (mobileMenu.classList.contains("ativo")) {
        menuButton.innerHTML = '<i class="fas fa-times"></i>';
    } else {
        menuButton.innerHTML = '<i class="fas fa-bars"></i>';
    }
});


// Pegar elementos
const modal = document.getElementById('modalSucesso');
const closeBtn = document.querySelector('.close');
const modalBtn = document.querySelector('.modal-btn');
const contactForm = document.querySelector('.contact-container form');

// Abrir modal quando enviar mensagem
if (contactForm) {
    contactForm.addEventListener('submit', function (event) {
        event.preventDefault(); // Impede recarregar a página

        modal.style.display = 'block';

        // Limpar os campos do formulário
        contactForm.reset();
    });
}

// Fechar modal ao clicar no X
closeBtn.addEventListener('click', function () {
    modal.style.display = 'none';
});

// Fechar modal ao clicar no botão "Fechar"
modalBtn.addEventListener('click', function () {
    modal.style.display = 'none';
});

// Fechar modal ao clicar fora dele
window.addEventListener('click', function (event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
});