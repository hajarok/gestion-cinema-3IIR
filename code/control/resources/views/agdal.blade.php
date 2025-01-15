<!DOCTYPE html> 
<html lang="fr"> 
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>cinema agdal</title> 
    <style>
        /* Style général de la page */
        body {
            font-family: Arial, sans-serif; /* Définition de la police de caractères */
            margin: 0; /* Suppression de la marge par défaut */
            display: flex; /* Utilisation de Flexbox pour organiser les éléments */
            flex-direction: column; /* Organisation des éléments en colonne */
            align-items: center; /* Centrer les éléments horizontalement */
            position: relative; /* Positionnement relatif pour la superposition des éléments */
        }

        /* Style de l'image de fond */
        .background-image {
            position: absolute; /* Positionnement absolu pour recouvrir toute la page */
            width: 100%; /* Largeur de l'image à 100% de la page */
            height: 100%; /* Hauteur de l'image à 100% de la page */
            background: url('{{ asset('images/f10.jpeg') }}'); /* Image de fond provenant du dossier 'images' */
            filter: blur(8px); /* Application d'un flou sur l'image */
            z-index: -1; /* Mise en arrière-plan de l'image */
        }

        /* Style de l'entête de la page */
        header {
            display: flex; /* Utilisation de Flexbox pour aligner les éléments de l'entête */
            position: fixed; /* Fixation de l'entête en haut de la page */
            justify-content: space-between; /* Espacement entre les éléments de l'entête */
            align-items: center; /* Alignement des éléments verticalement */
            top: 0; /* Position en haut de la page */
            left: 0; /* Position à gauche de la page */
            width: 100%; /* Largeur de l'entête à 100% de la page */
            background-color: white; /* Fond de l'entête en blanc */
            padding: 20px 30px; /* Espacement interne de l'entête */
            border-bottom: 5px solid #ff0000; /* Bordure rouge sous l'entête */
        }

        /* Style du logo dans l'entête */
        .logo h1 {
            font-size: 30px; /* Taille de la police du titre */
            font-weight: bold; /* Mise en gras du titre */
            margin: 0; /* Suppression des marges */
            color: #ff0000; /* Couleur du texte en rouge */
        }

        /* Style de la barre de navigation */
        .navbar {
            display: flex; /* Flexbox pour aligner les liens de navigation */
            width: 50%; /* Largeur de la barre de navigation à 50% de la page */
        }

        /* Style des liens dans la barre de navigation */
        .navbar a {
            text-decoration: none; /* Suppression de la décoration des liens */
            color: white; /* Couleur des liens en blanc */
            margin: 0 20px; /* Marge de 20px entre les liens */
            padding: 12px 18px; /* Espacement interne des liens */
            background-color: rgb(255, 0, 0); /* Fond rouge pour les liens */
            border-radius: 4px; /* Bords arrondis pour les liens */
        }

        /* Effet lors du survol des liens dans la barre de navigation */
        .navbar a:hover {
            background-color: darkred; /* Changement de la couleur de fond au survol */
        }

        /* Style du conteneur des images des films */
        .image-container {
            display: grid; /* Utilisation d'une grille pour les images */
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); /* Colonnes dynamiques pour les images */
            gap: 30px; /* Espace entre les éléments de la grille */
            margin-top: 150px; /* Marge en haut de la grille */
            padding: 10px; /* Espacement interne du conteneur */
            width: 90%; /* Largeur du conteneur à 90% de la page */
            margin-left: 70px; /* Décalage à gauche */
        }

        /* Style des images des films */
        .image-container img {
            width: 80%; /* Largeur des images à 80% de leur conteneur */
            height: 378px; /* Hauteur des images à 378px */
            object-fit: cover; /* Les images couvrent leur conteneur tout en gardant leur proportion */
            border-radius: 8px; /* Bordures arrondies pour les images */
        }

        /* Style pour les informations sur les films */
        .movie-info {
            font-size: 18px; /* Taille de la police pour le titre du film */
            font-weight: bold; /* Mise en gras du titre du film */
            margin-top: 10px; /* Marge en haut du texte */
            color: #fbfbfb; /* Couleur du texte en gris clair */
        }

        /* Style pour l'heure des séances des films */
        .schedule {
            font-size: 16px; /* Taille de la police pour l'heure des séances */
            color: #ffffff; /* Couleur du texte en blanc */
            margin-top: 5px; /* Marge en haut du texte */
        }
    </style>
</head>
<body>
    <!-- Image de fond floutée -->
    <div class="background-image"></div>

    <!-- Entête contenant le logo et la barre de navigation -->
    <header>
        <div class="logo">
            🎬 <h1>CineTime</h1> <!-- Titre du site -->
        </div>
        <nav class="navbar">
            <!-- Liens de la barre de navigation -->
            <a href="{{ route('index') }}" >Accueil</a>
            <a href="{{ route('categories.show', ['theme' => 'joulane']) }}" >JOULANE</a>
            <a href="{{ route('categories.show', ['theme' => 'souissi']) }}" >SOUISSI</a>
        </nav>
    </header>

    <!-- Conteneur des films avec leurs informations -->
    <div class="image-container">
        <!-- Film 1 -->
        <div class="image">
            <img src="{{ asset('images/hor1.jpeg') }}" alt="Film Horreur 1">
            <div class="movie-info">The Nun</div>
            <div class="schedule">Séance : 20h00</div>
        </div>
        <!-- Film 2 -->
        <div class="image">
            <img src="{{ asset('images/hor7.jpeg') }}" alt="Film Horreur 2">
            <div class="movie-info">Oculus</div>
            <div class="schedule">Séance : 21h30</div>
        </div>
        <!-- Film 3 -->
        <div class="image">
            <img src="{{ asset('images/hor3.jpeg') }}" alt="Film Horreur 3">
            <div class="movie-info">The Boogyman</div>
            <div class="schedule">Séance : 19h45</div>
        </div>
        <!-- Film 4 -->
        <div class="image">
            <img src="{{ asset('images/hor4.jpeg') }}" alt="Film Horreur 4">
            <div class="movie-info">Come Play</div>
            <div class="schedule">Séance : 18h30</div>
        </div>
        <!-- Film 5 -->
        <div class="image">
            <img src="{{ asset('images/hor5.jpeg') }}" alt="Film Horreur 5">
            <div class="movie-info">Ready Or Not</div>
            <div class="schedule">Séance : 22h00</div>
        </div>
        <!-- Film 6 -->
        <div class="image">
            <img src="{{ asset('images/hor6.jpeg') }}" alt="Film Horreur 6">
            <div class="movie-info">Sting</div>
            <div class="schedule">Séance : 23h15</div>
        </div>
    </div>

</body>
</html>
