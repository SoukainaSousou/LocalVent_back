<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('produits', function (Blueprint $table) {
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->enum('type', ['location', 'vente'])->default('vente');
            $table->boolean('disponible')->default(true);
            $table->string('categorie')->nullable();    // ex: voiture, trottinette
            $table->string('marque')->nullable();       // optionnel pour les non-voitures
            $table->string('modele')->nullable();       // idem
            $table->year('annee')->nullable();          // idem
            $table->integer('kilometrage')->nullable(); // idem
            $table->string('localisation')->nullable(); // utile mais pas obligatoire
            $table->unsignedInteger('quantite')->default(1); // nouvelle colonne
        });
    }

    public function down(): void
    {
        Schema::table('produits', function (Blueprint $table) {
            $table->dropColumn([
                'description',
                'image',
                'type',
                'disponible',
                'categorie',
                'marque',
                'modele',
                'annee',
                'kilometrage',
                'localisation',
                'quantite'
            ]);
        });
    }
};
