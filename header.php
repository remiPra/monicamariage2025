
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<header>
        <nav class="navigation">
            <!-- Menu de gauche -->
            <ul class="nav-left">
                <li><a href="#">Robes de Mariée</a></li>
                <li><a href="#">Tenues de Soirée</a></li>
                <li><a href="#">Robes de Cortège</a></li>
            </ul>

            <!-- Logo du milieu -->
            <div class="nav-logo">
                <h1>
                    <span class="logo-main logocolor">Monica</span>
                    <span class="logo-sub logocolor1">Mariage</span>
                </h1>
            </div>

            <!-- Menu de droite -->
            <div class="nav-right">
                <a href="#">Prendre Rendez-vous</a>
                <a href="#">Trouver le showroom</a>
                <button class="search-btn">
                    <svg class="search-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M21 21l-4.35-4.35M15 11a4 4 0 10-8 0 4 4 0 008 0z"></path>
                    </svg>
                </button>
            </div>
        </nav>
        <nav class="navigation-mobile">
            <!-- Logo à gauche -->
            <div class="nav-logo">
                <h1>
                    <span class="logo-main">Monica</span>
                    <span class="logo-sub">Mariage</span>
                </h1>
            </div>



            <!-- Icône de menu (visible sur mobile) -->
            <div class="menu-icon">
                <svg class="hamburger-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </div>
        </nav>
    </header>
