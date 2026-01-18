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
        Schema::create('messageries', function (Blueprint $table) {
            $table->id();
            $table->string('message');
            $table->timestamps();
            $table->integer('sender_id')->nullable();
            $table->integer('recever_id')->nullable();
            $table->integer('troc_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messageries');
    }
};
