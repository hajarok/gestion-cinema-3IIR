<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Définit le charset du document en UTF-8 -->
    <meta charset="UTF-8">
    <!-- Permet d'assurer que la page est responsive sur les appareils mobiles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Le titre de la page qui s'affiche dans l'onglet du navigateur -->
    <title>Se connecter</title>
    <style>
        /* Style global du corps de la page */
        body {
            font-family: Arial;  /* Définit la police du texte */
            display: flex;  /* Utilisation du flexbox pour aligner les éléments */
            justify-content: center;  /* Centre les éléments horizontalement */
            align-items: center;  /* Centre les éléments verticalement */
            height: 100vh;  /* Hauteur de la page à 100% de la fenêtre */
            margin: 0;  /* Supprime les marges par défaut */
            background: url('{{ asset('images/db.jpeg') }}');  /* Ajoute une image de fond */
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
            text-align: center;  /* Centre le texte */
            margin-bottom: 20px;  /* Espacement en bas du titre */
        }

        /* Style pour le formulaire */
        form {
            display: flex;  /* Utilisation de flexbox pour organiser les éléments */
            flex-direction: column;  /* Aligne les éléments dans une colonne */
        }

        /* Style des champs de saisie */
        input {
            padding: 10px;  /* Espacement à l'intérieur des champs */
            margin-bottom: 10px;  /* Espacement en bas des champs */
            border: 1px solid #ff0202;  /* Bordure rose claire */
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
            background-color: #0056b3;  /* Change la couleur de fond en bleu plus foncé lors du survol */
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
            color: rgb(232, 25, 25);  /* Couleur du texte des erreurs en rouge */
            font-size: 14px;  /* Taille de police des erreurs */
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Se connecter</h1>
        
        <!-- Affichage des erreurs de validation, uniquement si des erreurs existent -->
        @if ($errors->any())
            <div class="error">
                <ul>
                    <!-- Boucle pour afficher toutes les erreurs sous forme de liste -->
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulaire de connexion -->
        <form action="{{ route('login') }}" method="POST">
            @csrf  <!-- Génère un token CSRF pour sécuriser le formulaire -->

            <!-- Champ pour l'email -->
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
            
            <!-- Champ pour le mot de passe -->
            <input type="password" name="password" placeholder="Mot de passe" required>
            
            <!-- Bouton de soumission du formulaire -->
            <button type="submit">Se connecter</button>
        </form>
        
        <!-- Lien pour rediriger l'utilisateur vers la page d'inscription s'il n'a pas de compte -->
        <p>Pas encore de compte ? <a href="{{ route('register.form') }}">Créer un compte</a></p>
    </div>

</body>
</html>
