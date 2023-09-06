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
            $table->string('name')->unique();
            $table->string('slug');
            $table->text('description')->nullable();

            $table->integer('price');
            $table->integer('discount')->default(0)->nullable();
            $table->integer('subscription_price')->nullable();
            $table->integer('quantity')->default(1);
            $table->integer('is_active')->default(1);
            $table->integer('has_offer')->default(0);

            $table->unsignedBigInteger('animal');
            $table->unsignedBigInteger('animal_category');

            $table->string('image')->default('default.png')->nullable();
            $table->timestamps();

            $table->foreign('animal')->references('id')->on('animals');
            $table->foreign('animal_category')->references('id')->on('animals_categories');
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
