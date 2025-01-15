<!DOCTYPE html> 
<html lang="fr">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>cinema joulane</title> 
    <style>
        /* Début des styles CSS */
        body {
            font-family: Arial, sans-serif; /* Police d'écriture du texte */
            margin: 0; /* Enlève les marges par défaut */
            display: flex; /* Définit le corps en flexbox */
            flex-direction: column; /* Aligne les éléments en colonne */
            align-items: center; /* Centre les éléments horizontalement */
            position: relative; /* Position relative pour gérer les éléments internes */
        }

        .background-image {
            position: absolute; /* Position absolue pour couvrir l'ensemble de la page */
            width: 100%; /* Largeur de l'image de fond */
            height: 100%; /* Hauteur de l'image de fond */
            background: url('{{ asset('images/f10.jpeg') }}'); /* Définition de l'image de fond */
            filter: blur(8px); /* Application d'un flou sur l'image */
            z-index: -1; /* Positionne l'image derrière les autres éléments */
        }

        header {
            display: flex; /* Utilisation du modèle flexbox pour l'en-tête */
            position: fixed; /* Position fixe pour l'en-tête */
            justify-content: space-between; /* Espacement égal entre les éléments du header */
            align-items: center; /* Aligne les éléments du header verticalement au centre */
            top: 0; /* Positionne l'en-tête tout en haut */
            left: 0; /* Positionne l'en-tête tout à gauche */
            width: 100%; /* Largeur à 100% de la page */
            background-color: white; /* Fond blanc pour l'en-tête */
            padding: 20px 30px; /* Espacement intérieur de l'en-tête */
            border-bottom: 5px solid #ff0000; /* Bordure rouge sous l'en-tête */
        }

        .logo h1 {
            font-size: 30px; /* Taille de police du logo */
            font-weight: bold; /* Gras pour le titre */
            margin: 0; /* Enlève la marge par défaut */
            color: #ff0000; /* Couleur rouge pour le texte */
        }

        .navbar {
            display: flex; /* Utilisation de flexbox pour la barre de navigation */
            width: 50%; /* Largeur de la barre de navigation */
        }

        .navbar a {
            text-decoration: none; /* Supprime la décoration de texte (souligné) sur les liens */
            color: white; /* Couleur des liens en blanc */
            margin: 0 20px; /* Marge gauche et droite de 20px autour des liens */
            padding: 12px 18px; /* Espacement interne autour du texte des liens */
            background-color: rgb(255, 0, 0); /* Fond rouge pour les liens */
            border-radius: 4px; /* Bordure arrondie pour les liens */
        }

        .navbar a:hover {
            background-color: darkred; /* Change la couleur du fond des liens au survol */
        }

        .image-container {
            display: grid; /* Utilisation du modèle de grille pour la disposition des images */
            grid-template-columns: repeat(auto-fill,minmax(280px, 1fr)); /* Définir les colonnes pour qu'elles s'ajustent automatiquement */
            gap: 30px; /* Espacement entre les images */
            margin-top: 150px; /* Marge au-dessus de la grille */
            padding: 10px; /* Espacement intérieur */
            width: 90%; /* Largeur de la grille à 90% de la largeur de la page */
            margin-left: 70px; /* Marge à gauche */
        }

        .image-container img {
            width: 80%; /* Largeur de l'image à 80% de l'espace alloué */
            height: 378px; /* Hauteur de l'image définie à 378px */
            object-fit: cover; /* Couvre l'espace sans déformer l'image */
            border-radius: 8px; /* Bordure arrondie pour les images */
        }

        .movie-info {
            font-size: 18px; /* Taille de police du texte d'information sur le film */
            font-weight: bold; /* Texte en gras */
            margin-top: 10px; /* Marge en haut */
            color: #fbfbfb; /* Couleur blanche pour le texte */
        }

        .schedule {
            font-size: 16px; /* Taille de police plus petite pour l'horaire */
            color: #ffffff; /* Couleur blanche pour l'horaire */
            margin-top: 5px; /* Marge au-dessus de l'horaire */
        }
    </style>
</head>
<body>
    <!-- Section de l'image de fond -->
    <div class="background-image"></div>

    <!-- En-tête de la page avec le logo et les liens de navigation -->
    <header>
        <div class="logo">
            🎬 <h1>CineTime</h1> <!-- Affichage du logo avec l'icône cinéma -->
        </div>
        <nav class="navbar">
            <!-- Liens de navigation vers la page d'accueil et les catégories -->
            <a href="{{ route('index') }}" >Accueil</a>
            <a href="{{ route('categories.show', ['theme' => 'agdal']) }}" >AGDAL</a>
            <a href="{{ route('categories.show', ['theme' => 'souissi']) }}" >SOUISSI</a>
        </nav>
    </header>

    <!-- Conteneur des images des films avec les informations sur chaque film -->
    <div class="image-container">
        <!-- Film 1 -->
        <div class="image">
            <img src="{{ asset('images/dram1.jpeg') }}" alt="Film Drame 1"> <!-- Image du film -->
            <div class="movie-info">Nightmare Island</div> <!-- Titre du film -->
            <div class="schedule">Séance : 18h30</div> <!-- Horaire de la séance -->
        </div>
        <!-- Film 2 -->
        <div class="image">
            <img src="{{ asset('images/dram2.jpeg') }}" alt="Film Drame 2"> <!-- Image du film -->
            <div class="movie-info">Palma</div> <!-- Titre du film -->
            <div class="schedule">Séance : 20h00</div> <!-- Horaire de la séance -->
        </div>
        <!-- Film 3 -->
        <div class="image">
            <img src="{{ asset('images/dram3.jpeg') }}" alt="Film Drame 3"> <!-- Image du film -->
            <div class="movie-info">Les Évadés</div> <!-- Titre du film -->
            <div class="schedule">Séance : 21h30</div> <!-- Horaire de la séance -->
        </div>
        <!-- Film 4 -->
        <div class="image">
            <img src="{{ asset('images/dram4.jpeg') }}" alt="Film Drame 4"> <!-- Image du film -->
            <div class="movie-info">der Jungle Im</div> <!-- Titre du film -->
            <div class="schedule">Séance : 19h45</div> <!-- Horaire de la séance -->
        </div>
        <!-- Film 5 -->
        <div class="image">
            <img src="{{ asset('images/dram5.jpeg') }}" alt="Film Drame 5"> <!-- Image du film -->
            <div class="movie-info">The Darkest Minds</div> <!-- Titre du film -->
            <div class="schedule">Séance : 22h00</div> <!-- Horaire de la séance -->
        </div>
        <!-- Film 6 -->
        <div class="image">
            <img src="{{ asset('images/dram6.jpeg') }}" alt="Film Drame 6"> <!-- Image du film -->
            <div class="movie-info">Old</div> <!-- Titre du film -->
            <div class="schedule">Séance : 23h15</div> <!-- Horaire de la séance -->
        </div>
    </div>

</body>
</html>
