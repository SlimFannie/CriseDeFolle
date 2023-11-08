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
        Schema::create('usagers', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->Integer('matricule');
            $table->string('nom');
            $table->string('prenom');
            $table->string('image')->nullable();
            $table->string('courriel');
            $table->string('mdp');
            $table->foreignId('departement_id')->constrained();
            $table->boolean('superieur')->default(false);
            $table->boolean('admin')->default(false);
            $table->Integer('matriculeSuperieur')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usagers');
    }
};
