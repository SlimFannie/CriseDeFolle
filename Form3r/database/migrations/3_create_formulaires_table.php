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
        Schema::create('formulaires', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('titre');
            $table->boolean('superieur');
            $table->string('question1');
            $table->string('question2')->nullable();
            $table->string('question3')->nullable();
            $table->string('question4')->nullable();
            $table->string('question5')->nullable();
            $table->string('question6')->nullable();
            $table->string('question7')->nullable();
            $table->string('question8')->nullable();
            $table->string('question9')->nullable();
            $table->string('question10')->nullable();
            $table->string('question11')->nullable();
            $table->string('question12')->nullable();
            $table->string('question13')->nullable();
            $table->string('question14')->nullable();
            $table->string('question15')->nullable();
            $table->string('question16')->nullable();
            $table->string('question17')->nullable();
            $table->string('question18')->nullable();
            $table->string('question19')->nullable();
            $table->string('question20')->nullable();
            $table->string('question21')->nullable();
            $table->string('question22')->nullable();
            $table->string('question23')->nullable();
            $table->string('question24')->nullable();
            $table->string('question25')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulaires');
    }
};
