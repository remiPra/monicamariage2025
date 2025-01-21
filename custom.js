
var swiper = new Swiper('.swiper-container', {
    loop: true,
    autoplay: {
        delay: 5000,
    },
    effect: 'fade',
    fadeEffect: {
        crossFade: true
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    }
});

var videos = document.querySelectorAll('.video-slide');
var slides = document.querySelectorAll('.video-slide-container');
var currentVideoIndex = 0;

function playNextVideo() {
    // Masquer la vidéo et le texte actuel
    slides[currentVideoIndex].style.display = 'none';

    // Passer à la vidéo suivante
    currentVideoIndex = (currentVideoIndex + 1) % slides.length;

    // Afficher et jouer la prochaine vidéo avec son texte
    slides[currentVideoIndex].style.display = 'block';
    videos[currentVideoIndex].play();
}

// Ajouter un event listener pour chaque vidéo pour détecter la fin et passer à la suivante
videos.forEach(function (video) {
    video.addEventListener('ended', playNextVideo);
});

// Lancer la première vidéo automatiquement au chargement
window.onload = function () {
    videos[currentVideoIndex].play();
};
