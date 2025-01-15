<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Définit le charset du document en UTF-8 -->
    <meta charset="UTF-8">
    <!-- Permet d'assurer que la page est responsive sur les appareils mobiles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Le titre de la page qui s'affiche dans l'onglet du navigateur -->
    <title>Créer un compte</title>
    <style>
        /* Style global du corps de la page */
        body {
            font-family: Arial;  /* Définit la police du texte */
            display: flex;  /* Utilisation du flexbox pour aligner les éléments */
            justify-content: center;  /* Centre les éléments horizontalement */
            align-items: center;  /* Centre les éléments verticalement */
            margin: 0;  /* Supprime les marges par défaut */
            margin-top: 100px;  /* Ajoute un espacement au-dessus */
            background: url('{{ asset('images/db.jpeg') }}');  /* Image de fond */
            background-size: cover;  /* L'image couvre toute la page */
        }

        /* Style pour la boîte de contenu (formulaire) */
        .container {
            background-color: rgba(255, 255, 255, 0.4);  /* Fond semi-transparent pour la container */
            backdrop-filter : blur(9px);
             padding: 30px;  /* Espacement interne */
            border-radius: 8px;  /* Coins arrondis */
            width: 100%;  /* Prend 100% de la largeur disponible */
            max-width: 400px;  /* Largeur maximale de 400px */
        }

        /* Style pour le titre */
        h1 {
            text-align: center;  /* Centre le texte du titre */
            margin-bottom: 20px;  /* Espacement en bas du titre */
        }

        /* Style pour le formulaire */
        form {
            display: flex;  /* Utilisation de flexbox pour organiser les éléments */
            flex-direction: column;  /* Aligne les éléments dans une colonne */
        }

        /* Style des champs de saisie */
        input {
            border: 1px solid #ff0000;  /* Bordure rose pour les champs */
            padding: 10px;  /* Espacement à l'intérieur des champs */
            margin-bottom: 10px;  /* Espacement en bas des champs */
            border-radius: 4px;  /* Coins arrondis pour les champs */
        }

        /* Style pour le bouton de soumission */
        button {
            padding: 10px;  /* Espacement interne */
            background-color: #007bff;  /* Couleur de fond bleue */
            color: white;  /* Couleur du texte en blanc */
            border: none;  /* Retirer la bordure par défaut */
            border-radius: 4px;  /* Coins arrondis pour le bouton */
            cursor: pointer;  /* Modifie le curseur pour indiquer que c'est cliquable */
            font-size: 16px;  /* Taille du texte du bouton */
        }

        /* Style pour l'effet de survol du bouton */
        button:hover {
            background-color: #084485;  /* Change la couleur de fond en bleu foncé lors du survol */
        }

        /* Style pour les liens */
        a {
            text-align: center;  /* Centre le texte du lien */
            margin-top: 10px;  /* Espacement en haut du lien */
            text-decoration: none;  /* Retire la décoration du lien (souligné) */
            color: #007bff;  /* Couleur du texte en bleu */
        }

        /* Style pour l'effet de survol du lien */
        a:hover {
            color: #0056b3;  /* Change la couleur du texte en bleu plus foncé lors du survol */
        }

        /* Style spécifique pour afficher les erreurs */
        .error {
            color: red;  /* Couleur du texte des erreurs en rouge */
            font-size: 14px;  /* Taille de la police pour les erreurs */
            font-weight: bold;  /* Rendre le texte des erreurs en gras */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Créer un compte</h1>
            <!-- Formulaire d'inscription -->
            <form action="{{ route('register') }}" method="POST">
            @csrf  <!-- Génère un token CSRF pour sécuriser le formulaire -->
            
            <!-- Champ pour le nom -->
            <input type="text" name="name" placeholder="Nom" value="{{ old('name') }}" required>
            
            <!-- Champ pour l'email -->
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
            
            <!-- Affichage des erreurs pour l'email -->
            @if ($errors->has('email'))
            <p class="error">{{ $errors->first('email') }}</p>
            @endif
            
            <!-- Champ pour le mot de passe -->
            <input type="password" name="password" placeholder="Mot de passe" required>
            
            <!-- Champ pour la confirmation du mot de passe -->
            <input type="password" name="password_confirmation" placeholder="Confirmer le mot de passe" required>
            
            <!-- Bouton pour soumettre le formulaire -->
            <button type="submit">S'inscrire</button>
        </form>
        
        <!-- Lien vers la page de connexion pour ceux qui ont déjà un compte -->
        <p>Déjà un compte ? <a href="{{ route('login') }}">Se connecter</a></p>
    </div>
</body>
</html>
