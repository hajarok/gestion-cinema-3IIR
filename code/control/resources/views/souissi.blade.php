<!DOCTYPE html> 
<html lang="fr"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>cinema souissi</title> 
    <style>
        /* Début des styles CSS */
        body {
            font-family: Arial, sans-serif; /* Police de caractère pour le corps de la page */
            margin: 0; /* Suppression des marges par défaut */
            display: flex; /* Utilisation de flexbox pour organiser les éléments du corps */
            flex-direction: column; /* Alignement des éléments en colonne */
            align-items: center; /* Centrage des éléments horizontalement */
            position: relative; /* Positionnement relatif pour pouvoir utiliser des éléments positionnés par rapport à celui-ci */
        }

        .background-image {
            position: absolute; /* Position absolue pour que l'image de fond couvre toute la page */
            width: 100%; /* Largeur de l'image de fond à 100% */
            height: 100%; /* Hauteur de l'image de fond à 100% */
            background: url('{{ asset('images/f10.jpeg') }}'); /* Image de fond récupérée avec la méthode 'asset' */
            filter: blur(8px); /* Application d'un flou de 8px sur l'image de fond */
            z-index: -1; /* Positionnement de l'image de fond derrière tous les autres éléments */
        }

        header {
            display: flex; /* Utilisation de flexbox pour l'en-tête */
            position: fixed; /* Position fixe pour que l'en-tête reste visible même lorsqu'on fait défiler la page */
            justify-content: space-between; /* Espacement égal entre les éléments de l'en-tête */
            align-items: center; /* Alignement des éléments verticalement au centre */
            top: 0; /* Positionnement de l'en-tête tout en haut de la page */
            left: 0; /* Positionnement de l'en-tête tout à gauche */
            width: 100%; /* Largeur de l'en-tête à 100% de la page */
            background-color: white; /* Fond blanc pour l'en-tête */
            padding: 20px 30px; /* Espacement intérieur de l'en-tête */
            border-bottom: 5px solid #ff0000; /* Bordure rouge en bas de l'en-tête */
        }

        .logo h1 {
            font-size: 30px; /* Taille de police du titre du logo */
            font-weight: bold; /* Gras pour le titre */
            margin: 0; /* Suppression des marges par défaut */
            color: #ff0000; /* Couleur du texte en rouge */
        }

        .navbar {
            display: flex; /* Utilisation de flexbox pour la barre de navigation */
            width: 50%; /* Largeur de la barre de navigation à 50% */
        }

        .navbar a {
            text-decoration: none; /* Suppression de la décoration de texte (souligné) sur les liens */
            color: white; /* Couleur des liens en blanc */
            margin: 0 20px; /* Marge de 20px à gauche et à droite de chaque lien */
            padding: 12px 18px; /* Espacement intérieur de chaque lien */
            background-color: rgb(255, 0, 0); /* Couleur de fond rouge pour les liens */
            border-radius: 4px; /* Bordures arrondies pour les liens */
        }

        .navbar a:hover {
            background-color: darkred; /* Couleur de fond des liens au survol (dark red) */
        }

        .image-container {
            display: grid; /* Utilisation du modèle de grille pour la disposition des images */
            grid-template-columns: repeat(auto-fill,minmax(280px, 1fr)); /* Définition de la grille avec des colonnes auto-ajustables */
            gap: 30px; /* Espacement de 30px entre les éléments de la grille */
            margin-top: 150px; /* Marge en haut pour éviter que les images se superposent à l'en-tête */
            padding: 10px; /* Espacement intérieur de la grille */
            width: 90%; /* Largeur de la grille à 90% de la page */
            margin-left: 70px; /* Marge à gauche de la grille */
        }

        .image-container img {
            width: 80%; /* Largeur des images à 80% de l'espace alloué */
            height: 378px; /* Hauteur des images à 378px */
            object-fit: cover; /* L'image couvre l'espace sans déformation */
            border-radius: 8px; /* Bordure arrondie pour les images */
        }

        .movie-info {
            font-size: 18px; /* Taille de la police pour l'information sur le film */
            font-weight: bold; /* Gras pour le texte des informations du film */
            margin-top: 10px; /* Marge au-dessus des informations du film */
            color: #fbfbfb; /* Couleur blanche pour le texte des informations du film */
        }

        .schedule {
            font-size: 16px; /* Taille de la police pour l'horaire des séances */
            color: #ffffff; /* Couleur blanche pour l'horaire */
            margin-top: 5px; /* Marge au-dessus de l'horaire */
        }
    </style>
</head>
<body>
    <div class="background-image"></div> <!-- Div pour l'image de fond avec un flou appliqué -->

    <header> <!-- Début de l'en-tête -->
        <div class="logo">
            🎬 <h1>CineTime</h1> <!-- Logo avec icône de film et titre du site -->
        </div>
        <nav class="navbar">
            <a href="{{ route('index') }}" >Accueil</a> <!-- Lien vers la page d'accueil -->
            <a href="{{ route('categories.show', ['theme' => 'agdal']) }}" >AGDAL</a> <!-- Lien vers la catégorie AGDAL -->
            <a href="{{ route('categories.show', ['theme' => 'souissi']) }}" >SOUISSI</a> <!-- Lien vers la catégorie SOUISSI -->
        </nav>
    </header> <!-- Fin de l'en-tête -->

    <div class="image-container"> <!-- Conteneur des images des films -->
        <div class="image"> <!-- Début du bloc pour un film -->
            <img src="{{ asset('images/act1.jpeg') }}" alt="Film Action 1"> <!-- Image du film -->
            <div class="movie-info">Hypothermia</div> <!-- Titre du film -->
            <div class="schedule">Séance : 15h00</div> <!-- Horaire de la séance -->
        </div>
        <div class="image"> <!-- Début du bloc pour un autre film -->
            <img src="{{ asset('images/act2.jpeg') }}" alt="Film Action 2"> <!-- Image du film -->
            <div class="movie-info">Guardians</div> <!-- Titre du film -->
            <div class="schedule">Séance : 17h30</div> <!-- Horaire de la séance -->
        </div>
        <div class="image"> <!-- Bloc pour un autre film -->
            <img src="{{ asset('images/act3.jpeg') }}" alt="Film Action 3"> <!-- Image du film -->
            <div class="movie-info">Never Land</div> <!-- Titre du film -->
            <div class="schedule">Séance : 19h45</div> <!-- Horaire de la séance -->
        </div>
        <div class="image"> <!-- Bloc pour un autre film -->
            <img src="{{ asset('images/act4.jpeg') }}" alt="Film Action 4"> <!-- Image du film -->
            <div class="movie-info">Mythica</div> <!-- Titre du film -->
            <div class="schedule">Séance : 21h30</div> <!-- Horaire de la séance -->
        </div>
        <div class="image"> <!-- Bloc pour un autre film -->
            <img src="{{ asset('images/act5.jpeg') }}" alt="Film Action 5"> <!-- Image du film -->
            <div class="movie-info">Damsel</div> <!-- Titre du film -->
            <div class="schedule">Séance : 23h00</div> <!-- Horaire de la séance -->
        </div>
        <div class="image"> <!-- Bloc pour un autre film -->
            <img src="{{ asset('images/act6.jpeg') }}" alt="Film Action 6"> <!-- Image du film -->
            <div class="movie-info">Frenzy</div> <!-- Titre du film -->
            <div class="schedule">Séance : 00h45</div> <!-- Horaire de la séance -->
        </div>
    </div> <!-- Fin du conteneur des images -->
</body>
</html>
