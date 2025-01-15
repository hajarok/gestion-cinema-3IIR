<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Crée la table 'projetphp' dans la base de données
        Schema::create('projetphp', function (Blueprint $table) {
            
            // Ajoute une colonne 'id' auto-incrémentée et clé primaire
            $table->id();
            
            // Ajoute une colonne 'name' de type chaîne de caractères
            $table->string('name');
            
            // Ajoute une colonne 'email' de type chaîne de caractères et spécifie qu'elle doit être unique
            $table->string('email')->unique();
            
            // Ajoute une colonne 'password' de type chaîne de caractères
            $table->string('password');
            
            // Ajoute des colonnes 'created_at' et 'updated_at' pour le suivi des timestamps
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projetphp');
    }
};
