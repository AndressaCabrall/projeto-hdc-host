// script/script.js
//Menu Mobile ativo

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



// Modal de Sucesso ao enviar mensagem
const modal = document.getElementById('modalSucesso');
const closeBtn = document.querySelector('.close');
const modalBtn = document.querySelector('.modal-btn');

// Esperar o DOM carregar completamente
document.addEventListener('DOMContentLoaded', () => {
    
    // Abrir modal quando a URL tiver sucesso=mensagem
    if (window.location.search.includes("sucesso=mensagem")) {
        if (modal) {
            modal.style.display = 'block';
        }
    }

    // Fechar modal ao clicar no X
    if (closeBtn) {
        closeBtn.addEventListener('click', () => {
            modal.style.display = 'none';
        });
    }

    // Fechar ao clicar no botão
    if (modalBtn) {
        modalBtn.addEventListener('click', () => {
            modal.style.display = 'none';
        });
    }

    // Fechar ao clicar fora do modal
    window.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.style.display = 'none';
        }
    });

});