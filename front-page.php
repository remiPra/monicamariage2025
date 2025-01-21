<?php get_header(); ?>
    <!-- Conteneur des vidéos enchaînées -->

    <!-- Vidéos enchaînées avec texte au centre -->
    <div class="video-container">
        <div class="video-slide-container">
            <video id="video1" class="video-slide" autoplay muted>
                <source src="<?php echo get_stylesheet_directory_uri(); ?>/videos/video1.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-text">
                <h1>Très Con</h1>
            </div>
        </div>

        <div class="video-slide-container" style="display: none;">
            <video id="video2" class="video-slide" muted>
                <source src="<?php echo get_stylesheet_directory_uri(); ?>/videos/video2.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-text">
                <h1>Élégance</h1>
            </div>
        </div>

        <div class="video-slide-container" style="display: none;">
            <video id="video3" class="video-slide" muted>
                <source src="<?php echo get_stylesheet_directory_uri(); ?>/videos/video3.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-text">
                <h1>Sophistication</h1>
            </div>
        </div>
    </div>

    <!-- Carrousel Swiper -->
    <!-- <div class="slider-container">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                
                <div class="swiper-slide">
                    <img src="image1.jpg" alt="Image 1">
                    <div class="overlay"></div>
                    <div class="slider-text">
                        <h1>Très Chic</h1>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <img src="image2.webp" alt="Image 2">
                    <div class="overlay"></div>
                    <div class="slider-text">
                        <h1>Élégance</h1>
                    </div>
                </div>
                
                <div class="swiper-slide">
                    <img src="image3.webp" alt="Image 3">
                    <div class="overlay"></div>
                    <div class="slider-text">
                        <h1>Sophistication</h1>
                    </div>
                </div>
            </div>

            
            <div class="swiper-pagination"></div>

                        <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div> -->


    <!-- bloc pagination -->
    <div class="categories">
        <div class="category">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/iconerobe.png" alt="Robes de mariée icon">
            <p>Robes de mariée Princesse et évasée</p>
        </div>
        <div class="category">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/iconerobe.png" alt="Robes de mariée icon">
            <p>Robes de mariée Princesse et évasée</p>
        </div>
        <div class="category">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/iconerobe.png" alt="Robes de mariée icon">
            <p>Robes de mariée Princesse et évasée</p>
        </div>
        <div class="category">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/iconerobe.png" alt="Robes de mariée icon">
            <p>Robes de mariée Princesse et évasée</p>
        </div>
    </div>

    <!-- bloc pressentation -->
    <div class="presentation-section">
        <h1>Robes De Mariée Toulouse </h1>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/iconerobe.png" alt="Robes de mariée icon">
        <p>La boutique de mariage est conçue comme un showroom privé à Seysses près de Toulouse
            Nous sommes heureux de vous accompagner pour

            la confection des robes de mariée SUR-MESURE et PERSONNALISABLE jusqu'à la taille 44.
            Le tarif d'une robe de mariée sur-mesure se situe entre 750€ et 1850€</p>
        <button class="styled-button">
            Voir nos robes
        </button>
        <!-- gallerie -->

        
        
        
        
    </div>


    <div class="bestsellers bg-brown-light ">
        <h2 class="text-center w-full">Meilleures ventes chez Monica Mariage</h2>
        <div class="gallery-container">
            <div class="gallery">
                <div class="gallery-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/presentation/image1.jpg" alt="Déesse">
                    <p>Déesse</p>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/presentation/image2.jpg" alt="Effie">
                    <p>Effie</p>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/presentation/image3.jpg" alt="Emery">
                    <p>Emery</p>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/presentation/image4.jpg" alt="Image 4">
                    <p>Image 4</p>
                </div>
            </div>
        </div>
        
        <div class="justify-content w-full textgallery">
            <p>La boutique de mariage est conçue comme un showroom privé à Seysses près de Toulouse
                Nous sommes heureux de vous accompagner pour
    
                la confection des robes de mariée SUR-MESURE et PERSONNALISABLE jusqu'à la taille 44.
                Le tarif d'une robe de mariée sur-mesure se situe entre 750€ et 1850€</p>
            <button class="styled-button">
                Voir plus de robes
            </button>
        </div>
        
    </div>
    
    <div class="bestsellers bg-brown-light ">
        <h2 class="text-center w-full">Destockage</h2>
        <div class="gallery-container">
            <div class="gallery">
                <div class="gallery-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/destockage/image1.png" alt="Déesse">
                    <p>Déesse</p>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/destockage/image2.jpg" alt="Effie">
                    <p>Effie</p>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/destockage/image3.jpg" alt="Emery">
                    <p>Emery</p>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/destockage/image4.jpg" alt="Image 4">
                    <p>Image 4</p>
                </div>
            </div>
        </div>
        
        <div class="justify-content w-full textgallery">
            <p>La boutique de mariage est conçue comme un showroom privé à Seysses près de Toulouse
                Nous sommes heureux de vous accompagner pour
    
                la confection des robes de mariée SUR-MESURE et PERSONNALISABLE jusqu'à la taille 44.
                Le tarif d'une robe de mariée sur-mesure se situe entre 750€ et 1850€</p>
            <button class="styled-button">
                Voir plus de robes
            </button>
        </div>
        
    </div>
    
    <!-- section showroom -->
    <section class="showroom-section">
        <div class="showroom-container">
            <!-- Colonne Image -->
            <div class="showroom-image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/double/2023-11-28.jpg" alt="LM Showroom">
            </div>
    
            <!-- Colonne Texte -->
            <div class="showroom-text">
                <div >

                    <h4>Le Showroom</h4>
                    <h2>LM Showroom</h2>
                    <p>
                        LM Showroom situé à Agen est un concept store mariage créé en 2023 par Sandrine Bianco.
                        Vous y trouverez plus d'une centaine de robes de mariée signées par des créateurs Européens
                        et d'Outre Atlantique de renom, des tenues pour les mamans, les demoiselles d'honneur et les enfants,
                        ainsi que des chaussures et des accessoires, sélectionnés avec la plus grande attention pour leur qualité,
                        leur design et leur confort.
                    </p>
                    <a href="#" class="btn">En savoir plus</a>
                </div>
            </div>
        </div>
    </section>
    <section class="showroom-section">
        <div class="showroom-container">
            <!-- Colonne Image -->
           
    
            <!-- Colonne Texte -->
            <div class="showroom-text">
                <div class=" padding-left padding-right">

                    <h4>Le Showroom</h4>
                    <h2>LM Showroom</h2>
                    <p>
                        LM Showroom situé à Agen est un concept store mariage créé en 2023 par Sandrine Bianco.
                        Vous y trouverez plus d'une centaine de robes de mariée signées par des créateurs Européens
                        et d'Outre Atlantique de renom, des tenues pour les mamans, les demoiselles d'honneur et les enfants,
                        ainsi que des chaussures et des accessoires, sélectionnés avec la plus grande attention pour leur qualité,
                        leur design et leur confort.
                    </p>
                    <a href="#" class="btn">En savoir plus</a>
                </div>
            </div>
            <div class="showroom-image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/double/2023-11-28.jpg" alt="LM Showroom">
            </div>
        </div>
    </section>
    
<?php get_footer(); ?>