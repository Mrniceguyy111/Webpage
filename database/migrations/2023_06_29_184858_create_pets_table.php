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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('owner_id');
            $table->unsignedBigInteger('animal_id');
            $table->unsignedBigInteger('race_id');
            $table->decimal('age');
            $table->string('photo_pet');
            $table->timestamps();

            $table->foreign('owner_id')->references('id')->on('users');
            $table->foreign('animal_id')->references('id')->on('animals');
            $table->foreign('race_id')->references('id')->on('animal_breeds');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
