<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Choisir une Catégorie</title> 

    <style>
        body {
            background-image: url('{{ asset('images/db.jpeg') }}'); /* Utilisation de l'image db.jpeg comme fond */
            background-size: cover; /* L'image couvre toute la page */
            background-position: center; /* L'image est centrée sur la page */
            margin: 0; /* Suppression de la marge par défaut */
            font-family: Arial, sans-serif; /* Définition de la police de caractère */
        }
        
        .category-box {
            background-color: rgba(255, 255, 255, 0.7); /* Fond semi-transparent avec une opacité de 0.7 */
            backdrop-filter: blur(9px); /* Application d'un flou en arrière-plan */
            padding: 50px; /* Espacement interne de 50px */
            border-radius: 18px; /* Bordures arrondies */
            width: 100%; /* Largeur de 100% */
            max-width: 600px; /* Largeur maximale de 600px */
            margin: 100px auto; /* Centrage du conteneur avec un espacement en haut */
            display: flex; /* Utilisation de Flexbox pour la mise en page */
            flex-direction: column; /* Organisation en colonne */
            align-items: center; /* Alignement centré des éléments */
        }

        h1 {
            margin-bottom: 30px; /* Marge en bas du titre */
            font-size: 30px; /* Taille de la police du titre */
            color: #000; /* Couleur du texte en noir */
            text-align: center; /* Centrage du texte */
        }

        .btn-category {
            text-align: center; /* Centrage du texte dans les boutons */
            text-indent: 20px; /* Décalage du texte de 20px à gauche */
            background-color: #f52121; /* Couleur de fond rouge pour les boutons */
            width: 100%; /* Largeur des boutons à 100% */
            color: white; /* Couleur du texte en blanc */
            padding: 15px; /* Espacement interne des boutons */
            font-size: 18px; /* Taille de la police des boutons */
            border-radius: 5px; /* Bordures arrondies des boutons */
            text-decoration: none; /* Suppression de la décoration de texte des liens */
            margin-bottom: 15px; /* Espacement entre les boutons */
            display: block; /* Les boutons occupent toute la largeur disponible */
            transition: background-color 0.3s; /* Transition pour l'effet de survol */
        }

        .btn-category:hover {
            background-color: #CC0000; /* Changement de couleur au survol */
            color: white; /* Maintien de la couleur du texte en blanc */
        }
    </style>
</head>
<body>
    <div class="category-box"> <!-- Conteneur pour les boutons de catégorie -->
        <h1>Choisissez l'adresse de votre cinema préféré à Rabat </h1> <!-- Titre de la page -->
        
        <!-- Liens vers les différentes catégories de cinéma -->
        <a href="{{ route('categories.show', ['theme' => 'agdal']) }}" class="btn-category">AGDAL</a> <!-- Lien vers la catégorie AGDAL -->
        <a href="{{ route('categories.show', ['theme' => 'souissi']) }}" class="btn-category">SOUISSI</a> <!-- Lien vers la catégorie SOUISSI -->
        <a href="{{ route('categories.show', ['theme' => 'joulane']) }}" class="btn-category">JOULANE</a> <!-- Lien vers la catégorie JOULANE -->
    </div>
</body>
</html>
