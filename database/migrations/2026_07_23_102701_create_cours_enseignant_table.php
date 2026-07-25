<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // table pivot entre les tables cours et enseignant
    public function up(): void
    {
        Schema::create('cours_enseignant', function (Blueprint $table) {
            $table->id(); // clé primaire de la pivot

            //Clé étrangère vers la table cours
             $table->foreignId('cours_id')
                   ->constrained('cours') 
                   ->onDelete('cascade');
                   
                   //Clé étrangère vers la table enseignant
                    $table->foreignId('enseignant_id')
                   ->constrained('enseignant') 
                   ->onDelete('cascade');

                   //Index unique pour éviter les doublons
                    $table->unique(['cours_id' , 'enseignant_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cours_enseignant');
    }
};
