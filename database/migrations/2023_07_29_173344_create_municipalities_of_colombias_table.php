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
        Schema::create('municipalities_of_colombia', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('is_active');
            $table->unsignedBigInteger('departament');
            $table->timestamps();

            $table->foreign('departament')->references('id')->on('departaments_colombias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('municipalities_of_colombias');
    }
};
