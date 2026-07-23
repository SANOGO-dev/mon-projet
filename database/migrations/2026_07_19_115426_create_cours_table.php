<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cours', function (Blueprint $table) {
            $table->id();
            $table->string('intitulé du cours');
            $table->string('filière');
            $table->integer('niveau');
            $table->integer('semestre');
            $table->integer('nbre_heure_cours');
            $table->integer('nbre_crédit');
             $table->foreignId('administrateur_id')
                    ->constrained('administrateur')
                     ->onDelete('cascade');
                     $table->timestamps();
          
            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cours');
    }
};
