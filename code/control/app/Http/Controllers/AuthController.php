<?php




namespace App\Http\Controllers;

use App\Models\Projetphp; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Page d'accueil
    public function index()
    {
        return view('index');
    }

    // Afficher le formulaire de connexion
    public function loginForm()
    {
        return view('login');
    }

    // Traitement de la connexion
    public function login(Request $request)
    {
        // Validation des données d'entrée
        $validated = $request->validate([
            'email' => 'required|email',  // Vérifie que l'email est présent et valide
            'password' => 'required',  // Vérifie que le mot de passe est présent
        ]);

        // Tentative de connexion
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Si la connexion réussit, rediriger vers la page des catégories (ou autre page)
            return redirect()->route('categories');  
        } else {
            // Si la connexion échoue, retourner à la page de login avec un message d'erreur
            return back()->withErrors(['email' => 'Email ou mot de passe incorrect.']);
        }
    }

    // Afficher le formulaire d'inscription
    public function registerForm()
    {
        return view('register');
    }

    // Traitement de l'inscription
    public function register(Request $request)
    {
        // Validation des données d'entrée
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:projetphp,email', // Vérifie que l'email est unique dans la table projetphp
            'password' => 'required|confirmed',  // Vérifie que le mot de passe et la confirmation correspondent
        ]);

        // Création de l'utilisateur dans la base de données si la validation réussit
        $user = Projetphp::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),  // Chiffre le mot de passe avant de l'enregistrer
        ]);

        // Rediriger vers la page des catégories après inscription réussie
        return redirect()->route('categories');
    }
}
