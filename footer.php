<!-- Swiper JS CDN -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Swiper Initialization -->
<script>
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
</script>



<footer class="site-footer">
        <div class="footer-container">
            <!-- Logo et informations de contact -->
            <div class="footer-column">
                <img src="path-to-logo.png" alt="LM Showroom Logo" class="footer-logo">
                <p>+33 6 19 72 75 40</p>
                <p>monicamariage@hotmail.com</p>
            </div>
    
            <!-- Informations -->
            <div class="footer-column">
                <h4>Informations</h4>
                <ul>
                    <li><a href="#">Le showroom</a></li>
                    <li><a href="#">Essayages</a></li>
                    <li><a href="#">Trouver le showroom</a></li>
                    <li><a href="#">Prendre rendez-vous</a></li>
                </ul>
            </div>
    
            <!-- Produits -->
            <div class="footer-column">
                <h4>Nos Produits</h4>
                <ul>
                    <li><a href="#">Robes de mariée</a></li>
                    <li><a href="#">Tenues de soirée</a></li>
                    <li><a href="#">Robes de cortège</a></li>
                    <li><a href="#">Accessoires</a></li>
                </ul>
            </div>
    
            <!-- Suivre et mentions légales -->
            <div class="footer-column">
                <h4>Nous suivre</h4>
                <div class="social-icons">
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-tiktok"></i></a>
                <a target="_blank" href="https://www.facebook.com/MonicaMariage31/?locale=fr_FR" class="social-icon"><i class="fab fa-facebook"></i></a>
                <a target="_blank" href="https://www.instagram.com/monicamariage_robedemariee31/?hl=fr" class="social-icon"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>
        </div>
    
        <div class="footer-bottom">
            <p>&copy; 2023 - 2024 Monica Mariage Showroom – Tous droits réservés</p>
            <p><a href="#">Mentions légales</a> | <a href="#">Conditions générales de vente</a></p>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>
