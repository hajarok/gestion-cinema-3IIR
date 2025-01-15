<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projetphp extends Model
{
    use HasFactory;

    // Spécifie explicitement le nom de la table
    protected $table = 'projetphp'; // Nom de la table

protected $fillable = ['name', 'email', 'password']; // Attributs modifiables en masse

public $timestamps = true; // Gestion automatique des timestamps

}



