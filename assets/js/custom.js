// Todo o JavaScript do seu arquivo HTML original
// (o conteúdo da tag <script> sem as tags <script>)

// Menu Hamburguer
const hamburgerBtn = document.getElementById('hamburger-btn');
const closeMenuBtn = document.getElementById('close-menu');
const mobileMenu = document.getElementById('mobile-menu');

function abrirMenu() {
    mobileMenu.classList.add('active');
    document.body.style.overflow = 'hidden';
}

function fecharMenu() {
    mobileMenu.classList.remove('active');
    document.body.style.overflow = 'auto';
}

hamburgerBtn.addEventListener('click', abrirMenu);
closeMenuBtn.addEventListener('click', fecharMenu);

// Fechar menu ao clicar em um link
document.querySelectorAll('.mobile-nav-item').forEach(link => {
    link.addEventListener('click', fecharMenu);
});

// Fechar menu ao pressionar ESC
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        fecharMenu();
    }
});

// Sistema de curtidas
let likes = [0, 0, 0];

function inicializarCurtidas() {
    const likesSalvos = localStorage.getItem('portalLikes');
    if (likesSalvos) {
        const likesArray = JSON.parse(likesSalvos);
        likesArray.forEach((count, index) => {
            if (index > 0) {
                likes[index] = count;
                document.getElementById(`likes-${index}`).textContent = count;
            }
        });
    }
}

function curtirPortal(portalNum) {
    likes[portalNum]++;
    document.getElementById(`likes-${portalNum}`).textContent = likes[portalNum];
    localStorage.setItem('portalLikes', JSON.stringify(likes));
    
    const btn = event.target.closest('.like-btn');
    btn.classList.add('curtido');
    
    setTimeout(() => {
        btn.classList.remove('curtido');
    }, 1000);
}

// Smooth scroll para links âncora
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Efeito de digitação no slogan
const slogan = "Onde cada criança se vê no mundo que habita";
let i = 0;
const speed = 50;

function typeWriter() {
    if (i < slogan.length) {
        document.querySelector(".logo-slogan").textContent += slogan.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    }
}

// Envio do formulário de contato
function enviarFormulario(event) {
    event.preventDefault();
    const nome = document.getElementById('nome').value;
    alert(`Obrigado, ${nome}! Sua mensagem foi enviada. Em breve entraremos em contato.`);
    document.getElementById('form-contato-familia').reset();
}

// Navegação dos cards de escolas
const escolasScroll = document.getElementById('escolas-scroll');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

function atualizarBotoesNavegacao() {
    prevBtn.disabled = escolasScroll.scrollLeft <= 0;
    nextBtn.disabled = escolasScroll.scrollLeft + escolasScroll.clientWidth >= escolasScroll.scrollWidth - 1;
}

nextBtn.addEventListener('click', () => {
    escolasScroll.scrollBy({
        left: 350,
        behavior: 'smooth'
    });
});

prevBtn.addEventListener('click', () => {
    escolasScroll.scrollBy({
        left: -350,
        behavior: 'smooth'
    });
});

escolasScroll.addEventListener('scroll', atualizarBotoesNavegacao);

// Inicializar quando a página carregar
document.addEventListener('DOMContentLoaded', function() {
    document.querySelector(".logo-slogan").textContent = "";
    typeWriter();
    inicializarCurtidas();
    atualizarBotoesNavegacao();
});