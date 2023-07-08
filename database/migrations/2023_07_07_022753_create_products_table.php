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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->integer('price');
            $table->integer('discount')->default(0);
            $table->integer('subscrition_price')->nullable();
            $table->integer('is_active')->default(1);
            $table->unsignedBigInteger('animal');
            $table->unsignedBigInteger('animal_category');
            $table->string('principal_image_path');
            $table->string('second_image_path')->nullable();
            $table->string('third_image_path')->nullable();
            $table->string('fourth_image_path')->nullable();
            $table->timestamps();

            $table->foreign('animal')->references('id')->on('animals');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};