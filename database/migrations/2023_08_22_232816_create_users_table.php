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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->text('nom');
            $table->text('prenom');
            $table->text('email');
            $table->string('telephone');
            $table->string('adresse');
            $table->text('password');
            $table->text('role');
            $table->string('image')->nullable(); // Modifier ici pour rendre la colonne nullable
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
