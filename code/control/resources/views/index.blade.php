<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil</title>
    <style>
        /* Style pour le body */
        body {
            display: flex;  /* Utilisation de Flexbox pour centrer le contenu */
            justify-content: center;  /* Centrer horizontalement */
            align-items: center;  /* Centrer verticalement */
            padding-top: 200px;  /* Ajouter de l'espace en haut de la page */
            margin: 0;  /* Supprimer les marges par défaut du body */
            background: url('{{ asset('images/db.jpeg') }}') ;  /* Image de fond -->
            background-size: cover;  /* L'image couvre toute la page */
        }

        /* Style pour le conteneur principal */
        .container {
            font-family: serif;  /* Police de caractères */
            font-weight: 900;  /* Poids de la police */
            background-color: rgba(255, 255, 255, 0.7);  /* Fond semi-transparent pour le conteneur */
            backdrop-filter : blur(9px);  /* Appliquer un flou léger à l'arrière-plan pour une meilleure lisibilité du texte */
            padding: 30px;  /* Ajouter de l'espace intérieur autour du contenu */
            border-radius: 8px;  /* Bordures arrondies pour un effet plus doux */
            width: 100%;  /* Largeur 100% du parent */
            max-width: 400px;  /* Largeur maximale du conteneur */
        }

        /* Style pour le titre */
        h1 { 
            text-align: center;  /* Centrer le texte du titre */
            margin-bottom: 20px;  /* Ajouter de l'espace sous le titre pour l'aérer */
        }

        /* Style pour les boutons */
        button {
            padding: 10px;  /* Ajouter de l'espace intérieur dans le bouton */
            background-color: #007bff;  /* Couleur de fond bleue pour le bouton */
            color: white;  /* Texte en blanc pour contraster avec le fond bleu */
            border: none;  /* Supprimer la bordure par défaut */
            border-radius: 4px;  /* Bordures arrondies pour le bouton */
            cursor: pointer;  /* Changer le curseur pour indiquer que le bouton est cliquable */
            font-size: 16px;  /* Taille de la police du texte du bouton */
            width: 100%;  /* Largeur du bouton à 100% de son conteneur */
        }

        /* Effet de survol pour le bouton */
        button:hover {
            background-color: #0056b3;  /* Changer la couleur du bouton au survol */
        }

        /* Style pour les liens */
        a {
            text-align: center;  /* Centrer le lien */
            margin-top: 10px;  /* Ajouter de l'espace au-dessus du lien */
            text-decoration: none;  /* Supprimer le soulignement des liens */
            color: #007bff;  /* Couleur bleue pour le lien */
        }

        /* Effet de survol pour les liens */
        a:hover {
            color: #0056b3;  /* Changer la couleur du lien au survol */
        }

        /* Style pour le texte MoodTime en haut à gauche */
        .moodtime {
            position: absolute;  /* Positionnement absolu pour placer l'élément précisément */
            top: 10px;  /* Placer l'élément à 10px du haut de la page */
            left: 10px;  /* Placer l'élément à 10px de la gauche de la page */
            font-size: 24px;  /* Taille de la police de l'élément */
            font-family: sans-serif;  /* Police sans-serif pour un look moderne et simple */
            font-weight: bold;  /* Police en gras pour une meilleure visibilité */
            color: #ff0000;  /* Couleur rouge pour le texte */
        }
      
    </style>
</head>
<body>
    <!-- Section MoodTime en haut à gauche -->
    <div class="moodtime">
        <h2>CineTime</h2> <!-- Le texte affiché dans le coin supérieur gauche -->
    </div>

    <!-- Conteneur principal avec les éléments d'accueil -->
    <div class="container">
        <h1>Bienvenue</h1>  <!-- Titre principal de la page d'accueil -->
        
        <!-- Bouton pour la création de compte -->
        <a href="{{ route('register.form') }}">
            <button>Créer un compte</button>
        </a>
        
        <!-- Lien pour la connexion -->
        <p>Vous avez déjà un compte ? <a href="{{ route('login') }}">Se connecter</a></p>
    </div>
</body>
</html>
